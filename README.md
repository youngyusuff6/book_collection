# Book Collection Application

This is a simple web application built with Laravel, Livewire, and Tailwind CSS for managing a collection of books. Users can add, view, edit, and delete books through a user-friendly interface.

## Features

- **View Books:** See a list of all books in the collection.
- **Add New Book:** Create a new entry for a book with title, author, description, and published year.
- **Edit Book:** Update existing book details.
- **Delete Book:** Remove books from the collection.

## Technologies Used

- **Laravel:** PHP framework for building web applications.
- **Livewire:** Laravel library for building dynamic interfaces.
- **Tailwind CSS:** Utility-first CSS framework for styling.

## Installation

Follow these steps to set up and run the application locally:

1. **Clone the repository:**

   ```bash
   git clone https://github.com/youngyusuff6/book_collection.git
   cd book-collection-app
   ```

2. **Install dependencies:**

   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Set up environment variables:**

   - Duplicate `.env.example` and rename it to `.env`.
   - Configure your database connection in the `.env` file.

4. **Generate application key:**

   ```bash
   php artisan key:generate
   ```

5. **Run migrations:**

   ```bash
   php artisan migrate
   ```

6. **Start the development server:**

   ```bash
   php artisan serve
   ```

   Access the application at `http://localhost:8000`.

## Usage

- Navigate to `http://localhost:8000` in your web browser.
- Use the navigation to add, view books as needed.

## Folder Structure

- **app/Http/Livewire:** Contains Livewire components for dynamic UI elements.
- **resources/views:** Blade views for rendering HTML templates.
- **routes/web.php:** Application routes including CRUD operations for books.
- **database/migrations:** Database migrations for setting up `books` table.
