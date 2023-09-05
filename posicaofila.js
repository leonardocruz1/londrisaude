document.addEventListener("DOMContentLoaded", function() {
    const posicaoNaFila = document.getElementById("posicao-na-fila");

    // Simulação de fila de espera com 10 pessoas na frente
    const numeroPessoasNaFrente = 10;
    
    // Atualiza a posição na fila
    function atualizarPosicaoNaFila() {
        posicaoNaFila.textContent = `Você está na posição ${numeroPessoasNaFrente + 1} na fila.`;
    }

    atualizarPosicaoNaFila();
});
