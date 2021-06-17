<?php 
    //koneksi
    include "conn.php";

    //variabel parameter GET
    $npm = $_GET['npm'];

    //bagian yg diubah 
    $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $jurusan = isset($_POST["jurusan"]) ? $_POST["jurusan"] : "";

    $sql = "UPDATE `mahasiswa` SET `nama` = '".$nama."', `jurusan` = '".$jurusan."' WHERE `mahasiswa`.`npm` = ".$npm.";";

    //Jalankan Query
    $query = mysqli_query($conn, $sql);
    if($query){
        $message = "Update data mahasiswa berhasil!";
    }else {
        $message = "Update data mahasiswa gagal!";
    }

    $response = array(
        'status' => 'OK',
        'kode' => '999',
        'message' => $message
    );
    echo json_encode($response);
    header("Content-type: application/json");
