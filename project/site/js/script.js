// Seleciona o elemento de feedback
    var feedbackMsg = document.getElementById('feedbackMsg');
// Define um intervalo de tempo (por exemplo, 5 segundos)
    var timeout = setTimeout(function() {
        // Remove a classe 'show' após o intervalo de tempo
        feedbackMsg.classList.remove('show');
    }, 5000); // 5000 milissegundos = 5 segundos

