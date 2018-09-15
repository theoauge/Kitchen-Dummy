<?php

  $myfile = fopen("Database.txt", "r") or die("Unable to open file!");
  $txt = fread($myfile,filesize("Database.txt"));
  echo '<p id="hide">' . $txt . '</p>';

?>
