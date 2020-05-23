<?php
 // panghil koneksi
 require_once __DIR__.'/koneksi.php';

 // loop data field
 foreach ($_POST['id'] as $key=>$val) {
     $id = (int) $_POST['id'][$key];
     $name = $_POST['name'][$key];
     $address = $_POST['address'][$key];

     // udpate data
     $sql = 'UPDATE users SET';
     $sql .= ' name="'.$name.'",';
     $sql .= ' address="'.$address.'"';
     $sql .= ' WHERE id='.$id;
     mysql_query($sql) or die($sql);
 }

 // kembalikan ke index
 header('Location: index.php');
