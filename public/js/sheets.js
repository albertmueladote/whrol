$(document).ready(function() {
    $('.sheet').on('click', function(){
        window.location.href = '/sheet?sheet=' + $(this).data('sheet');
    })
});