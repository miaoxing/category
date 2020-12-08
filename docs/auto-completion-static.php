<?php

namespace Miaoxing\Category\Service;

class Category
{
}

class CategoryModel
{
    /**
     * Returns the record data as array
     *
     * @param array|callable $returnFields A indexed array specified the fields to return
     * @param callable|null $prepend
     * @return array
     * @see CategoryModel::toArray
     */
    public static function toArray($returnFields = [], callable $prepend = null)
    {
    }

    /**
     * 不经过fillable检查,设置数据并保存
     *
     * @param array $data
     * @return $this
     * @see CategoryModel::saveData
     */
    public static function saveData($data = [])
    {
    }

    /**
     * Returns the success result with model data
     *
     * @param array $merge
     * @return Ret
     * @see CategoryModel::toRet
     */
    public static function toRet(array $merge = [])
    {
    }

    /**
     * Return the record table name
     *
     * @return string
     * @see CategoryModel::getTable
     */
    public static function getTable()
    {
    }

    /**
     * Import a PHP array in this record
     *
     * @param array|\ArrayAccess $data
     * @return $this
     * @see CategoryModel::fromArray
     */
    public static function fromArray($data)
    {
    }

    /**
     * Save the record or data to database
     *
     * @param array $data
     * @return $this
     * @see CategoryModel::save
     */
    public static function save($data = [])
    {
    }

    /**
     * Delete the current record and trigger the beforeDestroy and afterDestroy callback
     *
     * @param int|string $id
     * @return $this
     * @see CategoryModel::destroy
     */
    public static function destroy($id = null)
    {
    }

    /**
     * Set the record field value
     *
     * @param string $name
     * @param mixed $value
     * @param bool $throwException
     * @return $this|false
     * @see CategoryModel::set
     */
    public static function set($name, $value = null, $throwException = true)
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or false
     *
     * @param int|string|array|null $id
     * @return $this|null
     * @see CategoryModel::find
     */
    public static function find($id)
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found
     *
     * @param int|string $id
     * @return $this
     * @throws \Exception
     * @see CategoryModel::findOrFail
     */
    public static function findOrFail($id)
    {
    }

    /**
     * Find a record by primary key, or init with the specified data if record not found
     *
     * @param int|string $id
     * @param array|object $data
     * @return $this
     * @see CategoryModel::findOrInit
     */
    public static function findOrInit($id = null, $data = [])
    {
    }

    /**
     * Find a record by primary key, or save with the specified data if record not found
     *
     * @param int|string $id
     * @param array $data
     * @return $this
     * @see CategoryModel::findOrCreate
     */
    public static function findOrCreate($id, $data = [])
    {
    }

    /**
     * @param array $attributes
     * @param array $data
     * @return $this
     * @see CategoryModel::findByOrCreate
     */
    public static function findByOrCreate($attributes, $data = [])
    {
    }

    /**
     * Executes the generated SQL and returns the found record collection object or false
     *
     * @param array $ids
     * @return $this|$this[]
     * @see CategoryModel::findAll
     */
    public static function findAll($ids)
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|null
     * @see CategoryModel::findBy
     */
    public static function findBy($column, $operator = null, $value = null)
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|$this[]
     * @see CategoryModel::findAllBy
     */
    public static function findAllBy($column, $operator = null, $value = null)
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see CategoryModel::findOrInitBy
     */
    public static function findOrInitBy($attributes, $data = [])
    {
    }

    /**
     * Find a record by primary key value and throws 404 exception if record not found
     *
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @throws \Exception
     * @see CategoryModel::findByOrFail
     */
    public static function findByOrFail($column, $operator = null, $value = null)
    {
    }

    /**
     * @param array|Req|null $req
     * @return $this
     * @throws \Exception
     * @see CategoryModel::findFromReq
     */
    public static function findFromReq($req = null)
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or null if not found
     *
     * @return $this|null
     * @see CategoryModel::first
     */
    public static function first()
    {
    }

    /**
     * @return $this|$this[]|array
     * @see CategoryModel::all
     */
    public static function all()
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see CategoryModel::indexBy
     */
    public static function indexBy($column)
    {
    }

    /**
     * Returns the name of fields of current table
     *
     * @return array
     * @see CategoryModel::getColumns
     */
    public static function getColumns()
    {
    }

    /**
     * Executes the generated query and returns the first array result
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array|null
     * @see CategoryModel::fetch
     */
    public static function fetch($column = null, $operator = null, $value = null)
    {
    }

