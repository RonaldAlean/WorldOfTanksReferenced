<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>|  </h1>

     <h2></h2>
    <div class="navbar">
    <a href="http://students.cs.ndsu.nodak.edu/~ralean/ourProject/home.php">Home</a>
    <br>
    </div>

    <h1>Heavies!</h1>

	<?php
	// Remember to replace 'username' and 'password'!
	$conn = oci_connect('busacker', 'Sep771994', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db2.ndsu.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

	//put your query here
	$query = "SELECT Tankname, Country.CountryName, Tanktier FROM Tank_List INNER JOIN Country ON Tank_List.CountryId=Country.CountryId WHERE Tanktype = 'Heavy' ORDER BY Tanktier";
	$stid = oci_parse($conn,$query);
	oci_execute($stid,OCI_DEFAULT);

	//iterate through each row
	while ($row = oci_fetch_array($stid,OCI_ASSOC)) 
	{
    	//iterate through each item in the row and echo it  
    	foreach ($row as $item)    
    	{
        	echo $item.' ';
    	}   
	echo '<br/>';}
	oci_free_statement($stid);
	oci_close($conn);
	?>



  </body>
</html>
