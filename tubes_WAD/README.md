# Laravel Project with PHP 8.3

A Laravel 12.x project configured with PHP 8.3 for your tugas besar (final project).

## Requirements

- **PHP**: 8.3 or higher
- **Composer**: Latest version
- **Node.js**: 18+ (for frontend assets - optional)
- **Database**: SQLite (default), MySQL, or PostgreSQL

## Installation

1. **Clone the repository** (if not already done):
   ```bash
   git clone <your-repository-url>
   cd tugas-besar-pengganti-2025
   ```

2. **Install PHP dependencies**:
   ```bash
   composer install
   ```

3. **Set up environment**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure database** (optional - SQLite is used by default):
   - Edit `.env` file to configure your database connection
   - For SQLite (default): `DB_CONNECTION=sqlite`
   - For MySQL: Update `DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`

5. **Run database migrations**:
   ```bash
   php artisan migrate
   ```

6. **Install Node.js dependencies** (optional - for frontend assets):
   ```bash
   npm install
   npm run dev
   ```

## Running the Application

### Development Server
```bash
php artisan serve
```
The application will be available at `http://127.0.0.1:8000`

### Production Build (if using frontend assets)
```bash
npm run build
```

## Project Structure

```
├── app/                    # Application core
│   ├── Console/           # Console commands
│   ├── Exceptions/        # Exception handlers
│   ├── Http/              # HTTP layer (Controllers, Middleware)
│   ├── Models/            # Eloquent models
│   └── Providers/         # Service providers
├── bootstrap/             # Framework bootstrap files
├── config/                # Configuration files
├── database/              # Database files
│   ├── factories/         # Model factories
│   ├── migrations/        # Database migrations
│   └── seeders/           # Database seeders
├── public/                # Publicly accessible files
├── resources/             # Views, assets, language files
├── routes/                # Route definitions
├── storage/               # Application storage
└── tests/                 # Test files
```

## Available Commands

- `php artisan serve` - Start development server
- `php artisan migrate` - Run database migrations
- `php artisan migrate:rollback` - Rollback last migration
- `php artisan make:controller NameController` - Create controller
- `php artisan make:model Name` - Create model
- `php artisan make:migration create_table_name` - Create migration
- `php artisan route:list` - List all routes
- `php artisan tinker` - Interactive PHP shell

## Development Tools

- **Laravel Pint**: Code style fixer
- **Laravel Sail**: Docker development environment
- **Laravel Pail**: Log viewer
- **PHPUnit**: Testing framework

## Testing

```bash
php artisan test
```

## Code Style

```bash
./vendor/bin/pint
```

## Environment Configuration

Key environment variables in `.env`:

- `APP_NAME` - Application name
- `APP_ENV` - Environment (local, production, etc.)
- `APP_DEBUG` - Debug mode
- `APP_URL` - Application URL
- `DB_CONNECTION` - Database connection type
- `DB_HOST` - Database host
- `DB_DATABASE` - Database name
- `DB_USERNAME` - Database username
- `DB_PASSWORD` - Database password

## Security

- Application key is automatically generated
- CSRF protection is enabled
- SQL injection protection via Eloquent ORM
- XSS protection via Blade templating

## Support

For Laravel documentation, visit [laravel.com/docs](https://laravel.com/docs).

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
