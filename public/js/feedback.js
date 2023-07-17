$(document).ready(function() {
    $('#openFormButton').click(function() {
        $('.form').toggleClass('show'); // Toggle the "show" class to display/hide the feedback form
        $('.overlay').toggleClass('show'); // Toggle the "show" class to display/hide the overlay
    });
});


// function countCharactersAndUpdateCount() {
//     // Get the input field value
//     var input = document.getElementById('inputField').value;
//     // Trim the input to remove leading and trailing whitespace
//     var trimmedInput = input.trim();
//     // Limit the input to not more than 1000 characters
//     var limitedInput = trimmedInput.slice(0, 1000);
//     // Update the input field value with the limited input
//     document.getElementById('inputField').value = limitedInput;
//     // Calculate the character count (including spaces)
//     var characterCount = limitedInput.length;
//     // Calculate the space count
//     var spaceCount = (limitedInput.match(/ /g) || []).length;
//     // Display the character count (including spaces)
//     var characterCountElement = document.getElementById('characterCount');
//     characterCountElement.textContent = characterCount;
//     // Display the space count
//     var spaceCountElement = document.getElementById('spaceCount');
//     spaceCountElement.textContent = spaceCount;
// }

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