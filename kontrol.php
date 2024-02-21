<!DOCTYPE html>
<html>
<head>
	<title>"</title>
</head>
<body>
<?php
 $adisoyadi=$_POST[‘adisoyadi’];
 $mesaj= $_POST[‘mesaj’];
 echo "<div class=‘guvensiz’>
       <h4> Güvensiz Form</h4>
        <table>
            <tr>
                <td>Gönderen:</td>
                <td>$adisoyadi</td>
            </tr>
            <tr>
                <td>Mesaj:</td>
                <td>$mesaj</td>
            </tr>
        </table>
        </div>";
      
        $gadisoyadi=htmlengelle($adisoyadi);
 $gmesaj= guvenli_icerik($mesaj);
 function htmlengelle($gelen){
    $giden = htmlspecialchars($gelen);
    $giden = htmlentities($giden); 
    return $giden;
 }
 function guvenli_icerik($gelen){
    $giden = strip_tags($gelen);
    $giden = addslashes($giden);
    return $giden;
 }

Özgeçmişi:$ev </pre>":?>
</body>
</html>
