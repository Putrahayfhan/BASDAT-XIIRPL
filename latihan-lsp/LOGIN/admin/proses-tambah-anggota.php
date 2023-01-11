<?php 
    include "koneksi.php";
      

    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $input = mysqli_query($koneksi,"insert into anggota values('','$nama','$no_telp','$alamat','$email','$password')");

    if($input){
        ?>
        <script>
            alert('Data berhasil Ditambahkan!!');
            window.location = "login_admin.php";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert('Data Gagal Ditambahkan');
            window.location = "login_admin.php"
        </script>
        <?php
    }
// Alih ke index
header("location:login_admin.php")
?>