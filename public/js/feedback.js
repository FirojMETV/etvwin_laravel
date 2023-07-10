
function countCharactersAndUpdateCount() {
    // Get the input field value
    var input = document.getElementById('inputField').value;
    // Trim the input to remove leading and trailing whitespace
    var trimmedInput = input.trim();
    // Limit the input to not more than 1000 characters
    var limitedInput = trimmedInput.slice(0, 1000);
    // Update the input field value with the limited input
    document.getElementById('inputField').value = limitedInput;
    // Calculate the character count
    var characterCount = limitedInput.length;
    // Display the character count
    var characterCountElement = document.getElementById('characterCount');
    characterCountElement.textContent = characterCount;
}
