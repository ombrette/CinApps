$(document).ready(function(){


/*Bande annonce*/
            $('.video').fancybox();   
            $("a.site").fancybox({          
                'hideOnContentClick'        : true,
                'padding'           : 0,
                'overlayColor'          :'#D3D3D3',
                'transitionIn'          :'elastic',
                'transitionOut'         :'elastic',
                'overlayOpacity'        : 0.7,
                'zoomSpeedIn'           : 300,
                'zoomSpeedOut'          : 300,
                'width'             : 950,
                'height'            : 400,
                'type'              :'iframe'
            });



/*Slider*/
   $('.center').slick({
  centerMode: true,
  centerPadding: '40px',
  slidesToShow: 4,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
                

   
  
});