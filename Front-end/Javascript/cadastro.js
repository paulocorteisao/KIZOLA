const formulario = document.getElementById("formCadastro");

formulario.addEventListener("submit", async (e) => {

    e.preventDefault();

    const dados = new FormData(formulario);

    const resposta = await fetch("/backend/controllers/auth.php", {
        method: "POST",
        body: dados
    });

    const resultado = await resposta.json();

    alert(resultado.mensagem);

});