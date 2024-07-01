/**
 * @share [id]/edit
 */
import {CListBtn} from '@mxjs/a-clink';
import {Page, PageActions} from '@mxjs/a-page';
import {Form, FormItem, FormAction} from '@mxjs/a-form';
import Input from '@mxjs/a-input';
import {Select, FormItemSort} from '@miaoxing/admin';

const New = () => {
  return (
    <Page>
      <PageActions>
        <CListBtn/>
      </PageActions>

      <Form>
        <FormItem label="父级分类" name="parentId">
          <Select url="categories" labelKey="name" valueKey="id" firstLabel="根分类" firstValue=""/>
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

export default New;
