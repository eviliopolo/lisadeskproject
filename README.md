# Material Pro Starter App

## Introduction

This application consists in a backend application, with 
authentication to access two example pages

### Features

- User Registration and Authentication Pages
- Sidebar and Navbar User Menu with User real information
- Messages and Notifications Automatic, from database, with injection
  + Means anytime the view is rendered, it will retrieve data, no need to handle it in controller. Laravel Blade service injection 
- --> (Bonus) VueJs components starter example
- --> Plus all features from demo!

### Installation

- Install repository

- Install composer dependencies, run 
~~~
composer install 
~~~  

- Make environment file, from example
~~~
cp .env.example .env
~~~

- Open .env file, and configure database settings
~~~
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your-database-name
DB_USERNAME=database-user
DB_PASSWORD=database-password
~~~

- Generate application encryption key
~~~
php artisan key:generate
~~~

- Migrate database tables and seed content
~~~
php artisan migrate:fresh --seed
~~~

- Visit the application in the browser, default credentials:
~~~
email: admin@admin.com
password: admin
~~~

-When you want to compile frontend assets, webpack build on the bundler of your choice

NPM 
~~~
npm install

npm run dev
 
# or npm run watch (recommended for faster changes)

#npm run production for when to deploy
~~~

Yarn
~~~
yarn install

yarn dev 

# or: (recommended for faster changes)
yarn watch 

# or for when to deploy 
yarn production
~~~