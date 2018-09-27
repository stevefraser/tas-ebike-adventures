(function($) {

    $(document).ready(function(){


        // LOAD STEP 2
        $('.bookingTab, td.hasTour').on('click', function(e){
            e.preventDefault();

            $('#choosePlaces').val(0);
            $('#ajax-button').html("");

            $(".step_wrapper.two").slideUp();
            $(".step_content.one").slideUp();
            $(".step_heading.one").html("Click here to change dates");

            var tourNAME = $(this).find('.tourNAME').text();
            var tourID = $(this).find('.tourID').text();
            var tourDATE = $(this).find('.tourDATE').text();
            var tourPLACES = $(this).find('.tourPLACES').text();

            $("#bb_tourNAME").html(tourNAME);
            $("#bb_tourID").html(tourID);
            $("#bb_tourDATE").html(tourDATE);
            $("#bb_tourPLACES").html(tourPLACES);

            // Start AJAX Call
            $.ajax({
                cache: false,
                //async: false,
                timeout: 8000,
                //url: 'url',
                url : ajax_var.url,
                type: "POST",
                data: ({
                    action      :   'update_booking_widget',
                    tourNAME    :   tourNAME,
                    tourID      :   tourID,
                    tourDATE    :   tourDATE,
                    tourPLACES  :   tourPLACES,
                }),
                //dataType: "html",
                //dataType: "json",
                //contentType:'application/json',
                beforeSend: function() {
                    $( '#ajax-response' ).html( '<div class="no_results"><i class="fa fa-2x fa-cog fa-spin"></i> &nbsp; Checking availability...</div>' );
                },
                success: function( data, textStatus, jqXHR ){
                    var ajax_response = $( data );
                    $('#ajax-response').html( ajax_response );
                    //$(".placesAvailable").html(tourPLACES);
                    //$(".placesAvailable").attr("data-available",tourPLACES);
                    if(tourPLACES > 0) {
                        $(".step_wrapper.two").slideDown();
                    }
                },
                error: function( jqXHR, textStatus, errorThrown ){
                    //console.log( 'The following error occured: ' + textStatus, errorThrown );
                    //$( '#ajax-response' ).html( 'Error: ' + textStatus + errorThrown);
                    $( '#ajax-response' ).html( 'Oops! Please reload the page.');
                },
                complete: function( jqXHR, textStatus ){
                    //alert("function complete");
                }
            });




        });





        // LOAD BOOKING BUTTON
        $('#choosePlaces').change(function(e) {
            e.preventDefault();

            var tourNAME = $('#bb_tourNAME').text();
            var tourID = $('#bb_tourID').text();
            var tourDATE = $('#bb_tourDATE').text();
            var tourPLACES = $('#bb_tourPLACES').text();
            var tourRIDERS = $(this).val();

            // Start AJAX Call
            $.ajax({
                cache: false,
                //async: false,
                timeout: 8000,
                //url: 'url',
                url : ajax_var.url,
                type: "POST",
                data: ({
                    action      :   'update_booking_button',
                    tourNAME    :   tourNAME,
                    tourID      :   tourID,
                    tourDATE    :   tourDATE,
                    tourPLACES  :   tourPLACES,
                    tourRIDERS  :   tourRIDERS,
                }),
                //dataType: "html",
                //dataType: "json",
                //contentType:'application/json',
                beforeSend: function() {
                    $( '#ajax-button' ).html( '<div class="no_results"><i class="fa fa-2x fa-cog fa-spin"></i> &nbsp; Updating booking button...</div>' );
                },
                success: function( data, textStatus, jqXHR ){
                    var ajax_response = $( data );
                    $('#ajax-button').html( ajax_response );
                    //console.log(ajax_response);
                },
                error: function( jqXHR, textStatus, errorThrown ){
                    //console.log( 'The following error occured: ' + textStatus, errorThrown );
                    //$( '#ajax-response' ).html( 'Error: ' + textStatus + errorThrown);
                    $( '#ajax-button' ).html( 'Oops! Please reload the page.');
                },
                complete: function( jqXHR, textStatus ){
                    //alert("function complete");
                }
            });



        });




    });

})(jQuery);