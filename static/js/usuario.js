$(document).ready(function() {
    carregarTabelaUsuarios();
    $('#modalUsuario').modal({
        onCloseEnd : function() {
            limparFormularioUsuario();
        }
    });
});


function carregarTabelaUsuarios(){
    $("#tableUsuario").bootstrapTable();
}

$("#formularioUsuario").on("submit",function(event) {
    event.preventDefault();
    var form = $(this);
    $.ajax({
        url:  $(form).attr("action"),
        method:  $(form).attr("method"),
        data:  $(form).serialize(),
        success: function(data){
            M.toast({html: data}) 
            $('#modalUsuario').modal('close');
            $("#tableUsuario").bootstrapTable('refresh');
            limparFormularioUsuario();
        },
        error: function(jqXHR, textStatus, errorMessage) {
            M.toast({html: errorMessage}) 
        },
    })
});

$("#formularioLogin").on("submit",function(event) {
    event.preventDefault();
    var form = $(this);
    $.ajax({
        url:  $(form).attr("action"),
        method:  $(form).attr("method"),
        data:  $(form).serialize(),
        success: function(data){
            M.toast({html: data}) 
            window.location.href = "/aulaphp/index.php";
        },
        error: function(jqXHR, textStatus, errorMessage) {
            M.toast({html: jqXHR.responseText}) 
        },
    })
});

function limparFormularioUsuario(){
    $("#formularioUsuario").trigger('reset');
    $("#codigo").val("");
    $("#divSenha").show();
}

function editarUsuarioFormatter(value) {
    return "<button class='waves-effect waves-light btn' onclick='editarUsuario("+value+")'><i class='material-icons'>edit</i></button";
}

function excluirUsuarioFormatter(value) {
    return "<button class='waves-effect waves-light btn' onclick='excluirUsuario("+value+")'><i class='material-icons'>delete</i></button";
}

function editarUsuario(id){

    $.getJSON("/aulaphp/control/usuario/obter.php",{id: id},
            function(data){
                $("#codigo").val(data.idusuario);
                $("#nome").val(data.nome);
                $("#email").val(data.email);
                $("#divSenha").hide();
                $('#modalUsuario').modal("open");
                M.updateTextFields();
            });

}

function excluirUsuario(id){
    $.ajax({
         url: "/aulaphp/control/usuario/excluir.php",
         method: "GET",
         data: {id: id},
         success: function(data){
            M.toast({html: data}) 
            $("#tableUsuario").bootstrapTable('refresh');
        },
        error: function(jqXHR, textStatus, errorMessage) {
            M.toast({html: errorMessage}) 
        },
    })
 }