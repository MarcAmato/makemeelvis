<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Make Me Elvis - Remove Email</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<?php
  $dbc = mysqli_connect('localhost', 'root', '20Ot@macram18', 'elvis_store')
    or die('Error connecting to MySQL server.');

  // The email form data in $_POST is stored in a variable and then used in the DELETE query.
  $email = $_POST['email'];

  $query = "DELETE FROM email_list WHERE email = '$email'";
  mysqli_query($dbc, $query)
    or die('Error querying database.');

  // Confirm database deletion.
  echo 'Customer removed: ' . $email;

  mysqli_close($dbc);
?>

</body>
</html>
