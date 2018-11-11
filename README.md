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