$(document).ready(function() {
    $('.deleteButton').on('click', function() {
        var id = $(this).attr('jsId');
        req = $.ajax({
            url: 'reservation/delete/'+id,
            success: function() {
                $('#ajax' + id).remove();
            }
        });
        
    });
});