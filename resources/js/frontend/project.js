$('.carousel').carousel()

$('.project-image-tiles').on('click', function(event){
    $($(this).data('target')).get(0).scrollIntoView({ behavior: 'smooth', block: 'center' });
});

$(document).ready(function(){
    let carousel = $('.carousel-item');
    carousel.each(function(){
        var imageElement = $(this);
        var image = $(this).data('image');

        loadImage(image, imageElement);
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

    carousel.each(function(){
        var imageElement = $(this);
        var image = $(this).data('modal-image');

        loadImage(image, imageElement);
    });
});

function loadImage(image, imageElement){
    $('<img />').attr({
        'src': image,
    }).on('load', function() {
        var height = $(this).prop('naturalHeight');
        var width = $(this).prop('naturalWidth');

        imageElement.css('background', 'url("'+image+'") center center');
        if(width > height){
            imageElement.css('background-size', '100%');
        }else{
            imageElement.css('background-size', 'auto 100%');
        }
    });
}

$('#projectImagePreview').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var image = button.data('modal-image');
    var modal = $(this);
    var element = modal.find('.modal-content');

    let imgSrc = $('<img />').attr({
        'src': image,
        'class': 'img-responsive'
    }).on('load', function() {
        var height = $(this).prop('naturalHeight');
        var width = $(this).prop('naturalWidth');

        if(height > width){
            $(this).css('height', '90vh');
            $(this).css('width', 'auto');
        }else{
            $(this).css('height', 'auto');
            $(this).css('width', '90vw');
        }

        element.html($(this));
    });
})
