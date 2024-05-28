const senhaRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,20}$/;

function validar() {

    var nome = formulario.nome;
    if (nome.value == "") {
        alert("Campo Nome não informado.");
        nome.focus();
        return false;
    }

    var email = formulario.email;
    if (email.value == "") {
        alert("Campo Email não informado.");
        email.focus();
        return false;
    }

    var usuario = formulario.usuario;
    if (usuario.value == "") {
        alert("Campo Usuário não informado.");
        usuario.focus();
        return false;
    }

    var senha = formulario.senha;
    if (senha.value == "") {
        alert("Csampo Senha não informado.");
        senha.focus();
        return false;
    }

    var confirmarsenha = formulario.confirmarsenha;
    if (confirmarsenha.value == "") {
        alert("Por favor, confirme a senha.");
        confirmarsenha.focus();
        return false;
    }

    if (senha.value != confirmarsenha.value) {
        alert("As senhas não são iguais.");
        return false;
    }

    if (!senhaRegex.test(String(senha.value))) {
        alert('Senha deve ter de 8 a 20 caracteres, 1 maiúscula, 1 minúscula, 1 número e 1 caracter especial.');
        senha.focus();
        return false;
    }

    return true;
}



function validarCurso() {

    var titulo = formulario.titulo;
    if (titulo.value == "") {
        alert("Campo Título não informado.");
        titulo.focus();
        return false;
    }

    var descricao = formulario.descricao;
    if (descricao.value == "") {
        alert("Campo Descrição não informado.");
        descricao.focus();
        return false;
    }

    var resumo = formulario.resumo;
    if (resumo.value == "") {
        alert("Campo Resumo não informado.");
        resumo.focus();
        return false;
    }

    var ordem = formulario.ordem;
    if (ordem.value == "") {
        alert("Campo Ordem não informado.");
        ordem.focus();
        return false;
    }

    return true;
}


function validarVideo() {

    var id_curso = formulario.id_curso;
    if (id_curso.value == "") {
        alert("Campo Id Curso não informado.");
        id_curso.focus();
        return false;
    }

    var titulo = formulario.titulo;
    if (titulo.value == "") {
        alert("Campo Título não informado.");
        titulo.focus();
        return false;
    }

    var url = formulario.url;
    if (url.value == "") {
        alert("Campo URL não informado.");
        url.focus();
        return false;
    }

    return true;
}