<p align="center"><img src="https://drive.google.com/uc?id=1_kJMtgulIZlfYDqBwJUFvX3DYx2d4gVq" width="100%"></p>

# VideoManolo

Live App on Netlify: https://videomanolo.joseburgon.com/

Backend / API running on Heroku: https://api.joseburgon.com 

Movie info from: https://www.themoviedb.org/

## Local Installation Process

### Step 1: Clone repository

If it's Windows we highly recommend using [Laragon](https://laragon.org/) as a local development environment.

```
git clone https://github.com/joseburgon/video-manolo.git
```

### Step 2: Switch to the repo folder

```
cd video-manolo
```

### Step 3: Install project packages and dependencies

```
composer install
```

### Step 4: Create .env file

The .env file is generally not loaded, due to security issues. The easiest way to do this is to copy the .env.example file to .env, and modify the latter:

```
copy .env.example .env
```

### Step 5: Generate project key

Laravel requires an encryption key for each project.

```
php artisan key:generate
```

### Step 6: Create database

Laravel is configured to use mySQL by default, not only the driver, server, database, user and password must be changed, but also the port, mySQL uses 3306 and postgres 5432.

### Step 7: Migrate and seed the database

```
php artisan migrate --seed
```

### Step 8: Start the local development server

```
php artisan serve
```

## Ready to go!

You can now access the server at http://localhost:8000.

Or http://videomanolo-backend.test/ if you use [Valet](https://laravel.com/docs/7.x/valet) on Mac or [Laragon](https://laragon.org/) on Windows.

*Email: test@mail.com
Password: password*
