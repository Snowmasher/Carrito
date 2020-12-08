<html>
    <head>
        <meta charset="utf-8">
        <title>BitMarket</title>
        <link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
        <link>
    <head>

    <?php
    
        if($_GET["doom"] == "doom"){

            $cont = $_COOKIE["doom"];
            if (!isset($_COOKIE["doom"])) {
                setcookie("doom", 1);
            }else{
                $cont = $cont +1;
                setcookie("doom", $cont);
            }
            
    }
        
        elseif($_GET["metroid"] == "metroid"){

            $cont = $_COOKIE["metroid"];
            if (!isset($_COOKIE["metroid"])) {
                setcookie("metroid", 1);
            }else{
                $cont = $cont +1;
                setcookie("metroid", $cont);
            }
        }

        elseif($_GET["street"] == "street"){

            $cont = $_COOKIE["street"];
            if (!isset($_COOKIE["street"])) {
                setcookie("street", 1);
            }else{
                $cont = $cont +1;
                setcookie("street", $cont);
            }

        }

        elseif($_GET["space"] == "space"){

            $cont = $_COOKIE["space"];
            if (!isset($_COOKIE["space"])) {
                setcookie("space", 1);
            }else{
                $cont = $cont +1;
                setcookie("space", $cont);
            }

        }
        
    ?>

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

        <section id="catalogo">
            <article class="producto" id="doom">
                <div class="descripcion">
                    <h2>DOOM</h2>
                    <p>Precio:</p>
                </div>
                <img src="../img/Doom_cover.webp">
                <form action="http://localhost:3000/src/catalogo.php" method="GET">
                    <input type="hidden" name="doom" value="doom">
                    <input type="submit" class="boton" value="Añadir al carrito">
                </form>
            </article>

            <article class="producto" id="metroid">
                <div class="descripcion">
                    <h2>Metroid</h2>
                    <p>Precio:</p>
                </div>
                <img src="../img/metroid.jpg">
                <form action="http://localhost:3000/src/catalogo.php" method="GET">
                    <input type="hidden" name="metroid" value="metroid">
                    <input type="submit" class="boton" value="Añadir al carrito">
                </form>
            </article>

            <article class="producto" id="street">
                <div class="descripcion">
                    <h2>Street Fighter</h2>
                    <p>Precio:</p>
                </div>
                <img src="../img/streetFighter.jpg">
                <form action="http://localhost:3000/src/catalogo.php" method="GET">
                    <input type="hidden" name="street" value="street">
                    <input type="submit" class="boton" value="Añadir al carrito">
                </form>
            </article>

            <article class="producto" id="space">
                <div class="descripcion">
                    <h2>Space Invaders</h2>
                    <p>Precio:</p>
                </div>
                <img src="../img/space.jpg">
                <form action="http://localhost:3000/src/catalogo.php" method="GET">
                    <input type="hidden" name="space" value="space">
                    <input type="submit" class="boton" value="Añadir al carrito">
                </form>
            </article>
        </section>
        
        <footer>
            <a href="https://github.com/Snowmasher" target="_blank"><img src="../img/github.png"></a>
            <p>Álvaro Robles Ortega</p>
        </footer>
    </body>
<html>