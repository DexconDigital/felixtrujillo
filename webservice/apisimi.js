function getCiudad(select,uri,selectRes,nomSelect,dataType,gif,console,selected)
{

        
         $.ajax({
                    url: uri,   
                    type: 'GET',
                     beforeSend: function (xhr) {
                      $(gif).show();
                           xhr.setRequestHeader(
                              'Authorization',
                              'Basic ' + btoa('Authorization:'+TOKEN));
                          },
                    'dataType': dataType,

                    success:function(data)
                    {
                      
                      if (console == 1)
                        console.log(data);
                      else
                      $(gif).hide();
                      var html="";
                      html += "<option value='0'>"+nomSelect+"</option>";
                      for (var i in data)
                      {
                        
                        html += "<option value='"+data[i].id+"'>"+data[i].nombre+"</option>";
                      }
                      $(selectRes).html(html);
                      if(selectRes == "#zonasF")
                      {
                       
                        if(data.length>1)
                        {
                          $(selectRes).prop("disabled",false);
                          $(selectRes).css("background-color","white");
                          
                        }else{
                          $(selectRes).prop("disabled",true);
                          $(selectRes).css("background-color","#ababab");
                        }
                      }
                    }
                    
                });      
}
function getCiudadesNvo(idselect,selected = 0,debug = 0) {
    // valor=(valor == "")?0:valor;
    $.ajax({
        url: PROTOCOLO+'://www.simi-api.com/models/proyectos.php?data=3',
        type: 'POST',
        dataType: 'json',
        data: {
            inmo: 786
        },
        success: function(data) {
            var html = '';
            if (debug == 1 || debug == 2) {
                console.log(data);
            }
            if (data != "") {
                html += "<option value='0'>Cualquiera</option>";
                var i;
                for (i in data) {
                    html += "<option value='" + data[i].id + "'>" + data[i].Nombre + "</option>";
                }
            } else {
                html += "<option value='" + valor + "'>Sin Ciudades</option>";
                $(elemento).prop("disabled", true);
            }
            $(idselect).html(html);
            if (selected != "") {
                $(elemento).val(selected);
            }
            // $(elemento).select2();
        }
    });
}
function getDestinacion(idselect,selected = 0,debug = 0) {
    // valor=(valor == "")?0:valor;
    $.ajax({
        url: PROTOCOLO+'://www.simi-api.com/models/proyectos.php?data=4',
        type: 'POST',
        dataType: 'json',
        success: function(data) {
            var html = '';
            if (debug == 1 || debug == 2) {
                console.log(data);
            }
            if (data != "") {
                html += "<option value='0'>Cualquiera</option>";
                var i;
                for (i in data) {
                    html += "<option value='" + data[i].Iddestinacion + "'>" + data[i].Nombre + "</option>";
                }
            } else {
                html += "<option value='" + valor + "'>Sin Destinación</option>";
                $(elemento).prop("disabled", true);
            }
            $(idselect).html(html);
            if (selected != "") {
                $(elemento).val(selected);
            }
            // $(elemento).select2();
        }
    });
}