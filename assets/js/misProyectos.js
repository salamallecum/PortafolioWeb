$(document).ready(function(){
    
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
});