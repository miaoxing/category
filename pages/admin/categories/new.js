/**
 * @share [id]/edit
 */
import {useEffect, useState} from 'react';
import {CListBtn} from '@mxjs/a-clink';
import {Page, PageActions} from '@mxjs/a-page';
import {Form, FormItem, FormAction, Select} from '@mxjs/a-form';
import api from '@mxjs/api';
import Input from '@mxjs/a-input';
import {FormItemSort} from '@miaoxing/admin';

export default () => {
  const [parents, setParents] = useState([]);

  useEffect(() => {
    api.getMaxCurColl({loading: true}).then(({ret}) => {
      setParents(ret.data);
    });
  }, []);

  return (
    <Page>
      <PageActions>
        <CListBtn/>
      </PageActions>

      <Form>
        <FormItem label="父级分类" name="parentId">
          <Select options={parents} labelKey="name" valueKey="id" firstLabel="根分类" firstValue=""/>
        </FormItem>
        <FormItem label="名称" name="name" required>
          <Input maxLength={255}/>
        </FormItem>
        <FormItem label="简介" name="description">
          <Input.TextArea maxLength={255}/>
        </FormItem>
        <FormItemSort/>
        <FormItem name="id" type="hidden"/>
        <FormAction/>
      </Form>
    </Page>
  );
};
