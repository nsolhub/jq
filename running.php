<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <style>
#div1 {
    width: 350px;
    height: 70px;
    padding: 10px;
    border: 1px solid #aaaaaa;
}
</style>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
function sett(){
alert("okay");
}


function set(){
var userin = document.getElementById("input1").value;
alert(userin);
document.getElementById("show").innerHTML  = userin;
}



</script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>My First Bootstrap Page</h1>
  <h1 id="show" id="drag5" src="img_logo.gif" draggable="true" ondragstart="drag(event)">dd</h1>
  <div class="col-md-4">
<input type="text" name="input" id="input1" placeholder="Enter Input" class="form-control">
<button id="goo" onClick="set()" value="submit"> sub </button>
</div>

</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<h2 id="drag5" src="img_logo.gif" draggable="true" ondragstart="drag(event)" width="336" height="69">afdasdfsa asdfs</h2>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
     <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<img id="drag3" src="https://www.w3schools.com/html/img_logo.gif" draggable="true" ondragstart="drag(event)" width="336" height="79">
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
  
</div>

</body>
</html>
