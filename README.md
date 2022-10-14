# Star
Nuxt and Laravel OJT Project
## Project Setup
### Clone this folder
`$ git clone https://github.com/HeinHtetSoe-SCM/Star.git`
`$ cd star`
### Setup Backend
1. Go to backend folder
`$ cd backend`
2. Install composer
`$ composer install`
3. Install closure table `composer require franzose/closure-table`
4. Create closure table `php artisan closuretable:make StarPhone`
5. Connect your database in .env file
6. After that, run these following commands
`$ php artisan migrate`
`$ php artisan db:seed`
`$ php artisan serve`

### Setup Frontend
1. Go to frontend folder
`$ cd frontend`
2. Install npm
`$ npm install`
3. Run development server
`$ npm run dev`
