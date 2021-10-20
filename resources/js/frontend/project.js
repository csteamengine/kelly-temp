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
    console.log("Here 1");
    if((tilesLoaded && carouselLoaded) || isMobile()){
        console.log("Here 2");
        $('.carousel-item').each(function(){
            let imageElement = $(this);
            let image = $(this).data('modal-image');

            let imgSrc = $('<img />').attr({
                'src': image,
                'class': 'img-responsive largeImage'
            }).on('load', function() {
                $(this).hide();

                imageElement.html($(this));
            });
        });
    }
}

$('#projectImagePreview').on('show.bs.modal', function (event) {
    console.log("Here");
    let button = $(event.relatedTarget);
    let modal = $(this);
    let imageOriginal = button.find('.largeImage');
    let image = imageOriginal.clone();
    console.log(image);
    let element = modal.find('.modal-content');

    let height = imageOriginal.prop('naturalHeight');
    let width = imageOriginal.prop('naturalWidth');

    if(height > width){
        image.css('height', '90vh');
        image.css('width', 'auto');
    }else{
        image.css('height', 'auto');
        image.css('width', '90vw');
    }

    image.show();

    element.html(image);
})

function isMobile(){
    // credit to Timothy Huang for this regex test:
    // https://dev.to/timhuang/a-simple-way-to-detect-if-browser-is-on-a-mobile-device-with-javascript-44j3
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        return true
    }
    else{
        return false
    }
}
