## [0.5.3](https://github.com/miaoxing/category/compare/v0.5.2...v0.5.3) (2022-06-01)





### Dependencies

* **@mxjs/a-input:** upgrade from `0.1.2` to `0.1.3`
* **@mxjs/a-page:** upgrade from `0.3.5` to `0.3.6`
* **@mxjs/a-clink:** upgrade from `0.2.4` to `0.2.5`
* **@mxjs/a-table:** upgrade from `0.4.4` to `0.4.5`
* **@mxjs/a-form:** upgrade from `0.3.5` to `0.3.6`
* **@mxjs/api:** upgrade from `0.1.8` to `0.1.9`
* **@mxjs/actions:** upgrade from `0.2.2` to `0.2.3`
* **@miaoxing/dev:** upgrade from `8.1.0` to `8.1.1`
* **@mxjs/test:** upgrade from `0.2.4` to `0.2.5`
* **@miaoxing/app:** upgrade from `0.6.3` to `0.6.4`
* **@miaoxing/link-to:** upgrade from `0.1.24` to `0.1.25`

## [0.5.2](https://github.com/miaoxing/category/compare/v0.5.1...v0.5.2) (2022-04-30)





### Dependencies

* **@mxjs/a-page:** upgrade from `0.3.4` to `0.3.5`
* **@mxjs/a-form:** upgrade from `0.3.4` to `0.3.5`
* **@miaoxing/app:** upgrade from `0.6.2` to `0.6.3`
* **@miaoxing/link-to:** upgrade from `0.1.23` to `0.1.24`

## [0.5.1](https://github.com/miaoxing/category/compare/v0.5.0...v0.5.1) (2022-03-31)


### Bug Fixes

