<?php

$conn = mysqli_connect("localhost", "root", "", "ta_nisa");

if (mysqli_connect_errno()) {
    echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
    exit();
}

/*
    fungsi untuk mengambil semua data dari tabel
    cara menggunakan: get_all("nama_tabel") 
    contoh: $bandara = get_all("bandara")
*/
function get_all($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function get_where($table, $where)
{
    global $conn;
	$result = mysqli_query($conn, "SELECT * FROM $table WHERE $where");
    
    if (!$result) {
        die('Query Error : '. mysqli_errno($conn) . ' - ' . mysqli_error($conn));
    }

    return mysqli_fetch_assoc($result);
}

function generate_random_string($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function upload_file($file)
{
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/uploads/";
    $file_name = generate_random_string($length = 5) . '-' . basename($file["name"]);
    $target_file = $target_dir . $file_name;
    move_uploaded_file($file["tmp_name"], $target_file);
    return $file_name;
}

function insert($table_name = "", $data = [])
{
    global $conn;
    $fields =  "";
    $values = "";

    foreach ($data as $key => $value) {
        if ($key === array_key_last($data)) {
            $fields .= "$key";
            $values .= "'$value'";
        } else {
            $fields .= "$key, ";
            $values .= "'$value', ";
        }
    }


    $query = "INSERT INTO $table_name ( $fields )
              VALUES ( $values );";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die('Query Error : '. mysqli_errno($conn) . ' - ' . mysqli_error($conn));
    }
}

function update($table_name = "", $data = [], $where)
{
    global $conn;
    $update_field = "";

    foreach ($data as $key => $value) {
        if ($key === array_key_last($data)) {
            $update_field .= "$key = '$value'";
        } else {
            $update_field .= "$key = '$value', ";
        }
    }


    $query = "UPDATE $table_name SET $update_field
              WHERE $where;";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die('Query Error : '. mysqli_errno($conn) . ' - ' . mysqli_error($conn));
    }
}

function delete($table, $where) {
	global $conn;
	$result = mysqli_query($conn, "DELETE FROM $table WHERE $where");
	if (!$result) {
        die('Query Error : '. mysqli_errno($conn) . ' - ' . mysqli_error($conn));
    }
}

