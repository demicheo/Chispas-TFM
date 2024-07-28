<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHISPAS - festival de cortos</title>
    <!-- fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Lexend:wght@100..900&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- favicon? -->
    <link rel="icon" type="image/ico" href="chispa-favico.ico"/>



</head>

<body>
    <header class="header-contenedor">
        <div class="header container px-5">
            <div class="header-logo_contenedor d-flex align-items-center justify-content-around">
                <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.8433 15.0608C21.4565 31.9353 8.98436 32.3901 14.187 15.0847C8.98461 32.3898 -1.38981 25.8676 13.6409 14.7415C-1.39007 25.8676 -5.7041 14.8591 13.4138 14.162C-5.70436 14.8591 -2.31053 3.56972 13.5924 13.5679C-2.31053 3.56972 7.4952 -3.68851 14.1083 13.1858C7.4952 -3.68875 19.9673 -4.14355 14.7647 13.1619C19.967 -4.14331 30.3415 2.37898 15.3107 13.5051C30.3417 2.37898 34.6558 13.3874 15.5379 14.0845C34.656 13.3874 31.2622 24.6768 15.3593 14.6787C31.2622 24.6768 21.4565 31.935 14.8433 15.0608Z"
                            fill="#27F09F" />
                </svg>
                <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.2436 1.16877C12.1643 1.16877 11.6681 -0.425305 9.98583 0.850632C8.30355 2.12657 10.0902 4.69321 8.40793 5.96915C6.72564 7.24509 4.93898 4.6782 3.2567 5.95414C1.57441 7.23007 2.87331 8.21523 2.23059 10.2797C1.58788 12.344 -0.0176363 12.344 0.625079 14.4083C1.26756 16.4725 4.15848 15.4922 4.80097 17.5565C5.44368 19.621 2.55274 20.6013 3.19546 22.6658C3.83817 24.7303 5.13706 23.7451 6.81935 25.021C8.50163 26.297 8.00527 27.8908 10.0846 27.8908C12.164 27.8908 12.164 24.7179 14.2434 24.7179C16.3228 24.7179 16.323 27.8908 18.4024 27.8908C20.4818 27.8908 19.9859 26.2967 21.6681 25.021C23.3504 23.7454 24.6493 24.7305 25.2918 22.666C25.9343 20.6018 23.0436 19.6212 23.6863 17.5569C24.329 15.4924 27.2197 16.473 27.8622 14.4085C28.5049 12.344 26.8992 12.344 26.2567 10.2795C25.6142 8.21499 26.9131 7.23007 25.2308 5.95438C23.5485 4.67844 21.7619 7.24533 20.0796 5.96963C18.3973 4.6937 20.1837 2.12342 18.4998 0.849906C17.068 -0.233067 16.3228 1.16925 14.2432 1.16901L14.2436 1.16877Z"
                            fill="#6F00FF" />
                </svg>

                <a href="index.php" class="header__logo">Chispas</a>

                <svg width="29" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.5008 27.8908C12.0739 27.8908 13.1384 25.1736 12.1293 24.1069C11.1203 23.0401 9.82701 24.4075 8.81793 23.3408C7.80885 22.274 9.10235 20.9069 8.09327 19.8401C7.08418 18.7734 5.79069 20.1408 4.78161 19.0741C3.77253 18.0073 5.06579 16.6399 4.0567 15.5732C3.04762 14.5064 0.477295 15.6318 0.477295 14.1234C0.477295 12.6149 3.04762 13.7403 4.0567 12.6736C5.06579 11.6069 3.7723 10.2397 4.78138 9.17296C5.79046 8.10622 7.08372 9.47362 8.0928 8.40688C9.10188 7.34014 7.80838 5.97273 8.81746 4.90599C9.82654 3.83925 11.12 5.20641 12.1291 4.13967C13.1382 3.07292 12.0736 0.355713 13.5005 0.355713C14.9275 0.355713 13.8629 3.07292 14.872 4.13967C15.881 5.20641 17.1743 3.839 18.1834 4.90575C19.1924 5.97249 17.899 7.33965 18.908 8.40639C19.9171 9.47313 21.2106 8.10573 22.2197 9.17247C23.2288 10.2392 21.9355 11.6066 22.9446 12.6734C23.9537 13.7401 26.524 12.6147 26.524 14.1231C26.524 15.6316 23.9537 14.5062 22.9446 15.5729C21.9355 16.6397 23.229 18.0068 22.2199 19.0736C21.2108 20.1403 19.9176 18.7729 18.9085 19.8397C17.8994 20.9064 19.1929 22.2738 18.1838 23.3405C17.1748 24.4073 15.3751 23.0049 14.7099 24.3396C13.8259 26.1128 14.9279 27.8908 13.5008 27.8908Z"
                            fill="#6F00FF" />
                </svg>

                <svg width="29" height="26" viewBox="0 0 29 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.9184 8.25421C40.4699 -6.23285 19.8458 46.6814 17.833 11.0392C19.8458 46.6814 -20.8863 4.18922 15.6891 8.80276C-20.8863 4.18922 40.4699 -6.23285 18.9184 8.25421Z"
                            fill="#27F09F" />
                </svg>

            </div>

            <nav class=" header__menu">
                <ul>
                    <li class="link m-3"><a class="<?php if($active == 'index') {echo 'active';} ?>" aria-current="page" href="index.php">Home</a></li>
                    <li class="link m-3"><a class="<?php if($active == 'festival') {echo 'active';} ?>" href="index.php">Festival</a></li>
                    <li class="link m-3"><a class="<?php if($active == 'participantes') {echo 'active';} ?>" href="participantes.php">Participantes</a></li>
                    <li class="link m-3"><a class="<?php if($active == 'programacion') {echo 'active';} ?>" href="index.php">Programación</a></li>
                    <li class="link m-3"><a class="<?php if($active == 'entradas') {echo 'active';} ?>" href="entradas.php">Entradas</a></li>
                </ul>
            </nav>

            <button class="header__burger">
                <div class="p-uno"></div>
                <div class="p-centro"></div>
                <div class="p-estrella"></div>
                <div class="p-tres"></div>
            </button>
        </div>
    </header>