    /**
     * Executes the generated query and returns all array results
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array
     * @see CategoryModel::fetchAll
     */
    public static function fetchAll($column = null, $operator = null, $value = null)
    {
    }

    /**
     * @param string $column
     * @param string|null $index
     * @return array
     * @see CategoryModel::pluck
     */
    public static function pluck(string $column, string $index = null)
    {
    }

    /**
     * @param int $count
     * @param callable $callback
     * @return bool
     * @see CategoryModel::chunk
     */
    public static function chunk(int $count, callable $callback)
    {
    }

    /**
     * Executes a COUNT query to receive the rows number
     *
     * @param string $column
     * @return int
     * @see CategoryModel::cnt
     */
    public static function cnt($column = '*')
    {
    }

    /**
     * Execute a update query with specified data
     *
     * @param array|string $set
     * @param mixed $value
     * @return int
     * @see CategoryModel::update
     */
    public static function update($set = [], $value = null)
    {
    }

    /**
     * Execute a delete query with specified conditions
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return mixed
     * @see CategoryModel::delete
     */
    public static function delete($column = null, $operator = null, $value = null)
    {
    }

    /**
     * Sets the position of the first result to retrieve (the "offset")
     *
     * @param int|float|string $offset The first result to return
     * @return $this
     * @see CategoryModel::offset
     */
    public static function offset($offset)
    {
    }

    /**
     * Sets the maximum number of results to retrieve (the "limit")
     *
     * @param int|float|string $limit The maximum number of results to retrieve
     * @return $this
     * @see CategoryModel::limit
     */
    public static function limit($limit)
    {
    }

    /**
     * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
     *
     * @param int $page The page number
     * @return $this
     * @see CategoryModel::page
     */
    public static function page($page)
    {
    }

    /**
     * Specifies an item that is to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns the selection expressions
     * @return $this
     * @see CategoryModel::select
     */
    public static function select($columns = ['*']): self
    {
    }

    /**
     * @param array|string $columns
     * @return $this
     * @see CategoryModel::selectDistinct
     */
    public static function selectDistinct($columns)
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see CategoryModel::selectRaw
     */
    public static function selectRaw($expression)
    {
    }

    /**
     * Specifies columns that are not to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns
     * @return $this
     * @see CategoryModel::selectExcept
     */
    public static function selectExcept($columns)
    {
    }

    /**
     * Sets table for FROM query
     *
     * @param string $table
     * @param string|null $alias
     * @return $this
     * @see CategoryModel::from
     */
    public static function from($table, $alias = null): self
    {
    }

