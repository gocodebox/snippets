
/**
 * llms-progress-bar-color-based-on-progress.js
 *
 * @since 2019-02-05
 */
<script>
(function($){
var ranges = [
 {
   color: '#ccc',
   low: 0,
   high: 33.999,
 },
 {
   color: '#aaa',
   low: 34,
   high: 66.999,
 },
 {
   color: '#999',
   low: 67,
   high: 100,
 },
];
function change_bar_colors() {
  $( '.llms-progress' ).each( function() {
    var $bar = $( this ).find( '.progress-bar-complete' ),
        perc = $bar.attr( 'data-progress' ).replace( '%', '' ) * 1;
    $.each( ranges, function( i, data ) {
       if( perc >= data.low && perc <= data.high ) {
           $bar.css( 'background-color', data.color );
           return;
       }
    } );
  } );
};
setTimeout( function() {
  change_bar_colors();
}, 2000 );
change_bar_colors();
})(jQuery);
</script>