$(document).ready(function() {
    carregarTabelaProdutos();
    $('#modalProduto').modal({
        onCloseEnd : function() {
            limparFormularioProduto();
        }
    });

    carregarCategorias();
});

function carregarCategorias(){
    $.getJSON("/aulaphp/control/categoria/todos.php",{  },
        function(data){
            $('#idCategoria').append($('<option>').text("Selecione").attr('value',0).attr("selected","selected"));    
        $.each(data, function(i, categoria) {
            $('#idCategoria').append($('<option>').text(categoria.descricao).attr('value', categoria.idcategoria));
        });

        $('#idCategoria').formSelect();
    });

  
}


function carregarTabelaProdutos(){
    $("#tableProduto").bootstrapTable();
}

$("#formularioProduto").on("submit",function(event) {
    event.preventDefault();
    var form = $(this);
    $.ajax({
        url:  $(form).attr("action"),
        method:  $(form).attr("method"),
        data:  $(form).serialize(),
        success: function(data){
            M.toast({html: data}) 
            $('#modalProduto').modal('close');
            $("#tableProduto").bootstrapTable('refresh');
            limparFormularioProduto();
        },
        error: function(jqXHR, textStatus, errorMessage) {
            M.toast({html: errorMessage}) 
        },
    })
});

function limparFormularioProduto(){
    $("#formularioProduto").trigger('reset');
    $("#codigo").val("");
}


function editarProdutoFormatter(value) {
    return "<button class='waves-effect waves-light btn' onclick='editarProduto("+value+")'><i class='material-icons'>edit</i></button";
}

function excluirProdutoFormatter(value) {
    return "<button class='waves-effect waves-light btn' onclick='excluirProduto("+value+")'><i class='material-icons'>delete</i></button";
}

function editarProduto(idProduto){

    $.getJSON("/aulaphp/control/produto/obter.php",{id: idProduto},
            function(data){
                $("#codigo").val(data.idproduto);
                $("#nome").val(data.nome);
                $("#idCategoria").val(data.idcategoria);
                $("#valor").val(data.valor);
                $('#modalProduto').modal("open");
                M.updateTextFields();
                $('#idCategoria').formSelect();
            });

}

function excluirProduto(idProduto){
    $.ajax({
         url: "/aulaphp/control/produto/excluir.php",
         method: "GET",
         data: {id: idProduto},
         success: function(data){
            M.toast({html: data}) 
            $("#tableProduto").bootstrapTable('refresh');
        },
        error: function(jqXHR, textStatus, errorMessage) {
            M.toast({html: errorMessage}) 
        },
    })
 }