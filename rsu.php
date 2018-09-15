<!DOCTYPE = HTML>
<html>

<body>
  <?php
    include ('scripts/submit.php');
    include ('scripts/email.php');
  ?>
  <head>
    <title>Recipe Submit</title>
    <link rel="stylesheet" type="text/css" href="styles/rsu.css" />
  </head>
  <header class="row">
    <ul class="column">
      <li><a href="index.php">Home</a></li>
      <li><a href="cs.php">Contact and Support</a></li>
    </ul>
      <h5 class="column">kitchen<br>dummy</h5>
      <ul class="column">
        <li><a href="rsu.php">Recipe Submit</a></li>
        <li><a href="rse.php">Recipe Search </a></li>
        <li><a href="is.php">Ingredient Search</a></li>
      </ul>
    </header>
  <span style="font-size: 28px; margin: 10%;">Recipe Submit</span>
  <p>After submitting, the recipe will be sent to my email<br>where I accept or decline,<br> you know, for security reasons.</p>
  <p style="color:red;">Use commas between each ingreident</p>
  <form method="post" action="#">
    <label>Recipe Name:</label> <textarea type="text" id="recipeName" name="recipeName" class="name"></textarea><br>
    <label>Ingredients:</label> <textarea type="text" id="ingredients" name="ingredients" class="input"></textarea><br>
    <label>Instructions:</label> <textarea type="text" id="instructions" name="instructions" class="input"></textarea><br>
    <input type="submit" value="Submit"><br>

    <p id="messageRSU" style="color: red;"></p>
  </form>

  <script src="scripts/main.js"></script>
</body>

</html>
