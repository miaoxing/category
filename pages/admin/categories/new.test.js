import Page from './new';
import {fireEvent, render, screen} from '@testing-library/react';
import {MemoryRouter} from 'react-router';
import React from 'react';
import app from '@mxjs/app';
import $ from 'miaoxing';
import {waitFor} from '@testing-library/dom';

app.page = {
  collection: 'admin/categories',
};

function createPromise() {
  let res, rej;

  const promise = new Promise((resolve, reject) => {
    res = (result) => {
      resolve(result);
      return promise;
    };
    rej = (result) => {
      reject(result);
      return promise;
    };
  });

  promise.resolve = res;
  promise.reject = rej;

  return promise;
}

describe('Category form', () => {
  test('new', async () => {
    const promise = createPromise();
    const promise2 = createPromise();
    const promise3 = createPromise();

    $.http = jest.fn()
      // 读取默认数据
      .mockImplementationOnce(() => promise.resolve({
        code: 1,
        data: {
          parentId: 0,
          sort: 50,
        },
      }))
      // 读取父级分类
      .mockImplementationOnce(() => promise2.resolve({
        code: 1,
        data: [{
          id: 1,
          name: '测试分类',
        }]
      }))
      // 提交
      .mockImplementationOnce(() => promise3.resolve({
        code: 1,
      }));

    const {getByLabelText} = render(<MemoryRouter>
      <Page/>
    </MemoryRouter>);

    await Promise.all([promise, promise2]);
    expect($.http).toHaveBeenCalledTimes(2);
    expect($.http).toMatchSnapshot();

    // 看到表单加载了数据
    await waitFor(() => expect(getByLabelText('顺序').value).toBe('50'));
    expect(getByLabelText('名称').value).toBe('');

    // 提交表单
    fireEvent.change(getByLabelText('名称'), {target: {value: '测试分类'}});
    fireEvent.click(screen.getByText('提 交'));

    await Promise.all([promise3]);
    expect($.http).toHaveBeenCalledTimes(3);
    expect($.http).toMatchSnapshot();
  });
});
