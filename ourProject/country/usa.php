<?php
  // Remember to replace 'username' and 'password'!
  $conn = oci_connect('busacker', 'Sep771994', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db2.ndsu.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

  $query = "SELECT * FROM Tank_List WHERE Country = 7 ";
  $stid = oci_parse($conn, $query);
  oci_execute($stid,OCI_DEFAULT);

  while ($row = oci_fetch_array($stid,OCI_ASSOC))
{
//iterate through each item in the row and echo it
foreach ($row as $item)
{
  echo $item.' ';
}

  oci_free_statement($stid);
  oci_close($conn);


?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Tanks - USA </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <h1>USA!</h1>

    <div class="navbar">
    <a href="http://students.cs.ndsu.nodak.edu/~ralean/ourProject/home.php">Home</a>
    <br>
    </div>

    <div class="container">

    </div>
  </body>
</html>
