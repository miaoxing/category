import Index from './index';
import {fireEvent, render, screen} from '@testing-library/react';
import {MemoryRouter} from 'react-router';
import React from 'react';
import app, {url} from '@mxjs/app';
import $ from 'miaoxing';
import {waitFor} from '@testing-library/dom';
import '../../../../app/modules/bootstrap';

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

const originalLocation = window.location;

function setUrl(url) {
  delete window.location;
  window.location = {
    pathname: '/' + url,
    href: '/' + url,
    search: '',
  };
  // TODO Url 解析出 collection
  app.page = {
    collection: url,
    index: true,
  };
}

function resetUrl() {
  window.location = originalLocation;
  app.page = {};
}

describe('admin/categories', () => {
  beforeEach(() => {
    setUrl('admin/categories');
  });

  afterEach(() => {
    resetUrl();
  });

  test('index', async () => {
    const promise = createPromise();

    $.http = jest.fn()
      // 读取列表数据
      .mockImplementationOnce(() => promise.resolve({
        code: 1,
        data: [
          {
            id: 1,
            parentId: 0,
            sort: 50,
            name: '测试分类',
            children: [
              {
                id: 2,
                parentId: 1,
                sort: 50,
                name: '子分类',
              }
            ]
          }
        ],
      }));

    const {findByText} = render(<MemoryRouter>
      <Index/>
    </MemoryRouter>);

    await findByText('测试分类');
    await findByText('└ 子分类');

    await Promise.all([promise]);
    expect($.http).toHaveBeenCalledTimes(1);
    expect($.http).toMatchSnapshot();
  });
});
