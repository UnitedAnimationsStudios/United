<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'loginform')
{
   $success_page = './Logout.html';
   $error_page = './index.html';
   $usernames = array();
   $passwords = array();
   $fullnames = array();
   $emailaddresses = array();
   $crypt_pass = md5($_POST['password']);
   $found = false;
   $db_fullname = '';
   $db_username = '';
   $session_timeout = 600;
   for ($i=0; $i<count($usernames); $i++)
   {
      if (($usernames[$i] == $_POST['username'] || $emailaddresses[$i] == $_POST['username']) && $passwords[$i] == $crypt_pass)
      {
         $found = true;
         $db_fullname = $fullnames[$i];
         $db_username = $usernames[$i];
      }
   }
   if ($found == false)
   {
      header('Location: '.$error_page);
      exit;
   }
   else
   {
      $_SESSION['username'] = $db_username;
      $_SESSION['fullname'] = $db_fullname;
      $_SESSION['expires_by'] = time() + $session_timeout;
      $_SESSION['expires_timeout'] = $session_timeout;
      $rememberme = isset($_POST['rememberme']) ? true : false;
      if ($rememberme)
      {
         setcookie('username', $db_username, time() + 3600*24*30);
         setcookie('password', $_POST['password'], time() + 3600*24*30);
      }
      header('Location: '.$success_page);
      exit;
   }
}
$username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
$password = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<meta name="generator" content="WYSIWYG Web Builder 17 Trial Version - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/awesome.css" rel="stylesheet">
<link href="css/Login.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="jquery.ui.effect.min.js"></script>
<script>
$(document).ready(function()
{
   $("a[href*='#header']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_header').offset().top }, 600, 'easeOutCirc');
   });
});
</script>
<link rel="icon" type="image/x-icon" href="/images/favicon.ico">
</head>
<body>
<div id="wb_Footer">
<div id="Footer">
<div class="row">
<div class="col-1">
<div id="wb_Text9">
<span style="color:#FF0000;font-family:Arial;font-size:13px;"><br>UNDER DEVELOPEMNT</span><span style="color:#000000;font-family:Arial;font-size:13px;"><br></span>
</div>
<div id="wb_Login1" style="display:inline-block;width:100%;z-index:1;">
<form name="loginform" method="post" accept-charset="UTF-8" action="<?php echo basename(__FILE__); ?>" id="loginform">
<input type="hidden" name="form_name" value="loginform">
<table id="Login1">
<tr>
   <td class="header">Sign Up</td>
</tr>
<tr>
   <td class="label"><label for="username">User Name</label></td>
</tr>
<tr>
   <td class="row"><input class="input" name="username" type="text" id="username" value="<?php echo $username; ?>"></td>
</tr>
<tr>
   <td class="label"><label for="password">Password</label></td>
</tr>
<tr>
   <td class="row"><input class="input" name="password" type="password" id="password" value="<?php echo $password; ?>"></td>
</tr>
<tr>
   <td class="row"><input id="rememberme" type="checkbox" name="rememberme"><label for="rememberme">Remember me</label></td>
</tr>
<tr>
   <td style="text-align:center;vertical-align:bottom"><input class="button" type="submit" name="login" value="Signup" id="login"></td>
</tr>
</table>
</form>

