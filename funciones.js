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
    /*$.ajax({
        url:"nexo.php",
        type:"post",
        data:{
            accion:"TablaMateriales"
        },
        success: function(data){
            $("#tabla").html(data)
        }
    })*/
    $.ajax({
        url:"slim/app.php/tablamateriales",
        type:"get",
        success:function(data){
            $("#tabla").html(data)
        }
    })
}

function limpiar(){
    //alert("limpiar");
    $("#botones").html("BOTONES LIM");
    $("#tabla").html("TABLA LIMP");
    $("#tablausuarios").html("TABLAUSUARIOS LIMP");
}

function login()
{
    $.ajax({
        url:"nexo.php",
        type:"post",
        data:{
            accion:"login"
        },
        success: function(data){
            $("#botones").html(data)
        }
    })
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
        //url:"nexo.php",
        url:"slim/app.php/agregarmaterial",
        type:"post",
        data:{
            //accion:"AgregarMaterial",
            nombre: $("#nombre").val(),
            precio: $("#precio").val(),
            tipo: $("#tipo").val()
        },
        success: function(data){
            alert(data);
            botonesagrega();
            tabla();
        }
    })
}

function EliminarMaterial(id)
{
    $.ajax({
        //url:"nexo.php",
        url:"slim/app.php/eliminarmaterial",
        type:"delete",
        data:{
            //accion:"EliminarMaterial",
            id:id
        },
        success: function(data){
            alert(data);
            tabla();
        }
    })
}

function ModificarMaterial(id)
{
    botonesmodifica();
    $.ajax({
        url:"nexo.php",
        type:"post",
        dataType:"JSON",
        data:{
            accion:"ModificarMaterial",
            id:id
        },
        success: function(data){
            //alert(data),
            $("#nombre").val(data[0].nombre),
            $("#precio").val(data[0].precio),
            $("#tipo").val(data[0].tipo),
            $("#codigo").val(data[0].codigo)
        }
    })
}

function AceptarModificacion()
{
    $.ajax({
        //url:"nexo.php",
        url:"slim/app.php/aceptarmodificacion",
        type:"put",
        data:{
            //accion:"AceptarModificacion",
            nombre: $("#nombre").val(),
            precio: $("#precio").val(),
            tipo: $("#tipo").val(),
            codigo: $("#codigo").val()
        },
        success: function(data){
            alert(data),
            tabla(),
            botonesagrega()
        }
    })
}

function slim()
{
    $.ajax({
        url:"slim/app.php/hello",
        type:"get",
        data:{
            name:$("#nombre").val(),
            price: $("#precio").val(),
        },
        success: function(data){
            alert(data)
        }
    })
}

function ingresarusuario()
{
    $.ajax({
        url:"nexo.php",
        type:"post",
        dataType:"JSON",
        data:{
            accion:"ingresar",
            mail:$("#mail").val(),
            password:$("#password").val()
        },
        success: function(data){
            if(data.tipo=="administrador")
            {
                botonesagrega();
                tabla();
                tablausuarios();
                exit();
            }
            else if(data.tipo=="vendedor")
            {
                botonesagrega();
                tabla();
                exit();
            }
            else if(data.tipo=="comprador")
            {
                tablacomprador();
                exit();
            }
            alert("Mail o password incorrecto");
            $("#mail").val("");
            $("#password").val("");
        }
    })
}

function tablausuarios()
{
    $.ajax({
        url:"nexo.php",
        type:"post",
        data:{
            accion:"tablausuarios"
        },
        success:function(data){
            $("#tablausuarios").html(data);
        }
    })
}

function botonadministrador()
{
    $("#mail").val("admin@admin.com");
    $("#password").val("1");
}
function botonvendedor()
{
    $("#mail").val("vend@vend.com");
    $("#password").val("1");
}
function botoncomprador()
{
    $("#mail").val("comp@comp.com");
    $("#password").val("1");
}