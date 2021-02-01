$(document).ready(() => {
    
    $("#btn-register").click(function() {
        $("#bg").toggleClass("blur")
        $(".container-fluid").fadeIn()
    })

    $("#btn-form-login").click(function(){
        $(".container-fluid").fadeOut()
        $("#bg").toggleClass("blur")
    })

})