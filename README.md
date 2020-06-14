<p align="center"><img src="https://raw.githubusercontent.com/lester2k1/new_habit_tracker_4/master/public/img/logo2.png" width="400"></p>

<h1 align="center">
Trabbit
</h1>

## About Trabbit

Trabbit is a habit tracking web application project for Web Development 2.

Forming a new habit or skill is very difficult. It requires discipline, monitoring, and some form of encouragement. 
The web app is a very simple tool that will help a person tally if he is satisfied with his effort in making a new habit.

## Scope and Limitation

The app is focused on the user’s own evaluation of his effort. It does not record if he was successful or not in doing the new habit.

## Feature

The web application has the following pages and/or functionalities:
- User Registration
- User LogIn
- Habit List Page
- Habit Calendar page

## Credits
- **[Josh Arkane Orbiso](https://github.com/orbijo)**
- **[Lester John Doblas](https://github.com/lester2k1)**

Initial repository:
- [Pre-frontend repo](https://github.com/orbijo/new_habit_tracker_4/)

## Installation and Use

Dont forget to:
```php artisan key:generate```
- Update package dependencies
```composer update```
- Frontend Scaffolding
```npm install && npm run dev```
- Run Apache and  MySQL in XAMPP and create your database
- ```cp .env.example .env``` and change the environment variables in your new .env file to your liking
- Generate tables
```php artisan migrate:fresh``` w/ seeders: ```php artisan migrate:fresh``` (seed users password: 'password')
- Serve the application
```php artisan serve```
