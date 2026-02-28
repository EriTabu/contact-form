# Contact Form

## 環境構築手順

### ① リポジトリをクローン
git clone <リポジトリURL>
cd contact-form

### ② Dockerコンテナを起動
docker compose up -d --build

### ③ Laravel初期設定（初回のみ）
docker compose exec php chmod -R 777 src/storage
docker compose exec php chmod -R 777 src/bootstrap/cache
docker compose exec php chmod -R 777 src/database

### ④ 動作確認
http://localhost:8081

※ SQLiteを使用しています