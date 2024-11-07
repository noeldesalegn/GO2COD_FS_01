# Task 01: Blog Platform

Welcome to the Blog Platform! This project enables users to share their thoughts by creating blog posts and allows viewers to browse these posts on the homepage in reverse chronological order.

---

## 🚀 Features

-   **Post Creation**: Users can create new posts with a title and body to share their ideas.
-   **Homepage Display**: All posts appear on the homepage in reverse chronological order, showcasing the latest posts first.
-   **Backend Management**: A robust backend for handling post creation, storage, and retrieval to ensure a smooth and efficient user experience.

## 🛠️ Built With

-   **Laravel**: Backend framework that handles routes, authentication, data storage, and post management.
-   **Bootstrap**: Front-end framework for designing a responsive and visually appealing user interface.

## 🖥️ Project Structure

-   **Frontend**: Built with Bootstrap for a clean, responsive layout.
-   **Backend**: Powered by Laravel, handling all aspects of post management, from creation to display on the homepage.

## 📄 Requirements

-   Laravel version 8+ and PHP version 7.3+.
-   Bootstrap for front-end styling and layout.

## 📥 Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/noeldesalegn/GO2COD_FS_01.git
    cd GO2COD_FS_01
    ```

2. Install dependencies:

    ```bash
    composer install
    ```

3. Create a `.env` file:

    ```bash
    cp .env.example .env
    ```

4. Generate an application key:

    ```bash
    php artisan key:generate
    ```

5. Set up the database and run migrations:

    ```bash
    php artisan migrate
    ```

6. Run the development server:
    ```bash
    php artisan serve
    ```

Visit `http://localhost:8000` to see the blog platform in action!

## 📧 Contact

For any questions or further inquiries, reach us at **nbekele8@gmail.com**.

## 📸 Example

Imagine a blog where users submit posts, and others can view these entries right on the homepage. The platform is clean, simple, and open to all to share and engage with content.

---
