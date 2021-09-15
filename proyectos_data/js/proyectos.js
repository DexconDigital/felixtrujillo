$(document).ready(function() {
    if ($('.countInm').length > 0) {
        getCiudadesNvo('#ciudades',0);
        getDestinacion('#destinacion',0);
        var minrange=50000000,maxrange=10000000000;
        var minArange=1,maxArange=10000;
        $("#amount1").val(minrange);
        $("#amount2").val(maxrange);
        $("#amount1A").val(minArange);
        $("#amount2A").val(maxArange);
        $("#slider-range").slider({
            range: true,
            step: 50000,
            min: 50000000,
            max: 10000000000,
            values: [minrange, maxrange],
            slide: function(event, ui) {
                $("#amount").html("Precio $" + $.number(ui.values[0]) + " - $" + $.number(ui.values[1]));
                $("#amount1").val(ui.values[0]);
                $("#amount2").val(ui.values[1]);
            }
        });
        $("#amount").html("Precio $" + $.number(minrange) + " - $" + $.number(maxrange));
        $( "#slider-rangeA" ).slider({
          range: true,
          step: 5,
          min: 1,
          max: 10000,
          values: [ minArange, maxArange ],
          slide: function( event, ui ) {
            $( "#amountA" ).html( "Area " + $.number( ui.values[ 0 ]) + " - " + $.number( ui.values[ 1 ]) +" mts²");
            $( "#amount1A" ).val(ui.values[ 0 ]);
            $( "#amount2A" ).val(ui.values[ 1 ]);
          }
        });
        $( "#amountA" ).html( "Area " + $.number( minArange) + " - " + $.number( maxArange) +" mts²");
        function getProyects(){
            var dataFilter = $('form[name=formFilter]').serialize();
            $.ajax({
                url: 'https://simicrm.app/models/proyectos.php?data=1',
                dataType: 'json',
                method: "POST",
                data: dataFilter,
                success: function(data) {
                    $('.btn-submitFilter').text('Buscar');
                    $('.btn-submitFilter').prop('disabled',false);
                    $('.countInm').text(data.length);
                    var html = "";
                    
                    for (i in data) {
                        if(data[i].fotoPortada != null){
                            logoProyect = '<div class="logproybus"><img typeof="foaf:Image" class="img-responsive" src="'+data[i].fotoPortada+'" width="300" height="auto" alt=""></div>';
                        }else{
                            logoProyect = '';
                        }
                        html += '\
                                    <div class="col-xs-12 col-sm-6 col-md-4">\
                                        <div class="infoProyect">'+logoProyect+'\
                                            <a href="detalleProyecto.php?inmo=' + data[i].IdInmobiliaria + '&codinm=' + data[i].codinm + '" class="imgProyectBack" style="background-image: url(' + "'" + data[i].foto + "'" + ')">\
                                            </a>\
                                            <div class="contentInfoProy">\
                                                <div class="titleContentPro">\
                                                    <h2>\
                                                        <a href="detalleProyecto.php?inmo=' + data[i].IdInmobiliaria + '&codinm=' + data[i].codinm + '">' + data[i].NombreProyecto + '</a>\
                                                    </h2>\
                                                    <a href="detalleProyecto.php?inmo=' + data[i].IdInmobiliaria + '&codinm=' + data[i].codinm + '">\
                                                        <p>' + data[i].DirProyecto + '</p>\
                                                    </a>\
                                                </div>\
                                                <div class="princiInfoContentPro">\
                                                    <div class="areaProy">\
                                                        <a href="detalleProyecto.php?inmo=' + data[i].IdInmobiliaria + '&codinm=' + data[i].codinm + '">\
                                                            <span>Área desde</span>\
                                                        </a>\
                                                        <a href="detalleProyecto.php?inmo=' + data[i].IdInmobiliaria + '&codinm=' + data[i].codinm + '">\
                                                            <div class="contentArea">\
                                                                ' + data[i].AreaLote + 'm<sup>2</sup>\
                                                            </div>\
                                                        </a>\
                                                    </div>\
                                                    <!--<div class="habiProy">\
                                                        <a href="detalleProyecto.php?inmo=' + data[i].IdInmobiliaria + '&codinm=' + data[i].codinm + '">\
                                                            <span>Habitaciones</span>\
                                                            <p> ' + data[i].alcobas + '</p>\
                                                        </a>\
                                                    </div>-->\
                                                    <div class="precioProy">\
                                                        <span class="Vivienda">Precio desde</span>\
                                                        <p>$ ' + data[i].precio + '</p>\
                                                    </div>\
                                                </div>\
                                            </div>\
                                        </div>\
                                    </div>'
                    }
                    $('#list-proyects').html(html);
                }
            });            
        }
        getProyects();
        $(document).on('submit','form[name=formFilter]',function(e){
            e.preventDefault();
            $('.btn-submitFilter').text('Buscando...');
            $('.btn-submitFilter').prop('disabled',true);
            setTimeout(function(){
                getProyects();                
            },1000);
        });
    } else {
        $('.btn-moreInfo').on('click',function(){
            $('form[name=formMoreInfo] .form-group').removeClass('has-success');
            $('form[name=formMoreInfo] .form-group').removeClass('has-error');
            $('form[name=formMoreInfo]')[0].reset();
            $('#modalInfo').modal('show');
        });
        var formValid = $("form[name=formMoreInfo]");
        validateParsley(formValid);
        formValid.parsley();
        formValid.on('submit', function(e) {
            var data = formValid.serialize(); 
            e.preventDefault();
            if ($(this).parsley().validate() === true) {
                var btnContact=$(".btn-enviarMore");
                btnContact.html('<i class="fa fa-spinner fa-spin"></i>');
                btnContact.prop("disabled",true);
                $.ajax({
                    url: "webservice/class.mail.php",
                    type: 'POST',
                    dataType: 'html',
                    data: data,
                    success:function(data)
                    {
                        btnContact.html('Enviar');
                        btnContact.prop("disabled",false);
                        console.log(data);

                        if(parseInt(data) == 1)
                        {
                            $(".alert-msn").removeClass('alert-warning');
                            $(".alert-msn").addClass('alert-success');
                            $(".alert-msn").html('<i class="fa fa-check"></i> Enviado Satisfactoriamente');
                            $(".contact-alert").show();
                            setTimeout(function(){
                                $(".contact-alert").hide();
                                $("#modalInfo").modal('hide');
                            },2000);
                        }else{
                            $(".alert-msn").removeClass('alert-success');
                            $(".alert-msn").addClass('alert-warning');
                            $(".alert-msn").html('<i class="fa fa-remove"></i> El correo No pudo ser enviado.');
                            $(".contact-alert").show();
                            setTimeout(function(){
                                $(".contact-alert").hide();
                                $("#modalInfo").modal('hide');
                            },2000);
                        }
                    }

                });
                
            } 
        });

        $.ajax({
            url: 'https://simicrm.app/models/proyectos.php?data=2',
            dataType: 'json',
            method: "POST",
            data: {
                codInmu: codInmu,
                inmo: inmo
            },
            success: function(data) {
                console.log(data);
                if(data[0].fotoPortada.length>0){

                    $("#nomproyectoLog").append('<div class="logproybusDetail" id="logproybusDetail"><img typeof="foaf:Image"   class="img-responsive" src="'+data[0].fotoPortada+'" width="300" height="auto" alt=""></div>');
                
                }else{

                    $("#nomproyectoLog").css({"height":"50px"});
                }
                $("#nomproyectoLog").append('<div class="nameproybusDetail" id="nameproybusDetail" ><h2>'+data[0].NombreProyecto+'</h2></div>');
                $('#latitud').val(data[0].latitud);
                $('#longitud').val(data[0].longitud);
                $('#codinmContact').val(data[0].Codigo_Inmueble);
                $('.countArea').text(data[0].AreaLote);
                if (data[0].parqueadero <= 0) {
                    $('.countParking').hide();
                }
                $('.countParking').text(data[0].parqueadero);
                $('.priceInmu').text(data[0].precio);
                $('.descrLarga').text(data[0].descripcionlarga);
                if (data[0].urlVideo != "" && data[0].urlVideo != null) {
                    $('#urlVideo').val(data[0].urlVideo);
                    $('#indiCarousel li').on('click',function(){
                        var btn = $(this);
                        if (!btn.hasClass('viewVideo')) {
                            $('.iframeVideo').attr('src','');
                        }else{
                            $('.iframeVideo').attr('src',$('#urlVideo').val());
                        }
                    });
                }else{
                    $('.viewVideo').hide();
                }
                for (j in data[0].datosProyecto) {
                    if (data[0].datosProyecto[j].idcaracteristica == '2490') {
                        $('.countTorres').text(data[0].datosProyecto[j].cantidad_dt);
                    }
                    if (data[0].datosProyecto[j].idcaracteristica == '2491') {
                        $('.countUnidades').text(data[0].datosProyecto[j].cantidad_dt);
                    }
                }
                if (data[0].fotos.length > 1) {
                    $('.primaryFoto').html('<a class="imagen fancybox" data-caption="'+data[0].fotos[0].label+'" rel="group2" href="' + data[0].fotos[0].foto + '" style="background-image: url(' + "'" + data[0].fotos[0].foto + "'" + ')"></a>');
                    var htmlFotos = "";
                    for (i in data[0].fotos) {
                        if (i > 0) {
                            htmlFotos += '<a class="imagen fancybox" data-caption="'+data[0].fotos[i].label+'" rel="group2" href="' + data[0].fotos[i].foto + '" style="background-image: url(' + "'" + data[0].fotos[i].foto + "'" + ');display:none"></a>';
                        }
                    }
                    $('.secondFotos').html(htmlFotos);
                } else if (data[0].fotos.length == 1) {
                    $('.primaryFoto').html('<a class="imagen fancybox" rel="group2" data-caption="'+data[0].fotos[i].label+'" href="' + data[0].fotos[0].foto + '" style="background-image: url(' + "'" + data[0].fotos[0].foto + "'" + ')"></a>');
                }
                if (data[0].alrededores.length <= 0) {
                    $('#listAlre').hide();
                    $('.descrLarga').parent().removeClass('col-md-7').addClass('col-md-12');
                }
                var htmlAlre = "<ul>";
                for (x in data[0].alrededores) {
                    htmlAlre += "<li>" + data[0].alrededores[x].Descripcion + "</li>";
                }
                htmlAlre += "</ul>";
                $('#listAlre').html(htmlAlre);
                if (data[0].zcomunes.length <= 0) {
                    $('.titleZonas').hide();
                }
                var htmlZonasComunes = "<ul>";
                for (z in data[0].zcomunes) {
                    htmlZonasComunes += "<li class='col-xs-12 col-sm-6 col-md-4'><i class='fa " + data[0].zcomunes[z].obser_det + "'></i> " + data[0].zcomunes[z].Descripcion + "</li>";
                }
                htmlZonasComunes += "</ul>";
                $('#listZonas .list').html(htmlZonasComunes);
                if (data[0].otrasC.length <= 0) {
                    $('.titleOtras').hide();
                }
                var htmlOtras = "<ul>";
                for (o in data[0].otrasC) {
                    htmlOtras += "<li class='col-xs-12 col-sm-6 col-md-4'><i class='fa " + data[0].otrasC[o].obser_det + "'></i> " + data[0].otrasC[o].Descripcion + "</li>";
                }
                htmlOtras += "</ul>";
                $('#listOtras .list').html(htmlOtras);
            }
        });
        $('.viewMapa').on('click', function() {
            $('#mapaFilter').html('');
            setTimeout(function() {
                var latitud = parseFloat($('#latitud').val());
                var longitud = parseFloat($('#longitud').val());
                map = new google.maps.Map(document.getElementById('mapaFilter'), {
                    center: {
                        lat: latitud,
                        lng: longitud
                    },
                    zoom: 16
                });
                var marker = new google.maps.Marker({
                    position: {
                        lat: latitud,
                        lng: longitud
                    },
                    map: map
                });
                map.setOptions({
                    draggable: false,
                    zoomControl: false,
                    scrollwheel: false,
                    disableDoubleClickZoom: true
                });
            }, 500);
        });
        $('.hoverMore').on('click', function(e) {
            $(this).parent().find('.primaryFoto a').trigger('click');
        });
        $('#myCarousel').carousel({
            interval: false
        });
        $(".fancybox").fancybox({
            type        : 'image',
            openEffect  : 'none',
            closeEffect : 'none',
            beforeShow : function(){
                this.title =  $(this.element).data("caption");
            }
        });
        var clickEvent = false;
        $('#myCarousel').on('click', '.nav a', function() {
            clickEvent = true;
            $('.nav li').removeClass('active');
            $(this).parent().addClass('active');
        }).on('slid.bs.carousel', function(e) {
            if (!clickEvent) {
                var count = $('.nav').children().length - 1;
                var current = $('.nav li.active');
                current.removeClass('active').next().addClass('active');
                var id = parseInt(current.data('slide-to'));
                if (count == id) {
                    $('.nav li').first().addClass('active');
                }
            }
            clickEvent = false;
        });
    }
});