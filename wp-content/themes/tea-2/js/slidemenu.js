// as the page loads, call these scripts
jQuery(document).ready(function($) {

    // Responsive Slide Nav Scripts
    $('.lines_two, .cross').on('click',function(e) {        e.preventDefault();
        e.stopPropagation();

        $('nav#sideNav').toggleClass('active');

        $(document).on('click', function(e){
            if($('nav#sideNav').has(e.target).length === 0){
                $('nav#sideNav').removeClass('active');
            }
        });
    });

});