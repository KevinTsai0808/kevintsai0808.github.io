# Webpage Development
網頁連結：  
https://kevintsai0808.github.io/home.html

由於 Github Pages 只能展示靜態網頁，因此網頁中的購買頁面以及購物車頁面無法呈現，以下會用文字以及圖片說明後端資料庫的連結以及 MVC 架構的應用。
***
這次製作的是咖啡店網站，在後端的部分使用 Laravel 框架完成網頁，首先介紹 blade 所使用到的繼承以及 views 的內容。

<img width="" alt="image" src="https://user-images.githubusercontent.com/103521272/174469486-5805e110-f482-4edd-9d02-ff8148fb5738.png">

先是建立了 Modeul.blade.php，由於每個頁面的 meta、header和footer 都是一樣的，且 css 我們透過 webpack 包裝再一起，因此利用一個 blade 將這些排版好，其他頁面就可以利用 @extends 繼承 Modeul.blade.php 設計好的模板，唯一變動的地方在於 footer 以上 header 以下的地方，因此用 @yield 讓各個頁面可以做變動。

<img width="500" alt="image" src="https://user-images.githubusercontent.com/103521272/174469558-a742f60a-6354-43f9-9af1-6529c005cf1c.png">

網站總共有7個頁面，分別是主頁（home）、三頁的產品介紹（menu、menu2、menu3）、聯絡我們（contact）、購買頁面（shopcart）、購物車（shoppingList）。
