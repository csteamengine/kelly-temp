$(document).ready(function(){
    $('#page_content').summernote({
        dialogsInBody: false,
        callbacks:{
            onInit:function(){
                $('body > .note-popover').hide();
            }
        },
        tooltip: false
    });

    $('.square').on('click', function(){
        $($(this).data('trigger')).click();
    })
})
