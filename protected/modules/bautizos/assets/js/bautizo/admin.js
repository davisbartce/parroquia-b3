
$(function() {

    
    $('#busquedaSearch').keydown(function(e) {
    if (e.keyCode == 13) {
        e.preventDefault();
          search();
    }
   
});
});

function search() {
    $.fn.yiiGridView.update('bautizo-grid', {
        data: {searchValue: $('#busquedaSearch').val()},
//        searchValue: $('busquedaSearch').val()
    });
}

