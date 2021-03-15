
/**
 * lesson-button-hide-and-reveal.js
 *
 * @since 2017-11-08
 */
var wait = 60, // replace 60 with your preferred time limit
    $form = $('.llms-complete-lesson-form, .llms-start-quiz-form');

$form.hide();
setTimeout( function() { 
    $form.show();
}, wait * 1000 );