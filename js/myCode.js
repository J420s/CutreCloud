$(document).ready(() => {
    
    $("#btn-register").click(function() {
        $("#bg").toggleClass("blur")
        $(".container-custom").fadeIn()
    })

    $("#btn-form-login").click(function(){
        $(".container-custom").fadeOut()
        $("#bg").toggleClass("blur")
    })

    $("#btn-upload").click(function() {
        $("#bg").toggleClass("blur")
        $(".container-custom").fadeIn()
    })

    $("#btn-upload-cancel").click(()=>{
        $(".container-custom").fadeOut()
        $("#bg").toggleClass("blur")
    })

})