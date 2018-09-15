<?php

  function RetrieveText($id) {
    $myfile = fopen("/home/kitchendummy/public_html/pending/$id.php", "r") or die("Unable to open file!");
    $txt = fread($myfile,filesize("/home/kitchendummy/public_html/pending/$id.php"));
    fclose($myfile);
    return $txt;
  }

  function Overwrite($finaltxt, $id) {
    $myfile = fopen("/home/kitchendummy/public_html/pending/$id.php", "w+") or die("Unable to open file!");
    fwrite($myfile, $finaltxt);
    fclose($myfile);
  }

  function Move($id) {
    rename("/home/kitchendummy/public_html/pending/$id.php", "/home/kitchendummy/public_html/recipes/$id.php");
  }

  function Delete($id) {
    unlink("/home/kitchendummy/public_html/pending/$id.php");
  }

  function DeleteData($id) {
    unlink("/home/kitchendummy/public_html/pending/data_$id.php");
  }

  function AddToDatabase($id) {
    $myfile = fopen("/home/kitchendummy/public_html/pending/data_$id.php", "r") or die("Unable to open file!");
    $txt = fread($myfile,filesize("/home/kitchendummy/public_html/pending/data_$id.php"));
    fclose($myfile);

    $myfile = fopen("/home/kitchendummy/public_html/Database.txt", "a") or die("Unable to open file!");
    fwrite($myfile, $txt);
    fclose($myfile);
  }

  if (isset($_POST['accept'])) {
    echo "Accepted";
    $id = $_POST['name'];
    $txt = RetrieveText($id);
    $a = explode('<form method="post" action="#">', $txt);
    $b = explode("</form>", $a[1]);
    $c = $b[0];

    $newtxt = explode($c, $txt);
    $finaltxt = $newtxt[0] . $newtxt[1];

    Overwrite($finaltxt, $id);
    Move($id);
    AddToDatabase($id);
    DeleteData($id);

    return;

  } elseif (isset($_POST['decline'])) {
    echo "Declined";
    $id = $_POST['name'];

    Delete($id);
    DeleteData($id);

    return;
  }
  ?>
