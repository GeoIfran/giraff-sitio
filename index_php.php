<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giraff. Calzado con altura</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="calesita.css" type="text/css">
</head>
<body>
    <?php include 'header.php'?>
    <main>
        <section id="calesita" class="slider">
            <ul id="Calesita_de_imagenes">
                <li id="Imagen_calesita_1"><img src="imagenes/home.jpg" alt="" style="max-width: 100%; min-width: 99%;"></li>
                <li id="Imagen_calesita_2"><img src="imagenes/home.jpg" alt="" style="max-width: 100%; min-width: 99%;"></li> 
                <li id="Imagen_calesita_3"><img src="imagenes/home.jpg" alt="" style="max-width: 100%; min-width: 99%;"></li>
            </ul>
        </section>
        <section id="catalogo_home">
            <div id="categoria-productos" class="categorias" style="display: grid; grid-template-columns: auto auto; align-content: center;">
                <div id="cat_dama" class="tarjeta_categoria" style="background-color:#a57a67 ;  color: beige; padding: 1em;margin: 1em; font-size: 1.5em;">
                    <div id="imagen_cat_dam"><img src="" alt=""></div>
                    <div id="texto_cat_dam">Línea Dama</div>
                </div>
                <div id="cat_caballero" class="tarjeta_categoria" style="background-color: RGB(63,54,37) ; color:beige; padding: 1em;margin: 1em; font-size: 1.5em;">
                    <div id="imagen_cat_cab"><img src="" alt=""></div>
                    <div id="texto_cat_cab">Línea Caballero</div>
                </div>
            </div>
        </section>
        <section id="mensaje">
            <div class="mensaje_home">Mas de 17 años en el mercado, <br>fabricando zapatos 100% cuero Argentino.</div>
        </section>
    </main>
    <?php include 'footer.php' ?>
    
</body>
</html>