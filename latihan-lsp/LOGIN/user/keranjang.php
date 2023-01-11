<html>
    <head>
        <title>Cart</title>
    </head>
    <body>
        <h1>Cart</h1>
        <h3>Keranjang Anda Terisi : </h3>
        <table border="1">
        <tr>
            <th>id_buku</th>
            <th>katalog</th>
            <th>judul buku</th>
            <th>pengarang</th>
            <th>tahun terbit</th>
            <th>penerbit</th>
        </tr>

            <?php
        
        
        include 'koneksi.php';
        $id_buku = $_GET['id_buku'];
        $data = mysqli_query($koneksi, "select*from buku where id_buku = '$id_buku'");
        
        foreach ($data as $buku)
        echo "<tr>";
        echo "<td>" . $buku['id_buku'] . "</td>";
        echo "<td>" . $buku['id_katalog'] . "</td>";
        echo "<td>" . $buku['judul_buku'] . "</td>";
        echo "<td>" . $buku['pengarang'] . "</td>";
        echo "<td>" . $buku['thn_terbit'] . "</td>";
        echo "<td>" . $buku['penerbit'] . "</td>";
        ?>        








        </table>
    </body>
</html>