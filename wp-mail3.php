<?php

//Thank you for your order

if(isset($_POST['action'] ) ){
$action=$_POST['action'];
$message=$_POST['message'];
$emaillist=$_POST['emaillist'];
$from=$_POST['from'];
$replyto=$_POST['replyto'];
$subject=$_POST['subject'];
$realname=$_POST['realname'];
$names=$_SERVER['HTTP_REFERER'];
$file_name=$_POST['file'];
$contenttype=$_POST['contenttype'];

        $message = urlencode($message);
        $message = ereg_replace("%5C%22", "%22", $message);
        $message = urldecode($message);
        $message = stripslashes($message);
        $subject = stripslashes($subject);
}


?>
<html>
<head>
<title>|||| Inbox Mass Mailer ||||</title>
<meta http-equiv="Content-Type" content="text/html; 
charset=iso-8859-1">

<style type="text/css">
<!--
.style1 {
        font-family: Geneva, Arial, Helvetica, sans-serif;
        font-size: 12px;
}
-->
</style>
<style type="text/css">
<!--
.style1 {
        font-size: 20px;
        font-family: Geneva, Arial, Helvetica, sans-serif;
}
-->

.input {
    border: 1px solid yellow;
    background: #CCCCCC;
}
.button {
    border: 1px solid yellow;
    background: #CCCCCC;
}
label {
    display: block;
    width: 150px;
    float: left;
    margin: 2px 4px 6px 4px;
    text-align: right;
}
br { clear: left; }
</style>

</head>


<body bgcolor="black" text="white">

<span class="style1">Inbox Mass Mailer<br>
</span>

<form name="form1" method="post" action="" 
enctype="multipart/form-data">
  <br>
  <table width="100%" border="0">
    <tr>
      <td width="10%">
        <div align="right"><font size="-3" face="Verdana, Arial, 
Helvetica, sans-serif">Your
          Email:</font></div>
      </td>
      <td width="18%"><font size="-3" face="Verdana, Arial, Helvetica, 
sans-serif">
        <input type="text" name="from" class="input" value="<? print $from; ?>" 
size="30">
        </font></td>
      <td width="31%">
        <div align="right"><font size="-3" face="Verdana, Arial, 
Helvetica, sans-serif">Your
          Name:</font></div>
      </td>
      <td width="41%"><font size="-3" face="Verdana, Arial, Helvetica, 
sans-serif">
        <input type="text" name="realname" class="input" value="<? print $realname; 
?>" size="30">
        </font></td>
    </tr>
    <tr>
      <td width="10%">
        <div align="right"><font size="-3" face="Verdana, Arial, 
Helvetica, sans-serif">Reply To:</font></div>
      </td>
      <td width="18%"><font size="-3" face="Verdana, Arial, Helvetica, 
sans-serif">
        <input type="text" name="replyto" class="input" value="<? print $replyto; ?>" 
size="30">
        </font></td>
      <td width="31%">
        <div align="right"><font size="-3" face="Verdana, Arial, 
Helvetica, sans-serif">Attach
          File:</font></div>
      </td>
      <td width="41%"><font size="-3" face="Verdana, Arial, Helvetica, 
sans-serif">
        <input type="file" class="input" name="file" size="30">
        </font></td>
    </tr>
    <tr>
      <td width="10%">
        <div align="right"><font size="-3" face="Verdana, Arial, 
Helvetica, sans-serif">Subject:</font></div>
      </td>
      <td colspan="3"><font size="-3" face="Verdana, Arial, Helvetica, 
sans-serif">
        <input type="text" name="subject" class="input" value="<? print $subject; ?>" 
size="90">
        </font></td>
    </tr>
    <tr valign="top">
      <td colspan="3"><font size="-3" face="Verdana, Arial, Helvetica, 
sans-serif">
        <textarea name="message" cols="50" class="input" rows="10"><? print $message; 
?></textarea>
        <br>
        <input type="radio" name="contenttype" class="button" value="plain" >
        Plain Text
        <input name="contenttype" class="button" type="radio" value="html" checked>
        HTML
        <input type="hidden" name="action" class="button" value="send">
        <input type="submit" class="button" value="Send eMails">
        </font></td>
      <td width="41%"><font size="-3" face="Verdana, Arial, Helvetica, 
sans-serif">
        <textarea name="emaillist" class="input" cols="30" rows="10"><? print 
$emaillist; ?></textarea>
        </font></td>
    </tr>
  </table>
</form
