<?php
session_start();
//membuat koneksi ke database
$conn = mysqli_connect("localhost","root","","taarnold");

//menambah barang baru
if (isset($_POST['addnewbarang'])){
    $namabarang = $_POST['namabarang'];
    $deskripsi = $_POST['deskripsi'];
    $stock = $_POST['stock'];

    $addtotable = mysqli_query($conn, "insert into stock (namabarang, deskripsi, stock) values ('$namabarang','$deskripsi','$stock')");
    if($addtotable){
        header('location:index.php');
    } else { 
        echo 'gagal';
        header('location:index.php');
    }
}
?>
