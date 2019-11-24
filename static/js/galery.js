function loadImages(){
    var folder = "upload/";

    $.ajax({
        url : folder,
        success: function (data) {
            $(data).find("a").attr("href", function (i, val) {
                if( val.match(/\.(jpe?g|png|gif)$/) ) {
                    $("#gallery").append( "<div class='mb-3 pics animation all'><a href='"+ folder + val +"' data-lightbox='image-1' data-title='"+ val +"'><img class='img-fluid' src='"+ folder + val +"'></img></a></div>" );
                }
            });
        }
    });
}