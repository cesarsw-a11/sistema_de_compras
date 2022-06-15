
$("#guardarProducto").on("click", () => {
    let partida = $("#partida").val()
    let cantidad = $("#cantidad").val()
    let unidad = $("#unidad").val()
    let descripcion = $("#descripcion").val()
    let pUnitario = $("#pUnitario").val()
    let rFederal = $("#rFederal").val()
    let rEstatal = $("#rEstatal").val()
    let rFiscal = $("#rFiscal").val()
    let importe = $("#importe").val()
    let iva = $("#iva").val()

    $.ajax({
        type: "POST",
        data: {
            partida: partida,
            cantidad: cantidad,
            unidad: unidad,
            descripcion: descripcion,
            precioUnitario: pUnitario,
            rFederal: rFederal,
            rEstatal: rEstatal,
            rFiscal: rFiscal,
            importe: importe,
            iva: iva
        },
        url: "guardar"
    }).done((respuesta) => {
        respuesta = JSON.parse(respuesta)
        if(respuesta.status == 1){
            alert("Registro guardado")
        }else{
            alert("No se guardo")
        }

    })

})