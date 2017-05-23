$(function() {
    
    var data;
    
    $.getJSON("public/js/data.json", function(result) {
        data = result;
    });
   
    $(".change-cookie").click(function() {
        loadProduct($(this).attr("data-cookie"));
    });
    
    function loadProduct(type) {
        $("body").css("background-image", "url('public/img-layout/"+ data[type].background +"')");
    }
    
});