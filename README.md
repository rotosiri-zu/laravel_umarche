## udemy Laravel 講座

## ダウンロード方法

git clone

git clone https://github.com/rotosiri-zu/laravel_umarche.git

git clone ブランチを指定してダウンロードする場合

git clone -b ブランチ名 https://github.com/rotosiri-zu/laravel_umarche.git

もしくは zip ファイルでダウンロードしてください

## インストール方法

-   cd laravel_umarche
-   composer install

npm install
npm run dev

.env.example をコピーして.env ファイルを作成

.env ファイルの中の下記をご利用の環境に合わせて変更してください。

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_POST=3306
DB_DATABASE=laravel_umarche
DB_USERNAME=umarche
DB_PASSWORD=password123

XAMPP/MAMP またはほかの開発環境で DB を起動した後に

php artisan migrate:fresh --seed

と実行してください。(データベーステーブルとダミーデータが追加されれば OK)

最後に
php artisan key:generate と入力してキーを作成後、

php artisan serve で簡易サーバーを立ち上げ、表示確認してください。

## インストール後の実施事項

画像のダミーデータは
public/image フォルダ内に
sample1.jpg ～ sample6.jpg として
保存しています。

php artisan storage:link で
storage フォルダにリンク後、

storage/app/public/products フォルダ内に
保存すると表示されます。
(products フォルダがない場合は作成してください。)

ショップの画像も表示する場合は、
storage/app/public/shops フォルダを作成し
画像を保存してください。
