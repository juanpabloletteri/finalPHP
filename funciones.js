function botonesagrega(){
    //alert("botones");
    $.ajax({
        url:"nexo.php",
        type:"post",
        data:{
            accion:"botonesagrega"
        },
        success: function(data){
            $("#botones").html(data)
        }
    })
}

function botonesmodifica(){
    //alert("botones");
    $.ajax({
        url:"nexo.php",
        type:"post",
        data:{
            accion:"botonesmodifica"
        },
        success: function(data){
            $("#botones").html(data)
        }
    })
}

function tabla(){
    //alert("tabla");
    $.ajax({
        url:"nexo.php",
        type:"post",
        data:{
            accion:"TablaMateriales"
        },
        success: function(data){
            $("#tabla").html(data)
        }
    })
}

function limpiar(){
    //alert("limpiar");
    $("#botones").html("BOTONES LIM");
    $("#tabla").html("TABLA LIMP");
}

function AgregarMaterial()
{
    if($("#nombre").val()=="")
    {
        $("#error").html("<div class='alert alert-danger'><strong>Agregar Material</strong></div>")
        alert("agregar material");
        return "error";
    }
    else if($("#precio").val()=="")
    {
        $("#error").html("<div class='alert alert-danger'><strong>Agregar Precio</strong></div>")
        alert("agregar precio");
        return "error";
    }
    $.ajax({
        url:"nexo.php",
        type:"post",
        data:{
            accion:"AgregarMaterial",
            nombre: $("#nombre").val(),
            precio: $("#precio").val(),
            tipo: $("#tipo").val()
        },
        success: function(data){
            botonesagrega();
            tabla();
        }
    })
}

function EliminarMaterial(id)
{
    $.ajax({
        url:"nexo.php",
        type:"post",
        data:{
            accion:"EliminarMaterial",
            id:id
        },
        success: function(data){
            tabla();
        }
    })
}