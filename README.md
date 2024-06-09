# SETUP
1) clone repo
```
git clone https://github.com/mohamed-ali-agourram/cms.git
cd cms
composer install
php artisan key:generate
npm install
cp .env.example .env
php artisan migrate
```
2) Setup .env based on your database

3) Run Server
```
php artisan serve
```
