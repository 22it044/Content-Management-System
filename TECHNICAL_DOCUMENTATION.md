# Technical Documentation: PHP Blog CMS

## Table of Contents
1. [Overview](#overview)
2. [Database Structure](#database-structure)
3. [Authentication & User Management](#authentication--user-management)
4. [Blog Post Management](#blog-post-management)
5. [Category Management](#category-management)
6. [Search Functionality](#search-functionality)
7. [Static Pages (About, Services, Contact)](#static-pages)
8. [Admin Panel](#admin-panel)
9. [Enhancements Module](#enhancements-module)
10. [File Structure](#file-structure)
11. [Security Considerations](#security-considerations)
12. [Extending the System](#extending-the-system)

---

## 1. Overview
The PHP Blog CMS is a full-featured blogging platform with user authentication, admin panel, and modular enhancements. It is built with PHP (procedural), MySQL, and a responsive frontend.

## 2. Database Structure
- **users**: Stores user info (id, firstname, lastname, username, email, password hash, avatar, is_admin)
- **posts**: Stores blog posts (id, title, body, thumbnail, category_id, author_id, is_featured, date_time)
- **categories**: Stores post categories (id, title, description)

## 3. Authentication & User Management
- **Sign Up (`signup.php`, `signup-logic.php`)**: Handles registration, input validation, password hashing, and duplicate checks.
- **Sign In (`signin.php`, `signin-logic.php`)**: Authenticates users, sets session variables, and redirects based on role.
- **Sign Out (`logout.php`)**: Destroys session and logs out user.
- **Admin User Management (`admin/manage-users.php`, `admin/add-user.php`, `admin/edit-user.php`, `admin/delete-users.php`)**: Admins can add, edit, and delete users. Only admins can access these pages (checked via session `user_is_admin`).

## 4. Blog Post Management
- **View Posts (`index.php`, `blog.php`, `category-posts.php`, `post.php`)**: Fetches and displays posts, supports featured posts, category filtering, and author info.
- **Admin CRUD (`admin/add-post.php`, `admin/edit-post.php`, `admin/delete-post.php`, `admin/manage-posts.php`)**: Admins can create, edit, and delete posts. File uploads for thumbnails are handled securely.
- **Featured Posts**: Admins can mark posts as featured; featured posts are highlighted on the homepage.

## 5. Category Management
- **Admin CRUD (`admin/add-category.php`, `admin/edit-category.php`, `admin/delete-category.php`, `admin/manage-categories.php`)**: Admins can create, edit, and delete categories. Categories are used to organize posts.

## 6. Search Functionality
- **Search (`search.php`)**: Users can search posts by title. Input is sanitized and results are displayed with category and author info.

## 7. Static Pages
- **About (`about.php`)**: Describes the platform, mission, and team.
- **Services (`services.php`)**: Lists services offered (content creation, editing, SEO, etc.).
- **Contact (`contact.php`)**: Contact form and business info.

## 8. Admin Panel
- **Dashboard (`admin/index.php`)**: Overview of posts by the current user/admin.
- **Access Control**: Only logged-in users with `user_is_admin` session variable can access admin pages. Non-admins are redirected.
- **Session Management**: All admin actions are protected by session checks.

## 9. Enhancements Module
- **Enhancements Directory (`/Enhancements`)**: Contains enhancement plans, implementation phases, and completed features. Accessible via `/Enhancements/index.php` for admins.
- **Phased Implementation**: Each phase (UX, admin, advanced features, security, analytics) is documented and tracked.

## 10. File Structure
- `/admin` - Admin panel scripts (user, post, category management)
- `/config` - Database and constants configuration
- `/partials` - Header and footer includes
- `/images`, `/img` - Uploaded and static images
- `/css`, `/js` - Stylesheets and scripts
- `/Enhancements` - Enhancement plans and documentation
- Root PHP files - Main site pages (index, blog, about, contact, etc.)

## 11. Security Considerations
- **Input Validation**: All user input is sanitized using `filter_var` and `FILTER_SANITIZE_*`.
- **Password Hashing**: Passwords are hashed using PHP's `password_hash` and verified with `password_verify`.
- **Session Management**: Sessions are used for authentication and access control.
- **File Uploads**: Thumbnails and avatars are validated for type and size before saving.
- **Admin Access**: Only users with `is_admin` flag can access admin features.

## 12. Extending the System
- **Add new features** by creating new PHP files and linking them in the navigation.
- **Enhance security** by adding CSRF tokens, rate limiting, and more advanced validation.
- **Integrate third-party services** (e.g., social login, analytics) by extending the relevant modules.
- **Follow the enhancement plan** in `/Enhancements` for structured upgrades.

---

For further details, see code comments in each PHP file and the `/Enhancements` documentation.
