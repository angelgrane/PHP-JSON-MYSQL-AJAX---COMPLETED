/**
 * Created by luis on 05-23-16.
 */
var idn = 0;
function AddDatos() {
    var nota = $("#nota").val();
    var boton = $("#datos").text();

    if(nota == "") {
        alert("Inserte un dato...")
    } else {
        if (boton == "Guardar") {
    
            $.ajax({
                url: "insertar.php",
                type:"POST",
                data: { nota : nota },
                success:function(data) {
                    var res = jQuery.parseJSON(data);
                    if(res.error_msg != ""){
                      // alert(res.error_msg);
                    }else{
                      $("#nota").val("");
                      Mostrar();
                    }
                },
                error:function(){
                    alert("error!!!!");
                }
            });
        } else if (boton == "Actualizar") {
            $.ajax({
                url: "update.php",
                type:"POST",
                data: { id : idn , nota : nota },
                success:function(data) {
                    $("#datos").text("Guardar");
                    $("#nota").val("");
                    idn = 0;
                    Mostrar();
                },
                error:function(){
                    alert("error!!!!");
                }
            });
        }
    }
}

function Mostrar() {

    $.ajax({
        url: 'mostrar.php',
        cache: false,
        type: "GET",
        success: function(datos){
            $("#registro").html(datos);
        }
    });
}

function Edit(id, nota) {
    $("#nota").val(nota);
    idn = id;
    $("#datos").text("Actualizar");
    $("#texto"+id).hide();
}

function Delete(id) 
{
    $.ajax({
        url: "delete.php",
        type:"POST",
        data: { id : id },
        success:function(data) {
            $("#texto"+id).remove();
            Mostrar();
        },
        error:function(){
            alert("error!!!!");
        }
    });
}