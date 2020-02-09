# sharedPost
 Simple social website project where users can share posts to community. This web application is made with purpose of practicing PHP and making apps in MVC architecture.
 
 ## 🚧 Functionalities so far
 
 ### As guest
 - Browsing shared posts
 - Registration
 - Login

### As registered user
 - Ability of sharing new post

## App preview (for HD image/gif preview - _Right click -> View image_)

#### Home page
<img alt="Home page" src="Documentation/home.png" style="height: 60%; width:auto;">

#### Shares tab preview
<img alt="Shares page" src="Documentation/shares.png" style="height: 60%; width:auto;">

### 💎 Here come the GIFs (Cool content ahead)

#### Browsing app as guest
<img alt="Browsing app as guest" src="Documentation/preview.gif" style="height: auto; width:50%;">

#### Registration
<img alt="Registration" src="Documentation/register_preview.gif" style="height: auto; width:50%;">

#### Login
<img alt="Login" src="Documentation/login_preview.gif" style="height: auto; width:50%;">

#### Sharing a new post
<img alt="Sharing a new post" src="Documentation/post_preview.gif" style="height: auto; width:50%;">

#### And finally logging out
<img alt="Logout" src="Documentation/logout_preview.gif" style="height: auto; width:50%;">

### MVC architecture applied

<img alt="Logout" src="https://www.researchgate.net/profile/Mjm_Razi/publication/328716094/figure/fig2/AS:688713864597504@1541213589083/Interaction-within-MVC-pattern-The-Model-component-correlates-with-all-the-data-related.ppm" style="height: 100%; width: auto;">

Image source: www.researchgate.net

### What tools have I used ? 

⚡ Well first, I've googled a lot. That seems to be an inevitably tool.

- Visual Studio Code (writing PHP + HTML + CSS)
- XAMPP for Windows 7.4.1
- phpMyAdmin @ localhost (MySql)
- Bootstrap v4.4

🚨 _* MD5 encryption is used for password storing purposes because of simplicity, switch to safer algorithm if you are going to use parts of this code in your applications._

### 🚀 How to run it 

In _Documentation_ folder in this repository, there is database SQL dump **_sharedposts.sql_** included.

1. **Host a local web server on your computer** with XAMPP or similar technology
2. **Create a database** of your choice (or just name it _sharesposts_) on phpMyAdmin
3. **Copy and execute** full content of **_sharedposts.sql_** in query
4. Tweak **_config.php_** file for database parameters (such as _DB_HOST_, _DB_USER_, etc.)
5. And run it writing **localhost/sharedPost/sharedPost/** in your browser _(because of additional GitHub folder ...)_



