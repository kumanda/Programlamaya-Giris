
<form action="#" method="POST">
	<input type="text" name="isim1" placeholder="Lütfen İsim1 Giriniz"><br>
	<input type="text" name="isim2" placeholder="Lütfen İsim2 Giriniz"><br>
	<input type="text" name="isim3" placeholder="Lütfen İsim3 Giriniz"><br>
	<input type="submit" name="gönder" value="gönder">
</form>


<?php 
$isimler=[$_POST["isim1"],$_POST["isim2"],$_POST["isim3"]];

foreach ($isimler as $key) {
	echo strtoupper($key[0]."<br>");
}


?>
