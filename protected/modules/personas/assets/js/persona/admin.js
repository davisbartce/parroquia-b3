
$(function() {

    
    $('#busquedaSearch').keydown(function(e) {
    if (e.keyCode == 13) {
        e.preventDefault();
          search();
    }
   
});
});

function search() {
    $.fn.yiiGridView.update('persona-grid', {
        data: {searchValue: $('#busquedaSearch').val()},
//        searchValue: $('busquedaSearch').val()
    });
}

