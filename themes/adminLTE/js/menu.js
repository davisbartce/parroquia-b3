$(function() {
    $(document).ready(function() {
        var pathname = window.location.pathname;
        //alert(pathname);
//        alert(pathname);

        $('a[href="' + pathname + '"]').parents('li').addClass('active');
        $(".sidebar .treeview").tree();
    });
});