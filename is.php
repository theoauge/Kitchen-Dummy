<!DOCTYPE = HTML>
<html>
<script>
</script>

<body>
  <?php
    include ('scripts/searchByName.php');
   ?>
  <head>
    <title>Ingredient Search</title>
    <link rel="stylesheet" type="text/css" href="styles/is.css" />
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
  <span style="font-size: 28px; margin: 10%;">Ingredient Search</span>

  <form action="#" onsubmit="return IngredientSearch();">
    Ingredients: <input type="text" id="ingredients" name="ingredients"><br>
    <input type="submit" value="Submit">
  </form>

  <p id="messageIS" style="color: red;"></p>
  <ul id="resultsList">

  </ul>

  <script src="scripts/main.js"></script>
</body>

</html>
