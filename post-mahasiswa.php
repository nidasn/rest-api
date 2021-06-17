<?php 
    //koneksi
    include "conn.php";

    //variabel POST
    $npm = isset($_POST["npm"]) ? $_POST["npm"] : "";
    $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $jurusan = isset($_POST["jurusan"]) ? $_POST["jurusan"] : "";


    //Query tambah data
    $sql = "INSERT INTO `mahasiswa` (`npm`, `nama`, `jurusan`) VALUES ('".$npm."', '".$nama."', '".$jurusan."');";
    
    //Jalankan Query
    $query = mysqli_query($conn, $sql);
    if($query){
        $message = "Simpan data mahasiswa berhasil!";
    }else {
        $message = "Simpan data mahasiswa gagal!";
    }

    $response = array(
        'status' => 'OK',
        'kode' => '999',
        'message' => $message
    );
    echo json_encode($response);
    header("Content-type: application/json");
?>