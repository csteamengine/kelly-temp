$(window).ready( function(){
    $('.project-bg').each(function(){
        var imageElement = $(this);
        var image = $(this).data('image');
        var img = $('<img />').attr({
            'src': image,
        }).on('load', function() {
            imageElement.css('background', 'url("'+image+'") center top');
            imageElement.css('background-size', 'cover');
        });
    });
});
