$('.carousel').carousel()

$('.project-image-tiles').on('click', function(event){
    $($(this).data('target')).get(0).scrollIntoView({ behavior: 'smooth', block: 'center' });
});

let carouselLoaded = false;
let tilesLoaded = false;

$(document).ready(function(){
    let carousel = $('.carousel-item');
    let carouselLength = carousel.length;
    let imageTiles = $('.project-image-tiles-image');
    let imageTilesLength = imageTiles.length;

    carousel.each(function(index){
        let imageElement = $(this);
        let image = $(this).data('image');

        loadImage(image, imageElement, (index === (carouselLength - 1)));
    });

    imageTiles.each(function(index){
        let imageElement = $(this);
        let image = $(this).data('image');
        let img = $('<img />').attr({
            'src': image,
        }).on('load', function() {
            imageElement.css('background', 'url("'+image+'") center center');
            imageElement.css('background-size', 'cover');
            if(index === (imageTilesLength - 1)){
                tilesLoaded = true;
                loadLargeImages();
            }
        });
    });
});

function loadImage(image, imageElement, isLast = false){
    $('<img />').attr({
        'src': image,
    }).on('load', function() {
        let height = $(this).prop('naturalHeight');
        let width = $(this).prop('naturalWidth');

        imageElement.css('background', 'url("'+image+'") center center');
        if(width > height){
            imageElement.css('background-size', '100%');
        }else{
            imageElement.css('background-size', 'auto 100%');
        }
        if(isLast) {
            carouselLoaded = true;
            loadLargeImages();
        }
    });
}

function loadLargeImages(){
    if(tilesLoaded && carouselLoaded){
        console.log("HERE!");
        $('.carousel-item').each(function(){
            let imageElement = $(this);
            let image = $(this).data('modal-image');

            loadImage(image, imageElement);
        });
    }
}

$('#projectImagePreview').on('show.bs.modal', function (event) {
    let button = $(event.relatedTarget)
    let image = button.data('modal-image');
    let modal = $(this);
    let element = modal.find('.modal-content');

    let imgSrc = $('<img />').attr({
        'src': image,
        'class': 'img-responsive'
    }).on('load', function() {
        let height = $(this).prop('naturalHeight');
        let width = $(this).prop('naturalWidth');

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
