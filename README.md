# Quiz System APP built with Laravel
[![License: MIT](https://img.shields.io/badge/License-MIT-lime.svg)](https://opensource.org/licenses/MIT)
![example workflow](https://github.com/emtiazzahid/laravel-quiz-system/actions/workflows/laravel.yml/badge.svg)


## Demo: [APP](https://dev8.estheticingenious.com/unicminds/)

## Credentials: 
    Admin: admin@admin.com      password: 123456
    User:  user01@example.com   password: 123456


# Installation
1. Clone this repo
```
git clone https://github.com/shamsiar/laravel-quiz-app.git
```

2. Install composer packages
```
cd laravel-quiz-app
```
```
composer install
```

3. Create and setup .env file
```
cp .env.example .env
```
```
php artisan key:generate
```


4. put database credentials in .env file

5. Migrate to database

```
php artisan migrate:refresh --seed
```


## Screenshot
<!-- ![QuizApp Demo](https://user-images.githubusercontent.com/10188029/133921722-532ff8b1-0abf-443a-af66-92a93655fc35.gif) -->


## License

The MIT License (MIT)

