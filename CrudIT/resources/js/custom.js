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