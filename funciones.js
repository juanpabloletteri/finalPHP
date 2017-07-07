function botonesagrega(){
    //swal("botones");
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
    //swal("botones");
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
    //swal("tabla");
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
function tablacomprador(){
    $.ajax({
        url:"slim/app.php/tablacomprador",
        type:"get",
        success:function(data){
            $("#tabla").html(data)
        }
    })
}

function limpiar(){
    //swal("limpiar");
    $("#botones").html("BOTONES LIM");
    $("#tabla").html("TABLA LIMP");
    $("#tablausuarios").html("TABLAUSUARIOS LIMP");
    $("#usuario").html("navbar limpia");
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
        $("#error").html("<div class='swal swal-danger'><strong>Agregar Material</strong></div>")
        swal("agregar material");
        return "error";
    }
    else if($("#precio").val()=="")
    {
        $("#error").html("<div class='swal swal-danger'><strong>Agregar Precio</strong></div>")
        swal("agregar precio");
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
            swal(data);
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
            swal(data);
            botonesagrega();
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
            //swal(data),
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
            swal(data),
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
            swal(data)
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
            if(data==null)
            {
                swal("Mail o password incorrecto");
                $("#mail").val("");
                $("#password").val("");
            }
            else if(data.tipo=="administrador")
            {
                datosusuario(data.mail, data.password, data.tipo);
                navbar();
                botonesagrega();
                tabla();
                tablausuarios();
                exit();
            }
            else if(data.tipo=="vendedor")
            {
                datosusuario(data.mail, data.password, data.tipo);
                navbar();
                botonesagrega();
                tabla();
                exit();
            }
            else if(data.tipo=="comprador")
            {
                datosusuario(data.mail, data.password, data.tipo);
                navbar();
                tablacomprador();
                $("#botones").html("");
                exit();
            }

        }
    })
}
function datosusuario(mail, password, tipo)
{
            $.ajax({
                url:"nexo.php",
                type:"post",
                data:{
                    accion:"asignarusuario",
                    mail:mail,
                    password:password, 
                    tipo:tipo
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

function navbar()
{
    $.ajax({
        url:"nexo.php",
        type:"post",
        data:{
            accion:"navbar"
        },
        success:function(data){
            $("#panel").html(data)
        }
    })
}

function cerrarsesion()
{
    
    $("#panel").html("<nav  class='navbar navbar-inverse'>  <div  class='container-fluid'>    <div class='navbar-header'>      <a class='navbar-brand' href='#'>CORRALON MANSILLA</a>    </div>          <ul class='nav navbar-nav navbar-right'>      <li><a onclick='login()' href='#'><span class='glyphicon glyphicon-user'></span> Loguearse</a></li>    </ul>  </div></nav>");
    $("#botones").html("");
    $("#tabla").html("<img class='img-responsive' src='dist/corralon.jpg' alt='Chania'>");
    $("#tablausuarios").html("");
    $("#usuario").html("");

    $.ajax({
        url:"nexo.php",
        type:"post",
        data:{
            accion:"cerrarsesion"
        },
        success:function(data){
            swal("Gracias por su visita. Lo esperamos pronto...");
            $("#botones").html("<h3>Ultimo visitante".concat(data).concat("</h3>"));
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