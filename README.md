#MOGITATE(もぎたて)

##環境構築

###Dockerビルド

１．git clone git@github.com:akito1012/test2.git

２．DockerDesktopアプリを立ち上げる

３．docker-compose up -d --build

###Laravel環境構築

１．docker-compose exec php bash

２．composer install

３．「.env.example」ファイルを「.env」ファイルに命名を変更。または、新しく.envファイルを作成

４．.envに以下の環境変数を追加

DB_CONNECTION=mysql

DB_HOST=mysql

DB_PORT=3306

DB_DATABASE=laravel_db

DB_USERNAME=laravel_user

DB_PASSWORD=laravel_pass

５．アプリケーションキーの作成

php artisan key:generate

６．マイグレーションの実行

php artisan migrate

７．シーディングの実行

php artisan db:seed

###使用技術（実行環境）

・php8.1.2

・laravel8.83.8

・mysql8.0.26

###ER図

![drawio](https://github.com/user-attachments/assets/7939646c-a5e8-4e67-94e3-47c875c41f6a)

###URL

・開発環境：http://localhost/

・phpMyAdmin:：http://localhost:8080/

