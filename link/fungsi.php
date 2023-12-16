<?php

//koneksi
include_once ("link/koneksi.php");


//fungsi enkripsi hash
$epassword = password_hash($password, PASSWORD_DEFAULT);


  
  function deleteBooking($id) {
    global $conn;
      $query = "DELETE FROM  WHERE id = $id";
      $result = $conn->query($query);
  
      if ($result) {
          return true;
      } else {
          return false;
        }
    }

    function ambil_id_pembayaran($id_pembayaran) {
        global $conn;
        $data = mysqli_query($conn, "SELECT * FROM pembayaran WHERE id_pembayaran='$id_pembayaran'");
        $row = mysqli_fetch_assoc($data);
        $text = $row['price'];
        return $text;
    }





?>