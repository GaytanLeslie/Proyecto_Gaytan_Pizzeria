<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #FFB400;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #A90F00;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<?php include('header.php'); ?>

<h2>Pedido</h2>

<form action="/action_page.php" method="post">
  

  <div class="container">
    <label for="nombre">Nombre de usuario</label>
    <input type="text" placeholder="Ingresa nombre usuario" name="nombre" required>

    <label for="pedido">Ingresa el pedido</label>
    <input type="text" placeholder="Ingresa pedido" name="pedido" required>

    <label for="dirección">Dirección<b></b></label>
    <input type="text" placeholder="Ingresa dirección" name="dirección" required>

    <label for="pago">Metodo de pago<b></b></label>
    <input type="text" placeholder="Ingresa metodo pago" name="pago" required>

        
    <button type="submit">Hacer el pedido</button>

  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
  </div>
</form>

</body>
</html>
