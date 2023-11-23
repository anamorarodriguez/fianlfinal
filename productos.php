<?php 
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"aemere");

$id = $_GET ['id'];
$consulta = "SELECT * FROM tienda WHERE id = $id ";
$respuesta = mysqli_query($conexion,$consulta);
$datos=mysqli_fetch_array($respuesta);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEMERE</title>

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"></head>
<body>
<div class="wrapper">
    <aside>
        <header>
            <h1 class="logo">AMR</h1>
        </header>
        <nav>       
            <div class="filtro"> 
                <!-- <button class="botonfiltro" id="inicio"><a href="aemere.php">INICIO</a></button> -->
                <button class="botonfiltro" id="ceramica"><a href="ceramica.php">CERAMICA</a></button>
                <button class="botonfiltro" id="cristal"><a href="cristal.php">CRISTAL</a></button>
                <button class="botonfiltro" id="porcelana"><a href="porcelana.php">PORCELANA</a></button>

                <button class="botonfiltro" id="menormayor">MENOR-MAYOR</button>
                <button class="botonfiltro" id="mayormenor">MAYOR-MENOR</button>
            </div>
        </nav>
        <ul>
            <li><a class="boton_carrito" href="carrito.html"><i class="bi bi-cart"></i>CARRITO <span class="cantidad_carrito">0</span></a></li>
        </ul>
    </aside>

    <main>
    <?php 
                $imagen=$datos["imagen"];
                $producto=$datos["producto"];
                $material=$datos["material"];
                $descripcion=$datos["descripcion"];
                $precio=$datos["precio"];
                ?>

        <h2 class="titulo">-aemere tazas</h2>
        <div class="contenedor_productos">
                    <div class="card" style="width: 22rem;">
                            <div class="img-card-center"><img class="card-img-top" src="data:image/jpg;base64,<?php echo base64_encode($registro['imagen']) ?>" width="200px" height="200px"></div>
                            <div href="productos.php?id=<?php echo $registro['id'];?>" class="card-body">
                                <h5 class="card-title"><?php echo ucwords($registro['producto']) ?></h5>
                                <p class="card-text"><?php echo $registro ['descripcion']; ?></p>
                                <span class=precio><b>$ <?php echo $registro ['precio']; ?></b></span>
                                <button class=carritosimbolo><span><i class="bi bi-cart" id=carritoboost></i></span></button>
                            </div>
                        </a>        
                    </div>
               
        </div>  
             
    </main>
</div>
<footer class="texto_footer">©AEMERE2023</footer> 





</body>
</html>
