console.log('Tamos ready');

/* BURGER */

const menuBurger = document.querySelector('.header__burger');
const menuNav = document.querySelector('.header__menu');


let menuOpen = false;


menuBurger.addEventListener('click', function () {

    menuOpen = !menuOpen
    console.log('botón pulsado' + menuOpen);

    if (menuOpen == true) {
        menuBurger.classList.add('pulsado');
        menuNav.classList.add('visible');

    }
    else {
        menuBurger.classList.remove('pulsado');
        menuNav.classList.remove('visible');

    }

})




/*TARJETAS Y SORT*/

document.addEventListener('DOMContentLoaded', (event) => {
    // Obtener los elementos del DOM
    const botonMas = document.getElementById('toggleCategoria');
    let mostrarCategorias = false;
    const menuCat = document.getElementById('categoriaMenu');
    const botonCat = document.querySelectorAll('.categoria-opcion');
    const tituloCat = document.getElementById('categoriaTitulo');
    const tarjetasCortos = document.querySelectorAll('.tarjeta-corto');
    const tarjetasCont = document.getElementById('contenedorTarjetasCortos');
    const paginador = document.querySelector('.paginador')

    // Añadir evento al botón para abrir/cerrar el menú
    botonMas.addEventListener("click", function() {
        // Verificar el estado de mostrarCategorias
        if (!mostrarCategorias) {
            console.log('abrir');
            mostrarCategorias = true;
            menuCat.classList.add("abierto");
            menuCat.classList.remove("cerrado");
            tarjetasCont.classList.add("desplazar");
            botonMas.classList.add('activo');
        } else {
            console.log('cerrar');
            mostrarCategorias = false;
            menuCat.classList.add("cerrado");
            menuCat.classList.remove("abierto");
            tarjetasCont.classList.remove("desplazar");
            botonMas.classList.remove('activo');
        }
    });

    // Añadir evento a cada botón de categoría
    botonCat.forEach(option => {
        option.addEventListener("click", function() {
            const selectedCategory = this.getAttribute("data-category");
            tituloCat.textContent = option.innerText;
            botonMas.classList.remove('activo');

            tarjetasCortos.forEach(card => {
                if (selectedCategory === "all") {
                    card.style.display = "block";
                } else {
                    card.style.display = card.getAttribute("data-category") === selectedCategory ? "block" : "none";
                }
            }); 

            //decidir si me gusta más que se cierre o que se quede abierto hasta que pulsas el +
            mostrarCategorias = false;
            menuCat.classList.add("cerrado");
            menuCat.classList.remove("abierto");
            tarjetasCont.classList.remove("desplazar"); 
        });
    });
});


document.querySelectorAll('.boton-desplegable').forEach(button => {
    button.addEventListener('click', function() {
        const desplegableElemento = button.closest('.desplegable-elemento');
        
        if (desplegableElemento) {
            const info = desplegableElemento.querySelector('.info');
            
            if (info) {
                info.classList.toggle('d-none');
                button.classList.toggle('desplegado'); // Toggle the 'desplegado' class on the button
            }
        }
    });
});



//botones que funcionan de enlace

function irEntradas() {
    window.location.href = './entradas.php';
    console.log('tenog susto')
}


// desplegable acordeon

document.addEventListener('DOMContentLoaded', function() {
    // Selecciona todos los elementos con la clase desplegable-item
    const acordeonItems = document.querySelectorAll('.desplegable-item');

    acordeonItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            // Añade la clase elevate al item
            item.classList.add('elevate');
            // Encuentra el párrafo dentro del item y quita la clase d-none
            const p = item.querySelector('p');
            if (p) {
                p.classList.remove('d-none');
                p.classList.add('show');
            }
        });

        item.addEventListener('mouseleave', function() {
            // Quita la clase elevate del item
            item.classList.remove('elevate');
            // Encuentra el párrafo dentro del item y añade la clase d-none
            const p = item.querySelector('p');
            if (p) {
                p.classList.remove('show');
                p.classList.add('d-none');
            }
        });
    });
});
