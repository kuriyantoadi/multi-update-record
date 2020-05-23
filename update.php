<!DOCTYPE html>
<html>
<head>
<title>MULTIPLE UPDATE</title>
</head>
<body>
UPDATE DATA
<hr/>
<form action="aksi.php" method="POST">
<pre>
<?php
 // memanggil koneksi
 require_once __DIR__.'/koneksi.php';

 // jika checkbox yang di pilih lebih 0
 if (count($_POST['id']) == 0) {
     header('Location: index.php');
 }

 foreach ($_POST['id'] as $key=>$val) {
     $id = (int) $_POST['id'][$key];

     // set query berdasarkan id
     $sql = 'SELECT * FROM users';
     $sql .= ' WHERE id='.$id;

     // execute query
     $rs = mysql_query($sql) or die($sql);
     $row = mysql_fetch_array($rs);

     // fetch data
     $name = $row['name'];
     $address = $row['address'];
     $jml = $row['jml']; ?>

<input type="hidden" name="id[]" value="<?php echo $id; ?>">
Nama : <input type="text" name="name[]" value="<?php echo $name; ?>">
Address : <textarea name="address[]"><?php echo $address; ?></textarea>
Jumlah : <input type="text" name="jml[]" value="<?php echo $jml; ?>">

<hr />
<?php
 } ?>
</pre>
<button>UPDATE DATA</button>
</form>
</body>
</html>
