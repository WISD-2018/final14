![image](https://github.com/WISD-2018/final14/blob/master/home.PNG?raw=true)
![image](https://github.com/WISD-2018/final14/blob/master/rent.PNG?raw=true)
![image](https://github.com/WISD-2018/final14/blob/master/adminpage.PNG?raw=true)
# 場地租借系統
使用者可以透過場地申請表登記想要借用的場地，並且可以瀏覽場地借用情形及管理自己的場地申請。<p>
管理者可以審核使用者的申請，並記錄場地借用歷史紀錄。

##　網站復原
1. > git clone https://github.com/WISD-2018/final14.git
2. > cd final14
2. > composer install (專案復原)
3. > copy .env.example .env
4. > 建立rentsystem資料庫
5. > php artisan migrate (cmder)

## 網站功能
- 使用者註冊、登入
- 場地申請單
- 使用者場地申請單管理
- 使用者查看場地申請狀態
- 管理者審核場地申請
- 管理者查看場地借用狀況
- 管理者查看場地借用歷史紀錄

## 使用者測試帳號
帳號:123456@gmail.com 密碼:123456

## 初始專案與DB負責的同學
初始專案：簡紹宇 <br>
資料表建立、資料表關聯：簡紹宇、林宥丞

#### 設計者
- [簡紹宇](https://github.com/3A532024) 3A532024
- [林宥丞](https://github.com/3A532044) 3A532044

#### 工作分配
- 使用者登入、註冊功能      (簡紹宇)
- 使用者查看場地申請狀態    (簡紹宇)
- 管理者審核場地申請        (簡紹宇)
- 使用者場地申請功能        (林宥丞)
- 使用者場地申請單管理      (林宥丞)
- 管理者查看場地借用狀況     (林宥丞)
- 管理者查看場地借用歷史紀錄  (林宥丞)

