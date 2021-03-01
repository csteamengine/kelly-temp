$('.carousel').carousel()

$('.project-image-tiles').on('click', function(event){
    $($(this).data('target')).get(0).scrollIntoView({ behavior: 'smooth', block: 'center' });
});

$(document).ready(function(){
    $('.carousel-item').each(function(){
        var imageElement = $(this);
        var image = $(this).data('image');

        var img = $('<img />').attr({
            'src': image,
        }).on('load', function() {
            var height = $(this).prop('naturalHeight');
            var width = $(this).prop('naturalWidth');
            console.log($(this).prop('naturalHeight'));
            imageElement.css('background', 'url("'+image+'") center center');
            if(width > height){
                imageElement.css('background-size', '100%');
            }else{
                imageElement.css('background-size', 'auto 100%');
            }
        });
    });

    $('.project-image-tiles-image').each(function(){
        var imageElement = $(this);
        var image = $(this).data('image');
        var img = $('<img />').attr({
            'src': image,
        }).on('load', function() {
            imageElement.css('background', 'url("'+image+'") center center');
            imageElement.css('background-size', 'cover');
        });
    });
});

