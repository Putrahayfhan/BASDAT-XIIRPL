<?php 


$nama = @$_POST['nama'];
$rpl = @$_POST['rpl'];
$akl = @$_POST['akl'];
$bdp = @$_POST['bdp'];
$namaAyah = @$_POST ['namaAyah'];
$namaIbu = @$_POST ['namaIbu'];
$Alamat = @$_POST ['Alamat'];


echo "Nama = $nama $rpl $akl $bdp <br>";
echo "namaAyah = {$namaAyah}<br>";
echo "namaIbu = {$namaIbu}<br>";
echo "Alamat = {$Alamat}<br>";


$files = $_FILES;
$folder_upload = "./assets/uploads";

if(!is_dir($folder_upload)){
    mkdir($folder_upload, 0777, $rekursif = true);
}

$fileFoto = (object) @$_FILES['foto'];

$uploadFotoSukses = move_uploaded_file(
    $fileFoto->tmp_name, "{$folder_upload}/{$fileFoto->name}"
);

if ($uploadFotoSukses) {
    $link = "{$folder_upload}/{$fileFoto->name}";
    echo "Sukses Upload Foto : <a href = '{$link}'>{$fileFoto->name}</a>";
    echo "<br>";
}




?>