# skill-note
## 使用技術
Laravel+Docker
## 簡単な説明
 気になった技術をまとめるだけのノート

## インストール

```
$ git clone https://github.com/t1k2a/skill-note.git
$ cd skill-note
$ docker-compose up -d --build
$ docker-compose exec app ash
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ php artisan migrate
```

## 参考文献
 
[【初心者向け】20分でLaravel開発環境を爆速構築するDockerハンズオン](https://qiita.com/ucan-lab/items/56c9dc3cf2e6762672f4)</blockquote>  
[【Laravel 5.8対応】掲示板を作成するチュートリアル](https://blog.hiroyuki90.com/articles/laravel-bbs/)</blockquote>