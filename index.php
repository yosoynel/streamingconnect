<?php
$conn = new mysqli("sql105.infinityfree.com","if0_41445512","KVHnPikip92dT8","if0_41445512_gestionarticulos");

$result = $conn->query("SELECT * FROM productos");
?>

<!DOCTYPE html>
<html>
<head>
<title>Streaming Connect</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

body{
font-family: Arial;
background:#ffffff;
color:#000000;
margin:0;
}

/* HEADER NEGRO PROFESIONAL */

header{
background:#000;
position:sticky;
top:0;
z-index:1000;
}

.header-container{
display:flex;
align-items:center;
justify-content:space-between;
padding:12px 30px;
}

/* LOGO IZQUIERDA */

.logo img{
height:75px;
}

/* MENU CENTRADO */

.nav-center{
flex:1;
display:flex;
justify-content:center;
gap:35px;
}

.nav-center a{
text-decoration:none;
color:white;
font-weight:bold;
font-size:16px;
}

.nav-center a:hover{
color:#28a745;
}

/* AREA DERECHA FUTURA */

.header-right{
width:150px;
display:flex;
justify-content:flex-end;
}

/* BOTON HAMBURGER */

.hamburger{
font-size:30px;
cursor:pointer;
display:none;
color:white;
}

/* SIDEBAR MOVIL */

.mobile-menu{
position:fixed;
top:0;
left:-260px;
width:260px;
height:100%;
background:#222;
padding-top:100px;
transition:0.3s;
z-index:2000;
}

.mobile-menu a{
display:block;
padding:18px;
text-decoration:none;
color:white;
font-size:18px;
}

.mobile-menu a:hover{
background:#333;
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
transition:0.2s;
}

.card:hover{
transform:translateY(-5px);
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

.nav-center{
display:none;
}

.hamburger{
display:block;
}

}

</style>

<script>

function toggleMenu(){

let menu=document.getElementById("mobileMenu");

if(menu.style.left=="0px"){
menu.style.left="-260px";
}else{
menu.style.left="0px";
}

}

</script>

</head>

<body>

<header>

<div class="header-container">

<!-- BOTON MOVIL -->

<div class="hamburger" onclick="toggleMenu()">☰</div>

<!-- LOGO IZQUIERDA -->

<div class="logo">
<a href="index.php">
<img src="imagenes/logo.png">
</a>
</div>

<!-- MENU CENTRADO PC -->

<div class="nav-center">

<a href="index.php">Inicio</a>
<a href="store.php">Tienda</a>
<a href="tutoriales.php">Tutoriales</a>
<a href="soporte.php">Soporte</a>
<a href="contacto.php">Contacto</a>

</div>

<!-- AREA DERECHA -->

<div class="header-right">

</div>

</div>

</header>


<!-- MENU MOVIL -->

<div id="mobileMenu" class="mobile-menu">

<a href="index.php">Inicio</a>
<a href="store.php">Tienda</a>
<a href="tutoriales.php">Tutoriales</a>
<a href="soporte.php">Soporte</a>
<a href="contacto.php">Contacto</a>

</div>


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