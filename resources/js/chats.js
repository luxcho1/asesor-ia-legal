import './bootstrap';
import '../css/chats.css';

// Función para mostrar el efecto de escribir
function typeWriterEffect(elementId, delay = 20) {
    const element = document.getElementById(elementId);
    if (!element) return; // Verificar si el elemento existe
    const message = element.textContent.trim();
    let index = 0;
    element.textContent = '';

    const typingInterval = setInterval(() => {
        if (index < message.length) {
            element.textContent += message[index];
            index++;
            scrollToBottom(); // Desplaza automáticamente hacia abajo mientras escribe
        } else {
            clearInterval(typingInterval);
        }
    }, delay);
}

// Función para desplazarse automáticamente al final del contenedor de chat
function scrollToBottom() {
    const chatContainer = document.getElementById('chat-history');
    chatContainer.scrollTop = chatContainer.scrollHeight;
}

// // Llamar a la función de animación cuando se cargue la página
document.addEventListener('DOMContentLoaded', () => {
    typeWriterEffect('botReply');
    scrollToBottom(); // Asegurar que el historial esté desplazado hacia abajo al cargar
});

