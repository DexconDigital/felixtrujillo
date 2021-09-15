function validPorcentaje(elementInput, text_max, patternValidate, patternDelete) {
    $(elementInput).keyup(function() {
        if ($(this).val().length > text_max) {
            $(this).val($(this).val().substr(0, text_max));
        }
        const regex = patternValidate;
        const str = $(this).val();
        var m = new Array();
        var found = 0;
        $(this).attr("data-found", 0);
        if ((m = regex.exec(str)) !== null) {
            // The result can be accessed through the `m`-variable.
            /*m.forEach((match, groupIndex) => {
                console.log(`Found match, group ${groupIndex}: ${match}`);
                
                $(this).attr("data-found",1);
                
            });*/
            for (var i = 0, len = m.length; i < len; i++) {
                $(this).attr("data-found", 1);
            }
        } else {
            $(this).attr("data-found", 0);
        }
        if ($(this).attr("data-found") == 0) {
            $(this).val($(this).val().replace(patternDelete, ''));
            $(this).val($(this).val().substr(0, $(this).val().length - 1));
        }
        var text_length = $(this).val().length;
        var text_remaining = text_max - text_length;
        if (text_remaining < 0) {
            text_remaining = 0;
        }
    });
}
/*

countCharacterLimit
elementInput: input al que se contara los caracteres
elementRest: elemento que mostrara la cantidad restante
text_max: maximo de caracteres
messageRemaining: texto 50 "restante"
patternValidate: 0 si no hay validacion, y el patron expresion regular si si 
 */
function countCharacterLimit(elementInput, elementRest, text_max, messageRemaining, patternValidate, direct) {
    //var text_max = text_max;
    if (direct == 0) {
        var text_remaining = text_max - $(elementInput).val().length;
        if (text_remaining < 0) {
            text_remaining = 0;
        }
        $(elementRest).html(text_remaining + ' ' + messageRemaining);
        $(elementInput).keyup(function() {
            if ($(this).val().length > text_max) {
                $(this).val($(this).val().substr(0, text_max));
            } else {
                $(this).val(($(this).val() + '').replace(patternValidate, ''));
            }
            var text_length = $(this).val().length;
            var text_remaining = text_max - text_length;
            if (text_remaining < 0) {
                text_remaining = 0;
            }
            $(elementRest).html(text_remaining + ' ' + messageRemaining);
        });
    }
    if (direct == 1) {
        setTimeout(function() {
            var text_length = $(elementInput).val().length;
            var text_remaining = text_max - text_length;
            if ($(elementInput).val().length > text_max) {
                $(elementInput).val($(elementInput).val().substr(0, text_max));
            } else {
                $(elementInput).val(($(elementInput).val() + '').replace(patternValidate, ''));
            }
            var text_remaining = text_max - $(elementInput).val().length;
            if (text_remaining < 0) {
                text_remaining = 0;
            }
            $(elementRest).html(text_remaining + ' ' + messageRemaining);
        }, 1000);
    }
}

function dataPiker(dateNow, fechaInicial, fechaFinal, formatoFecha) {
    $(fechaFinal).datetimepicker({
        format: formatoFecha,
        // defaultDate      :dateNow,
        // maxDate          :moment(),
        widgetPositioning: {
            vertical: 'bottom',
            // horizontal: 'left'
        },
        useCurrent: false //Important! See issue #1075
    });
    $(fechaInicial).datetimepicker({
        format: formatoFecha,
    });
    $(fechaInicial).on("dp.change", function(e) {
        $(fechaFinal).data("DateTimePicker").minDate(e.date);
    });
    $(fechaFinal).on("dp.change", function(e) {
        $(fechaInicial).data("DateTimePicker").maxDate(e.date);
    });
}

function dataPikerDeafult(fecha, formatFecha, fechaDe) {
    //'DD/MM/YYYY' formato
    if (fechaDe == "") {
        $(fecha).datetimepicker({
            format: formatFecha,
            minDate: moment().add(-1, 'days'),
        });
    } else {
        if (fechaDe == "none") {
            $(fecha).datetimepicker({
                format: formatFecha,
            });
        } else {
            $(fecha).datetimepicker({
                defaultDate: fechaDe,
                format: moment(),
            });
        }
    }
}
/*********************************
 *              metodo para crear el datapicker               *
 *              fecha = id del elemento
 *              formatFecha = DD/MM/YYYY
 *              fechaDe = fecha desde
 *********************************/
