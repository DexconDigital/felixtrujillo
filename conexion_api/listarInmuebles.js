// El paginador recibe parametros por, convertir esos parametros de php a la variable pagina.
var numeroPaginas = cantidadPaginas(totalpagina, totalInmuebles);

if(pagina == 1){
    $('#atras').css('display', 'none');
}else if(pagina == numeroPaginas){
    $('#siguiente').css('display', 'none');
}
var contenido_paginas= 'Pagina '+pagina+' de '+numeroPaginas+'';

$('#numero_pagina').append(contenido_paginas);


$('#pagina_numero').append(contenido_paginas);

function paginador(actual) {
    var reemplazar = '&pag='+pagina;
    url = url.replace(reemplazar, "");
    if (actual == 1) {
        pagina--;
        location.href = url+'pag='+pagina;
    }
    if (actual == 2) {
        pagina++;
        location.href = url+'pag='+pagina;
    }
}