* **category:** `CategoryModel` 增加 `HasAppIdTrait` ([8727935](https://github.com/miaoxing/category/commit/8727935e4a6029d09fa8c533cbe4cfcbe8b9b467))





### Dependencies

* **@mxjs/a-page:** upgrade from `0.3.3` to `0.3.4`
* **@mxjs/a-clink:** upgrade from `0.2.3` to `0.2.4`
* **@mxjs/a-table:** upgrade from `0.4.3` to `0.4.4`
* **@mxjs/a-form:** upgrade from `0.3.3` to `0.3.4`
* **@mxjs/api:** upgrade from `0.1.7` to `0.1.8`
* **@mxjs/test:** upgrade from `0.2.3` to `0.2.4`
* **@miaoxing/app:** upgrade from `0.6.1` to `0.6.2`
* **@miaoxing/link-to:** upgrade from `0.1.22` to `0.1.23`

# [0.5.0](https://github.com/miaoxing/category/compare/v0.4.2...v0.5.0) (2022-03-04)


### Features

* 数据表 `app_id` 字段由 `int` 升级到 `bigint` ([96dd78e](https://github.com/miaoxing/category/commit/96dd78eb9eb7d07d2325c6d9433b508c497a8ba2))


### BREAKING CHANGES

* 数据表 `app_id` 字段由 `int` 升级到 `bigint`





### Dependencies

* **@mxjs/a-page:** upgrade from `0.3.2` to `0.3.3`
* **@mxjs/a-clink:** upgrade from `0.2.2` to `0.2.3`
* **@mxjs/a-table:** upgrade from `0.4.2` to `0.4.3`
* **@mxjs/a-form:** upgrade from `0.3.2` to `0.3.3`
* **@mxjs/api:** upgrade from `0.1.6` to `0.1.7`
* **@mxjs/test:** upgrade from `0.2.2` to `0.2.3`
* **@miaoxing/app:** upgrade from `0.6.0` to `0.6.1`
* **@miaoxing/link-to:** upgrade from `0.1.21` to `0.1.22`

## [0.4.2](https://github.com/miaoxing/category/compare/v0.4.1...v0.4.2) (2022-02-28)





### Dependencies

* **@miaoxing/app:** upgrade from `0.5.1` to `0.6.0`
* **@miaoxing/link-to:** upgrade from `0.1.20` to `0.1.21`

## [0.4.1](https://github.com/miaoxing/category/compare/v0.4.0...v0.4.1) (2022-02-05)


### Bug Fixes

* 分类默认不选改为空字符串，允许不填 ([b848214](https://github.com/miaoxing/category/commit/b84821473203e7865076fb177777deb36460a1ff))





### Dependencies

* **@mxjs/a-input:** upgrade from `0.1.1` to `0.1.2`
* **@mxjs/a-page:** upgrade from `0.3.1` to `0.3.2`
* **@mxjs/a-clink:** upgrade from `0.2.1` to `0.2.2`
* **@mxjs/a-table:** upgrade from `0.4.1` to `0.4.2`
* **@mxjs/a-form:** upgrade from `0.3.1` to `0.3.2`
* **@mxjs/api:** upgrade from `0.1.5` to `0.1.6`
* **@mxjs/actions:** upgrade from `0.2.1` to `0.2.2`
* **@miaoxing/dev:** upgrade from `8.0.1` to `8.1.0`
* **@mxjs/test:** upgrade from `0.2.1` to `0.2.2`
* **@miaoxing/app:** upgrade from `0.5.0` to `0.5.1`
* **@miaoxing/link-to:** upgrade from `0.1.19` to `0.1.20`

# [0.4.0](https://github.com/miaoxing/category/compare/v0.3.0...v0.4.0) (2022-01-12)


### Features

* 更新 typescript 到 `^4.5.2` ([3035449](https://github.com/miaoxing/category/commit/30354493f5cd26c3ff547b1cb9ee99685c7e4264))
* **category:** 使用 `@mxjs/a-input` 显示字数 ([b065520](https://github.com/miaoxing/category/commit/b065520df78ab848651e307e471cba37be33f695))
* 优化顺序输入框 ([c62cfba](https://github.com/miaoxing/category/commit/c62cfbab7c054739231d491966b4e36c33a9e2f8))
* 显示 `textarea` 的长度限制 ([c27d413](https://github.com/miaoxing/category/commit/c27d413b772608964193afa9145aa5c1ac6133b5))


### BREAKING CHANGES

* 更新 typescript 到 `^4.5.2`





### Dependencies

* **@mxjs/a-input:** upgrade from `0.1.0` to `0.1.1`
* **@mxjs/a-page:** upgrade from `0.3.0` to `0.3.1`
* **@mxjs/a-clink:** upgrade from `0.2.0` to `0.2.1`
* **@mxjs/a-table:** upgrade from `0.4.0` to `0.4.1`
* **@mxjs/a-form:** upgrade from `0.3.0` to `0.3.1`
* **@mxjs/api:** upgrade from `0.1.4` to `0.1.5`
* **@mxjs/actions:** upgrade from `0.2.0` to `0.2.1`
* **@miaoxing/dev:** upgrade from `8.0.0` to `8.0.1`
* **@mxjs/test:** upgrade from `0.2.0` to `0.2.1`
* **@miaoxing/app:** upgrade from `0.4.0` to `0.5.0`
* **@miaoxing/link-to:** upgrade from `0.1.18` to `0.1.19`

# [0.3.0](https://github.com/miaoxing/category/compare/v0.2.14...v0.3.0) (2021-10-28)


### Code Refactoring

* 调整错误码为 001 开始 ([0b9f550](https://github.com/miaoxing/category/commit/0b9f55051ed64632505ea505e38d3e90173b1c2e))
* **Model:** 模型的关联方法加上返回值 ([cff4950](https://github.com/miaoxing/category/commit/cff4950a15eb647520517aeedf7d3e0a945777f9))


### Features

* 数据表主键 由 `int` 改为 `bigint` ([5e5a602](https://github.com/miaoxing/category/commit/5e5a602a3890a63c2f65fe5eaa08bbe58a12b811))
* 更新 `react` 到 17 ([9c3a035](https://github.com/miaoxing/category/commit/9c3a035a1ed51069f3d4f32dffe44a3af614c520))
* 模型通过 `SnowflakeTrait` 生成 id ([9c92fd1](https://github.com/miaoxing/category/commit/9c92fd1161461635c030811eff8db6d0daa1bbfc))


### BREAKING CHANGES

* 数据表主键 由 `int` 改为 `bigint`
* 调整错误码为 001 开始
* 更新 `react` 到 17
* **Model:** 模型的关联方法加上返回值





### Dependencies

* **@mxjs/a-page:** upgrade from `0.2.8` to `0.3.0`
* **@mxjs/a-clink:** upgrade from `0.1.8` to `0.2.0`
* **@mxjs/a-table:** upgrade from `0.3.11` to `0.4.0`
* **@mxjs/a-form:** upgrade from `0.2.15` to `0.3.0`
* **@mxjs/api:** upgrade from `0.1.3` to `0.1.4`
* **@mxjs/actions:** upgrade from `0.1.3` to `0.2.0`
* **@miaoxing/dev:** upgrade from `7.0.1` to `8.0.0`
* **@mxjs/test:** upgrade from `0.1.8` to `0.2.0`
* **@miaoxing/app:** upgrade from `0.3.3` to `0.4.0`
* **@miaoxing/link-to:** upgrade from `0.1.17` to `0.1.18`

## [0.2.14](https://github.com/miaoxing/category/compare/v0.2.13...v0.2.14) (2021-05-21)





### Dependencies

* **@miaoxing/app:** upgrade from `0.3.2` to `0.3.3`
* **@miaoxing/link-to:** upgrade from `0.1.16` to `0.1.17`

## [0.2.13](https://github.com/miaoxing/category/compare/v0.2.12...v0.2.13) (2021-05-12)





### Dependencies

* **@mxjs/a-page:** upgrade from `0.2.7` to `0.2.8`
* **@mxjs/a-clink:** upgrade from `0.1.7` to `0.1.8`
* **@mxjs/a-table:** upgrade from `0.3.10` to `0.3.11`
* **@mxjs/a-form:** upgrade from `0.2.14` to `0.2.15`
* **@mxjs/api:** upgrade from `0.1.2` to `0.1.3`
* **@mxjs/actions:** upgrade from `0.1.2` to `0.1.3`
* **@miaoxing/dev:** upgrade from `7.0.0` to `7.0.1`
* **@mxjs/test:** upgrade from `0.1.7` to `0.1.8`
* **@miaoxing/app:** upgrade from `0.3.1` to `0.3.2`
* **@miaoxing/link-to:** upgrade from `0.1.15` to `0.1.16`

## [0.2.12](https://github.com/miaoxing/category/compare/v0.2.11...v0.2.12) (2021-05-11)





### Dependencies

* **@mxjs/a-page:** upgrade from `0.2.6` to `0.2.7`
* **@mxjs/a-clink:** upgrade from `0.1.6` to `0.1.7`
* **@mxjs/a-table:** upgrade from `0.3.9` to `0.3.10`
* **@mxjs/a-form:** upgrade from `0.2.13` to `0.2.14`
* **@mxjs/api:** upgrade from `0.1.1` to `0.1.2`
* **@mxjs/actions:** upgrade from `0.1.1` to `0.1.2`
* **@miaoxing/dev:** upgrade from `6.4.0` to `7.0.0`
* **@mxjs/test:** upgrade from `0.1.6` to `0.1.7`
* **@miaoxing/app:** upgrade from `0.3.0` to `0.3.1`
* **@miaoxing/link-to:** upgrade from `0.1.14` to `0.1.15`

## [0.2.11](https://github.com/miaoxing/category/compare/v0.2.10...v0.2.11) (2021-04-27)


### Features

* 增加创建页面测试数据的 Seeder ([9645064](https://github.com/miaoxing/category/commit/964506491ad47b9c757cf8b725245c54613a3a78))





### Dependencies

* **@mxjs/a-page:** upgrade from `0.2.5` to `0.2.6`
* **@mxjs/a-clink:** upgrade from `0.1.5` to `0.1.6`
* **@mxjs/a-table:** upgrade from `0.3.8` to `0.3.9`
* **@mxjs/a-form:** upgrade from `0.2.12` to `0.2.13`
* **@mxjs/actions:** upgrade from `0.1.0` to `0.1.1`
* **@miaoxing/dev:** upgrade from `6.3.4` to `6.4.0`
* **@mxjs/test:** upgrade from `0.1.5` to `0.1.6`
* **@miaoxing/app:** upgrade from `0.2.13` to `0.3.0`
* **@miaoxing/link-to:** upgrade from `0.1.13` to `0.1.14`

## [0.2.10](https://github.com/miaoxing/category/compare/v0.2.9...v0.2.10) (2021-03-22)





### Dependencies

* **@mxjs/a-page:** upgrade from `0.2.4` to `0.2.5`
* **@mxjs/a-clink:** upgrade from `0.1.4` to `0.1.5`
* **@mxjs/a-table:** upgrade from `0.3.7` to `0.3.8`
* **@mxjs/a-form:** upgrade from `0.2.11` to `0.2.12`
* **@miaoxing/dev:** upgrade from `6.3.3` to `6.3.4`
* **@mxjs/test:** upgrade from `0.1.4` to `0.1.5`
* **@miaoxing/app:** upgrade from `0.2.12` to `0.2.13`
* **@miaoxing/link-to:** upgrade from `0.1.12` to `0.1.13`

## [0.2.9](https://github.com/miaoxing/category/compare/v0.2.8...v0.2.9) (2021-03-17)





### Dependencies

* **@mxjs/a-form:** upgrade from `0.2.10` to `0.2.11`
* **@miaoxing/app:** upgrade from `0.2.11` to `0.2.12`
* **@miaoxing/link-to:** upgrade from `0.1.11` to `0.1.12`

## [0.2.8](https://github.com/miaoxing/category/compare/v0.2.7...v0.2.8) (2021-03-12)





### Dependencies

* **@mxjs/a-page:** upgrade from `0.2.3` to `0.2.4`
* **@mxjs/a-clink:** upgrade from `0.1.3` to `0.1.4`
* **@mxjs/a-table:** upgrade from `0.3.6` to `0.3.7`
* **@mxjs/a-form:** upgrade from `0.2.9` to `0.2.10`
* **@miaoxing/dev:** upgrade from `6.3.2` to `6.3.3`
* **@mxjs/test:** upgrade from `0.1.3` to `0.1.4`
* **@miaoxing/app:** upgrade from `0.2.10` to `0.2.11`
* **@miaoxing/link-to:** upgrade from `0.1.10` to `0.1.11`

## [0.2.7](https://github.com/miaoxing/category/compare/v0.2.6...v0.2.7) (2021-03-11)





### Dependencies

* **@mxjs/test:** upgrade from `0.1.2` to `0.1.3`

## [0.2.6](https://github.com/miaoxing/category/compare/v0.2.5...v0.2.6) (2021-03-11)





### Dependencies

* **@mxjs/test:** upgrade from `0.1.1` to `0.1.2`

## [0.2.5](https://github.com/miaoxing/category/compare/v0.2.4...v0.2.5) (2021-03-10)





### Dependencies

* **@miaoxing/dev:** upgrade from 6.3.1 to 6.3.2
* **@miaoxing/app:** upgrade from 0.2.9 to 0.2.10
* **@miaoxing/link-to:** upgrade from 0.1.9 to 0.1.10

## [0.2.4](https://github.com/miaoxing/category/compare/v0.2.3...v0.2.4) (2021-03-09)





### Dependencies

* **@miaoxing/dev:** upgrade from 6.3.0 to 6.3.1
* **@miaoxing/app:** upgrade from 0.2.8 to 0.2.9
* **@miaoxing/link-to:** upgrade from 0.1.8 to 0.1.9

## [0.2.3](https://github.com/miaoxing/category/compare/v0.2.2...v0.2.3) (2021-03-09)





### Dependencies

* **@miaoxing/dev:** upgrade from 6.2.0 to 6.3.0
* **@miaoxing/app:** upgrade from 0.2.7 to 0.2.8
* **@miaoxing/link-to:** upgrade from 0.1.7 to 0.1.8

## [0.2.2](https://github.com/miaoxing/category/compare/v0.2.1...v0.2.2) (2021-03-05)





### Dependencies

* **@miaoxing/app:** upgrade from 0.2.6 to 0.2.7
* **@miaoxing/link-to:** upgrade from 0.1.6 to 0.1.7

## [0.2.1](https://github.com/miaoxing/category/compare/v0.2.0...v0.2.1) (2021-03-05)





### Dependencies

* **@miaoxing/dev:** upgrade from 6.1.2 to 6.2.0
* **@miaoxing/app:** upgrade from 0.2.5 to 0.2.6
* **@miaoxing/link-to:** upgrade from 0.1.5 to 0.1.6

# [0.2.0](https://github.com/miaoxing/category/compare/v0.1.1...v0.2.0) (2021-03-05)


* refactor(Model)!: Model 列名都改为驼峰格式，与数据库交互转换为下划线格式 ([724502d](https://github.com/miaoxing/category/commit/724502dc9a218f9a42fafe6548d796ad844d7b0b))


### BREAKING CHANGES

* Model 列名都改为驼峰格式，与数据库交互转换为下划线格式





### Dependencies

* **@mxjs/test:** upgrade from 0.1.0 to 0.1.1
* **@miaoxing/app:** upgrade from 0.2.4 to 0.2.5
* **@miaoxing/link-to:** upgrade from 0.1.4 to 0.1.5

## [0.1.1](https://github.com/miaoxing/category/compare/v0.1.0...v0.1.1) (2020-09-27)





### Dependencies

* **@miaoxing/app:** upgrade from 0.2.3 to 0.2.4
* **@miaoxing/link-to:** upgrade from 0.1.3 to 0.1.4

# 0.1.0 (2020-09-25)


### Features

* init ([24eae1e](https://github.com/miaoxing/category/commit/24eae1ec229d40177cbbb0c940bf4e222fc00204))
* init ([4b688bf](https://github.com/miaoxing/category/commit/4b688bf14ba04c4ea2fa2eef568ca2244bf18337))





### Dependencies

* **@miaoxing/dev:** upgrade from 6.1.1 to 6.1.2
* **@mxjs/test:** upgrade to 0.1.0
* **jest-preset-miaoxing:** upgrade from 0.2.0 to 0.2.1
* **@miaoxing/app:** upgrade from 0.2.2 to 0.2.3
* **@miaoxing/link-to:** upgrade from 0.1.2 to 0.1.3