function dataPikerDeafultFechade(fecha, formatFecha, fechaDe) {
    //'DD/MM/YYYY' formato
    if (fechaDe != "none") {
        $(fecha).datetimepicker({
            format: formatFecha,
            minDate: fechaDe,
        });
    } else {
        if (fechaDe == "none") {
            $(fecha).datetimepicker({
                format: formatFecha,
            });
        } else {
            $(fecha).datetimepicker({
                defaultDate: fechaDe,
                format: moment(),
            });
        }
    }
}

function dataPikerstandard(fecha, formatFecha, fechaDe) {
    //'DD/MM/YYYY' formato
    
   
            $(fecha).datetimepicker({
                defaultDate: fechaDe,
                format: formatFecha,
            });
        
    
}

function dataPikerDiasAtras(fecha, formatFecha, fechaDe) {
    //'DD/MM/YYYY' formato
    if (fechaDe == "") {
        $(fecha).datetimepicker({
            format: formatFecha,
            minDate: moment().add(-10, 'days'),
            // maxDate          : moment(),
        });
    }
}

function dataPikerDiasAtrasVariable(fecha, formatFecha, days) {
    $(fecha).datetimepicker({
        format: formatFecha,
        minDate: moment().add(-10, 'days'),
    });
}

function dataPikerDiasVariable(fecha, formatFecha, fechas) {
    $(fecha).datetimepicker({
        format: formatFecha,
        minDate: fechas,
    });
}

function dataPikerAnioAtras(fecha, formatFecha, fechaDe) {
    //'DD/MM/YYYY' formato
    if (fechaDe == "") {
        $(fecha).datetimepicker({
            format: formatFecha,
            // minDate          :moment().add(-10, 'years'),
            maxDate: moment(),
            widgetPositioning: {
                vertical: "bottom"
            }
        });
    }
}

function horaPikerDeafult(hora, formatoHora) {
    $(hora).datetimepicker({
        format: formatoHora,
        enabledHours: [7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
    });
}
function horaPikerDeafultRange(hora, formatoHora,data) {
    $(hora).datetimepicker({
        format: formatoHora,
        enabledHours: data,
    });
}

function horaPikerCustom(hora, formatoHora) {
    $(hora).datetimepicker({
        format: formatoHora,
    });
}

function horaPikerAll(hora) {
    $(hora).timepicker({
        autoclose: true,
        minuteStep: 1,
        showSeconds: true,
        showMeridian: false
    });
}

function aniosPikerAll(campo) {
    $(campo).datetimepicker({
        viewMode: 'years',
        format: 'YYYY-MM-1',
    });
}

function select2(classElement, selected) {
    if (classElement == "") {
        $("select").select2();
    } else {
        if (selected != "") $(classElement).select2();
        else $(classElement).select2().select2("val", selected);
    }
}
// function selectDinamic(classElement)
// {
//     if(classElement == "")
//     {
//       $("select").select2();
//     }
//     else
//     {
//         $(classElement).select2();
//     }
// }
function agregarImg(id, data, imgAlternative, debug) {
    data.success(function(dataResponse) {
        if (debug == 1) {
            console.log(dataResponse);
        }
        var imagen = "";
        for (var i in dataResponse) {
            if (dataResponse[i].Campo == "") {
                imagen = imgAlternative;
            } else {
                imagen = "../../mcomercialweb/images/" + dataResponse[i].Campo;
            }
        }
        $(id).attr("src", imagen);
    });
}
// Valida solo numeros
function inputNumerico(id) {
    id.keyup(function() {
        this.value = (this.value + '').replace(/[^0-9]/g, '');
    });
    return true;
}
// valida solo numeros puntos y comas
function inputNumericoString(id) {
    id.keyup(function() {
        this.value = (this.value + '').replace(/[^-.0-9]/g, '');
    });
}
// valida solo numeros y comas
function inputNumericoDec(id) {
    id.keyup(function() {
        this.value = (this.value + '').replace(/[^.0-9]/g, '');
    });
}
// valida solo texto y numeros
function inputNumericoAlpha(id) {
    id.keyup(function() {
        this.value = (this.value + '').replace(/[^A-Za-z0-9-]/g, '');
    });
    return true;
}

function addInput(idPrincipal, idSelect, idInput, idSelectText) {
    $(idPrincipal).on("change", idSelect, function(e) {
        var valor = "";
        e.preventDefault();
        if (idSelectText == "") valor = $(this).val();
        else {
            valor = $(idSelectText).text();
        }
        $(idInput).val(valor);
    });
}
var response = "";

function ajax(uri, method, dataTypes, data, debug) {
    return $.ajax({
        url: uri,
        type: method,
        dataType: dataTypes,
        data: data,
    });
}

function ajaxSimple(uri, method, dataTypes, data, debug) {
    return $.ajax({
        url: uri,
        type: method,
        dataType: dataTypes,
        data: data,
    });
}

function ajaxcache(uri, method, dataTypes, data, debug) {
    return $.ajax({
        url: uri,
        type: method,
        dataType: dataTypes,
        data: data,
        async: true,
        cache: false
    });
}

function ajaxSofisma(uri, method, dataTypes, data, idsofis, presofisma, block) {
    return $.ajax({
        url: uri,
        type: method,
        dataType: dataTypes,
        data: data,
        beforeSend: function() {

            idsofis.html(presofisma);
            if (block === 1) {
              idsofis.prop('disabled',true);
            }
        }
    });
}

function ajaxSofismaForm(uri, method, dataTypes, data, idsofis, presofisma) {
    return $.ajax({
        url: uri,
        type: method,
        dataType: dataTypes,
        data: data,
        contentType: false,
        processData: false,
        beforeSend: function() {
            idsofis.html(presofisma);
        }
    });
}

function limit_char(elemento, max_chars) {
    $(elemento).keyup(function() {
        if ($(this).val().length > max_chars) {
            $(this).val($(this).val().substr(0, max_chars));
        }
    });
}

function selectCheckBox(checkbox, valueCheck) {
    checkbox.on("click", function() {
        if ($(this).is(':checked')) {
            valueCheck.val(1);
        } else {
            valueCheck.val(0);
        }
    });
}

function selectCheckBoxThis(checkbox, valueCheck) {
    checkbox.on("click", function() {
        if ($(this).is(':checked')) {
            $(this).val(1);
        } else {
            $(this).val(0);
        }
    });
}

function CheckBoxDinamicText(checkbox, valueCheck, text1, text2) {
    checkbox.on("click", function() {
        if ($(this).is(':checked')) {
            valueCheck.text(text1);
        } else {
            valueCheck.text(text2);
        }
    });
}
//setear valores $$$ con los puntos
function formatNumber(input, errorElement, errorText) {
    var num = $(input).val().replace(/\./g, '');
    if (!isNaN(num)) {
        num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g, '$1.');
        num = num.split('').reverse().join('').replace(/^[\.]/, '');
        $(input).val(num);
        // $(errorElement).hide();
    } else {
        //$(errorElement).html(errorText);
        //$(errorElement).show();
        $(input).val($(input).val().replace(/[^\d\.]*/g, ''));
    }
}

