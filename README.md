# Contact Form

## 環境構築手順

### ① リポジトリをクローン
git clone <リポジトリURL>
cd contact-form

### ② Docker起動
docker compose up -d --build

### ③ Laravel初期設定
docker compose exec php chmod -R 777 storage
docker compose exec php chmod -R 777 bootstrap/cache
docker compose exec php chmod -R 777 database

### ④ アクセス
http://localhost:8081