var Script = function() {
//    maskAttributes();
//bandera para saltar la proÃ§imera accion al validar los formularios




}();

function showModalLoading() {
    var html = "";
    html += "<div class='modal-dialog  '><div class='modal-content'><div class='modal-body'><div class='modal loading-img'></div></div></div></div>";
//    html += "<div class='loading'></div>";
    $("#mainModal").html(html);
    $("#mainModal").modal("show");
}

function showModalData(html) {
     $("#mainModal").html(html);
    $("#mainModal").modal("show");
   
//    $('select.fix').selectBox();
}
/**
 * 
 * @param {cadena} url
 * @returns {undefined}
 */
function viewModal(url, CallBack)
{
    $.ajax({
        type: "POST",
        url: baseUrl + url,
        beforeSend: function() {
//            showModalLoading();
        },
        success: function(data) {
            showModalData(data);
            CallBack();
        }
    });
}
/**
 * 
 * @author Alex Yepez
 * @param {cadena} name description
 * @returns {Boolean}
 * ValidaciÃ³n de los control-group de un elemento contenedor,
 * para determinar si no contiene la clase error 
 */
function BloquearBotonesModal($form)
{
    var elemento = $form + ' a[data-dismiss="modal"]';
    $(elemento).attr("disabled", true);
    $(elemento).attr('data-dismiss', 'long');
    elemento = $form + ' a.btn-success';
    $(elemento).html('<i class="icon-loading"></i> Espere...');
    $(elemento).attr("disabled", true);
    $(elemento).attr("onclick", "true");
}
function DesBloquearBotonesModal($form, Detalle, accion)
{
    var elemento = $form + ' a[data-dismiss="long"]';
    $(elemento).attr("disabled", false);
    $(elemento).attr('data-dismiss', 'modal');
    elemento = $form + ' a.btn-success';
    $(elemento).html('<i class="icon-ok"></i>' + Detalle);
    $(elemento).attr("disabled", false);
    $(elemento).attr("onclick", accion + '("' + $form + '");');
}



function AjaxUpdateElement(url, elemento, callBack)
{
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: url,
        beforeSend: function(xhr) {
            var html = "<div class='loading'><img src='" + themeUrl + "images/truulo-loading.gif' /></div>";
            $(elemento).html(html);
        },
        success: function(data) {
            if (data.success) {
                $(elemento).html(data.html);
                callBack();
            } else {
                bootbox.alert(data.messages.error.toString());
            }
        }
    });
}
///**
// * Carga de formatos a input en formularios
// * @autor Armando Maldonado <amaldonado@tradesystem.com.ec>
// * @returns {undefined}
// */
function maskAttributes() {
    $('input.telefono').mask('000-000000');
    $('input.celular').mask('0000000000');
    $('input.ID').mask('0000000000');
    $('input.fax').mask('000-000000');
    $('input.numeric').mask('00000000000');
    $('input.money').mask('P999999999999999999999.ZZ', {
        translation: {
            'Z': {pattern: /[0-9]/, optional: true},
            'P': {pattern: /[1-9]/, },
        }});
    //continuar cargando formatos para input
}

