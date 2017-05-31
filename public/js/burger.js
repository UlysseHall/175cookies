$(function() {
    
    var menuImg = "";
    
    $(".burger-menu-icon").click(function() {
        if($(this).hasClass("burger-menu-icon-show")) {
            menuImg = $(this).attr("src");
            showMenu();
        }
        else {
            hideMenu();
        }
    });
    
    function showMenu() {
        $(".bg-menu-container").css("display", "inline").animate({width: "100%"}, 300);
        $(".burger-menu-icon-show").addClass("burger-menu-icon-hide").attr("src", "public/img-layout/cross.png").removeClass("burger-menu-icon-show");
    }
    
    function hideMenu() {
        $(".bg-menu-container").animate({width: "0%"}, 300, function() {
            $(this).css("display", "none");
        });
        
        $(".burger-menu-icon-hide").addClass("burger-menu-icon-show").attr("src", menuImg).removeClass("burger-menu-icon-hide");
    }
    
});