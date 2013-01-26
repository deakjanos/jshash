<?
session_start();
if($_SESSION['belepve'] == true)
{
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Átirányítás...</title>
<script language="JavaScript">
<!--
var time = null
function move() {
window.location = 'http://google.hu'
}
//-->
</script>
</head>
<body bgcolor="#FFFFFF" onLoad="timer=setTimeout('move()',0)">
</body>
</html>

<?
}
else
{
  print "Csak szeretnéd...Előbb jelentkezz be!";
}

?>