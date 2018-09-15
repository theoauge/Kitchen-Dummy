<!DOCTYPE = HTML>
<html>

<body>
  <?php
    include ('scripts/searchByName.php');
   ?>
  <head>
    <title>Recipe Search</title>
    <link rel="stylesheet" type="text/css" href="styles/rse.css" />
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
  <span style="font-size: 28px; margin: 10%;">Recipe Search</span>

  <form action="#" onsubmit="return RecipeSearch();">
    Recipe Name: <input type="text" id="recipeNameSearch" name="recipe name"><br>
    <input type="submit" value="Submit">
  </form>

  <p id="messageRSE" style="color: red;"></p>
  <ul id="resultsList">

  </ul>

  <script src="scripts/main.js"></script>
</body>

</html>
