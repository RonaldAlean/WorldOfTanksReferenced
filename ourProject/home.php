<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <h1>  </h1>
    <a href="http://students.cs.ndsu.nodak.edu/~ralean/ourProject/addRecord.php">| Add Record</a>

    <h2>Country</h2>
    <div class="navbar">
    <a href="country/usa.php">USA</a>
    <a href="country/ssr.php">SSR</a>
    <a href="country/uk.php">UK</a>
    <a href="country/china.php">China</a>
    <a href="country/france.php">France</a>
    <a href="country/gremany.php">Germany</a>
    <a href="country/japan.php">Japan</a>
    <a href="country/sweeden.php">Sweeden</a>
    <br>
    </div>

    <h2>Tank Type</h2>
    <div class="navbar">
    <a href="tankType/lights.php">Lights</a>
    <a href="tankType/medium.php">Mediums</a>
    <a href="tankType/heavies.php">Heavies</a>
    <a href="tankType/ids.php">IDs</a>
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
    <h2><u><em>Tier_______________________________________________</em></u></h2>

    <br><br>
    <h2><u><em>Tier_______________________________________________</em></u></h2>


    <?php

    $conn = oci_connect('ralean', 'Mar751998', '(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(Host=db2.ndsu.edu)(Port=1521)))(CONNECT_DATA=(SID=cs)))');


    ?>
  </body>
</html>
