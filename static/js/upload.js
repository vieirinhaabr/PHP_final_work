$(function() {

    // preventing page from redirecting
    $("html").on("dragover", function(e) {
        e.preventDefault();
        e.stopPropagation();
        $("#h4-joke-text").text("Solte aqui");
    });

    $("html").on("drop", function(e) { e.preventDefault(); e.stopPropagation(); });

    // Drag enter
    $('.upload-area').on('dragenter', function (e) {
        e.stopPropagation();
        e.preventDefault();
        $("#h4-joke-text").text("Solte");
    });

    // Drag over
    $('.upload-area').on('dragover', function (e) {
        e.stopPropagation();
        e.preventDefault();
        $("#h4-joke-text").text("Solte");
    });

    // Drop
    $('.upload-area').on('drop', function (e) {
        e.stopPropagation();
        e.preventDefault();

        $("#h4-joke-text").text("Realizando upload");

        var extension = '';
        var file = e.originalEvent.dataTransfer.files;

        for (let index = 0; index < file[0].type.length; index++) {
            if (file[0].type[index] != '/'){
                extension += file[0].type[index];
            }
            else{
                index = file[0].type.length;
            }
        }

        if (extension == 'image'){
            var fd = new FormData();

            fd.append('file', file[0]);

            uploadData(fd);
        }
        else{
            alert("O arquivo enviado não é uma imagem, ou não é suportado pelo POST IT !!!");
        }
    });

    // Open file selector on div click
    $("#uploadfile-button").click(function(){
        $("#file").click();
    });

    // file selected
    $("#file").change(function(){
        var fd = new FormData();

        var files = $('#file')[0].files[0];

        fd.append('file',files);

        uploadData(fd);
    });
    });

    // Sending AJAX request and upload file
    function uploadData(formdata){

    $.ajax({
        url: 'upload.php',
        type: 'post',
        data: formdata,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(response){
            addThumbnail(response);
        }
    });
    }

    // Added thumbnail
    function addThumbnail(data){
    $("#uploadfile #content-align #joke-text").remove(); 
    var len = $("#content-align div.thumbnail").length;

    var num = Number(len);
    num = num + 1;

    var name = nameLenght(data.name);
    var size = convertSize(data.size);
    var src = data.src;

    // Creating an thumbnail
    $("#content-align").append('<div id="thumbnail_'+num+'" style="margin-bottom: 0px; margin-left: 5px; margin-right: 5px; padding: 4px;" class="thumbnail d-flex flex-column"></div>');
    $("#thumbnail_"+num).append('<img src="'+src+'" width="100%" height="78%">');
    $("#thumbnail_"+num).append('<span class="name">'+name+'<span>');
    $("#thumbnail_"+num).append('<span class="size">'+size+'<span>');
    $("#thumbnail_"+num).append('<img style="margin: auto;" src="https://cdn2.iconfinder.com/data/icons/information-notification-thin-outline/3/11-512.png" width="90%" height="68%">');

    }

    function nameLenght(name){
        var name_modified = ' ';

        if (name.length > 9){
            for (let index = 0; index < 9; index++){
                name_modified += name[index];
            }
            for (let index = 0; index < name.length; index++) {
                if (name[index] == '.'){
                    for (let index_intern = index; index_intern < name.length; index_intern++) {
                        name_modified += name[index_intern];
                    }
                }
            }
            return name_modified;
        }
        else{
            return name
        }
    }

    // Bytes conversion
    function convertSize(size) {
    var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
    if (size == 0) return '0 Byte';
    var i = parseInt(Math.floor(Math.log(size) / Math.log(1024)));
    return Math.round(size / Math.pow(1024, i), 2) + ' ' + sizes[i];
    }