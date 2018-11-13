# set up
## db operation
  mysqlにログインして下のコマンド実行
  ```sql
  create database sotsu;
  create user sotsu@localhost identified by "sotsu";
  grant all on sotsu.* to sotsu@localhost identified by "sotsu";
  ```

## shell operation
```bash
$ cp .env.example .env
$ composer install
$ php artisan key:generate
$ php artisan migrate
$ php artisan serve
```

## how to laravel-mix sass compile

1. First, initialize npm.
```bash
$ npm install
```

2. Write file name to `webpack.mix.js`.
```js
mix.js('resources/js/[js-file-name]', 'public/js')
    .sass('resources/sass/[scss-file-name]', 'public/css');
```
and [more options](https://readouble.com/laravel/5.5/ja/mix.html)

3. Execute mix
```bash
$ npm run dev
```

