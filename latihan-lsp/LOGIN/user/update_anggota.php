<html>
    <head>
        <title>Update Anggota</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    <body>
        <div class="form">
            
            <h1>Customize profile</h1>

            <?php 
            include 'koneksi.php';
            // Ambil dari tombol Customize
            $id_anggota = $_GET['id_anggota'];

            $data = mysqli_query($koneksi, "select*from anggota where id_anggota = '$id_anggota'");
            while($meledak = mysqli_fetch_array($data)){
            
            ?>

            <form action="proses-update.php" method="post" >
                <!-- ID BUKU -->
                <input type="hidden" name="id_anggota" value="<?php echo $meledak['id_anggota']; ?>"> 

                <label>Nama</label>
                <input type="text" name="nama" value="<?php echo $meledak['nama']; ?>">
                <br>
                <label>No telp</label>
                <input type="number" name="no_telp" value="<?php echo $meledak['no_telp']; ?>">
                <br>
                <label>Alamat</label>
                <input type="text" name="alamat" value="<?php echo $meledak['alamat']; ?>">
                <br>
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $meledak['email']; ?>" disabled>
                <br>

                <label>Password</label>
                <input type="text" name="pass" value="<?php echo $meledak['password']; ?>" disabled>

                <br>
            <input type="submit" value="Rubah">
            <?php 
            }
            ?>
        </div>
    </body>
</html>
