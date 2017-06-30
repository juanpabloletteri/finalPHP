function botones(){
    alert("botones");
    $.ajax({
        url:"nexo.php",
        type:"post",
        data:{
            accion:"dibujarbotones"
        },
        success: function(data){
            $("#botones").html(data)
        }
    })
}

function tabla(){
    alert("tabla");
}

function limpiar(){
    alert("limpiar");
    $("#botones").html("BOTONES LIM");
    $("#tabla").html("TABLA LIMP");
}