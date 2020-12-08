<html>
    <head>
        <meta charset="utf-8">
        <title>BitMarket</title>
        <link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
        <link>
    <head>

    <body>
        <header>
            <h1>BITMARKET</h1>
        </header>

        <nav>
            <ul id="desplegable">
				<li><a href="../index.php">Inicio</a></li>
				<li><a href="./catalogo.php">Catálogo</a>
					<ul>
						<li><a href="./catalogo.php#doom">DOOM</a></li>
						<li><a href="./catalogo.php#metroid">Metroid</a></li>
						<li><a href="./catalogo.php#street">Street Fighter</a></li>
						<li><a href="./catalogo.php#space">Space Invader</a></li>
					</ul>
				</li>
				<li><a href="./carrito.php">Mi Carrito</a></li>
			</ul>
        </nav>

        <section>
            <article id="carrito">
                <?php
                    require("Producto.php");

                    $doom = new Producto();
                    $doom->setNombre("Doom");
                    $doom->setPrecio(9.99);

                    $metroid = new Producto();
                    $metroid->setNombre("Metroid");
                    $metroid->setPrecio(9.99);

                    $street = new Producto();
                    $street->setNombre("Street Fighter");
                    $street->setPrecio(9.99);

                    $space = new Producto();
                    $space->setNombre("Space Invaders");
                    $space->setPrecio(9.99);
                ?>
                <table>
                    <tr>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                    <tr>
                    <?php

                        $delete = $_GET["delete"];
                        
                        if ($_GET != null || $_GET["delete"] != null || $_GET["delete"] != "") {
                            if($delete == "doom"){
                                setcookie("doom", 0);
                            }
                            elseif($delete == "metroid"){
                                setcookie("metroid", 0);
                            }
                            elseif($delete == "street"){
                                setcookie("street", 0);
                            }
                            elseif($delete == "space"){
                                setcookie("space", 0);
                            }
                        }

                        foreach($_COOKIE as $key => $value){
                            
                            if($key == "doom" && $value != 0){
                                
                                echo "<tr><td>";
                                echo $doom->getNombre();
                                echo "</td>";

                                echo "<td>";
                                echo $value;
                                echo "</td>";

                                echo "<td>";
                                echo $doom->getPrecio()*$value;
                                echo "</td>";

                                echo "<td><form action='carrito.php' method='GET'><input type='hidden' name='dalete' value='doom'><input class='delete' type='submit' value='X'></form></td></tr>";
                            }
                            elseif($key == "metroid" && $value != 0){
                                echo "<tr><td>";
                                echo $metroid->getNombre();
                                echo "</td>";

                                echo "<td>";
                                echo $value;
                                echo "</td>";

                                echo "<td>";
                                echo $metroid->getPrecio()*$value;
                                echo "</td>";

                                echo "<td><form action='carrito.php' method='GET'><input type='hidden' name='dalete' value='metroid'><input class='delete' type='submit' value='X'></form></td></tr>";
                            }
                            elseif($key == "street" && $value != 0){
                                echo "<tr><td>";
                                echo $street->getNombre();
                                echo "</td>";

                                echo "<td>";
                                echo $value;
                                echo "</td>";

                                echo "<td>";
                                echo $street->getPrecio()*$value;
                                echo "</td>";

                                echo "<td><form action='carrito.php' method='GET'><input type='hidden' name='dalete' value='street'><input class='delete' type='submit' value='X'></form></td></tr>";
                            }
                            elseif($key == "space" && $value != 0){
                                echo "<tr><td>";
                                echo $space->getNombre();
                                echo "</td>";

                                echo "<td>";
                                echo $value;
                                echo "</td>";

                                echo "<td>";
                                echo $space->getPrecio()*$value;
                                echo "</td>";

                                echo "<td><form action='carrito.php' method='GET'><input type='hidden' name='dalete' value='space'><input class='delete' type='submit' value='X'></form></td></tr>";
                            }
                        }
                    ?>
                </table>
                
                <input class="boton" type="button" value="PAGAR AHORA">
                    
            </article>
        </section>
        
        <footer>
            <a href="https://github.com/Snowmasher" target="_blank"><img src="../img/github.png"></a>
            <p>Álvaro Robles Ortega</p>
        </footer>
    </body>
<html>