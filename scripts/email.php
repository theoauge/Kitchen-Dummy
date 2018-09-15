<?php

  if (isset($_POST)) {
    if($_POST['recipeName'] == "") {
      return;
    }
    if($_POST['ingredients'] == "") {
      return;
    }
    if($_POST['instructions'] == "") {
      return;
    }
    $name = ("[--]{$_POST['recipeName']}");
    $ing = ("[-]{$_POST['ingredients']}");
    $ins = ("[-]{$_POST['instructions']}");
    $email = "kitchen.dummy@gmail.com";
    $subject = Retrieve2();
    $link = "http://kitchen-dummy.com/pending/$subject.php";
    $msg = wordwrap("Name: $name\n--------------\nIngredients: $ing\n--------------\nInstructions: $ins\n--------------\n$link", 70);
    mail($email, $subject, $msg);
  }
 ?>
