function getAddressByCep(valor, callback) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) 
        {
            $.ajax({
                url: "https://viacep.com.br/ws/"+cep+"/json",
                type: 'GET',
                dataType: "Json",
                success: function(data) {
                    if (("erro" in data)) 
                    {
                        data.message = "Cep não encontrado";
                    }
                    callback(data);
                },
                error: function(data) {
                    callback({
                        "erro": true,
                        "message": "Falha na requisição."
                    });
                }
            });
        } //end if.
        else {
            callback({
                "erro": true,
                "message": "Formato de cep inválido."
            });
        }
    } //end if.
    else {
        callback({
            "erro": true,
            "message": "Cep obrigatório."
        });
    }
};

$(function(){
    $('#btn-cep').click(function(){
        let cep = $('#cep').val();
        getAddressByCep(cep, function(data){
            if (("erro" in data)) 
            {
               alert(data.message)
               $("#logradouro,#bairro,#cidade,#estado").html("");
            } else{
                $("#logradouro").html(data.logradouro);
                $("#bairro").html(data.bairro);
                $("#cidade").html(data.localidade);
                $("#estado").html(data.uf);
            }
        })
    })
})