import './bootstrap';

document.addEventListener("DOMContentLoaded", function() {
    var chatHistory = document.getElementById("chat-history");
    if (chatHistory) {
        chatHistory.scrollTop = chatHistory.scrollHeight;
    }
});