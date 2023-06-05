
var radio = document.querySelector('.manual-btn')
var cont = 1

document.getElementById('radio1').checked = true

setInterval(() => {
    proximaImg()
}, 5000)

function proximaImg() {
    cont++

    if (cont > 3) {
        cont = 1
    }

    document.getElementById('radio' + cont).checked = true
}
// aba de pesquisa
document.getElementById("search-button").addEventListener("click", function (event) {
    event.preventDefault(); // Impede o envio do formulário

    // Obtém o valor digitado no campo de pesquisa
    var searchTerm = document.getElementById("search-input").value;

    // Redireciona para a página de resultados de pesquisa com o termo de pesquisa como parâmetro
    window.location.href = "/paginas/catalogo.html?query=" + encodeURIComponent(searchTerm);
});


