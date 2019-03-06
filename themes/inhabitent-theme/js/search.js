(function ($) {

    $(function () {
        //1. add class to style to display:none
        //2. css transition eaase in out 1second
        //3.prevent default on button
        //4. make focus when you click on it, click away=blur
        //2 event listener on the button, 1 click 1 blur
        //focus and blur on input


        $(".search-button").on("click", (event) => {
            event.preventDefault();
            $(".search-bar").toggleClass("active")
            $(".search-field").focus();

        });

        $('.search-field').on('blur', () => {

            if ($('.search-field').val().length > 0) {
                return false;
            }

            else if($(".search-bar").hasClass("active")){
                $(".search-bar").removeClass('active');

            }
            

        });

    });

})(jQuery);