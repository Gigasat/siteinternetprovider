$(function () {
    $(".header_down_content_menu_mobile_icon").on("click", function () {
        $(".header_down_content_menu_mobile_sub").toggleClass("display_none");
        $(this).toggleClass("header_down_content_menu_mobile_icon_active");
    });
});