function formatNumberVal(val) {
    var num = val.replace(/\./g, '');
    if (!isNaN(num)) {
        num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g, '$1.');
        num = num.split('').reverse().join('').replace(/^[\.]/, '');
        return num;
        // $(errorElement).hide();
    } else {
        //$(errorElement).html(errorText);
        //$(errorElement).show();
        num = num.replace(/[^\d\.]*/g, '');
        return num;
    }
}

function matchYoutubeUrl(url) {
    var p = /^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/;
    var matches = url.match(p);
    if (matches) {
        return matches[1];
    }
    return false;
}

function search(object, text) {
    if (object.indexOf(text) != -1) return 1;
    else return 0;
}

function explode(object, text) {
    var mystr = object;
    var arreglo = [];
    //Splitting it with : as the separator
    var myarr = mystr.split(text);
    //Then read the values from the array where 0 is the first
    for (var i = 0; i < myarr.length; i++) {
        arreglo.push(myarr[i])
    }
    return arreglo;
}

function validateParsley(form) {
    $.listen('parsley:field:error', function(ParsleyField) {
        ParsleyField.$element.closest('.form-group').removeClass('has-success');
        ParsleyField.$element.closest('.form-group').addClass('has-error');
    });
    $.listen('parsley:field:success', function(ParsleyField) {
        ParsleyField.$element.closest('.form-group').removeClass('has-error');
        // ParsleyField.$element.closest('.form-group').addClass('has-success');
        ParsleyField.$element.closest('.form-group').addClass('has-success');
    });
}

function validFormParsley(form) {
    var formValid = form;
    validateParsley(formValid);
    formValid.parsley();
    formValid.on('submit', function(e) {
        e.preventDefault();
        if ($(this).parsley().validate() === true) {
            // console.log("true");
        } else {
            // console.log("false");
        }
    });
}
/**
 * [deleteString eliminar caracteres de un string]
 * @param  {[type]} string   [cadena de texto]
 * @param  {[type]} deletes  [caracter que se va eliminar]
 * @param  {[type]} replaces [si el debug es uno se eliminara por vacio si no, se coloca la palabra que se remplaza]
 * @param  {[type]} debug    [si se envio 1 se remplaza por espacio vacio, si no se remplaza por replaces ]
 * @return {[type]}          [retorna el string seteado]
 */
