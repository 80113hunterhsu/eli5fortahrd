# [科技系懶人包！](https://eli5fortahrd.ml)

## 懶人包在手，便知有沒有

[科技系懶人包](https://eli5fortahrd.ml)原本是為了丁老師的「數位學習發展與策略」專題發展而來的網站。為了讓科技系的各位同學們能夠有一個快速上手了解科技系、以及在學習時能夠提供輔助的平台，我們開發了這個網站，並希望由科技系的各位同學來提供我們學習資源，也藉此來幫助更多的學弟妹們。

## 預覽

[![科技系懶人包 首頁預覽](https://res.cloudinary.com/eli5fortahrd/image/upload/readme/img/eli5fortahrd_preview.png)](https://eli5fortahrd.ml)

**[按此進入科技系懶人包！](https://eli5fortahrd.ml)**

## 網站建置重點

### 命名由來

A. Explain Like I'm 5 >> ELI5
B. For TAHRD >> fortahrd
A + B = **eli5fortahrd**

### 網站特色

1. 這是一個「學習經驗傳承平台」，平台本身也能夠作為傳承的一部份
2. 申請獨立網域，網址較容易記住
3. 以Bootstrap開發，相容多種裝置
4. 以Cloudflare確保網頁安全及執行效能
5. 內容以Crowd Source形式透過科技系的同學們取得，有多樣的擴充性

## 使用說明

### 基本說明

科技系懶人包主要以**科目**作為基本單位，並透過**分類標籤**讓使用者可以更快速的找到目標。透過首頁的分類標籤（所有類別、學習與科技組、設計與科技組、資工系雙主修），我們可以找到該類別下的各類科目。

科目頁面目前共有幾種內容呈現方式：
1. 教學影片：於網頁中觀看影片，也可以點擊連結至[Youtube](https://www.youtube.com/channel/UCN-q9NcER-5Zrs2HqTtbGIQ)觀看
2. 投影片：將課堂報告以Google Slides形式上傳，便於在網頁中快速瀏覽
3. 檔案下載：將檔案置於Google Drive供使用者下載
4. 網頁連結：將使用者引導至目標網頁

頁側選單：位於網頁右上角，包含首頁及前往各項科目的連結
回到頂端：位於網頁右下角，在頁面往下後會顯示，供使用者快速回到頁面頂端
回到首頁：位於網頁左上角，在首頁以外頁面會顯示，供使用者快速回到首頁

## 關於Bootstrap頁面範本

我們採用Start Bootstrap的開放原始碼範本。

All of the free templates and themes on Start Bootstrap are released under the MIT license, which means you can use them for any purpose, even for commercial projects.

* <https://startbootstrap.com>
* <https://twitter.com/SBootstrap>

Start Bootstrap was created by and is maintained by **[David Miller](https://davidmiller.io/)**.

* <https://davidmiller.io>
* <https://twitter.com/davidmillerhere>
* <https://github.com/davidtmiller>

Start Bootstrap is based on the [Bootstrap](https://getbootstrap.com/) framework created by [Mark Otto](https://twitter.com/mdo) and [Jacob Thorton](https://twitter.com/fat).

#
# To Developers

## 目前其實有點小亂

目前的開發狀況主要是由一個人完成的，因此若是在看過原始碼之後覺得有點糟糕的話，拜託不要噴我ＱＱ

## 注意項目

1. 目前網頁中各頁面的Sidebar跟Footer都是以Javascript置入的，所以不需要一頁一頁修改，統一到templates目錄下的sidebar.html及footer.html修改即可。
2. 網頁中有一些自訂CSS樣式表，統一放在css/customDefined.css檔案中，未來可能會更改或整理，但目前都設定在這個檔案中。
3. 有一些額外加入的Javascript檔案，都放在js目錄下：
(1) **includeHTML.js**：置入sidebar及footer等頁面相同項目，API會寫在js檔案中，以註解呈現。
(2) **tagSwitcher.js**：科技系懶人包預計會有大量的分類標籤使用（目前只有首頁），因此以這個js script統一撰寫各頁面的tags或是switcher主程式，若之後有更好的做法將會更改。
(3) **webhostHide.js**：目前將網站存放於000webhost的伺服器（帳號密碼於交接時告知），由於000webhost會自動置入公司logo於頁面右下角，因此以這個js script將其隱藏。

## 未開發項目

1. 目前的側邊欄中，是在標題前面加入該科目所屬的分類，而並非以各分類作為選單項目，並將科目加入其子選單中（因為我做不出來ＱＱ），希望之後的開發者可以嘗試看看，以達到更直覺的科目分類整理。
