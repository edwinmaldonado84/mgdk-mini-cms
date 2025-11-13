# Mini CMS – Laravel 12 + FilamentPHP v4

## How to start the project locally

1. Clone the repository git clone https://github.com/edwinmaldonado84/mgdk-mini-cms.git
2. Install dependencies composer install
3. Install frontend dependencies npm install
4. Copy and configure environment file cp .env.example .env Edit .env with your database credentials.
5. Generate application key php artisan key:generate
6. Run migrations php artisan migrate
7. Build frontend assets npm run build
8. Start the server php artisan serve
9. Access the application at http://localhost:8000

- Public: http://localhost:8000/articles
- Admin: http://localhost:8000/admin (if Filament panel is set up)

## Create a new user

1.  Run the Filament user creation command php artisan make:filament-user

## Api to access the articles

1. Get the list of articles http://localhost:8000/api/public/articles
