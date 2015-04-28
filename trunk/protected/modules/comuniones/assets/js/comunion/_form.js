var btn_save;
$(function() {
    var datos;
    $.get(baseUrl + 'personas/persona/mini', function(data) {
//            $('#pedidosPendientesCocina').html(data);
//                console.log(data);
        datos = data;
        $("#popover-content-Persona").html(data);
//                return $("#popover-content-Persona").html(datos);

    });
//      init();
    $('#popover2').on('show.bs.popover', function() {
        abrirpopover($(this).attr('entidad'));
    });
    $('#popover2').popover({
        html: true,
        placement: 'left',
        title: function() {
            return $("#popover-head-Persona").html();
        },
        content: function() {
            $('#persona-form').trigger("reset");

            return $("#popover-content-Persona").html(datos);
        }
    });



    $("#Comunion_persona_id, #Comunion_papa_id, #Comunion_mama_id,#Comunion_padrino_id,#Comunion_madrina_id").select2({
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
            url: baseUrl + "personas/persona/ajaxlistPersonas",
            type: "get",
            dataType: 'json',
            data: function(term, page) {
                return {
                    search_value: term, // search term
                };
            },
            results: function(data, page) { // parse the results into the format expected by Select2.
                // since we are using custom formatting functions we do not need to alter remote JSON data
                return {results: data};
            }
        }
    });
    
//     $("#btn_save_bautizo").click(function (e) {
//        e.preventDefault();
//        btn_save = Ladda.create(this);
//        var form_id = $(this).attr('form-id');
//        btn_save.start();
//        saveProduccion(form_id);
//        return false;
//    }); 
//
});

//function init() {
//    $("#btn_save_bautizo").click(function (e) {
//        e.preventDefault();
//        btn_save = Ladda.create(this);
//        var form_id = $(this).attr('form-id');
//        btn_save.start();
//        saveProduccion(form_id);
//        return false;
//    });
//}

function abrirpopover(entidad_tipo) {

    $('#' + entidad_tipo + '_nombre_em_').attr('style', 'display:none;');
//    $('#Proyecto_nombre_em_').attr('style', 'display:none;');
}

function cerrarpopover() {
//    $('#popover3').popover('hide');
    $('#popover2').popover('hide');
    $('#persona-form').trigger("reset");
//    $('form.form-horizontal').trigger("reset");
//    $('#produccion-categoria-form').trigger("reset");
}

function savePersona(form) {
//    alert();

    ajaxValidarFormulario({
        formId: form,
        beforeCall: function() {

        },
        successCall: function(data) {
            if (data.success) {
                cerrarpopover();
            } else {
            }
        },
        errorCall: function(data) {

        }
    });
}
function saveProduccion(form) {
    if ($('img.imageslink').length > 0) {
        $('#logo').val($('img.imageslink').attr('filename'));
    } else {
        $('#logo').val(null);
    }
    ajaxValidarFormulario({
        formId: form,
        beforeCall: function() {
            btn_save.setProgress(0.6);
        },
        successCall: function(data) {
            if (data.success) {
                produccion_id = data.attr.id;
                habilitarPaneles();
            } else {
                btn_save.setProgress(1);
                btn_save.stop();
            }
        },
        errorCall: function() {
            btn_save.setProgress(1);
            btn_save.stop();
        }
    });
}

function habilitarPaneles() {
    $('#contenedor-form').animate({
        'height': 'toggle'
    }, 200, function() {
        $('#contenedor-multimedia').animate({
            'height': 'toggle'
        }, 200, function() {
            $('#contenedor-multimedia').removeClass('hidden');
        });
    });
}