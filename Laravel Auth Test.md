# Laravel Auth Test

Add JWT authentication for Laravel

> Do not use any Laravel packages, such as `tymon/jwt-auth`
> 
> You can use PHP package(`firebase/php-jwt`) for JWT generation and validation.
>
> Push your code to your GitHub, and share us your repository address.


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
