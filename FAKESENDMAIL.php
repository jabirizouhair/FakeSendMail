<html>
<head>
     <link href='http://fonts.googleapis.com/css?family=Federant' rel='stylesheet' type='text/css'/>
     <link href="http://fonts.googleapis.com/css?family=Iceland" rel="stylesheet" type="text/css" />
 <style type="text/css">
 body {
	   background:black; font-size:11px;
	   font-family: Federant;
    color: white;  }
 a {
     color: dodgerblue;
     font-family: Federant;
      }
 a:hover {
     border-bottom:1px solid aqua;
      }
 #menu a {
 	 font-family: Federant;
    	padding:4px 15px;
    	margin:0;
    	background:darkred;
    	color:white;
    	text-decoration:none;
    	letter-spacing:2px;
    	-moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
       }
       #menu a:hover {
    	padding:4px 15px;
    	margin:0;
    	 font-family: Federant;
    	background: grey;
    	color:white;
    	text-decoration:none;
    	letter-spacing:2px;
    	-moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
       }
  textarea {
  	   width:600px;
  	   height:200px;
  	   background: black;
  	   border:1px solid darkred;
  	   color: white;
  	   font-family: Federant;
  	   }
  input[type=text] , input[type=file] , select {   
       background:black;
       color:white;border: 1px solid darkred; 
       padding:6px 6px 6px 6px;
       font-family: Federant;
        }
  input[type=submit] {
       background:#b70505;
       color:white;border: 1px solid #000; 
       padding:6px 6px 6px 6px;
       font-family: Federant;
       }
  button[type=submit] {
       background:#b70505;
       color:white;border: 1px solid #000; 
       padding:6px 6px 6px 6px;
       font-family: Federant;
       }
  .subbtn:hover {
  	   background:#c0bfbf;
  	   color:#000000;
  	   font-family: Federant;
  	   }

td, th { font-size: 12pt; text-align: left; vertical-align: top; color: dodgerblue; }
h1           { font-size: 16pt; text-align: center; }
h1 a         { color: #000000 !important; text-decoration: none; }
p            { text-align: center; font-size: 9pt; }
p a          { color: #666666 !important; }
table        {  margin: 0 auto; border-collapse: collapse; border: 1px solid #ffffff; min-width: 400px; }
th, td       { padding: 5px 10px; }
th           { background: black; color: #ffffff; }
td a         { color: dodgerblue !important; text-decoration: none; }
th img       { position: relative; top: -3px; left: 2px; }
td           { border-bottom: 1px solid #cccccc; background: black; }
tr.odd td    { background: black; }

#lol a {
    	padding:4px 15px;
    	margin:0;
    	background:darkgreen;
    	color:white;
    	text-decoration:none;
    	letter-spacing:2px;
    	-moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
       }
	  
</style>
<title>
 Fake Mailer Sender
</title>
</head>
<body><br />
<center><font color="red" face="iceland" size="10">Fake Mailer Sender</font></center><br />
<form name="fakemail" action="<?php $PHP_SELF; ?>" method="POST">
<p><label for="fname"><b><font size="5" color=c0c0c0>From Name</b></font></label><br>
<input name="fname" id="fname" type="text" class="formbox" /><br></p><br />
<p><label for="femail"><font size="5" color=c0c0c0>From E-mail</font></label><br>
<input name="femail" id="femail" type="text" class="formbox" /><br></p><br />
<p><label for="to"><font size="5" color=c0c0c0>To :</font></label><br>
<input name="to" id="to" type="text" class="formbox"/><br></p><br />
<p><label for="subject"><font size="5" color=c0c0c0>Subject :</font></label><br>
<input name="subject" id="subject" type="text" class="formbox"/><br></p><br />
<p><label for="message"><font size="5" color=c0c0c0>Message :</font></label><br>
<textarea name="message" id="message" cols="60" rows="8"></textarea></p>
<p><input name="submit" id="submit" type="submit" value="Send" /></p></form>
<?php
//Fake mailer code created by The Alchemist
function send_email($to=null,$subject=null,$from_name=null,$from_mail=null,$mail_content=null,$replyto=null)
{
    $headers = "From: \"".$from_name."\" <".$from_mail.">\r\nReply-To: ".$replyto."\r\n";//here's the main part
    if(@mail($to,$subject,$mail_content,$headers))
    {
        $mail_send_result="<p><font size=4 color=#c0c0c0>Email successfully sent to $to.!!</font></p>";//If mail gets sent successfully
    }
    else
    {
        $mail_send_result="<p><font size=4 color=#c0c0c0>Email NOT sent to $to.</font></p>";//If mail does not get sent
    }
    return $mail_send_result;
}
if(isset($_POST['to']) && isset($_POST['fname']) && isset($_POST['femail'])
&& isset($_POST['message']) && isset($_POST['subject']) && isset($_POST['submit']))
{
    $from_name=$_POST['fname'];
    $from_mail=$_POST['femail'];
    $mail_content=$_POST['message'];
    $to=$_POST['to'];
    $subject=$_POST['subject'];
    $replyto=$_POST['femail'];
    echo send_email($to,$subject,$from_name,$from_mail,$mail_content,$replyto);
}
?>
</body>
</html>
