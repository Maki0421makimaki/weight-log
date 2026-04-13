# Dockerビルド

- プロジェクトをクローンする

```
git clone git@github.com:Maki0421makimaki/weight-log.git
```

- リポジトリ名を変更

```
mv weight-log.git リポジトリ名
```

- リポートリポジトリのURL変更

```
cd リポジトリ名
git remote set-url origin 作成したリポジトリのurl
git remote -v
```

- ローカルリポジトリの内容をリモートに反映

```
git add .
git commit -m "リモートリポジトリの変更"
git push origin main
```

- ドッカーのビルドして立ち上げる

```
docker-compose up -d --build
```

## Laravel環境構築

- docker-compose exec php bash
- composer install
- cp .env.example .env
- php artisan key:generate
- php artisan migrate
- php artisan db:seed

## 開発環境

- 体重管理画面ページ：http://localhost/weight_logs

## 使用技術

- PHP 8.1.34
- Laravel 8.83.8
- MySQL 8.0.26
- nginx 1.21.1

## ER図

