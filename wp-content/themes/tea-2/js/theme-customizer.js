( function( $ ) {




  // colours section ==========================================================================================



  // body bg colour
  wp.customize('colours_body_bg',function( value ) {
      value.bind(function(to) {
          $('body').css('background', to);
      });
  });

  // btt icon colour
  wp.customize('colours_btt_icon',function( value ) {
      value.bind(function(to) {
          $('a.backtotop').css('background-color', to);
      });
  });

  // body bg colour
  wp.customize('colours_hyperlink',function( value ) {
      value.bind(function(to) {
          $('a').css('color', to);
      });
  });

  // body bg colour
  wp.customize('colours_hyperlink_hover',function( value ) {
      value.bind(function(to) {
          $('a:hover').css('color', to);
      });
  });

  // body font weight
  wp.customize('hyperlink_decoration',function( value ) {
      value.bind(function(to) {
          $('a').css('text-decoration', to);
      });
  });





  // body font family ==========================================================================================
  wp.customize('body_font_family',function( value ) {

      var font_stack = wp.customize('font_stacks').get();
      var fontstack_array = font_stack.split('\n');

      value.bind(function(to) {
          $('.styleguide-page p').css('font-family',fontstack_array[to]);
      });
  });

  // body font weight
  wp.customize('body_font_weight',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page p').css('font-weight', to);
      });
  });

  // body font size
  wp.customize('body_font_size',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page p').css('font-size', to);
      });
  });

  // body font line_height
  wp.customize('body_font_line_height',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page p').css('line-height', to);
      });
  });

  // body font colour
  wp.customize('body_font_colour',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page p').css('color', to);
      });
  });







  // H1 font family ==========================================================================================
  wp.customize('h1_font_family',function( value ) {

      var font_stack = wp.customize('font_stacks').get();
      var fontstack_array = font_stack.split('\n');

      value.bind(function(to) {
          $('.styleguide-page h1').css('font-family',fontstack_array[to]);
      });
  });

  // H1 font weight
  wp.customize('h1_font_weight',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h1').css('font-weight', to);
      });
  });

  // H1 font size
  wp.customize('h1_font_size',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h1').css('font-size', to);
      });
  });

  // H1 font line_height
  wp.customize('h1_font_line_height',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h1').css('line-height', to);
      });
  });

  // H1 font colour
  wp.customize('h1_font_colour',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h1').css('color', to);
      });
  });

  // H1 font text-transform
  wp.customize('h1_font_uppercase',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h1').css('text-transform', to == 1 ? 'uppercase' : 'none');
      });
  });







  // H2 font family ==========================================================================================
  wp.customize('h2_font_family',function( value ) {

      var font_stack = wp.customize('font_stacks').get();
      var fontstack_array = font_stack.split('\n');

      value.bind(function(to) {
          $('.styleguide-page h2').css('font-family',fontstack_array[to]);
      });
  });

  // H2 font weight
  wp.customize('h2_font_weight',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h2').css('font-weight', to);
      });
  });

  // H2 font size
  wp.customize('h2_font_size',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h2').css('font-size', to);
      });
  });

  // H2 font line_height
  wp.customize('h2_font_line_height',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h2').css('line-height', to);
      });
  });

  // H2 font colour
  wp.customize('h2_font_colour',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h2').css('color', to);
      });
  });

  // H2 font text-transform
  wp.customize('h2_font_uppercase',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h2').css('text-transform', to == 1 ? 'uppercase' : 'none');
      });
  });







  // H3 font family ==========================================================================================
  wp.customize('h3_font_family',function( value ) {

      var font_stack = wp.customize('font_stacks').get();
      var fontstack_array = font_stack.split('\n');

      value.bind(function(to) {
          $('.styleguide-page h3').css('font-family',fontstack_array[to]);
      });
  });

  // H3 font weight
  wp.customize('h3_font_weight',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h3').css('font-weight', to);
      });
  });

  // H3 font size
  wp.customize('h3_font_size',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h3').css('font-size', to);
      });
  });

  // H3 font line_height
  wp.customize('h3_font_line_height',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h3').css('line-height', to);
      });
  });

  // H3 font colour
  wp.customize('h3_font_colour',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h3').css('color', to);
      });
  });

  // H3 font text-transform
  wp.customize('h3_font_uppercase',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h3').css('text-transform', to == 1 ? 'uppercase' : 'none');
      });
  });





  // H4 font family ==========================================================================================
  wp.customize('h4_font_family',function( value ) {

      var font_stack = wp.customize('font_stacks').get();
      var fontstack_array = font_stack.split('\n');

      value.bind(function(to) {
          $('.styleguide-page h4').css('font-family',fontstack_array[to]);
      });
  });

  // H4 font weight
  wp.customize('h4_font_weight',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h4').css('font-weight', to);
      });
  });

  // H4 font size
  wp.customize('h4_font_size',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h4').css('font-size', to);
      });
  });

  // H4 font line_height
  wp.customize('h4_font_line_height',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h4').css('line-height', to);
      });
  });

  // H4 font colour
  wp.customize('h4_font_colour',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h4').css('color', to);
      });
  });

  // H4 font text-transform
  wp.customize('h4_font_uppercase',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h4').css('text-transform', to == 1 ? 'uppercase' : 'none');
      });
  });





  // H5 font family ==========================================================================================
  wp.customize('h5_font_family',function( value ) {

      var font_stack = wp.customize('font_stacks').get();
      var fontstack_array = font_stack.split('\n');

      value.bind(function(to) {
          $('.styleguide-page h5').css('font-family',fontstack_array[to]);
      });
  });

  // H5 font weight
  wp.customize('h5_font_weight',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h5').css('font-weight', to);
      });
  });

  // H5 font size
  wp.customize('h5_font_size',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h5').css('font-size', to);
      });
  });

  // H5 font line_height
  wp.customize('h5_font_line_height',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h5').css('line-height', to);
      });
  });

  // H5 font colour
  wp.customize('h5_font_colour',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h5').css('color', to);
      });
  });

  // H5 font text-transform
  wp.customize('h5_font_uppercase',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h5').css('text-transform', to == 1 ? 'uppercase' : 'none');
      });
  });







  // H6 font family ==========================================================================================
  wp.customize('h6_font_family',function( value ) {

      var font_stack = wp.customize('font_stacks').get();
      var fontstack_array = font_stack.split('\n');

      value.bind(function(to) {
          $('.styleguide-page h6').css('font-family',fontstack_array[to]);
      });
  });

  // H6 font weight
  wp.customize('h6_font_weight',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h6').css('font-weight', to);
      });
  });

  // H6 font size
  wp.customize('h6_font_size',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h6').css('font-size', to);
      });
  });

  // H6 font line_height
  wp.customize('h6_font_line_height',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h6').css('line-height', to);
      });
  });

  // H6 font colour
  wp.customize('h6_font_colour',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h6').css('color', to);
      });
  });

  // H6 font text-transform
  wp.customize('h6_font_uppercase',function( value ) {
      value.bind(function(to) {
          $('.styleguide-page h6').css('text-transform', to == 1 ? 'uppercase' : 'none');
      });
  });





  // Footer section ==========================================================================================

  // Copyright text
  // wp.customize('copyright_textbox',function( value ) {
  //     value.bind(function(to) {
  //         $('.styleguide-page h6').css('text-transform', to == 1 ? 'uppercase' : 'none');
  //     });
  // });





} )( jQuery );