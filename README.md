# Contact Form

お問い合わせフォームの確認テスト提出用アプリです。

---

## 環境構築手順

### ① リポジトリをクローン

```bash
git clone <リポジトリURL>
cd contact-form
```

---

### ② Dockerコンテナを起動

```bash
docker compose up -d --build
```

---

### ③ Laravel初期設定（初回のみ）

```bash
docker compose exec php chmod -R 777 src/storage
docker compose exec php chmod -R 777 src/bootstrap/cache
docker compose exec php chmod -R 777 src/database
docker compose exec php cp src/.env.example src/.env
docker compose exec php php artisan key:generate
docker compose exec php php artisan migrate
```

---

### ④ 動作確認

以下のURLにアクセスしてください。

```
http://localhost
```

---

## 使用技術

- Laravel 12
- PHP 8.2
- Docker
- SQLite

---

## データベース

SQLite を使用しています。  
マイグレーションは上記手順に含まれています。

---

## 機能一覧

- お問い合わせ入力フォーム
- バリデーション（日本語対応）
- 確認画面表示
- データベース保存
- サンクスページ表示