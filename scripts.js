//-----------------------
//Game functions
//-----------------------

(function($) {

    //Variables
    let buttonShort = $('.short-button');

    //Set default volume for all audios
    $( 'audio' ).each(function( index ) {
        $(this)[0].volume = 0.5; 
    });

    //Short songs
    buttonShort.on('click', function(event){
        event.preventDefault();

        let audio = $(this).parents('.buttons').parents('.song').find('audio')[0];
        let duration = $(this).data('duration');

        if ( Number.isInteger(duration) ) {
            audio.play();
            setTimeout(() => {
                audio.pause();
                audio.currentTime = 0;
            }, duration);

        }

    });

    //Show answer
    $('.answer a').on('click', function(event){
        event.preventDefault();

        if ( $(this).hasClass('open') ) {
            $(this).next('p').slideUp();
            $(this).html('Näytä vastaus');
            $(this).removeClass('open');
        } else {
            $(this).next('p').slideDown();
            $(this).html('Piilota vastaus');
            $(this).addClass('open');
        }
    });

})(jQuery);
