<html>
    <head>
        <title>Tambah Data</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    <body>
        <div class="form">
            
            <h1>Menambahkan Data Buku</h1>
            <form action="proses.php" method="post" >
                <label>Masukan ID Katalog</label>
                <input type="number" name="id_katalog">
                <br>
                <label>Masukan Judul Buku</label>
                <input type="text" name="judul_buku">
                <br>
                <label>Masukan pengarang</label>
                <input type="text" name="pengarang">
                <br>
                <label>Masukan tahun terbit</label>
                <input type="date" name="thn_terbit">
                <br>
                <label>Masukan penerbit</label>
                <input type="text" name="penerbit">
                <br>
            <input type="submit" value="submit">
            <br>
            <input type="reset" value="cancel">
            
        </div>