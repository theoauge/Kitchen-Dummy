<?php

    function Retrieve() {
      $myfile = fopen("id.txt", "r") or die("Unable to open file!");
      $num = fread($myfile,filesize("id.txt"));
      $num += 1;
      fclose($myfile);

      $myfile = fopen("id.txt", "w+") or die("Unable to open file!");
      fwrite($myfile, $num);
      fclose($myfile);
      return $num;
    }

    function Retrieve2() {
      $myfile = fopen("id.txt", "r") or die("Unable to open file!");
      $num = fread($myfile,filesize("id.txt"));
      fclose($myfile);
      return $num;
    }

    function WriteFile($subtxt, $name, $ing, $ins) {
      $myfile = "pending/$subtxt.php";
      $handle = fopen($myfile, 'w+') or die('Cannot open file:  '.$myfile);
      $orginal = fopen("pendingfile.txt", 'r') or die('Cannot open file: pendingfile.txt');
      while(($line = fgets($orginal)) !== false) {
        if(strpos($line, '$name') !== false) {
            $line = str_replace('$name', $name, $line);
        }
        if(strpos($line, '$ing') !== false) {
            $line = str_replace('$ing', $ing, $line);
        }
        if(strpos($line, '$ins') !== false) {
            $line = str_replace('$ins', $ins, $line);
        }
        fputs($handle, $line);
      }
      fclose($orginal);
      fclose($handle);
    }

    function CreateFile($name, $ing, $ins) {
      $id = Retrieve2();
      $myfile = "/home/kitchendummy/public_html/pending/data_$id.php";
      $handle = fopen($myfile, 'w+') or die("Cannot open file.");
      $txt = "[--]" . $name . "[-]" . $ing . "[-]" . $ins . "[-]" . $id;
      error_log("txt: " . $txt);
      fwrite($handle, $txt);
      fclose($handle);
    }

    if(isset($_POST)) {
      if($_POST['recipeName'] == "") {
        return;
      }
      if($_POST['ingredients'] == "") {
        return;
      }
      if($_POST['instructions'] == "") {
        return;
      }
      $name = $_POST['recipeName'];
      $ing = $_POST['ingredients'];
      $ins = $_POST['instructions'];
      $subtxt = Retrieve();
      WriteFile($subtxt, $name, $ing, $ins);
      CreateFile($name, $ing, $ins);
    }
?>
