# Laravel SaaS Project

A Laravel 12 starter project for building a SaaS application, with Stripe billing and QR code generation already wired into the dependency stack.

> ⚠️ **Status:** early scaffolding. The project currently ships as a standard Laravel skeleton with SaaS-related packages installed — application-specific features (subscriptions, tenants, dashboards, etc.) are still to be built out.

## Tech Stack

- **Framework:** [Laravel 12](https://laravel.com) (PHP ^8.2)
- **Payments:** [stripe/stripe-php](https://github.com/stripe/stripe-php) for billing/subscription integration
- **QR Codes:** [endroid/qr-code](https://github.com/endroid/qr-code)
- **Frontend tooling:** Vite
- **Testing:** [Pest](https://pestphp.com)
- **Code style:** [Laravel Pint](https://laravel.com/docs/pint)
- **Local dev:** [Laravel Sail](https://laravel.com/docs/sail) (optional Docker environment)

## Requirements

- PHP >= 8.2
- Composer
- Node.js & npm
- A database (MySQL/PostgreSQL/SQLite)

## Getting Started

1. **Clone the repository**
   ```bash
   git clone https://github.com/Manish-Dheke2/laravel-saas-project.git
   cd laravel-saas-project
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JS dependencies**
   ```bash
   npm install
   ```

4. **Set up your environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure your database and Stripe keys** in `.env`:
   ```env
   DB_CONNECTION=sqlite
   # or mysql/pgsql — update credentials accordingly

   STRIPE_KEY=your_stripe_publishable_key
   STRIPE_SECRET=your_stripe_secret_key
   ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **Build frontend assets**
   ```bash
   npm run build
   ```

### Quick setup (one command)

The project also ships a Composer script that runs the steps above end-to-end:

```bash
composer run setup
```

## Running the App

Start the app, queue worker, and Vite dev server together:

```bash
composer run dev
```

Or individually:

```bash
php artisan serve
php artisan queue:listen --tries=1
npm run dev
```

## Testing

This project uses [Pest](https://pestphp.com) for testing:

```bash
composer run test
```

## Roadmap

- [ ] Multi-tenant / team accounts
- [ ] Stripe subscription plans & billing portal
- [ ] QR-code-based features (e.g. 2FA, invites, or invoices)
- [ ] Admin dashboard
- [ ] API layer

## Contributing

Contributions, issues, and feature requests are welcome. Feel free to check the [issues page](https://github.com/Manish-Dheke2/laravel-saas-project/issues).

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
