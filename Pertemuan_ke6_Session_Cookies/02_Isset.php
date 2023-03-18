<?php
session_start();
$_SESSION['npm'] = 2125250040;
$_SESSION['nama'] = 'Thomas And Friends';


// Menampilkan isi $_SESSION[‘npm’] dan $_SESSION[‘nama’]
echo "Npm : ".$_SESSION['npm'];
echo "</br>Nama : ".$_SESSION['nama']."</br>";


// Mengecek apakah $_SESSION['nama'] ada atau belum
if (isset($_SESSION['nama'])){
    echo "</br>Session ".$_SESSION['nama']." akan dihapus.</br>";


    // Menghapus semua session saat ini.
    // $_SESSION['npm'] dan $_SESSION['nama'] akan dihapus
    session_unset();
}


// Mengecek ulang apakah $_SESSION['npm'] masih ada?
if (isset($_SESSION['npm'])){
   echo 'SESSION npm masih ada';
} elseif (isset($_SESSION['nama'])){
// Mengecek apakah $_SESSION['nama'] masih ada?
    echo 'SESSION nama masih ada';
} else {
    echo 'Semua SESSION sudah dihapus';
}


?>