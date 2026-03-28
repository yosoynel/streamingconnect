<?php
$conn = new mysqli("mysql-streamingconnect.alwaysdata.net","streamingconnect","clase1234","streamingconnect_pagina");

$result = $conn->query("SELECT * FROM productos WHERE categoria = 'tvbox'");
?>

<!DOCTYPE html>
<html>
<head>
<title>Tv Box - Streaming Connect</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{font-family: Arial;background:#ffffff;color:#000000;margin:0;}
header{background:#000;position:sticky;top:0;z-index:1000;}
.header-container{display:flex;align-items:center;justify-content:space-between;padding:12px 30px;}
.logo img{height:75px;}
.nav-center{flex:1;display:flex;justify-content:center;gap:35px;}
.nav-center a{text-decoration:none;color:white;font-weight:bold;font-size:16px;}
.nav-center a:hover{color:#28a745;}
.header-right{width:150px;display:flex;justify-content:flex-end;}
.hamburger{font-size:30px;cursor:pointer;display:none;color:white;}
.mobile-menu{position:fixed;top:0;right:-260px;width:260px;height:100%;background:#222;padding-top:100px;transition:0.3s;z-index:2000;}
.mobile-menu a{display:block;padding:18px;text-decoration:none;color:white;font-size:18px;}
.mobile-menu a:hover{background:#333;}
.overlay{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);display:none;z-index:1500;}
.title{text-align:center;margin-top:20px;}
.container{display:flex;flex-wrap:wrap;justify-content:center;padding:20px;}
.card{background:#f5f5f5;margin:15px;padding:20px;border-radius:10px;width:250px;box-shadow:0 2px 6px rgba(0,0,0,0.1);text-align:center;transition:0.2s;}
.card:hover{transform:translateY(-5px);}
.card img{width:150px;margin-bottom:10px;}
button{background:#28a745;border:none;padding:10px;color:white;cursor:pointer;border-radius:5px;font-weight:bold;}
button:hover{background:#218838;}
@media(max-width:768px){.nav-center{display:none;}.hamburger{display:block;}}
</style>
<script>
function toggleMenu(){let menu=document.getElementById("mobileMenu");let overlay=document.getElementById("overlay");if(menu.style.right=="0px"){menu.style.right="-260px";overlay.style.display="none";}else{menu.style.right="0px";overlay.style.display="block";}}
function closeMenu(){document.getElementById("mobileMenu").style.right="-260px";document.getElementById("overlay").style.display="none";}
</script>
</head>
<body>
<header>
<div class="header-container">
<div class="logo"><a href="index.php"><img src="imagenes/logo.png"></a></div>
<div class="nav-center">
<a href="index.php">Inicio</a>
<a href="combos.php">Combos</a>
<a href="Tv Box.php">Tv Box</a>
<a href="Juegos.php">Juegos</a>
<a href="contacto.php">Contacto</a>
</div>
<div class="header-right"><div class="hamburger" onclick="toggleMenu()">☰</div></div>
</div>
</header>
<div id="overlay" class="overlay" onclick="closeMenu()"></div>
<div id="mobileMenu" class="mobile-menu">
<a href="index.php">Inicio</a>
<a href="store.php">Tienda</a>
<a href="tutoriales.php">Tutoriales</a>
<a href="soporte.php">Soporte</a>
<a href="contacto.php">Contacto</a>
</div>
<div class="title">
<h1>Tv Box</h1>
<p>Dispositivos para tu entretenimiento</p>
</div>
<div class="container">
<?php while($row=$result->fetch_assoc()){ ?>
<?php $mensaje = "Hola 👋 Quiero comprar {$row['nombre']} por $ {$row['precio']} COP";
$mensaje_codificado = rawurlencode($mensaje); ?>
<div class="card">
<img src="<?php echo $row['imagen']; ?>">
<h2><?php echo $row['nombre']; ?></h2>
<p>Precio: $<?php echo number_format($row['precio'],0,',','.'); ?> COP</p>
<a href="https://wa.me/573235830919?text=<?php echo $mensaje_codificado; ?>">
<button>Comprar</button>
</a>
</div>
<?php } ?>
</div>
</body>
</html>