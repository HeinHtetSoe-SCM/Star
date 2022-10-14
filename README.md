# Star
Nuxt and Laravel OJT Project
## Project Setup
### Clone this folder
```bash
$ git clone https://github.com/HeinHtetSoe-SCM/Star.git
```
```bash
$ cd star
```
### Setup Backend
1. Go to backend folder
```bash
$ cd backend
```
2. Install composer
```bash
$ composer install
```
3. Install closure table 
```bash 
$ composer require franzose/closure-table
```
4. Create closure table 
```bash 
$ php artisan closuretable:make StarPhone
```
5. Connect your database in .env file
6. After that, run these following commands
```bash 
$ php artisan migrate
```
```bash 
$ php artisan db:seed
```
```bash 
$ php artisan serve
```

### Setup Frontend
1. Go to frontend folder
```bash 
$ cd frontend
```
2. Install npm
```bash 
$ npm install
```
3. Run development server
```bash 
$ npm run dev
```
