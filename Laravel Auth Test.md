# Laravel Auth Test

Add JWT authentication for Laravel

> Do not use any Laravel packages, such as `tymon/jwt-auth`
> 
> You can use PHP package(`firebase/php-jwt`) for JWT generation and validation.
>
> Push your code to your GitHub, and share us your repository address.
>
> A handle over documents to help us quickly and easily understand your job. you can put it in  `README.md` file in the project root folder.


## Goal

1. We can clone the code from your GitHub.
1. We can start your project in locally, and restore your db-backup.
1. We can login and see user profile.

## Requirements

- Use Docker Env for Laravel Development.
- Create `token` API to get JWT, eg: `POST {BASE_URL}/auth/v1/token`
- Create `profile` API for get current user profile. eg: `GET {BASE_URL}/auth/v1/me`
- Create a page with Login form, on form submit, make a ajax call `token` API to get JWT token.
- After user login, redirect to profile page, make a ajax call `profile` API to get current user profile, and display user profile in it.
- [Nice to have] Use React, Vue, TypeScript, and TailwindCSS in Laravel theme.


# Laravel Auth Test

给 Larave 增加 JWT 认证。

> 注意：
>
> 不要使用任何现有的 Laravel 依赖包，如   `tymon/jwt-auth`
>
> 建议使用 PHP依赖包(`firebase/php-jwt`) 来进行 JWT 的生成和验证
>
> 编写帮助文档（README.md）以帮助我们更容易的理解你的工作，
>
> 提交你的测试代码到github，并分享仓库地址给我们

## 目标

- 我们可以从github克隆你的测试代码
- 我们可以在本地启动你的项目以进行测试
- 我们可以使用用户名和密码登录，登录后跳转到用户信息页面，并看到相关用户信息

## 要求

- 使用 Docker 作为 Laravel 的开发环境
- 创建用于用户登录的 token 接口， 例如： `POST {BASE_URL}/auth/v1/token`
- 创建用户获取当前用户信息的 profile 接口，例如：`GET {BASE_URL}/auth/v1/me`
- 创建 登录页面，表单提交后请求 token 接口进行登录
- 登录成功后跳转到用户页面，请求 profile 接口来获取用户信息，并展示
- 【可选】使用 React，Vue，TypeScript 和 TailwindCSS 等技术更佳
