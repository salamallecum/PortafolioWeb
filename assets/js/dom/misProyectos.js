const d = document;

export default function contactFormValidations(){

    window.addEventListener('load', () => {
        grid.refreshItems().layout();
        d.getElementById('work__container').classList.add('imagenes-cargadas');

        // Agregamos los listener de los enlaces para filtrar por categoria.
        const enlaces = d.querySelectorAll('#categorias a');
        enlaces.forEach((elemento) => {
            elemento.addEventListener('click', (evento) => {
                evento.preventDefault();
                enlaces.forEach((enlace) => enlace.classList.remove('activo'));
                evento.target.classList.add('activo');

                const categoria = evento.target.innerHTML.toLowerCase();
                categoria === 'todos' ? grid.filter('[data-categoria]') : grid.filter(`[data-categoria="${categoria}"]`);
            });
        });

	// Agregamos listener para las imagenes
	const overlay = d.getElementById('overlay');
	d.querySelectorAll('.work__container .work__img').forEach((elemento) => {
		elemento.addEventListener('click', () => {
			const ruta = elemento.getAttribute('src');
			const descripcion = elemento.parentNode.parentNode.dataset.descripcion;

			overlay.classList.add('activo');
			d.querySelector('#overlay img').src = ruta;
			d.querySelector('#overlay .descripcion').innerHTML = descripcion;
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
}