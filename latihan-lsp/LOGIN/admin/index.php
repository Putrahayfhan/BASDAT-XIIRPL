<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
        <center> <h3>Halaman Admin</h3> </center>
        <!-- Cek halaman apakah sudah Login atau Belum -->
        
        <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:../login_admin.php?pesan=belum_login');
        }

        include 'koneksi.php';
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        $anggota = mysqli_query($koneksi, "SELECT * FROM anggota");

        $jumlah_buku = mysqli_num_rows($buku);
        $jumlah_anggota = mysqli_num_rows($anggota);

        ?>

        <!-- END -->
        <center> <h4>Welcome <?php echo $_SESSION['admin']?> anda telah Login</h4> </center>

        <body>
        <div class="container" style="margin-top: 80px">
        <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <marquee direction="right"><h2>BUKU YANG TERSEDIA</h2></marquee>
            </div>
            <div class="card-body">
                <h3>Total Buku Tersedia <?php echo $jumlah_buku; ?></h3>
            <!-- menampilkan data buku -->
        <a href="add.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
        <table class="table table-bordered" id="myTable">
        <tr>
            <th>id_buku</th>
            <th>katalog</th>
            <th>judul buku</th>
            <th>pengarang</th>
            <th>tahun terbit</th>
            <th>penerbit</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        <!-- menampilkan data buku -->
        <?php 
        include 'koneksi.php';
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        foreach ($buku as $row){
            echo "<tr>";
            echo "<td>".$id_buku = $row['id_buku']."</td>";
            echo "<td>".$katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            echo "<td>".$harga = $row['harga']."</td>";
            ?>
            <td> 
            <a href="update.php?id_buku=<?php echo $row['id_buku']; ?>" class="btn btn-sm btn-success">Edit</a>  
            <a href="proses-hapus.php?id_buku=<?php echo $row['id_buku']; ?>" class="btn btn-sm btn-danger">Hapus</a>  
            </td>
            <?php 
            echo "</tr>";
        }
        ?>
        

        </tbody>
        </table>
        <center>
        <h3>Total Harga Semua Buku : 
            <?php
            $db = mysqli_query($koneksi, "SELECT * FROM buku;");
            while($r = mysqli_fetch_array($db)){
                $h[] = $r['harga'];
            }
            $totalHarga = array_sum($h);
            echo "Rp. " . number_format($totalHarga) . "";
            ?>
            </center>
        </h3>


        <div class="container" style="margin-top: 80px">
        <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <marquee direction="right"><h2>Data Anggota</h2></marquee>
            </div>
            <div class="card-body">
                <h3>Total Anggota Tersedia :  <?php echo $jumlah_anggota; ?></h3>
            <!-- menampilkan data buku -->
        <a href="add_anggota.php" class="btn btn-md btn-warning" style="margin-bottom: 10px">TAMBAH ANGGOTA</a>
        <table class="table table-bordered" id="myTable">
        <tr>
            <th>Id_anggota</th>
            <th>Nama</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Password</th>
        </tr>

        <!-- menampilkan data buku -->
        <?php 
        include 'koneksi.php';
        $anggota = mysqli_query($koneksi, "SELECT * FROM anggota");
        foreach ($anggota as $rou){
            echo "<tr>";
            echo "<td>".$rou['id_anggota']."</td>";
            echo "<td>".$rou['nama']."</td>";
            echo "<td>".$rou['no_telp']."</td>";
            echo "<td>".$rou['alamat']."</td>";
            echo "<td>".$rou['email']."</td>";
            echo "<td>".$rou['password']."</td>";
            ?>
            
            <?php 
            echo "</tr>";
        }
        ?>
        

        </tbody>
        </table>
        <center> <a href="../logout.php" class="btn btn-sm btn-danger" >LOGOUT</a> 
    </center>  
        </div>
        </div>
        </div>

        </body>
</html>