# 資料庫程式設計作業

## 投票系統
**請建立一個投票系統可以提供投票功能，並能查看投票的結果**

### 動作要求
1. 分析需要的功能
    * 功能一 投票
    * 功能二 會員系統 (登入登出驗證)
    * 功能三 會員管理 (新增會員,刪除會員)
    * 功能四 廣告管理 (新增,刪除,修改)

2. 設計資料表
    * 資料表一 (ad)
        |欄位名  |資料型態     |主鍵  |預設值|自動遞增         |備註|
        | id    | int(11)     | key | n    | AUTO_INCREMENT | n |
        | name  | varchar(64) | n   | n    | n              | n |
        | sh    | tinyint(1)  | n   | n    | n              | n |
        | intro | varchar(64) | n   | NULL | n              | n |
    
    * 資料表二(options)
        |欄位名     |資料型態      |主鍵  |預設值|自動遞增         |備註|
        | id       | int(11)      | key | n    | AUTO_INCREMENT | n |
        | opt      | varchar(128) | n   | n    |                | n |
        | topic_id | int(11)      | n   | n    |                | n |
        | count    | int(11)      | n   | 0    |                | n |

    * 資料表二(topic_id)
        |欄位名    |資料型態       |主鍵  |預設值|自動遞增         |備註|
        | id       | int(11)      | key | n    | AUTO_INCREMENT | n |
        | topic    | varchar(128) | n   | n    |                | n |

    * 資料表二(users)
        |欄位名    |資料型態        |主鍵  |預設值|自動遞增         |備註|
        | id       | int(11)     | key | n    | AUTO_INCREMENT | n |
        | account  | varchar(12) | n   | n    | AUTO_INCREMENT | n |
        | password | varchar(12) | n   | n    | AUTO_INCREMENT | n |
        | email    | varchar(24) | n   | n    | AUTO_INCREMENT | n |
        | name     | varchar(12) | n   | n    | AUTO_INCREMENT | n |
        | gender   | varchar(12) | n   | n    | AUTO_INCREMENT | n |
        | birthday | varchar(12) | n   | n    | AUTO_INCREMENT | n |
    
3. 請充分運用學到的各項網頁知識來美化這個投票系統的畫面


    * html標籤的應用(語意標籤、表單、表格、分隔線、標頭..etc)
    1.frontend/reg.php 會員註冊表格 , 所有投票表格(套用bootstrap)
    2.表單傳值(會員$_POST),(會員註冊$_GET),(網頁導向偽$_GET),(廣告上傳file)

    * css的應用(行內、內嵌、外連、flexbox、偽元素、動畫..etc)
    1.連外部CSS及bootstrapcdn
    2.網頁中段include時配合CSS設定.container

    * bootstrap的應用(排版功能、元件、類別..etc)
    1.輪轉圖、輸出固定圖片大小 ( 未來新增:前後圖片 (縮圖))
    2.所有投票及顯示表格(套用bootstrap)
    3.總投票數套用圓邊加顏色(黃)
    4.按鈕設定挖空-問卷管理皆綠色,會員管理藍色,廣告管理墨綠色,登出紅色
    
    * javascript or jQuery的應用(DOM的操作、CSS的切換)

4. 請上傳至220的伺服器個人空間，並自行建立所需資料表

### 必備要求
**後台功能**
* 請設計一個頁面可以用來輸入投票的題目
* 可以控制題目的啟用與關閉

**前台功能**
* 請設計一個頁面可以看到目前進行投票的項目
* 可以進行投票
* 請設計一個頁面可以看到投票統計的結果

**進階功能**
* 請整合註冊及登入系統
* 能以長條圖或圖像化的方式來呈現統計的結果
* 能判斷使用者的狀態，避免重覆投票

## 評量時間
2021-12-24(星期五)  已評分  
劉老師建議輪轉圖要加前後預覽縮圖，像是轉盤那樣的呈現

