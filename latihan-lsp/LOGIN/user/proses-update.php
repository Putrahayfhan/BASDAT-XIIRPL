<?php 
    include "koneksi.php";
      
    
    $id_anggota = $_POST['id_anggota'];
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
   
   


    $input = mysqli_query($koneksi,"update anggota set nama='$nama', no_telp='$no_telp' where id_anggota='$id_anggota'");

    if($input){
        ?>
        <script>
            alert('Data berhasil Dirubah!!');
            window.location = "index.php";
        </script>
        <?php
    }else{
        ?>
        <script>
        alert('Data Gagal Dirubah');
        window.location = "index.php"
        </script>
        <?php
    }


    

    
?>