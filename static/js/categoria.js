$(document).ready(function() {
    carregarTabelaCategorias();
    $('#modalCategoria').modal({
        onCloseEnd : function() {
            limparFormularioCategoria();
        }
    });
});


function carregarTabelaCategorias(){
    $("#tableCategoria").bootstrapTable();
}

$("#formularioCategoria").on("submit",function(event) {
    event.preventDefault();
    var form = $(this);
    $.ajax({
        url:  $(form).attr("action"),
        method:  $(form).attr("method"),
        data:  $(form).serialize(),
        success: function(data){
            M.toast({html: data}) 
            $('#modalCategoria').modal('close');
            $("#tableCategoria").bootstrapTable('refresh');
            limparFormularioCategoria();
        },
        error: function(jqXHR, textStatus, errorMessage) {
            M.toast({html: errorMessage}) 
        },
    })
});

function limparFormularioCategoria(){
    $("#formularioCategoria").trigger('reset');
    $("#codigo").val("");
}


function editarCategoriaFormatter(value) {
    return "<button class='waves-effect waves-light btn' onclick='editarCategoria("+value+")'><i class='material-icons'>edit</i></button";
}

function excluirCategoriaFormatter(value) {
    return "<button class='waves-effect waves-light btn' onclick='excluirCategoria("+value+")'><i class='material-icons'>delete</i></button";
}

function editarCategoria(idCategoria){

    $.getJSON("/aulaphp/control/categoria/obter.php",{id: idCategoria},
            function(data){
                $("#codigo").val(data.idcategoria);
                $("#descricao").val(data.descricao);
                $('#modalCategoria').modal("open");
                M.updateTextFields();
            });

}

function excluirCategoria(idCategoria){
    $.ajax({
         url: "/aulaphp/control/categoria/excluir.php",
         method: "GET",
         data: {id: idCategoria},
         success: function(data){
            M.toast({html: data}) 
            $("#tableCategoria").bootstrapTable('refresh');
        },
        error: function(jqXHR, textStatus, errorMessage) {
            M.toast({html: errorMessage}) 
        },
    })
 }