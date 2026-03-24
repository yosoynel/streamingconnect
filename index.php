<?php
$conn = new mysqli("sql105.infinityfree.com","if0_41445512","KVHnPikip92dT8","if0_41445512_gestionarticulos");

$result = $conn->query("SELECT * FROM productos");
?>

<!DOCTYPE html>
<html>
<head>
<title>Streaming Connect</title>

<style>

body{
font-family: Arial;
background:#ffffff;
color:#000000;
margin:0;
}

/* HEADER */

header{
background:#ffffff;
box-shadow:0 2px 6px rgba(0,0,0,0.1);
position:sticky;
top:0;
z-index:1000;
}

.header-container{
display:flex;
align-items:center;
justify-content:space-between;
padding:10px 30px;
}

.logo img{
height:60px;
}

.header-links{
display:flex;
gap:20px;
}

.menu-item a{
text-decoration:none;
color:#333;
font-weight:bold;
}

.menu-item a:hover{
color:#28a745;
}

/* HAMBURGER */

.hamburger{
font-size:28px;
cursor:pointer;
display:none;
}

/* TITULO */

.title{
text-align:center;
margin-top:20px;
}

/* PRODUCTOS */

.container{
display:flex;
flex-wrap:wrap;
justify-content:center;
padding:20px;
}

.card{
background:#f5f5f5;
margin:15px;
padding:20px;
border-radius:10px;
width:250px;
box-shadow:0 2px 6px rgba(0,0,0,0.1);
text-align:center;
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
font-weight:bold;
}

button:hover{
background:#218838;
}

/* RESPONSIVE */

@media(max-width:768px){

.header-links{
display:none;
flex-direction:column;
background:white;
position:absolute;
top:70px;
right:20px;
padding:15px;
box-shadow:0 4px 8px rgba(0,0,0,0.1);
}

.header-links.active{
display:flex;
}

.hamburger{
display:block;
}

}

</style>

<script>

function toggleMenu(){
document.querySelector(".header-links").classList.toggle("active");
}

</script>

</head>

<body>

<header>

<div class="header-container">

<div class="hamburger" onclick="toggleMenu()">☰</div>

<div class="logo">
<a href="index.php">
<img src="logo.png" alt="Streaming Connect">
</a>
</div>

<div class="header-links">

<div class="menu-item"><a href="index.php">Inicio</a></div>
<div class="menu-item"><a href="store.php">Tienda</a></div>
<div class="menu-item"><a href="tutoriales.php">Tutoriales</a></div>
<div class="menu-item"><a href="soporte.php">Soporte</a></div>
<div class="menu-item"><a href="contacto.php">Contacto</a></div>

</div>

</div>

</header>


<div class="title">
<h1>Streaming Connect</h1>
<p>Entretenimiento a tu gusto</p>
</div>


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