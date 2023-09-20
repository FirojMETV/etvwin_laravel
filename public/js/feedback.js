$(document).ready(function() {
    $('#openFormButton').click(function() {
        $('.form').toggleClass('show'); // Toggle the "show" class to display/hide the feedback form
        $('.overlay').toggleClass('show'); // Toggle the "show" class to display/hide the overlay
    });
});




$('textarea').keyup(function() {
    
    var characterCount = $(this).val().length,
        current = $('#current'),
        maximum = $('#maximum'),
        theCount = $('#the-count');
      
    current.text(characterCount);
   
    
    /*This isn't entirely necessary, just playin around*/
    
    if (characterCount >= 840) {
      maximum.css('color', '#8f0001');
      current.css('color', '#8f0001');
      theCount.css('font-weight','bold');
    } else {
      maximum.css('color','#666');
      theCount.css('font-weight','normal');
    }
    
        
  });