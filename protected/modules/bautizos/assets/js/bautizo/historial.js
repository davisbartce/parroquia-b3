var elemento = 1;
$(function() {

    $("#busquedaSearch").select2({
        enable: true,
        initSelection: function(element, callback) {
            if ($(element).val()) {
                var data = {id: element.val(), text: $(element).attr('selected-text')};
                callback(data);
            }
//            else {
//                $("#Incidencia_contacto_id").select2("enable", false);
//            }
        },
        ajax: {// instead of writing the function to execute the request we use Select2's convenient helper
            url: baseUrl + "libros/libro/ajaxlistLibros",
            type: "get",
            dataType: 'json',
            data: function(term, page) {
                return {
                    search_value: term, // search term
                    tipo: 'BAUTIZOS', // search term
                    ano: $('#Libro_ano').val(), // search term
                    tomo: $('#busquedaSearch').val(), // search term
                };
            },
            results: function(data, page) { // parse the results into the format expected by Select2.
                // since we are using custom formatting functions we do not need to alter remote JSON data
                return {results: data};
            }
        }
    });

});
function exportar() {
    if ($('#Libro_ano').val() != "") {
        $('#formId').attr('action', baseUrl + "bautizos/bautizo/Export");
        $('#ano').val($('#Libro_ano').val());
        $('#tomo').val($('#busquedaSearch').val());
        $('#formId').submit();
    }
    else {
        bootbox.alert('Por favor Seleccione un rango de fechas.')
    }
}

function search() {
    if ($('#Cobranza_fechas').val() != "") {
        $.fn.yiiGridView.update('cobranza-grid', {
            data: {fechas: $('#Cobranza_fechas').val()}
        });
    }
    else {
        bootbox.alert('Por favor Seleccione un rango de fechas.')
    }
}

