<html>
    <head>
        <title>Tambah Data</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    <body>
        <div class="form">
            
            <h1>Merubah Data Buku</h1>

            <?php 
            include 'koneksi.php';
            $id_buku = $_GET['id_buku'];
            $data = mysqli_query($koneksi, "select*from buku where id_buku = '$id_buku'");
            while($meledak = mysqli_fetch_array($data)){
            
            ?>

            <form action="proses-update.php" method="post" >
                <!-- ID BUKU -->
                <input type="hidden" name="id_buku" value="<?php echo $meledak['id_buku']; ?>"> 

                <label>Masukan ID Katalog</label>
                <input type="number" name="id_katalog" value="<?php echo $meledak['id_katalog']; ?>">
                <br>
                <label>Masukan Judul Buku</label>
                <input type="text" name="judul_buku" value="<?php echo $meledak['judul_buku']; ?>">
                <br>
                <label>Masukan pengarang</label>
                <input type="text" name="pengarang" value="<?php echo $meledak['pengarang']; ?>">
                <br>
                <label>Masukan tahun terbit</label>
                <input type="date" name="thn_terbit" value="<?php echo $meledak['thn_terbit']; ?>">
                <br>
                <label>Masukan penerbit</label>
                <input type="text" name="penerbit" value="<?php echo $meledak['penerbit']; ?>">
                <br>
                <label>Masukan Harga</label>
                <input type="number" name="harga" value="<?php echo $meledak['harga']; ?>">
                <br>
            <input type="submit" value="Rubah">
            <?php 
            }
            ?>
        </div>
    </body>
</html>