</div>
</div>
</div>
</div>
</div>
<div id="StickyLayer" style="position:fixed;text-align:left;left:auto;right:25px;top:auto;bottom:25px;width:50px;height:50px;z-index:6;">
<div id="wb_up-arrow" style="position:absolute;left:9px;top:8px;width:24px;height:24px;text-align:center;z-index:2;">
<a href="./index.html#home"><div id="up-arrow"><i class="fa fa-angle-up"></i></div></a></div>
</div>
<div id="wb_header">
<div id="header">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<div id="wb_headerMenu" style="display:inline-block;width:257px;height:48px;z-index:3;">
<ul id="headerMenu" role="menubar" class="nav">
<li role="menuitem" class="nav-item firstmain"><a class="nav-link headerMenu-effect" href="./index.html#home" target="_self"><svg class="headerMenu-icon" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg">
   <path d="M49 34 L49 50 C49 51, 49 51, 48 52 C48 52, 48 52, 47 52 L34 52 L34 40 L26 40 L26 52 L13 52 C12 52, 12 52, 11 52 C11 51, 11 51, 11 50 L11 34 C11 34, 11 34, 11 34 C11 34, 11 34, 11 34 L30 18 L49 34 C49 34, 49 34, 49 34 Z M57 32 L55 34 C54 35, 54 35, 54 35 L54 35 C53 35, 53 35, 53 35 L30 15 L7 35 C6 35, 6 35, 6 35 C6 35, 5 35, 5 34 L3 32 C3 32, 3 31, 3 31 C3 31, 3 31, 3 30 L27 10 C28 10, 29 9, 30 9 C31 9, 32 10, 32 10 L41 17 L41 11 C41 10, 41 10, 41 10 C41 10, 41 10, 42 10 L48 10 C48 10, 49 10, 49 10 C49 10, 49 10, 49 11 L49 24 L56 30 C57 31, 57 31, 57 31 C57 31, 57 32, 57 32"/>
</svg>
Home</a>
</li>
<li role="menuitem" class="nav-item"><a class="nav-link headerMenu-effect" href="./Movies.html" target="_self"><svg class="headerMenu-icon" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg">
   <path d="M60 12 L60 48 C60 49, 60 50, 59 50 C58 50, 58 50, 58 50 C57 50, 57 50, 56 50 L43 36 L43 42 C43 44, 42 47, 40 49 C38 50, 36 51, 33 51 L10 51 C7 51, 5 50, 3 49 C1 47, 0 44, 0 42 L0 18 C0 16, 1 13, 3 11 C5 10, 7 9, 10 9 L33 9 C36 9, 38 10, 40 11 C42 13, 43 16, 43 18 L43 24 L56 10 C57 10, 57 10, 58 10 C58 10, 58 10, 59 10 C60 10, 60 11, 60 12"/>
</svg>
Movies</a>
</li>
<li role="menuitem" class="nav-item"><a class="nav-link headerMenu-effect" href="./TV-Shows.html" target="_self"><svg class="headerMenu-icon" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg">
   <path d="M56 21 C57 21, 58 22, 59 23 C60 24, 60 25, 60 26 C60 27, 60 28, 59 29 C58 30, 57 30, 56 30 L56 43 C56 44, 55 45, 54 46 C54 47, 53 47, 51 47 C42 39, 33 35, 24 34 C23 35, 22 36, 21 37 C20 38, 20 39, 20 40 C20 41, 21 42, 21 43 C21 44, 21 45, 21 45 C21 46, 21 47, 21 47 C21 48, 21 48, 22 49 C23 50, 23 50, 24 51 C24 51, 25 52, 26 52 C25 54, 24 55, 22 55 C20 56, 18 56, 16 56 C14 55, 13 55, 12 54 C12 53, 11 52, 11 51 C10 49, 10 48, 10 48 C10 47, 9 46, 9 45 C9 43, 9 42, 9 41 C9 40, 9 39, 9 38 C9 37, 9 35, 9 34 L5 34 C4 34, 3 34, 2 33 C1 32, 0 30, 0 29 L0 22 C0 21, 1 20, 2 19 C3 18, 4 17, 5 17 L21 17 C31 17, 41 13, 51 4 C53 4, 54 5, 54 6 C55 6, 56 7, 56 9 Z M51 42 L51 10 C43 16, 34 20, 26 21 L26 30 C34 31, 43 35, 51 42"/>
</svg>
TV&nbsp;Shows</a>
</li>
</ul>

</div>
</div>
</div>
</div>
</div>
<a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:441px;top:2307px;margin: 0;border-width:0;z-index:250" width="16" height="16"></a>
<div id="wb_footer">
<div id="footer">
<div class="row">
<div class="col-1">
<div id="wb_Text16">
<p>Copyright © 2022 United Animations.&nbsp; All Rights Reserved</p>
</div>
</div>
</div>
</div>
</div>
</body>
</html>