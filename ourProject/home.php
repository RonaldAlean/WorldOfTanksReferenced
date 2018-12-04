<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <h1>  </h1>

    <h2>Country</h2>
    <div class="navbar">
    <a href="country/usa.php">USA</a>
    <a href="country/ssr.php">USSR</a>
    <a href="country/uk.php">UK</a>
    <a href="country/china.php">China</a>
    <a href="country/france.php">France</a>
    <a href="country/gremany.php">Germany</a>
    <a href="country/japan.php">Japan</a>
    <a href="country/sweeden.php">Sweden</a>
    <a href="country/italy.php">Italy</a>
    <a href="country/poland.php">Poland</a>
    <a href="country/czech.php">Czech</a>
    <br>
    </div>

    <h2>Tank Type</h2>
    <div class="navbar">
    <a href="tankType/lights.php">Lights</a>
    <a href="tankType/medium.php">Mediums</a>
    <a href="tankType/heavies.php">Heavies</a>
    <a href="tankType/ids.php">TDs</a>
    <a href="tankType/artillery.php">Artillery</a>
    <br>
    </div>

    <h2>Tier</h2>
    <div class="navbar">
    <a href="tier/i.php">I</a>
    <a href="tier/ii.php">II</a>
    <a href="tier/iii.php">III</a>
    <a href="tier/iv.php">IV</a>
    <a href="tier/v.php">V</a>
    <a href="tier/vi.php">VI</a>
    <a href="tier/vii.php">VII</a>
    <a href="tier/viii.php">VIII</a>
    <a href="tier/ix.php">IX</a>
    <a href="tier/x.php">X</a>
    <br>
    </div>

    <br><br>
    <h2><u><em>Tier_1_______________________________________________</em></u></h2>
    <?php
    // Remember to replace 'username' and 'password'!
    $conn = oci_connect('busacker', 'Sep771994', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db2.ndsu.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

     //put your query here
      $query = "SELECT Tankname, Tanktype, Country.CountryName FROM Tank_List INNER JOIN Country ON Tank_List.CountryId=Country.CountryId WHERE Tanktier = 1 ";
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
    <br>
    <h2><u><em>Tier_2_______________________________________________</em></u></h2>
    <?php
    // Remember to replace 'username' and 'password'!
    $conn = oci_connect('busacker', 'Sep771994', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db2.ndsu.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

     //put your query here
      $query = "SELECT Tankname, Tanktype, Country.CountryName FROM Tank_List INNER JOIN Country ON Tank_List.CountryId=Country.CountryId WHERE Tanktier = 2 ";
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
    <br>
    <h2><u><em>Tier_3_______________________________________________</em></u></h2>
    <?php
    // Remember to replace 'username' and 'password'!
    $conn = oci_connect('busacker', 'Sep771994', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db2.ndsu.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

     //put your query here
      $query = "SELECT Tankname, Tanktype, Country.CountryName FROM Tank_List INNER JOIN Country ON Tank_List.CountryId=Country.CountryId WHERE Tanktier = 3 ";
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
    <br>
    <h2><u><em>Tier_4_______________________________________________</em></u></h2>
    <?php
    // Remember to replace 'username' and 'password'!
    $conn = oci_connect('busacker', 'Sep771994', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db2.ndsu.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

     //put your query here
      $query = "SELECT Tankname, Tanktype, Country.CountryName FROM Tank_List INNER JOIN Country ON Tank_List.CountryId=Country.CountryId WHERE Tanktier = 4 ";
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
    <br>
    <h2><u><em>Tier_5_______________________________________________</em></u></h2>
    <?php
    // Remember to replace 'username' and 'password'!
    $conn = oci_connect('busacker', 'Sep771994', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db2.ndsu.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

     //put your query here
      $query = "SELECT Tankname, Tanktype, Country.CountryName FROM Tank_List INNER JOIN Country ON Tank_List.CountryId=Country.CountryId WHERE Tanktier = 5 ";
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
    <br>
    <h2><u><em>Tier_6_______________________________________________</em></u></h2>
    <?php
    // Remember to replace 'username' and 'password'!
    $conn = oci_connect('busacker', 'Sep771994', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db2.ndsu.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

     //put your query here
      $query = "SELECT Tankname, Tanktype, Country.CountryName FROM Tank_List INNER JOIN Country ON Tank_List.CountryId=Country.CountryId WHERE Tanktier = 6 ";
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
    <br>
    <h2><u><em>Tier_7_______________________________________________</em></u></h2>
    <?php
    // Remember to replace 'username' and 'password'!
    $conn = oci_connect('busacker', 'Sep771994', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db2.ndsu.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

     //put your query here
      $query = "SELECT Tankname, Tanktype, Country.CountryName FROM Tank_List INNER JOIN Country ON Tank_List.CountryId=Country.CountryId WHERE Tanktier = 7 ";
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
    <br>
    <h2><u><em>Tier_8_______________________________________________</em></u></h2>
    <?php
    // Remember to replace 'username' and 'password'!
    $conn = oci_connect('busacker', 'Sep771994', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db2.ndsu.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

     //put your query here
      $query = "SELECT Tankname, Tanktype, Country.CountryName FROM Tank_List INNER JOIN Country ON Tank_List.CountryId=Country.CountryId WHERE Tanktier = 8 ";
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
    <br>
    <h2><u><em>Tier_9_______________________________________________</em></u></h2>
    <?php
    // Remember to replace 'username' and 'password'!
    $conn = oci_connect('busacker', 'Sep771994', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db2.ndsu.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

     //put your query here
      $query = "SELECT Tankname, Tanktype, Country.CountryName FROM Tank_List INNER JOIN Country ON Tank_List.CountryId=Country.CountryId WHERE Tanktier = 9 ";
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
    <br>
    <h2><u><em>Tier_10_______________________________________________</em></u></h2>
    <?php
    // Remember to replace 'username' and 'password'!
    $conn = oci_connect('busacker', 'Sep771994', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db2.ndsu.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');

     //put your query here
      $query = "SELECT Tankname, Tanktype, Country.CountryName FROM Tank_List INNER JOIN Country ON Tank_List.CountryId=Country.CountryId WHERE Tanktier = 10 ";
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
    <br>

    <?php


    ?>
  </body>
</html>
