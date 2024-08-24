Git Repository URL: https://github.com/kachary3/blog
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

# Blog Application with User Authentication and Admin Panel

## Overview

This project involves implementing user authentication and an admin panel for a blog application using Laravel. The primary objectives were to manage posts and users with different access levels, ensuring that regular users can only view and create posts, while admins have full control over both posts and user management.

## Approach

### 1. Authentication Setup
- **Laravel UI:** Installed Laravel UI package to set up basic authentication and user registration.
- **MongoDB Integration:** Configured MongoDB as the database for storing user and post data.
- **Admin Middleware:** Implemented middleware to restrict access to admin routes based on user roles.

**Setting Up User Authentication:**
   - Integrated Laravel UI with Bootstrap for user authentication.
   - Used the command `php artisan ui bootstrap --auth` to scaffold authentication and compiled frontend assets using `npm install && npm run dev`.

. **Creating the Admin Panel:**
   - Added admin-related routes in `web.php` for functionalities including dashboard, user management, and post management.
   - Developed templates for the admin panel to manage blog posts and users.
   - Implemented role-based access control to ensure that only users with admin roles can access specific features so that admin can delete user delete posts and edit.

### 2. Routes and Controllers
- **User Routes:** Secured routes to ensure that users can only view and create posts.
- **Admin Routes:** Set up admin routes for managing posts and users, accessible only to users with admin privileges.
- **Controllers:** Applied policies in controllers to enforce authorization checks for updating and deleting posts.

### 3. Challenges
- **Implementation:** Ensuring correct policy application and handling permissions for both admins and regular users.
- **Database Errors:** Encountered issues with duplicate keys in MongoDB during seeding, which were resolved by checking for existing entries before insertion.
. **User Login and Post Management:**
   - Encountered an issue where, after logging in as a user, it was found that the user could edit and delete posts, which should have been restricted. This required adjustments in role-based access control to ensure proper permissions and security.

## 4. Repository

The project repository can be found at: [GitHub Repository](https://github.com/kachary3/blog)
