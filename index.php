<?php
$conn = new mysqli("localhost","root","","streaming_store");

$result = $conn->query("SELECT * FROM productos");
?>

<!DOCTYPE html>
<html>
<head>
<title>Streaming Connect</title>

<style>

body{
font-family: Arial;
background:#111;
color:white;
text-align:center;
}

.container{
display:flex;
flex-wrap:wrap;
justify-content:center;
}

.card{
background:#222;
margin:15px;
padding:20px;
border-radius:10px;
width:250px;
}

.card img{
width:150px;
margin-bottom:10px;
}

button{
background:#28a745;
border:none;
padding:10px;
color:white;
cursor:pointer;
border-radius:5px;
}

button:hover{
background:#218838;
}

</style>

</head>

<body>

<h1>Streaming Connect</h1>
<h1>Venta de Cuentas de Streaming</h1>

<div class="container">

<?php while($row=$result->fetch_assoc()){ ?>

<div class="card">

<img src="<?php echo $row['imagen']; ?>">

<h2><?php echo $row['nombre']; ?></h2>

<p>Precio: $<?php echo $row['precio']; ?> COP</p>

<a href="https://wa.me/573235830919?text=Quiero%20comprar%20<?php echo $row['nombre']; ?>">

<button>Comprar</button>

</a>

</div>

<?php } ?>

</div>

</body>
</html>