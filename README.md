# docker-laravel-handson
 LaravelをDockerで動かすハンズオン
 
## 簡単な説明
 LaravelのチュートリアルにあるquickstartをDocker上で作りました。

## インストール
 
```
$ git clone https://github.com/t1k2a/docker-laravel-handson-MVC.git
$ cd docker-laravel-handson
$ docker-compose up -d --build
$ docker-compose exec app ah
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ php artisan migrate
```
 
## 参考文献
 
[【初心者向け】20分でLaravel開発環境を爆速構築するDockerハンズオン](https://qiita.com/ucan-lab/items/56c9dc3cf2e6762672f4#%E3%83%87%E3%83%BC%E3%82%BF%E3%83%99%E3%83%BC%E3%82%B9db%E3%82%B3%E3%83%B3%E3%83%86%E3%83%8A%E3%82%92%E4%BD%9C%E3%82%8B)</blockquote>  
[【ダウンロード版】絶対に挫折させないアプリ開発　はじめてのLaravel](https://booth.pm/ja/items/1054217)</blockquote>