document.addEventListener("DOMContentLoaded", function() {
    // Função para exibir o formulário de login
    function showLoginForm() {
        var loginContainer = document.querySelector('.login-container');
        loginContainer.style.display = 'block';
    }

    // Função para ocultar o formulário de login
    function hideLoginForm() {
        var loginContainer = document.querySelector('.login-container');
        loginContainer.style.display = 'none';
    }

    // Função para atualizar o relógio em tempo real
    function updateClock() {
        var clockElement = document.getElementById('clock');
        var now = new Date();
        var hours = now.getHours().toString().padStart(2, '0');
        var minutes = now.getMinutes().toString().padStart(2, '0');
        var seconds = now.getSeconds().toString().padStart(2, '0');
        clockElement.textContent = hours + ':' + minutes + ':' + seconds;
    }

    
    // Atualiza o relógio a cada segundo
    setInterval(updateClock, 1000);

    // Inicializa o relógio
    updateClock();

    // Adiciona ouvintes de eventos ao link de login
    var loginLink = document.querySelector('#menu a');
    if (loginLink) {
        loginLink.addEventListener('click', function(event) {
            event.preventDefault(); // Impede o comportamento padrão do link
            showLoginForm();
        });
    }

    // Adiciona um ouvinte de eventos para ocultar o formulário quando clicar fora dele
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.login-container') && event.target !== loginLink) {
            hideLoginForm();
        }
    });
});
