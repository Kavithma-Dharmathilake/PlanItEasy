document.addEventListener('DOMContentLoaded', function () {
    const messagesDiv = document.getElementById('messages');
    const messageInput = document.getElementById('message-input');
    const sendButton = document.getElementById('send-button');

    sendButton.addEventListener('click', function () {
        const message = messageInput.value.trim();
        if (message !== '') {
            appendMessage('You', message); // Display the message you sent
            messageInput.value = ''; // Clear the input field

            // Send the message to the server (you need to implement the server-side logic here)
            // Example: You can use AJAX to send the message to the server and save it in a database
        }
    });

    // Function to display a message in the chat
    function appendMessage(sender, message) {
        const messageDiv = document.createElement('div');
        messageDiv.innerHTML = `<strong>${sender}:</strong> ${message}`;
        messagesDiv.appendChild(messageDiv);
        messagesDiv.scrollTop = messagesDiv.scrollHeight;
    }
});
