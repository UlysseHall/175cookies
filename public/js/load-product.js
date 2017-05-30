$(function() {
    
    var data;
    
    $.getJSON("public/js/data.json", function(result) {
        data = result;
    });
   
    $(".flavor-container").click(function() {
        loadProduct($(this).attr("data-cookie"));
    });
    
    function loadProduct(type) {
        $("body").css("background-image", "url('public/img-layout/"+ data[type].background +"')");
        
        $(".home-big-cookie img").attr("src", "public/img-content/"+ data[type].image);
        
        $("h1, p, a").css("color", data[type].color);
        
        $("[alt=logo]").attr("src", "public/img-layout/"+ data[type].logo);
        
        $(".home-flavour-select, .home-buy-container a").css("background-color", data[type].bgcolor);
    }
    
});