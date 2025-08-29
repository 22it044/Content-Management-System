
# PHP Blog CMS

A responsive blog web application built with PHP and MySQL, featuring a full admin panel, user authentication, and content management. This project is designed for bloggers, writers, and content creators who want a robust, easy-to-use platform to publish and manage posts.

## Features

- **Blog Post Management:** Create, read, update, and delete blog posts. Supports featured posts, categories, and thumbnails.
- **Category Management:** Admins can add, edit, and delete categories to organize content.
- **User Management:** Admin panel for managing users, roles, and authentication (sign up, sign in, sign out).
- **Responsive Design:** Works seamlessly on desktop, tablet, and mobile devices.
- **Search Functionality:** Users can search posts by title.
- **Contact & About Pages:** Static pages for site information and user inquiries.
- **Admin Dashboard:** Centralized dashboard for managing posts, categories, and users.
- **Enhancement Plan:** Modular enhancement phases for future improvements (see `/Enhancements`).

## Technologies Used

- PHP (Core logic)
- MySQL (Database)
- HTML5, CSS3 (Frontend)
- JavaScript (UI interactions)
- XAMPP (Recommended local server)

## Setup Instructions

1. **Clone the repository:**
	```
	git clone https://github.com/22it044/Content-Management-System.git
	```
2. **Import the database:**
	- Use `blog.sql` to create the required tables and sample data in your MySQL server.
3. **Configure database connection:**
	- Edit `config/database.php` with your MySQL credentials.
4. **Run the project:**
	- Place the project folder in your XAMPP `htdocs` directory.
	- Start Apache and MySQL from XAMPP Control Panel.
	- Visit `http://localhost/php_blog` in your browser.

## Directory Structure

- `/admin` - Admin panel (user, post, category management)
- `/config` - Configuration files (database, constants)
- `/partials` - Reusable UI components (header, footer)
- `/images`, `/img` - Uploaded and static images
- `/css`, `/js` - Stylesheets and scripts
- `/Enhancements` - Enhancement plans and documentation

## Screenshots

<img width="1919" height="965" alt="image" src="https://github.com/user-attachments/assets/dd8768a2-3da8-4855-b93e-2d3dfef52fa7" />
- Normal View

<img width="1919" height="963" alt="image" src="https://github.com/user-attachments/assets/c3ea4176-d7c4-4613-bb67-16ea09b2a11d" />
- Landing page

<img width="1919" height="969" alt="image" src="https://github.com/user-attachments/assets/c240629e-93bd-4d5b-b77d-db82222b1db7" />
- Add Post

<img width="1919" height="965" alt="image" src="https://github.com/user-attachments/assets/a11bbf66-9ee9-4949-9bfd-e15f85754cad" />
- Manage Posts

<img width="1919" height="961" alt="image" src="https://github.com/user-attachments/assets/b173500c-a5be-4d2b-b72a-5dbcaf1942fc" />
- Manage User


For detailed technical documentation, see `TECHNICAL_DOCUMENTATION.md`.
