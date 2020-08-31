# northpoll-api

## Installation

Clone the repo locally:

```sh
git clone https://github.com/aldo555/northpoll-api.git
cd northpoll-api
```

Install PHP dependencies:

```sh
composer install
```

Install NPM dependencies:

```sh
npm install
```

Build assets:

```sh
npm run dev
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Create an SQLite database. You can also use another database (MySQL, Postgres), simply update your configuration accordingly.

```sh
touch database/database.sqlite
```

Run database migrations:

```sh
php artisan migrate
```

Serve the application:

```sh
php artisan ser
```

You're ready to go!
