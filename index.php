<?php
    //koneksi
    include "conn.php";

    //query 
    $sql = "select * from mahasiswa";

    //jalankan query
    $query = mysqli_query($conn, $sql);
        while ($data = mysqli_fetch_array($query)) {
            // var_dump($data);
            $item[] = array(
                'npm' => $data['npm'],
                'nama' => $data['nama'],
                'jurusan' => $data['jurusan']
            );
        }

        $response = array(
            'status' => 'OK',
            'kode' => '999',
            'data' => $item
        );
        echo json_encode($response);
        header("Content-type: application/json");

    
?>