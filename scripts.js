//-----------------------
//Game creation functions
//-----------------------

//New tile event listener
(function($) {

    let button = $('.music-button');

    button.on('click', function(event){
        event.preventDefault();

        let audio = $(this).parents('.music').find('audio')[0];
        let duration = $(this).data('duration');

        if ( Number.isInteger(duration) ) {
            audio.play();
            setTimeout(() => {
                audio.pause();
                audio.currentTime = 0;
            }, duration);

        }

    });

})(jQuery);
