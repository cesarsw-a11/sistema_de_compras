//Cargamos todo el javascript una vez que el DOM esta cargado
$(document).ready(function () {
    //Validamos los datos del formulario para que esten correctos
    $("#login-form").validate({
        usuario: {
            required: true,
            email: true
        },
        //En caso de que los datos sean llenados y esten correctos del lado del cliente se mandaran al backend para validarlos
        submitHandler: () => {
            //Obtenemos los valores de los input para enviarlos al backend
            let usuario = $("#usuario").val()
            let password = $("#pass").val()

            $.ajax({
                url: base_url + "login/acceder",
                data: { 'usuario': usuario, 'password': password },
                type: "POST",
                success: function (response) {
                    respuesta = JSON.parse(response)
                    if (respuesta.respuesta == 1) {
                        window.location.href = "administrador"
                    } else if (respuesta.respuesta == 0) {
                        swal(
                            "Error",
                            "Favor de revisar sus datos de acceso.",
                            "error"
                        );
                    }
                },
                error: function (error, xhr, status) {

                    swal(
                        "Error",
                        "No fue posible guardar sus datos, revise su conexión.",
                        "error"
                    );
                },
            });
        }
    });
});
