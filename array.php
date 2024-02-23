<?php
// bikin array mahasiswa
$mahasiswa = ["Najla", "Mila", "Irma"];
//tampilin data pertama (najla)
echo $mahasiswa[2];
echo "<br>";
//Tampilin semuaa data 
foreach ($mahasiswa as $mhs) {
   echo $mhs . "<br>";
}

?>