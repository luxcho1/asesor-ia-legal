document.addEventListener('DOMContentLoaded', function() {
    const toggleHistoryButton = document.getElementById('toggle-history');
    const chatHistory = document.getElementById('chat-history');
    const chatCurrent = document.getElementById('chat-current');
    const chatForm = document.getElementById('chat-form');
    const askText = document.querySelector('input[name="askText"]');

    // Ocultar el historial por defecto
    chatHistory.style.display = 'none';
    toggleHistoryButton.textContent = 'Ver Historial';

    toggleHistoryButton.addEventListener('click', function() {
        if (chatHistory.style.display === 'none' || chatHistory.style.display === '') {
            chatHistory.style.display = 'block';
            toggleHistoryButton.textContent = 'Ocultar Historial';
        } else {
            chatHistory.style.display = 'none';
            toggleHistoryButton.textContent = 'Ver Historial';
        }
    });

    chatForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(chatForm);
        const userMessage = formData.get('askText');

        // Mostrar el mensaje del usuario en la sección visible
        const userMessageDiv = document.createElement('div');
        userMessageDiv.classList.add('mb-3');
        userMessageDiv.innerHTML = `<p><strong>Usuario:</strong> ${userMessage}</p>`;
        chatCurrent.appendChild(userMessageDiv);

        // Mostrar animación de escritura del chatbot
        const botTypingDiv = document.createElement('div');
        botTypingDiv.classList.add('mb-3', 'bot-typing');
        botTypingDiv.innerHTML = `<p><strong>Chatbot:</strong> <span class="typing">...</span></p>`;
        chatCurrent.appendChild(botTypingDiv);

        // Desplazar el chat hacia abajo
        chatCurrent.scrollTop = chatCurrent.scrollHeight;

        // Enviar la solicitud AJAX
        fetch(chatbotAjaxUrl, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': formData.get('_token'),
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ askText: userMessage })
        })
        .then(response => response.json())
        .then(data => {
            // Eliminar la animación de escritura
            chatCurrent.removeChild(botTypingDiv);

            // Mostrar la respuesta del chatbot en la sección visible
            const botReplyDiv = document.createElement('div');
            botReplyDiv.classList.add('mb-3');
            botReplyDiv.innerHTML = `<p><strong>Chatbot:</strong> ${data.botReply}</p>`;
            chatCurrent.appendChild(botReplyDiv);

            // Desplazar el chat hacia abajo
            chatCurrent.scrollTop = chatCurrent.scrollHeight;

            // Limpiar el campo de entrada
            askText.value = '';
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});