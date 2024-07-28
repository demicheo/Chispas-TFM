<section class="container-fluid mt-4">
            <div class="container">
                <div class="menu-filtro pb-3 px-4">
                    <span id="categoriaTitulo">todos los cortos</span>
                    <button id="toggleCategoria" class="boton-mas">+</button>
                </div>

                <ul id="categoriaMenu" class="menu-categoria cerrado d-flex flex-wrap justify-content-center align-items-center">
                    <li>
                        <button class="categoria-opcion" data-category="Video">Video</button>
                    </li>

                    <li>
                        <button class="categoria-opcion" data-category="Animacion">Animación</button>
                    </li>

                    <li>
                        <button class="categoria-opcion" data-category="StopMotion">Stop Motion</button>
                    </li>

                    <li>
                        <button class="categoria-opcion" data-category="MixedMedia">Mixed media</button>
                    </li>

                    <li>
                        <button class="categoria-opcion" data-category="all">Todos los cortos</button>
                    </li>

                </ul>

                <section id="contenedorTarjetasCortos" class="cortos mt-md-5 d-flex align-items-center justify-content-start flex-wrap">

                    <article class="tarjeta-corto container mb-1 col-12 col-md-8 col-xl-4 " data-category="StopMotion">

                        <div class="row g-0 flex-column align-items-center ">

                            <div
                                class="tarjeta-superior d-flex flex-column align-items-center justify-content-center p-3 col-12">
                                <img src="img/foto_tarjeta-crescendo.webp" alt="">
                            </div>

                            <div class="tarjeta-inferior col-12">
                                <div class="d-flex">
                                    <div class="info-inferior p-3 pt-0 col-8">

                                        <h3 class="tarjeta-titulo">Inicio</h3>
                                        <ul class="tarjeta-list pt-2 mt-2">
                                            <li class="d-flex tarjeta-info ">Equipo:<p class="ps-2"> Terra
                                                </p>
                                            </li>
                                            <li class="d-flex tarjeta-info ">Género:<p class="ps-2"> Drama</p>
                                            </li>
                                            <li class="d-flex tarjeta-info ">Duración:<p class="ps-2"> 5 min.</p>
                                            </li>
                                        </ul>

                                    </div>
                                    <a href="participantes-masinfo.php" class="boton-inferior-cont col-4 ps-2 pt-2">
                                        <button class="boton-inferior">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.583mm" height="10.583mm"
                                                viewBox="0 0 30 30">
                                                <path class="path-mas medio"
                                                    d="M30,15h0c0,1.381-1.119,2.5-2.5,2.5H2.5c-1.381,0-2.5-1.119-2.5-2.5h0c0-1.381,1.119-2.5,2.5-2.5h25c1.381,0,2.5,1.119,2.5,2.5Z" />
                                                <path class="path-mas abajo"
                                                    d="M17.5,27.5c0,1.381-1.119,2.5-2.5,2.5h0c-1.381,0-2.5-1.119-2.5-2.5v-10c0-1.381,1.119-2.5,2.5-2.5h0c1.381,0,2.5,1.119,2.5,2.5v10Z" />
                                                <path class="path-mas arriba"
                                                    d="M15,0h0c1.381,0,2.5,1.119,2.5,2.5v10c0,1.381-1.119,2.5-2.5,2.5h0c-1.381,0-2.5-1.119-2.5-2.5V2.5c0-1.381,1.119-2.5,2.5-2.5Z" />
                                            </svg>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="tarjeta-corto container mb-1 col-12 col-md-8 col-xl-4" data-category="MixedMedia">

                        <div class="row g-0 flex-column align-items-center">

                            <div
                                class="tarjeta-superior d-flex flex-column align-items-center justify-content-center p-3 col-12">
                                <img src="img/foto-tarjeta-corto-2.jpeg" alt="">
                            </div>

                            <div class="tarjeta-inferior col-12">
                                <div class="d-flex">
                                    <div class="info-inferior p-3 pt-0 col-8">

                                        <h3 class="tarjeta-titulo">Fausto</h3>
                                        <ul class="tarjeta-list pt-2 mt-2">
                                            <li class="d-flex tarjeta-info ">Equipo:<p class="ps-2"> Andy's Foot
                                                </p>
                                            </li>
                                            <li class="d-flex tarjeta-info ">Género:<p class="ps-2"> Acción</p>
                                            </li>
                                            <li class="d-flex tarjeta-info ">Duración:<p class="ps-2"> 7 min.</p>
                                            </li>
                                        </ul>

                                    </div>
                                    <a href="participantes-masinfo.php" class="boton-inferior-cont col-4 ps-2 pt-2">
                                        <button class="boton-inferior">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.583mm" height="10.583mm"
                                                viewBox="0 0 30 30">
                                                <path class="path-mas medio"
                                                    d="M30,15h0c0,1.381-1.119,2.5-2.5,2.5H2.5c-1.381,0-2.5-1.119-2.5-2.5h0c0-1.381,1.119-2.5,2.5-2.5h25c1.381,0,2.5,1.119,2.5,2.5Z" />
                                                <path class="path-mas abajo"
                                                    d="M17.5,27.5c0,1.381-1.119,2.5-2.5,2.5h0c-1.381,0-2.5-1.119-2.5-2.5v-10c0-1.381,1.119-2.5,2.5-2.5h0c1.381,0,2.5,1.119,2.5,2.5v10Z" />
                                                <path class="path-mas arriba"
                                                    d="M15,0h0c1.381,0,2.5,1.119,2.5,2.5v10c0,1.381-1.119,2.5-2.5,2.5h0c-1.381,0-2.5-1.119-2.5-2.5V2.5c0-1.381,1.119-2.5,2.5-2.5Z" />
                                            </svg>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="tarjeta-corto container mb-1 col-12 col-md-8 col-xl-4" data-category="Animacion">

                        <div class="row g-0 flex-column align-items-center">

                            <div
                                class="tarjeta-superior d-flex flex-column align-items-center justify-content-center p-3 col-12">
                                <img src="img/foto-tarjeta-corto-3.jpeg" alt="">
                            </div>

                            <div class="tarjeta-inferior col-12">
                                <div class="d-flex">
                                    <div class="info-inferior p-3 pt-0 col-8">

                                        <h3 class="tarjeta-titulo">Mi abuelo decía...</h3>
                                        <ul class="tarjeta-list pt-2 mt-2">
                                            <li class="d-flex tarjeta-info ">Equipo:<p class="ps-2"> Los del sofá
                                                </p>
                                            </li>
                                            <li class="d-flex tarjeta-info ">Género:<p class="ps-2"> Comedia</p>
                                            </li>
                                            <li class="d-flex tarjeta-info ">Duración:<p class="ps-2"> 3 min.</p>
                                            </li>
                                        </ul>

                                    </div>
                                    <a href="participantes-masinfo.php" class="boton-inferior-cont col-4 ps-2 pt-2">
                                        <button class="boton-inferior">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.583mm" height="10.583mm"
                                                viewBox="0 0 30 30">
                                                <path class="path-mas medio"
                                                    d="M30,15h0c0,1.381-1.119,2.5-2.5,2.5H2.5c-1.381,0-2.5-1.119-2.5-2.5h0c0-1.381,1.119-2.5,2.5-2.5h25c1.381,0,2.5,1.119,2.5,2.5Z" />
                                                <path class="path-mas abajo"
                                                    d="M17.5,27.5c0,1.381-1.119,2.5-2.5,2.5h0c-1.381,0-2.5-1.119-2.5-2.5v-10c0-1.381,1.119-2.5,2.5-2.5h0c1.381,0,2.5,1.119,2.5,2.5v10Z" />
                                                <path class="path-mas arriba"
                                                    d="M15,0h0c1.381,0,2.5,1.119,2.5,2.5v10c0,1.381-1.119,2.5-2.5,2.5h0c-1.381,0-2.5-1.119-2.5-2.5V2.5c0-1.381,1.119-2.5,2.5-2.5Z" />
                                            </svg>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="tarjeta-corto container mb-1 col-12 col-md-8 col-xl-4 " data-category="Video">

                        <div class="row g-0 flex-column align-items-center ">

                            <div
                                class="tarjeta-superior d-flex flex-column align-items-center justify-content-center p-3 col-12">
                                <img src="img/foto-tarjeta-corto-1.jpeg" alt="">
                            </div>

                            <div class="tarjeta-inferior col-12">
                                <div class="d-flex">
                                    <div class="info-inferior p-3 pt-0 col-8">

                                        <h3 class="tarjeta-titulo">Crescendo</h3>
                                        <ul class="tarjeta-list pt-2 mt-2">
                                            <li class="d-flex tarjeta-info ">Equipo:<p class="ps-2"> Terra
                                                </p>
                                            </li>
                                            <li class="d-flex tarjeta-info ">Género:<p class="ps-2"> Drama</p>
                                            </li>
                                            <li class="d-flex tarjeta-info ">Duración:<p class="ps-2"> 5 min.</p>
                                            </li>
                                        </ul>

                                    </div>
                                    <a href="participantes-masinfo.php" class="boton-inferior-cont col-4 ps-2 pt-2">
                                        <button class="boton-inferior">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.583mm" height="10.583mm"
                                                viewBox="0 0 30 30">
                                                <path class="path-mas medio"
                                                    d="M30,15h0c0,1.381-1.119,2.5-2.5,2.5H2.5c-1.381,0-2.5-1.119-2.5-2.5h0c0-1.381,1.119-2.5,2.5-2.5h25c1.381,0,2.5,1.119,2.5,2.5Z" />
                                                <path class="path-mas abajo"
                                                    d="M17.5,27.5c0,1.381-1.119,2.5-2.5,2.5h0c-1.381,0-2.5-1.119-2.5-2.5v-10c0-1.381,1.119-2.5,2.5-2.5h0c1.381,0,2.5,1.119,2.5,2.5v10Z" />
                                                <path class="path-mas arriba"
                                                    d="M15,0h0c1.381,0,2.5,1.119,2.5,2.5v10c0,1.381-1.119,2.5-2.5,2.5h0c-1.381,0-2.5-1.119-2.5-2.5V2.5c0-1.381,1.119-2.5,2.5-2.5Z" />
                                            </svg>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="tarjeta-corto container mb-1 col-12 col-md-8 col-xl-4" data-category="Animacion">

                        <div class="row g-0 flex-column align-items-center">

                            <div
                                class="tarjeta-superior d-flex flex-column align-items-center justify-content-center p-3 col-12">
                                <img src="img/foto-tarjeta-corto-3.jpeg" alt="">
                            </div>

                            <div class="tarjeta-inferior col-12">
                                <div class="d-flex">
                                    <div class="info-inferior p-3 pt-0 col-8">

                                        <h3 class="tarjeta-titulo">Mi abuelo decía...</h3>
                                        <ul class="tarjeta-list pt-2 mt-2">
                                            <li class="d-flex tarjeta-info ">Equipo:<p class="ps-2"> Los del sofá
                                                </p>
                                            </li>
                                            <li class="d-flex tarjeta-info ">Género:<p class="ps-2"> Comedia</p>
                                            </li>
                                            <li class="d-flex tarjeta-info ">Duración:<p class="ps-2"> 3 min.</p>
                                            </li>
                                        </ul>

                                    </div>
                                    <a href="participantes-masinfo.php" class="boton-inferior-cont col-4 ps-2 pt-2">
                                        <button class="boton-inferior">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.583mm" height="10.583mm"
                                                viewBox="0 0 30 30">
                                                <path class="path-mas medio"
                                                    d="M30,15h0c0,1.381-1.119,2.5-2.5,2.5H2.5c-1.381,0-2.5-1.119-2.5-2.5h0c0-1.381,1.119-2.5,2.5-2.5h25c1.381,0,2.5,1.119,2.5,2.5Z" />
                                                <path class="path-mas abajo"
                                                    d="M17.5,27.5c0,1.381-1.119,2.5-2.5,2.5h0c-1.381,0-2.5-1.119-2.5-2.5v-10c0-1.381,1.119-2.5,2.5-2.5h0c1.381,0,2.5,1.119,2.5,2.5v10Z" />
                                                <path class="path-mas arriba"
                                                    d="M15,0h0c1.381,0,2.5,1.119,2.5,2.5v10c0,1.381-1.119,2.5-2.5,2.5h0c-1.381,0-2.5-1.119-2.5-2.5V2.5c0-1.381,1.119-2.5,2.5-2.5Z" />
                                            </svg>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="tarjeta-corto container mb-1 col-12 col-md-8 col-xl-4 " data-category="Video">

                        <div class="row g-0 flex-column align-items-center ">

                            <div
                                class="tarjeta-superior d-flex flex-column align-items-center justify-content-center p-3 col-12">
                                <img src="img/foto-tarjeta-corto-1.jpeg" alt="">
                            </div>

                            <div class="tarjeta-inferior col-12">
                                <div class="d-flex">
                                    <div class="info-inferior p-3 pt-0 col-8">

                                        <h3 class="tarjeta-titulo">Crescendo</h3>
                                        <ul class="tarjeta-list pt-2 mt-2">
                                            <li class="d-flex tarjeta-info ">Equipo:<p class="ps-2"> Terra
                                                </p>
                                            </li>
                                            <li class="d-flex tarjeta-info ">Género:<p class="ps-2"> Drama</p>
                                            </li>
                                            <li class="d-flex tarjeta-info ">Duración:<p class="ps-2"> 5 min.</p>
                                            </li>
                                        </ul>

                                    </div>
                                    <a href="participantes-masinfo.php" class="boton-inferior-cont col-4 ps-2 pt-2">
                                        <button class="boton-inferior">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.583mm" height="10.583mm"
                                                viewBox="0 0 30 30">
                                                <path class="path-mas medio"
                                                    d="M30,15h0c0,1.381-1.119,2.5-2.5,2.5H2.5c-1.381,0-2.5-1.119-2.5-2.5h0c0-1.381,1.119-2.5,2.5-2.5h25c1.381,0,2.5,1.119,2.5,2.5Z" />
                                                <path class="path-mas abajo"
                                                    d="M17.5,27.5c0,1.381-1.119,2.5-2.5,2.5h0c-1.381,0-2.5-1.119-2.5-2.5v-10c0-1.381,1.119-2.5,2.5-2.5h0c1.381,0,2.5,1.119,2.5,2.5v10Z" />
                                                <path class="path-mas arriba"
                                                    d="M15,0h0c1.381,0,2.5,1.119,2.5,2.5v10c0,1.381-1.119,2.5-2.5,2.5h0c-1.381,0-2.5-1.119-2.5-2.5V2.5c0-1.381,1.119-2.5,2.5-2.5Z" />
                                            </svg>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                </section>
                
                <nav class="container paginador col-12  mt-2">
                        <ul class="pagination justify-content-center align-items-center">
                            <li class="page-item-arrow me-3 d-none"><a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2.965mm" height="4.702mm"
                                        viewBox="0 0 8.404 13.327">

                                        <path fill="black" class="cls-1"
                                            d="M8.372,6.331c-.064-.329-.223-.643-.478-.898L2.971.51C2.292-.17,1.19-.17.51.51-.17,1.19-.17,2.292.51,2.971l3.692,3.692-3.692,3.692c-.68.68-.68,1.782,0,2.462s1.782.68,2.462,0l4.923-4.923c.425-.425.584-1.015.478-1.563Z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="page-item mx-2 active d-flex align-items-center justify-content-center"><a
                                    href="#">1</a></li>
                            <li class="page-item mx-2 d-flex align-items-center justify-content-center"><a
                                    href="#">2</a></li>
                            <li class="page-item mx-2 d-flex align-items-center justify-content-center"><a
                                    href="#">3</a></li>
                            <li class="page-item-arrow ms-3 "><a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2.965mm" height="4.702mm"
                                        viewBox="0 0 8.404 13.327">

                                        <path fill="black" class="cls-1"
                                            d="M8.372,6.331c-.064-.329-.223-.643-.478-.898L2.971.51C2.292-.17,1.19-.17.51.51-.17,1.19-.17,2.292.51,2.971l3.692,3.692-3.692,3.692c-.68.68-.68,1.782,0,2.462s1.782.68,2.462,0l4.923-4.923c.425-.425.584-1.015.478-1.563Z" />
                                    </svg></a>
                            </li>
                        </ul>
                    </nav>
            </div>
    </section>