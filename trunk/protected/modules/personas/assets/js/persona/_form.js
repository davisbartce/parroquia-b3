var btn_save;
$(function () {
//    alert();
    $()
    //ation load
    //ladda submit
    $("#btn_save").click(function (e) {
        e.preventDefault();
        btn_save = Ladda.create(this);
        var form_id = $(this).attr('form-id');
        btn_save.start();
        save(form_id);
        return false;
    });
    
    
});
function save($form) {
    alert('save');
    ajaxValidarFormulario({
        formId: $form,
        beforeCall: function () {
            btn_save.setProgress(0.6);
        },
        errorCall: function () {
//             alert('error');
            btn_save.setProgress(1);
            btn_save.stop();
        },
        successCall: function (data) {
            
            window.location = baseUrl+"personas/persona/admin";
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
