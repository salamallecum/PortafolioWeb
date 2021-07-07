$(document).ready(function(){
     
    //PROGRAMACIÓN PARA EL FILTRADO DE MIS PROYECTOS
    //Se agrega la clase active al primer enlace
    $('.category_list .category_item[category="all"]').addClass('ct_item-active');

    //Filtramos los productos
    $('.category_item').click(function(){
        var catProduct = $(this).attr('category');

        //Agregamos la clase item al link que sea seleccionado
        $('.category_item').removeClass('ct_item-active');
        $(this).addClass('ct_item-active');

        //Metodo de filtrado 
        $('.project-item').css('transform', 'scale(0)');
        function hideProduct(){
            $('.project-item').hide(); 
        }setTimeout(hideProduct, 400); 
        
        //Muestra los productos
        function showProduct(){
            $('.project-item[category="'+catProduct+'"]').show();
            $('.project-item[category="'+catProduct+'"]').css('transform', 'scale(1)'); 
        }setTimeout(showProduct, 400);        
    });

    //Muestra todos los productos
    $('.category_item[category="all"]').click(function(){
        function showAll(){
            $('.project-item').show();
            $('.project-item').css('transform', 'scale(1)');
        }setTimeout(showAll, 400);   
    });

    //PROGRAMACION PARA LA PRESENTACION DE MIS PROYECTOS EN EL POPUP
    // Agregamos listener para las imagenes
	const overlay = document.getElementById('overlay');
	document.querySelectorAll('.project-list .project-item img').forEach((elemento) => {
		elemento.addEventListener('click', () => {
			const ruta = elemento.getAttribute('src');
			const descripcion = elemento.parentNode.parentNode.dataset.descripcion;

			overlay.classList.add('activo');
			document.querySelector('#overlay img').src = ruta;
			document.querySelector('#overlay .descripcion').innerHTML = descripcion;
		});
	});

	// Eventlistener del boton de cerrar
	document.querySelector('#btn-cerrar-popup').addEventListener('click', () => {
		overlay.classList.remove('activo');
	});

	// Eventlistener del overlay
	overlay.addEventListener('click', (evento) => {
		evento.target.id === 'overlay' ? overlay.classList.remove('activo') : '';
	});

});