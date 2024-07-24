<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
  # My First Blog

Git Repository URL: https://github.com/kachary3/blog

## Description

This project is a simple blog application built with Laravel. It allows users to create, read, update, and delete (CRUD) blog posts.

## Approach

### Step 1: Setting Up Laravel

- Installed Laravel using Composer.
- Set up the environment configuration in the `.env` file.

### Step 2: Creating the Blog Post Model and Migration

- Generated the `Post` model and migration using artisan commands.
- Defined the schema for the `posts` table in the migration file.
- Ran migrations to create the `posts` table.

### Step 3: Creating the Controller and Routes

- Generated the `PostController` using artisan.
- Defined resource routes for the `Post` resource in `routes/web.php`.

### Step 4: Building the Views

- Created Blade templates for listing, creating, editing, and showing posts.
- Used Bootstrap for basic styling.

### Step 5: Implementing CRUD Functionality

- Implemented the necessary methods in `PostController` for CRUD operations.
- Added form validation in the controller methods.

### Step 6: Pagination

- Added pagination to the blog post listing using Laravel's built-in pagination.

### Step 7: Styling and Debugging

- Customized the styling of pagination controls.
- Debugged issues with large pagination arrows by overriding CSS styles.

### Step 8: Committing Changes

- Regularly committed changes to the repository with descriptive commit messages.

### Step 9: Final Steps

- Completed the project by finalizing views and testing all functionalities.
- Documented the project in this README.md file.

## Challenges Faced

### Challenge 1: Large Pagination Arrows

- **Issue**: When implementing pagination for the blog posts, the arrows used in the pagination controls appeared significantly larger than intended. This affected the user interface, making the pagination controls look disproportionate and disrupting the overall aesthetics of the application.

- **Solution**: Overrode the CSS for the pagination controls to resize the SVG icons.

## Conclusion

This project provided a hands-on experience with building a CRUD application in Laravel. It involved setting up models, migrations, controllers, and views, as well as handling pagination and styling issues. The challenges encountered helped reinforce problem-solving skills and a deeper understanding of Git and Laravel.


