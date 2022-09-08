function callData(id, value, option, page) {
    $.ajax({

        type: 'POST', //aqui puede ser igual get
        url: page, //aqui va tu direccion donde esta tu funcion php
        data: {
            option: option,
            value: value
        }, //aqui tus datos
        befoeSend: () => {
            $('#' + id).html("Procesando...");
        },
        success: (response) => {
            $('#' + id).html(response);
        },
        error: () => {
            $('#' + id).html("Error en proceso ajax");
        }
    });
}

$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})

function alerta(a) {
    alert(a);
}


function show_hide(n){
    
    if (document.getElementById(n).style.display == "none"){
        document.getElementById(n).style.display="block";
    }else {
        document.getElementById(n).style.display="none";
    }
  }
