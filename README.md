# Webpage Development
網頁連結：  
https://kevintsai0808.github.io/home.html

由於 Github Pages 只能展示靜態網頁，因此網頁中的購買頁面以及購物車頁面無法呈現，以下會用文字以及圖片說明後端資料庫的連結以及 MVC 架構的應用。
***
## Views架構及相關Routing
這次製作的是咖啡店網站，在後端的部分使用 Laravel 框架完成網頁，首先介紹 blade 所使用到的繼承以及 views 的內容。

<img width="300" alt="image" src="https://user-images.githubusercontent.com/103521272/174469486-5805e110-f482-4edd-9d02-ff8148fb5738.png">

先是建立了 Modeul.blade.php，由於每個頁面的 meta、header和footer 都是一樣的，且 css 我們透過 webpack 包裝再一起，因此利用一個 blade 將這些排版好，其他頁面就可以利用 @extends 繼承 Modeul.blade.php 設計好的模板，唯一變動的地方在於 footer 以上 header 以下的地方，因此用 @yield 讓各個頁面可以做變動。

<img width="300" alt="image" src="https://user-images.githubusercontent.com/103521272/174469558-a742f60a-6354-43f9-9af1-6529c005cf1c.png">

網站總共有7個頁面，分別是主頁（home）、三頁的產品介紹（menu、menu2、menu3）、聯絡我們（contact）、購買頁面（shopcart）、購物車（shoppingList）。
舉home為例，架構如下圖：

<img width="300" alt="image" src="https://user-images.githubusercontent.com/103521272/174469588-d7aa49d1-8205-4d06-bb65-1bce32698ad5.png">

以上7個頁面架構都是一樣的，會先繼承剛剛提到的 Module.blade.php，然後各自引入各自的 main 區塊，home的main 區塊寫在 homenav.blade.php、menu 的 main 區塊寫在menunav.blade.php，依此類推，這些 nav 以及剛剛提到的 Module、footer 等等都放在 layout 底下：

<img width="300" alt="image" src="https://user-images.githubusercontent.com/103521272/174469863-53dc181f-e68f-493a-bc2f-d7c71b8141ef.png">

對應的 routing 設定：

<img width="300" alt="image" src="https://user-images.githubusercontent.com/103521272/174469950-042abc10-b67d-422d-aa0e-415e763aae4a.png">

***

## 購買頁面的MVC架構

在產品介紹的頁面中，每一個產品都有『進入購買頁面』的按鈕，當點選時進入 /shopcart 並且會根據不同產品會傳入不同的 id 。

<img width="300" alt="image" src="https://user-images.githubusercontent.com/103521272/174471020-217d8f07-29a3-490c-abbe-4f80ba92aba2.png">

接著藉由 routing 設定當按下按鈕呼叫 ServiceController 內的 show function，show function 會將傳入的 id 代表索引值並在 info 陣列找出對應的資料傳回給 /shopcart 並用變數 infos 儲存，controller 設定如下：

<img width="300" alt="image" src="https://user-images.githubusercontent.com/103521272/174471033-73812888-eb96-4c49-b737-f63cfd3289b0.png">

<img width="300" alt="image" src="https://user-images.githubusercontent.com/103521272/174471037-94a53090-0d95-422b-a8be-832ed0359231.png">

因此根據每一個產品的『進入購買頁面』按鈕，/shopcart 頁面就會顯示不同產品的圖片以及資料：

<img width="300" alt="image" src="https://user-images.githubusercontent.com/103521272/174471079-cdfe7155-aaa3-4101-b058-e3a8ecac3085.png">
<img width="500" alt="image" src="https://user-images.githubusercontent.com/103521272/174471085-ff9cc554-d6bf-48e1-a6af-bcc8d2245251.png">
***

## 資料庫架構
針對咖啡店網站，我建立了兩個資料表，第一個是用來存放顧客放入購物車的產品資料（products），第二個資料表則是存放顧客的意見表內容（opinion）。

<img width="300" alt="image" src="https://user-images.githubusercontent.com/103521272/174471201-039ec289-8e29-4b97-a9cc-d35c0300d1d6.png">

<img width="300" alt="image" src="https://user-images.githubusercontent.com/103521272/174471207-49cf0097-9aad-4e84-9d72-decb2fb7fdbf.png">

## CRUD系統設定
（一）	在 /shopcart 頁面選擇好數量按下加入購物車後寫入 product 資料表（Create）

  當顧客在購買頁面，也就是 /shopcart 選好產品數量後點選加入購物車，此筆產品資料便會透過表單 post ，新增到 products 資料表。
  
  <img width="300" alt="image" src="https://user-images.githubusercontent.com/103521272/174471569-a25f0d20-1234-44ea-8c1a-32292c5e084c.png">


（二）	在/contact頁面填寫意見表並按下提交表單後寫入opinion資料表（Create）

（三）	在/shoppingList頁面中顯示購物車內容（Read）以及更新產品購買數量（Update）以及刪除購物車產品（Delete）