function deleteString(string, deletes, replaces, debug) {
    var str;
    var text = string;
    var find = [deletes];
    var replac = [replaces];
    for (var i = 0; i < find.length; i++) {
        str = text.replace(new RegExp(find[i], 'gi'), replac[i]);
    }
    return str;
}

function deleteStringIndividual(string, deletes, replaces, debug) {
    return res = string.replace(deletes, replaces);
}

function getStringSelect(idselect) {
    var opcion_seleccionada = $(idselect + " option:selected").text();
    return opcion_seleccionada;
}
/**
 * [blockInput description] bloquear contenido de un input para no borrar su contenido.
 * @param  {[type]} input [input que no se podra borrar su contenido al digitar una tecla]
 * @return {[type]}       []
 */
function blockInput(input) {
    $(input).keydown(function() {
        var val = $(this).val();
        $(this).val(val);
        return false;
    });
}

function restaFechas(f1, f2) {
    var aFecha1 = f1.split('-');
    var aFecha2 = f2.split('-');
    var fFecha1 = Date.UTC(aFecha1[0], aFecha1[1] - 1, aFecha1[2]);
    var fFecha2 = Date.UTC(aFecha2[0], aFecha2[1] - 1, aFecha2[2]);
    var dif = fFecha2 - fFecha1;
    var dias = Math.floor(dif / (1000 * 60 * 60 * 24));
    return dias;
}
// funcon para mostrar un elemento dependiendo de una condicion
function viewShowHide(parametro, param1, param2) {
    if (parametro) {
        $(param1).hide();
        $(param2).show();
    } else {
        $(param2).hide();
        $(param1).show();
    }
}

function removeClassAddClass(parametro, param1, remove, add) {
    if (parametro) {
        $(param1).removeClass(remove);
        $(param1).addClass(add);
        // console.log('true');
    } else {
        $(param1).removeClass(add);
        $(param1).addClass(remove);
        // console.log('false');
    }
}
/* Función que suma o resta días a una fecha, si el parámetro
   días es negativo restará los días*/
function sumarDias(fecha, dias) {
    fecha.setDate(fecha.getDate() + dias);
    return fecha;
}

function getMesToNumber(mes, debug) {
    var data = [];
    if (debug == 1) {
        data = ["ene", "feb", "mar", "abr", "may", "jun", "jul", "ago", "sep", "oct", "nov", "dic"];
        mes = data.indexOf(mes);
        return mes + 1;
    }
    if (debug == 2) {
        data = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
        mes = data.indexOf(mes);
        return mes + 1;
    }
}

function getCleanedString(cadena) {
    // Definimos los caracteres que queremos eliminar
    var specialChars = "!@#$^&%*()+=-[]\/{}|:<>?,.";
    // Los eliminamos todos
    for (var i = 0; i < specialChars.length; i++) {
        cadena = cadena.replace(new RegExp("\\" + specialChars[i], 'gi'), '');
    }
    // Lo queremos devolver limpio en minusculas
    cadena = cadena.toLowerCase();
    // Quitamos espacios y los sustituimos por _ porque nos gusta mas asi
    cadena = cadena.replace(/ /g, " ");
    // Quitamos acentos y "ñ". Fijate en que va sin comillas el primer parametro
    cadena = cadena.replace(/á/gi, "a");
    cadena = cadena.replace(/é/gi, "e");
    cadena = cadena.replace(/í/gi, "i");
    cadena = cadena.replace(/ó/gi, "o");
    cadena = cadena.replace(/ú/gi, "u");
    cadena = cadena.replace(/ñ/gi, "n");
    return cadena;
}

function dataPikerInterval(dateNow, fechaInicial, fechaFinal, formatoFecha, minDateIni) {
    $(fechaFinal).datetimepicker({
        format: formatoFecha,
        // defaultDate      :dateNow,
        // maxDate          :moment(),
        widgetPositioning: {
            vertical: 'bottom',
            // horizontal: 'left'
        },
        useCurrent: false, //Important! See issue #1075
        //minDate: moment().add(+1, 'days')
        minDate: moment()
    });

    if(minDateIni.length == 0){

        $(fechaInicial).datetimepicker({
            format: formatoFecha,
        });

    }else{

        $(fechaInicial).datetimepicker({
            format : formatoFecha,
            minDate : minDateIni,
        });

    }

    $(fechaInicial).on("dp.change", function(e) {
        $(fechaFinal).data("DateTimePicker").minDate(e.date);
    });
    $(fechaFinal).on("dp.change", function(e) {
        $(fechaInicial).data("DateTimePicker").maxDate(e.date);
    });

    /*$(fechaFinal).on("dp.load", function(e) {
        $(fechaFinal).data("DateTimePicker").minDate(e.date);
    });*/
}
