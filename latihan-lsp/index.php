
<html>
    <head>
        <title>Tambah Data</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    <body>
       

   
    <h1>Data Buku</h1>
    <button><a href="add.php">Tambah Data</a></button>
    <table border ="1">
            <tr>
                <th>ID Buku</th>
                <th>Katalog</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun terbit</th>
                <th>Penerbit</th>
                <th>Aksi</th>
             </tr>

             <!-- Menampilkan Data Buku -->
        <?php 
        include 'koneksi.php';
        $buku = mysqli_query($koneksi, "select*from buku");
        foreach($buku as $row){
            echo "<tr>";
            echo "<td>".$id = $row['id_buku'] ."</td>";
            echo "<td>".$katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            ?>
            <td>
                <a href="proses-hapus.php?id_buku=<?php echo $row['id_buku']; ?>"> Hapus</a>
            </td>
            
            <?php
            echo "</tr>";
        }
        
        ?>
        </tr>
    </table>
    </body>
</html>

   