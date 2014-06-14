$('#meu_form').validate({
    rules: {
        nome: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        assunto: {
            required: true
        },
        mensagem: {
            required: true
        }
    },
    messages: {
        nome: {
            required: "O campo nome é obrigatorio.",
        },
        email: {
            required: "O campo email é obrigatorio.",
            email: "O campo email deve conter um email válido."
        },
        assunto: {
            required: "O campo assunto é obrigatorio."
        },
        mensagem: {
            required: "O campo mensagem é obrigatório"
        }
    }
});