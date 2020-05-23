<?php require_once __DIR__.'/koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>MULTIPLE UPDATE</title>
</head>
<body>
<form method="post" action="update.php">
<button>UPDATE</button>
<table border="1">
 <thead>
  <tr>
   <td>#</td>
   <td>ID</td>
   <td>NAME</td>
   <td>ADDRESS</td>
  </tr>
 </thead>
 <tbody>
  <?php
   $sql = 'SELECT * FROM users';
   $rs = mysql_query($sql) or die($sql);

   while ($row = mysql_fetch_array($rs)) {
       $id = (int) $row['id'];
       $name = $row['name'];
       $address = $row['address']; ?>
  <tr>
   <td><input type="checkbox" name="id[]" value="<?php echo $id; ?>"></td>
   <td><?php echo $id; ?></td>
   <td><?php echo $name; ?></td>
   <td><?php echo $address; ?></td>
  </tr>
  <?php
   } ?>
 </tbody>
</table>
</form>
</body>
</html>
