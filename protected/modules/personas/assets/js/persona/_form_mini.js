var btn_save_persona;
$(function() {
    $('form#persona-form').find('label.control-label').addClass('hidden')

//    alert();
    $()
    //ation load
    //ladda submit
    $("#btn_save_persona").click(function(e) {
        e.preventDefault();
        btn_save_persona = Ladda.create(this);
        var form_id = $(this).attr('form-id');
        btn_save_persona.start();
        save(form_id);
        return false;
    });


});
function save($form) {
    alert('save');
    ajaxValidarFormulario({
        formId: $form,
        beforeCall: function() {
            btn_save_persona.setProgress(0.6);
        },
        errorCall: function() {
            alert('error');
            btn_save_persona.setProgress(1);
            btn_save_persona.stop();
        },
        successCall: function(data) {
            btn_save_persona.setProgress(1);
            btn_save_persona.stop();
            cerrarpopover();
//            alert('sucess');

//            window.location = "/parroquia-b3/personas/persona/admin";
//            escenario_id = data.attr.id;
//            $('#panel_escenario').fadeOut(200, function () {
//                $('[for="btn_multimedia"]').fadeIn(200);
//                $('#panel_taquilla_secciones').fadeIn(200);
//                $('#Escenario_Taquilla_escenario_id').val(escenario_id);
//            });
//window.location
        }
    });
}
