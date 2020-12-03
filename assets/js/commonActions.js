// when the page had finished loading the below function will execute
$(document).ready(function() {

    $(".navShowHide").on("click", function() {
        let main = $("#mainSectionContainer");
        let nav = $("#sideNavContainer");

        if (main.hasClass("leftPadding")) {
            nav.hide();
        } else {
            nav.show();
        }

        main.toggleClass("leftPadding")
    })
}) 
