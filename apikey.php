<?php

function getKey() {
    return ["secret21", "22132", "edcba"];
}

function isValid($input) {
    $apikey = $input["api_key"];
    if (in_array($apikey, getKey())) {
        return true;
    } else {
        return false;
    }
}

function jsonOut($status, $message, $data) {
    $respon = ["status" => $status, "message" => $message, "data" => $data];

    header("Content-type: application/json");
    echo json_encode($respon);
}

function getBook() {
    $book = [
        ["judul" => "Laskar Pelangi", "terbitan" => "Buku ini terbitan tahun 2012"],
        ["judul" => "Masih Belajar", "terbitan" => "Buku ini terbitan tahun 2019"],
        ["judul" => "Bukan Sarjana (Kertas)", "terbitan" => "Buku ini terbitan tahun 2020"]
    ];
    return $book;
}

if (isValid($_GET)) {
    jsonOut("berhasil", "apikey valid", getBook());
} else {
    jsonOut("gagal", "apikey not valid!!!", null);
}

?>