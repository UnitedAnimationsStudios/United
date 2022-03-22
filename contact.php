<?php
function ValidateEmail($email)
{
   $pattern = '/^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i';
   return preg_match($pattern, $email);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['formid']) && $_POST['formid'] == 'form1')
{
   $mailto = 'unitedvidsic@gmail.com';
   $mailfrom = isset($_POST['email']) ? $_POST['email'] : $mailto;
   $subject = 'Website form';
   $message = 'Values submitted from web site form:';
   $success_url = '';
   $error_url = '';
   $eol = "\n";
   $error = '';
   $internalfields = array ("submit", "reset", "send", "filesize", "formid", "captcha", "recaptcha_challenge_field", "recaptcha_response_field", "g-recaptcha-response", "h-captcha-response");
   $boundary = md5(uniqid(time()));
   $header  = 'From: '.$mailfrom.$eol;
   $header .= 'Reply-To: '.$mailfrom.$eol;
   $header .= 'MIME-Version: 1.0'.$eol;
   $header .= 'Content-Type: multipart/mixed; boundary="'.$boundary.'"'.$eol;
   $header .= 'X-Mailer: PHP v'.phpversion().$eol;
   try
   {
      if (!ValidateEmail($mailfrom))
      {
         $error .= "The specified email address (" . $mailfrom . ") is invalid!\n<br>";
         throw new Exception($error);
      }
      $message .= $eol;
      $message .= "IP Address : ";
      $message .= $_SERVER['REMOTE_ADDR'];
      $message .= $eol;
      foreach ($_POST as $key => $value)
      {
         if (!in_array(strtolower($key), $internalfields))
         {
            if (is_array($value))
            {
               $message .= ucwords(str_replace("_", " ", $key)) . " : " . implode(",", $value) . $eol;
            }
            else
            {
               $message .= ucwords(str_replace("_", " ", $key)) . " : " . $value . $eol;
            }
         }
      }
      $body  = 'This is a multi-part message in MIME format.'.$eol.$eol;
      $body .= '--'.$boundary.$eol;
      $body .= 'Content-Type: text/plain; charset=ISO-8859-1'.$eol;
      $body .= 'Content-Transfer-Encoding: 8bit'.$eol;
      $body .= $eol.stripslashes($message).$eol;
      if (!empty($_FILES))
      {
         foreach ($_FILES as $key => $value)
         {
             if ($_FILES[$key]['error'] == 0)
             {
                $body .= '--'.$boundary.$eol;
                $body .= 'Content-Type: '.$_FILES[$key]['type'].'; name='.$_FILES[$key]['name'].$eol;
                $body .= 'Content-Transfer-Encoding: base64'.$eol;
                $body .= 'Content-Disposition: attachment; filename='.$_FILES[$key]['name'].$eol;
                $body .= $eol.chunk_split(base64_encode(file_get_contents($_FILES[$key]['tmp_name']))).$eol;
             }
         }
      }
      $body .= '--'.$boundary.'--'.$eol;
      if ($mailto != '')
      {
         mail($mailto, $subject, $body, $header);
      }
      header('Location: '.$success_url);
   }
   catch (Exception $e)
   {
      $errorcode = file_get_contents($error_url);
      $replace = "##error##";
      $errorcode = str_replace($replace, $e->getMessage(), $errorcode);
      echo $errorcode;
   }
   exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact us</title>
<meta name="generator" content="WYSIWYG Web Builder 17 Trial Version - https://www.wysiwygwebbuilder.com">
<link href="css/corporate.css" rel="stylesheet">
<link href="css/contact.css" rel="stylesheet">
<!-- Insert Google Analytics code here -->
</head>
<body>
   <a href="https://www.wysiwygwebbuilder.com" target="_blank"><img src="images/builtwithwwb17.png" alt="WYSIWYG Web Builder" style="position:absolute;left:441px;top:967px;margin:0;border-width:0;z-index:250" width="16" height="16"></a>
   <div id="wb_Form1" style="position:absolute;left:147px;top:1px;width:711px;height:299px;z-index:8;">
      <form name="Contact_Us" method="post" action="<?php echo basename(__FILE__); ?>" enctype="multipart/form-data" id="Form1">
         <input type="hidden" name="formid" value="form1">
         <label for="Editbox1" id="Label1" style="position:absolute;left:240px;top:15px;width:49px;height:16px;line-height:16px;z-index:0;">Name:</label>
         <input type="text" id="Editbox1" style="position:absolute;left:307px;top:15px;width:190px;height:16px;z-index:1;" name="name" value="" spellcheck="false">
         <label for="Editbox2" id="Label2" style="position:absolute;left:240px;top:46px;width:49px;height:16px;line-height:16px;z-index:2;">Email:</label>
         <input type="text" id="Editbox2" style="position:absolute;left:307px;top:46px;width:190px;height:16px;z-index:3;" name="email" value="" spellcheck="false">
         <label for="TextArea1" id="Label3" style="position:absolute;left:240px;top:77px;width:49px;height:16px;line-height:16px;z-index:4;">Coments</label>
         <textarea name="TextArea1" id="TextArea1" style="position:absolute;left:307px;top:77px;width:190px;height:90px;z-index:5;" rows="5" cols="21" spellcheck="false"></textarea>
         <input type="submit" id="Button1" name="" value="Send" style="position:absolute;left:307px;top:182px;width:96px;height:25px;z-index:6;">
      </form>
   </div>
</body>
</html>