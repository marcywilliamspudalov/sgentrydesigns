// JavaScript Document

$('nav ul li a').smoothScroll();


$('nav ul li a').bigSlide();


$( window ).load( function()
{
    var columns    = 3,
        setColumns = function() { columns = $( window ).width() > 640 ? 3 : $( window ).width() > 320 ? 2 : 1; };
 
    setColumns();
    $( window ).resize( setColumns );
 
    $( '#list' ).masonry(
    {
        itemSelector: '.item',
        columnWidth:  function( containerWidth ) { return containerWidth / columns; }
    });
});

<script type="text/javascript">// <![CDATA[
             var page = 1;             $(window).scroll(function () {                 $('#more').hide();                 $('#no-more').hide();                 if($(window).scrollTop() + $(window).height() > $(document).height() - 200) {
                    $('#more').css("top","400");
                    $('#more').show();
                }
                if($(window).scrollTop() + $(window).height() == $(document).height()) {

                    $('#more').hide();
                    $('#no-more').hide();

                    page++;

                    var data = {
                        page_num: page
                    };

                    var actual_count = "<?php echo $actual_row_count; ?>";

                    if((page-1)* 12 > actual_count){
                        $('#no-more').css("top","400");
                        $('#no-more').show();
                    }else{

                    }

                }

            });
// ]]></script>

