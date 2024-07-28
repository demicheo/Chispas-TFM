<?php include('header.php'); ?>

<section class="seccion-verde">

    <div class="container entradas">
        <div class="px-4">
            <h1 class="titulo-1">¡Vas a asistir a chispas!</h1>
            <p class="parrafo-1 mt-2">Estamos deseando verte</p>
        </div>

        <div class="container mt-3 px-4  pb-4">
            <h2 class="titulo-2">¡Primero selecciona tu entrada!</h2>
            <div class="selector-pase col-12 col-md-8 col-xl-6 d-flex justify-content-center align-items-start flex-column">
                <div class="pase d-flex align-items-center justify-content-center">
                    <input type="radio" id="vip" value="vip" class=" boton-pase me-2"/>
                    <label for="vip"> Pase Vip</label>
                </div>
                <div class="pase d-flex align-items-center justify-content-center">
                    <input type="radio" id="dia" value="dia" checked class="me-2 boton-pase"/>
                    <label for="dia">Pase 1 día</label>
                </div>
                <div class="pase d-flex align-items-center justify-content-center">
                    <input type="radio" id="proyeccion" value="proyeccion" class="me-2 boton-pase"/>
                    <label for="proyeccion">Pase de proyección</label>
                </div>
            </div>
            <div class="botones mt-3  col-12 col-md-8 col-xl-6 d-flex justify-content-end">
                <a href="entradas-2.php" class="boton fill-morado">Continuar</a>
            </div>
        </div>
    </div>

</section>




<?php include('footer.php'); ?>
