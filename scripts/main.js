function HashTable() {
  var content = {};
  var count = 0;
  var exact;
  var approved = {};

  this.Get = function(key) {
    var message = document.getElementById("messageRSE");
    var hide = document.getElementById("hide");
    var db = hide.innerHTML;
    var a = db.split("[--]");
    var count = 0;

    for (var i = 0; i < a.length; i++) {
      var b = a[i].split("[-]");
      if (b[0].toUpperCase().replace(" ", "").includes(key.toUpperCase().replace(" ", ""))) {
        var sublink = "recipes/" + b[3] + ".php";
        var para = document.createElement("li");
        para.setAttribute("id", "results");
        var link = document.createElement("a");
        link.setAttribute("href", sublink);
        para.appendChild(link);
        var node = document.createTextNode(b[0]);
        link.appendChild(node);
        var element = document.getElementById("resultsList");
        element.appendChild(para);
        count++;
      }
    }
    if (count == 0) {
      message.innerHTML = "No results found.";
    } else {
      return;
    }
  };

  this.Find = function(value) {
    var ingredients = value;
    var message = document.getElementById("messageIS");
    var db = hide.innerHTML;
    var a = db.split("[--]");
    var count = 0;

    for (var i = 1; i < a.length; i++) {

      var b = a[i].split("[-]");
      if (b[1].toUpperCase().includes(ingredients.toUpperCase())) {
        var sublink = "recipes/" + b[3] + ".php";
        var para = document.createElement("li");
        para.setAttribute("id", "results");
        var link = document.createElement("a");
        link.setAttribute("href", sublink);
        para.appendChild(link);
        var node = document.createTextNode(b[0]);
        link.appendChild(node);
        var element = document.getElementById("resultsList");
        element.appendChild(para);
        count++;
      }
    }
    if (count == 0) {
      message.innerHTML = "No results found.";
    } else {
      return;
    }
  };
}

function RecipeSearch() {
  var message = document.getElementById("messageRSE");
  var key = document.getElementById("recipeNameSearch").value;

  message.innerHTML = ("");

  if (key == "") {
    message.innerHTML = "Please complete input.";
    return false;
  }
  var fCall = new HashTable();
  fCall.Get(key);
  return false;
}

function IngredientSearch() {
  var message = document.getElementById("messageIS");
  var ingredients = document.getElementById("ingredients").value;

  message.innerHTML = ("");

  if (ingredients == "") {
    message.innerHTML = "Please complete input.";
    return false;
  }
  var fCall = new HashTable();
  fCall.Find(ingredients);
  return false;
}

function arrayContainsArray(array1, array2) {
  alert(array1);
  alert(array2);
  //what is 'value'?
  return array2.every(function(value) {
    return (array1.indexOf(value) >= 0);
  });
}

var hide = document.getElementById("hide");
hide.style.display = "none";
