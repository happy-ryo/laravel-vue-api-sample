## 動かす手順

1. composer install
2. npm install & npm run dev
3. php artisan serve
4. access to http://127.0.0.1:8000

## ザックリした説明

見るべきファイルは以下の通り

* app/Http/Controllers/API/SampleController.php
  * PHP の API 部分、ただ JSON を返しているだけ
* resources/js/components/Sample.vue
  * Vue のコンポーネント、見ての通り API をコールして取得した値をリストで表示する
  * デフォルトでも値を持っているが、上書きされる
* resources/views/welcome.blade.php
  * Vue のコンポーネントを読み込んでいる
* resources/js/app.js
  * Vue のコンポーネントを登録している
