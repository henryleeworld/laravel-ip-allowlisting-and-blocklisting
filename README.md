# Laravel 7 許可和拒絕對 IP 位址的存取

引入 pragmarx 的 firewall 套件來擴增根據發出請求的 IP 地址控制對內容的存取，透過請求的內容或 HTTP 403 狀態碼（禁止）回應請求。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。

----

## 畫面截圖
![](https://i.imgur.com/zqwwGmB.png)
> 當新增所在 IP 地址加到拒絕清單中後，請求被封鎖時得到 HTTP 403 狀態碼（禁止）回應請求

![](https://i.imgur.com/Kt8tdhd.png)
> 當新增所在 IP 地址加到許可清單中後，可以瀏覽請求的內容