    /**
     * @param string $table
     * @param mixed|null $alias
     * @return $this
     * @see CategoryModel::table
     */
    public static function table(string $table, $alias = null): self
    {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string $first
     * @param string $operator
     * @param string $second
     * @param string $type
     * @return $this
     * @see CategoryModel::join
     */
    public static function join(string $table, string $first = null, string $operator = '=', string $second = null, string $type = 'INNER')
    {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see CategoryModel::innerJoin
     */
    public static function innerJoin(string $table, string $first = null, string $operator = '=', string $second = null)
    {
    }

    /**
     * Adds a left join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see CategoryModel::leftJoin
     */
    public static function leftJoin(string $table, string $first = null, string $operator = '=', string $second = null)
    {
    }

    /**
     * Adds a right join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see CategoryModel::rightJoin
     */
    public static function rightJoin(string $table, string $first = null, string $operator = '=', string $second = null)
    {
    }

    /**
     * Specifies one or more restrictions to the query result.
     * Replaces any previously specified restrictions, if any.
     *
     * ```php
     * $user = wei()->db('user')->where('id = 1');
     * $user = wei()->db('user')->where('id = ?', 1);
     * $users = wei()->db('user')->where(array('id' => '1', 'username' => 'twin'));
     * $users = wei()->where(array('id' => array('1', '2', '3')));
     * ```
     *
     * @param array|Closure|string|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @see CategoryModel::where
     */
    public static function where($column = null, $operator = null, $value = null)
    {
    }

    /**
     * @param string $expression
     * @param mixed $params
     * @return $this
     * @see CategoryModel::whereRaw
     */
    public static function whereRaw($expression, $params = [])
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see CategoryModel::whereBetween
     */
    public static function whereBetween($column, array $params)
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see CategoryModel::whereNotBetween
     */
    public static function whereNotBetween($column, array $params)
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see CategoryModel::whereIn
     */
    public static function whereIn($column, array $params)
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see CategoryModel::whereNotIn
     */
    public static function whereNotIn($column, array $params)
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see CategoryModel::whereNull
     */
    public static function whereNull($column)
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see CategoryModel::whereNotNULL
     */
    public static function whereNotNULL($column)
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see CategoryModel::whereDate
     */
    public static function whereDate($column, $opOrValue, $value = null)
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see CategoryModel::whereMonth
     */
    public static function whereMonth($column, $opOrValue, $value = null)
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see CategoryModel::whereDay
     */
    public static function whereDay($column, $opOrValue, $value = null)
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see CategoryModel::whereYear
     */
    public static function whereYear($column, $opOrValue, $value = null)
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see CategoryModel::whereTime
     */
    public static function whereTime($column, $opOrValue, $value = null)
    {
    }

    /**
     * @param string $column
     * @param string $opOrColumn2
     * @param string|null $column2
     * @return $this
     * @see CategoryModel::whereColumn
     */
    public static function whereColumn($column, $opOrColumn2, $column2 = null)
    {
    }

    /**
     * 搜索字段是否包含某个值
     *
     * @param string $column
     * @param string $value
     * @param string $condition
     * @return $this
     * @see CategoryModel::whereContains
     */
    public static function whereContains($column, $value, string $condition = 'AND')
    {
    }

    /**
     * @param mixed $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see CategoryModel::whereNotContains
     */
    public static function whereNotContains($column, $value, string $condition = 'OR')
    {
    }

    /**
     * Specifies a grouping over the results of the query.
     * Replaces any previously specified groupings, if any.
     *
     * @param mixed $column the grouping column
     * @return $this
     * @see CategoryModel::groupBy
     */
    public static function groupBy($column)
    {
    }

    /**
     * Specifies a restriction over the groups of the query.
     * Replaces any previous having restrictions, if any.
     *
     * @param mixed $column
     * @param mixed $operator
     * @param mixed|null $value
     * @param mixed $condition
     * @return $this
     * @see CategoryModel::having
     */
    public static function having($column, $operator, $value = null, $condition = 'AND')
    {
    }

    /**
     * Specifies an ordering for the query results.
     * Replaces any previously specified orderings, if any.
     *
     * @param string $column the ordering expression
     * @param string $order the ordering direction
     * @return $this
     * @see CategoryModel::orderBy
     */
    public static function orderBy($column, $order = 'ASC')
    {
    }

    /**
     * Adds a DESC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see CategoryModel::desc
     */
    public static function desc($field)
    {
    }

    /**
     * Add an ASC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see CategoryModel::asc
     */
    public static function asc($field)
    {
    }

    /**
     * @return $this
     * @see CategoryModel::forUpdate
     */
    public static function forUpdate()
    {
    }

    /**
     * @return $this
     * @see CategoryModel::forShare
     */
    public static function forShare()
    {
    }

    /**
     * @param string|bool $lock
     * @return $this
     * @see CategoryModel::lock
     */
    public static function lock($lock)
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see CategoryModel::when
     */
    public static function when($value, $callback, callable $default = null)
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see CategoryModel::unless
     */
    public static function unless($value, callable $callback, callable $default = null)
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see CategoryModel::setDbKeyConverter
     */
    public static function setDbKeyConverter(callable $converter = null)
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see CategoryModel::setPhpKeyConverter
     */
    public static function setPhpKeyConverter(callable $converter = null)
    {
    }

    /**
     * Set or remove cache time for the query
     *
     * @param false|int|null $seconds
     * @return $this
     * @see CategoryModel::cache
     */
    public static function cache($seconds = null)
    {
    }

    /**
     * @param array|string|true $scopes
     * @return $this
     * @see CategoryModel::unscoped
     */
    public static function unscoped($scopes = [])
    {
    }

    /**
     * Really remove the record from database
     *
     * @param mixed $conditions
     * @return $this
     * @see CategoryModel::reallyDestroy
     */
    public static function reallyDestroy($conditions = false)
    {
    }

    /**
     * Add a query to filter soft deleted records
     *
     * @return $this
     * @see CategoryModel::withoutDeleted
     */
    public static function withoutDeleted()
    {
    }

    /**
     * Add a query to return only deleted records
     *
     * @return $this
     * @see CategoryModel::onlyDeleted
     */
    public static function onlyDeleted()
    {
    }

    /**
     * Remove "withoutDeleted" in the query, expect to return all records
     *
     * @return $this
     * @see CategoryModel::withDeleted
     */
    public static function withDeleted()
    {
    }

    /**
     * @param array|string $columns
     * @return $this
     * @see CategoryModel::like
     */
    public static function like($columns)
    {
    }
}

namespace Miaoxing\Category\Service;

if (0) {
class Category
{
}

class CategoryModel
{
    /**
     * Returns the record data as array
     *
     * @param array|callable $returnFields A indexed array specified the fields to return
     * @param callable|null $prepend
     * @return array
     * @see CategoryModel::toArray
     */
    public function toArray($returnFields = [], callable $prepend = null)
    {
    }

    /**
     * 不经过fillable检查,设置数据并保存
     *
     * @param array $data
     * @return $this
     * @see CategoryModel::saveData
     */
    public function saveData($data = [])
    {
    }

    /**
     * Returns the success result with model data
     *
     * @param array $merge
     * @return Ret
     * @see CategoryModel::toRet
     */
    public function toRet(array $merge = [])
    {
    }

    /**
     * Return the record table name
     *
     * @return string
     * @see CategoryModel::getTable
     */
    public function getTable()
    {
    }

    /**
     * Import a PHP array in this record
     *
     * @param array|\ArrayAccess $data
     * @return $this
     * @see CategoryModel::fromArray
     */
    public function fromArray($data)
    {
    }

    /**
     * Save the record or data to database
     *
     * @param array $data
     * @return $this
     * @see CategoryModel::save
     */
    public function save($data = [])
    {
    }

    /**
     * Delete the current record and trigger the beforeDestroy and afterDestroy callback
     *
     * @param int|string $id
     * @return $this
     * @see CategoryModel::destroy
     */
    public function destroy($id = null)
    {
    }

    /**
     * Set the record field value
     *
     * @param string $name
     * @param mixed $value
     * @param bool $throwException
     * @return $this|false
     * @see CategoryModel::set
     */
    public function set($name, $value = null, $throwException = true)
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or false
     *
     * @param int|string|array|null $id
     * @return $this|null
     * @see CategoryModel::find
     */
    public function find($id)
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found
     *
     * @param int|string $id
     * @return $this
     * @throws \Exception
     * @see CategoryModel::findOrFail
     */
    public function findOrFail($id)
    {
    }

    /**
     * Find a record by primary key, or init with the specified data if record not found
     *
     * @param int|string $id
     * @param array|object $data
     * @return $this
     * @see CategoryModel::findOrInit
     */
    public function findOrInit($id = null, $data = [])
    {
    }

    /**
     * Find a record by primary key, or save with the specified data if record not found
     *
     * @param int|string $id
     * @param array $data
     * @return $this
     * @see CategoryModel::findOrCreate
     */
    public function findOrCreate($id, $data = [])
    {
    }

    /**
     * @param array $attributes
     * @param array $data
     * @return $this
     * @see CategoryModel::findByOrCreate
     */
    public function findByOrCreate($attributes, $data = [])
    {
    }

    /**
     * Executes the generated SQL and returns the found record collection object or false
     *
     * @param array $ids
     * @return $this|$this[]
     * @see CategoryModel::findAll
     */
    public function findAll($ids)
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|null
     * @see CategoryModel::findBy
     */
    public function findBy($column, $operator = null, $value = null)
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|$this[]
     * @see CategoryModel::findAllBy
     */
    public function findAllBy($column, $operator = null, $value = null)
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see CategoryModel::findOrInitBy
     */
    public function findOrInitBy($attributes, $data = [])
    {
    }

    /**
     * Find a record by primary key value and throws 404 exception if record not found
     *
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @throws \Exception
     * @see CategoryModel::findByOrFail
     */
    public function findByOrFail($column, $operator = null, $value = null)
    {
    }

    /**
     * @param array|Req|null $req
     * @return $this
     * @throws \Exception
     * @see CategoryModel::findFromReq
     */
    public function findFromReq($req = null)
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or null if not found
     *
     * @return $this|null
     * @see CategoryModel::first
     */
    public function first()
    {
    }

    /**
     * @return $this|$this[]|array
     * @see CategoryModel::all
     */
    public function all()
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see CategoryModel::indexBy
     */
    public function indexBy($column)
    {
    }

    /**
     * Returns the name of fields of current table
     *
     * @return array
     * @see CategoryModel::getColumns
     */
    public function getColumns()
    {
    }

    /**
     * Executes the generated query and returns the first array result
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array|null
     * @see CategoryModel::fetch
     */
    public function fetch($column = null, $operator = null, $value = null)
    {
    }

    /**
     * Executes the generated query and returns all array results
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array
     * @see CategoryModel::fetchAll
     */
    public function fetchAll($column = null, $operator = null, $value = null)
    {
    }

    /**
     * @param string $column
     * @param string|null $index
     * @return array
     * @see CategoryModel::pluck
     */
    public function pluck(string $column, string $index = null)
    {
    }

    /**
     * @param int $count
     * @param callable $callback
     * @return bool
     * @see CategoryModel::chunk
     */
    public function chunk(int $count, callable $callback)
    {
    }

    /**
     * Executes a COUNT query to receive the rows number
     *
     * @param string $column
     * @return int
     * @see CategoryModel::cnt
     */
    public function cnt($column = '*')
    {
    }

    /**
     * Execute a update query with specified data
     *
     * @param array|string $set
     * @param mixed $value
     * @return int
     * @see CategoryModel::update
     */
    public function update($set = [], $value = null)
    {
    }

    /**
     * Execute a delete query with specified conditions
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return mixed
     * @see CategoryModel::delete
     */
    public function delete($column = null, $operator = null, $value = null)
    {
    }

    /**
     * Sets the position of the first result to retrieve (the "offset")
     *
     * @param int|float|string $offset The first result to return
     * @return $this
     * @see CategoryModel::offset
     */
    public function offset($offset)
    {
    }

    /**
     * Sets the maximum number of results to retrieve (the "limit")
     *
     * @param int|float|string $limit The maximum number of results to retrieve
     * @return $this
     * @see CategoryModel::limit
     */
    public function limit($limit)
    {
    }

    /**
     * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
     *
     * @param int $page The page number
     * @return $this
     * @see CategoryModel::page
     */
    public function page($page)
    {
    }

    /**
     * Specifies an item that is to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns the selection expressions
     * @return $this
     * @see CategoryModel::select
     */
    public function select($columns = ['*']): self
    {
    }

    /**
     * @param array|string $columns
     * @return $this
     * @see CategoryModel::selectDistinct
     */
    public function selectDistinct($columns)
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see CategoryModel::selectRaw
     */
    public function selectRaw($expression)
    {
    }

    /**
     * Specifies columns that are not to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns
     * @return $this
     * @see CategoryModel::selectExcept
     */
    public function selectExcept($columns)
    {
    }

    /**
     * Sets table for FROM query
     *
     * @param string $table
     * @param string|null $alias
     * @return $this
     * @see CategoryModel::from
     */
    public function from($table, $alias = null): self
    {
    }

    /**
     * @param string $table
     * @param mixed|null $alias
     * @return $this
     * @see CategoryModel::table
     */
    public function table(string $table, $alias = null): self
    {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string $first
     * @param string $operator
     * @param string $second
     * @param string $type
     * @return $this
     * @see CategoryModel::join
     */
    public function join(string $table, string $first = null, string $operator = '=', string $second = null, string $type = 'INNER')
    {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see CategoryModel::innerJoin
     */
    public function innerJoin(string $table, string $first = null, string $operator = '=', string $second = null)
    {
    }

    /**
     * Adds a left join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see CategoryModel::leftJoin
     */
    public function leftJoin(string $table, string $first = null, string $operator = '=', string $second = null)
    {
    }

    /**
     * Adds a right join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see CategoryModel::rightJoin
     */
    public function rightJoin(string $table, string $first = null, string $operator = '=', string $second = null)
    {
    }

    /**
     * Specifies one or more restrictions to the query result.
     * Replaces any previously specified restrictions, if any.
     *
     * ```php
     * $user = wei()->db('user')->where('id = 1');
     * $user = wei()->db('user')->where('id = ?', 1);
     * $users = wei()->db('user')->where(array('id' => '1', 'username' => 'twin'));
     * $users = wei()->where(array('id' => array('1', '2', '3')));
     * ```
     *
     * @param array|Closure|string|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @see CategoryModel::where
     */
    public function where($column = null, $operator = null, $value = null)
    {
    }

    /**
     * @param string $expression
     * @param mixed $params
     * @return $this
     * @see CategoryModel::whereRaw
     */
    public function whereRaw($expression, $params = [])
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see CategoryModel::whereBetween
     */
    public function whereBetween($column, array $params)
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see CategoryModel::whereNotBetween
     */
    public function whereNotBetween($column, array $params)
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see CategoryModel::whereIn
     */
    public function whereIn($column, array $params)
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see CategoryModel::whereNotIn
     */
    public function whereNotIn($column, array $params)
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see CategoryModel::whereNull
     */
    public function whereNull($column)
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see CategoryModel::whereNotNULL
     */
    public function whereNotNULL($column)
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see CategoryModel::whereDate
     */
    public function whereDate($column, $opOrValue, $value = null)
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see CategoryModel::whereMonth
     */
    public function whereMonth($column, $opOrValue, $value = null)
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see CategoryModel::whereDay
     */
    public function whereDay($column, $opOrValue, $value = null)
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see CategoryModel::whereYear
     */
    public function whereYear($column, $opOrValue, $value = null)
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see CategoryModel::whereTime
     */
    public function whereTime($column, $opOrValue, $value = null)
    {
    }

    /**
     * @param string $column
     * @param string $opOrColumn2
     * @param string|null $column2
     * @return $this
     * @see CategoryModel::whereColumn
     */
    public function whereColumn($column, $opOrColumn2, $column2 = null)
    {
    }

    /**
     * 搜索字段是否包含某个值
     *
     * @param string $column
     * @param string $value
     * @param string $condition
     * @return $this
     * @see CategoryModel::whereContains
     */
    public function whereContains($column, $value, string $condition = 'AND')
    {
    }

    /**
     * @param mixed $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see CategoryModel::whereNotContains
     */
    public function whereNotContains($column, $value, string $condition = 'OR')
    {
    }

    /**
     * Specifies a grouping over the results of the query.
     * Replaces any previously specified groupings, if any.
     *
     * @param mixed $column the grouping column
     * @return $this
     * @see CategoryModel::groupBy
     */
    public function groupBy($column)
    {
    }

    /**
     * Specifies a restriction over the groups of the query.
     * Replaces any previous having restrictions, if any.
     *
     * @param mixed $column
     * @param mixed $operator
     * @param mixed|null $value
     * @param mixed $condition
     * @return $this
     * @see CategoryModel::having
     */
    public function having($column, $operator, $value = null, $condition = 'AND')
    {
    }

    /**
     * Specifies an ordering for the query results.
     * Replaces any previously specified orderings, if any.
     *
     * @param string $column the ordering expression
     * @param string $order the ordering direction
     * @return $this
     * @see CategoryModel::orderBy
     */
    public function orderBy($column, $order = 'ASC')
    {
    }

    /**
     * Adds a DESC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see CategoryModel::desc
     */
    public function desc($field)
    {
    }

    /**
     * Add an ASC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see CategoryModel::asc
     */
    public function asc($field)
    {
    }

    /**
     * @return $this
     * @see CategoryModel::forUpdate
     */
    public function forUpdate()
    {
    }

    /**
     * @return $this
     * @see CategoryModel::forShare
     */
    public function forShare()
    {
    }

    /**
     * @param string|bool $lock
     * @return $this
     * @see CategoryModel::lock
     */
    public function lock($lock)
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see CategoryModel::when
     */
    public function when($value, $callback, callable $default = null)
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see CategoryModel::unless
     */
    public function unless($value, callable $callback, callable $default = null)
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see CategoryModel::setDbKeyConverter
     */
    public function setDbKeyConverter(callable $converter = null)
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see CategoryModel::setPhpKeyConverter
     */
    public function setPhpKeyConverter(callable $converter = null)
    {
    }

    /**
     * Set or remove cache time for the query
     *
     * @param false|int|null $seconds
     * @return $this
     * @see CategoryModel::cache
     */
    public function cache($seconds = null)
    {
    }

    /**
     * @param array|string|true $scopes
     * @return $this
     * @see CategoryModel::unscoped
     */
    public function unscoped($scopes = [])
    {
    }

    /**
     * Really remove the record from database
     *
     * @param mixed $conditions
     * @return $this
     * @see CategoryModel::reallyDestroy
     */
    public function reallyDestroy($conditions = false)
    {
    }

    /**
     * Add a query to filter soft deleted records
     *
     * @return $this
     * @see CategoryModel::withoutDeleted
     */
    public function withoutDeleted()
    {
    }

    /**
     * Add a query to return only deleted records
     *
     * @return $this
     * @see CategoryModel::onlyDeleted
     */
    public function onlyDeleted()
    {
    }

    /**
     * Remove "withoutDeleted" in the query, expect to return all records
     *
     * @return $this
     * @see CategoryModel::withDeleted
     */
    public function withDeleted()
    {
    }

    /**
     * @param array|string $columns
     * @return $this
     * @see CategoryModel::like
     */
    public function like($columns)
    {
    }
}
}
