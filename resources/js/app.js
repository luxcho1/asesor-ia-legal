import './bootstrap';

document.addEventListener("DOMContentLoaded", function() {
    var chatHistory = document.getElementById("chat-history");
    if (chatHistory) {
        chatHistory.scrollTop = chatHistory.scrollHeight;
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const botReplyElement = document.getElementById('botReply');
    if (botReplyElement) {
        let botReplyText = botReplyElement.innerHTML;
        const urlPattern = /\[Recomendación de abogados especializados en leyes (.*?) en Chile\]\((http:\/\/127\.0\.0\.1:8000\/recomendacion\/.*?)\)/g;
        
        // Corregir el reemplazo usando una función de reemplazo para manejar los grupos de captura
        botReplyText = botReplyText.replace(urlPattern, function(match, lawType, url) {
            return `<a href="${url}" target="_blank">${url}</a>`;
        });

        botReplyElement.innerHTML = botReplyText;
    }
});