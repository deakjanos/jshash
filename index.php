<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>belépő</title>
<!-- <script src="javascript_crypt/md5-min.js" type="text/javascript"></script> -->
<!-- <script src="javascript_crypt/sha1-min.js" type="text/javascript"></script> -->
<script src="javascript_crypt/sha256-min.js" type="text/javascript"></script>
<style type="text/css">
<!--
body {
	background-image: url(dlf/bg_blue.jpg);
	background-repeat: repeat-y;
}
-->
</style>
</head>

<tr><th><div align="center">Azonosító:</div></th><td><div align="center">
  <p>
    <input type="text" id="input" name="input" size="42">
  </p>
  <p align="justify">&nbsp;</p>
  <p align="justify">A tennivalónk, hogy a felül található mezőbe írjuk azonosítónkat, majd ennek készítsük el a lenyomatát a megfelelő gombra kattintással. 
  Ha a lenyomat elkészült, küldhetjük is az azonosításhoz és a belépéshez.</p>
</div></td></tr>
<form method="post" action="logon.php"><table>
  
  <tr><th>SHA 2(256) érték képzés:</th>
  <td style="text-align:center">
  <!-- <input type="button" onClick="hash.value = hex_md5(input.value)" value="MD5"> -->
  <!-- <input type="button" onClick="hash.value = hex_sha1(input.value)" value="SHA-1 ujjlenyomat képzése"></td> -->
  <input type="button" onClick="hash.value = hex_sha256(input.value)" value="SHA-2 ujjlenyomat képzése"></td>
  </tr>
  
  
  <tr><th>SHA 2/256 érték:</th><td><input type="text" id="hash "name="hash" size="84"></td>
  
  <th><input type="submit" name="gomb" value="Ujjlenyomat küldése azonosításhoz és belépéshez">
    </td>  
  </tr>
</table></form>

</html>
