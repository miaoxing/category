import React, {useState} from 'react';
import {Table, TableProvider, CTableDeleteLink, useTable} from '@mxjs/a-table';
import {CEditLink, CNewBtn} from '@mxjs/a-clink';
import {Page, PageActions} from '@mxjs/a-page';
import {LinkActions} from '@mxjs/actions';

export default () => {
  const [table] = useTable();
  const [expandedRowKeys, setExpandedRowKeys] = useState([]);

  return (
    <Page>
      <TableProvider>
        <PageActions>
          <CNewBtn/>
        </PageActions>

        <Table
          tableApi={table}
          expandedRowKeys={expandedRowKeys}
          expandIcon={({expanded, onExpand, record}) => (record.children ? '' : '└ ')}
          postData={(data) => {
            setExpandedRowKeys(data.map(record => record.id));
            return data;
          }}
          columns={[
            {
              title: '名称',
              dataIndex: 'name',
            },
            {
              title: '简介',
              dataIndex: 'description',
            },
            {
              title: '顺序',
              dataIndex: 'sort',
              sorter: true
            },
            {
              title: '操作',
              dataIndex: 'id',
              render: (id) => (
                <LinkActions>
                  <CEditLink id={id}/>
                  <CTableDeleteLink id={id}/>
                </LinkActions>
              ),
            },
          ]}
        />
      </TableProvider>
    </Page>
  );
};
