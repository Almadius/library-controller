# Laravel Book Author Management

This project is a simple Laravel application for managing books and authors. It includes CRUD operations for books and authors.

## Requirements

- PHP 7.4 or higher
- Composer
- Node.js and npm
- MySQL or other supported databases

## Installation

### Step 1: Clone the repository

```bash
git clone https://github.com/your-username/your-repository.git
cd your-repository

### Step 2: Install dependencies

composer install
npm install

### Step 3: Set up the environment variables

Copy the .env.example file to .env and update the necessary configurations.
cp .env.example .env
Update the .env file with your database and mail configurations.

### Step 4: Generate application key

php artisan key:generate

### Step 5: Run migrations

php artisan migrate

### Step 6: Compile assets

npm run dev
vite build

### Step 7: Running tests

php artisan test

