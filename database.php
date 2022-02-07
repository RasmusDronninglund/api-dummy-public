<?php
  $serverName = "sql-rdj-opendo.database.windows.net"; // update me
  $connectionOptions = array(
      "Database" => "Opendo", // update me
      "Uid" => "ctrdj", // update me
      "PWD" => "Password." // update me
  );
  //Establishes the connection
  $conn = sqlsrv_connect($serverName, $connectionOptions);
  $tsql= "SELECT * FROM Books";
  $getResults= sqlsrv_query($conn, $tsql);
  echo ("Reading data from table" . PHP_EOL);
  if ($getResults == FALSE)
    echo (sqlsrv_errors());

  while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
    echo ($row['BookName'] . " " . $row['Category'] . PHP_EOL);
  }

  sqlsrv_free_stmt($getResults);
?>
