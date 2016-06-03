/**
 * Created by Luis Solorzano on 05-23-16.
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
                url: "../notas/insertar.php",
                type:"POST",
                data: { nota : nota },
                success:function(data) {
                    var res = jQuery.parseJSON(data);
                    if(res.error_msg != ""){
                       alert(res.error_msg);
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
                url: "../notas/update.php",
                type:"POST",
                data: { id : idn , nota : nota },
                success:function(data) {
                    var res = jQuery.parseJSON(data);
                    if(res.error_msg != ""){
                        alert(res.error_msg);
                    }else{
                        $("#datos").text("Guardar");
                        $("#nota").val("");
                        idn = 0;
                        Mostrar();
                    }
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
        url: '../notas/mostrar.php',
        cache: false,
        type: "POST",
    }).done(function(data){
        var datos = JSON.parse(data);
        $("table tbody tr").remove();

        for(var i in datos){
            var dat = "'"+datos[i].nota+"'";
            $("table tbody").append('<tr id="texto'+datos[i].id+'">'+
                '<td>'+datos[i].nota+'</td>'+
                '<td><button class="btn btn-primary"' +'onclick="Edit('+datos[i].id+','+dat+')">Editar</button></td>'+
                '<td><button class="btn btn-danger"'+ 'onclick="Delete('+datos[i].id+')">Eliminar</button></td></tr>'
            );
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
        url: "../notas/delete.php",
        type:"POST",
        data: { id : id },
        success:function(data) {
            var res = jQuery.parseJSON(data);
            if(res.error_msg != ""){
                alert(res.error_msg);
            }else{
                $("#texto"+id).remove();
                Mostrar();
            }
        },
        error:function(){
            alert("error!!!!");
        }
    });
}

function iLogin() {
    var email = $("#email").val();
    var password = $("#password").val();

    if (email == "" || password == "") {
        alert("Debe llenas todos los campos. 2..")
    } else {

        $.ajax({
            url: "../users/login.php",
            type:"POST",
            data: { email: email, password: password },
            success:function(data) {
                var res = jQuery.parseJSON(data);
                if(res.error_msg != ""){
                    alert(res.error_msg);
                }else{
                    window.location = "../notas/index.php";
                }
            },
            error:function(){
                alert("error!!!!");
            }
        });
    }
}

function addUser() {
    var nombre = $("#nombre").val();
    var correo = $("#email2").val();
    var passw = $("#password2").val();

    if (nombre == ""  || correo == "" || passw == "") {
        alert("Debe llenas todos los campos...")
    } else {

        $.ajax({
            url: "../users/register.php",
            type:"POST",
            data: { nombre : nombre, correo: correo, passw: passw },
            success:function(data) {
                var res = jQuery.parseJSON(data);
                if(res.error_msg != ""){
                    alert(res.error_msg);
                }else{
                    window.location = "../notas/index.php";
                }
            },
            error:function(data){
                alert("error");
            }
        });
    }
}