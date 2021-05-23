$(document).ready(function() {
    $('.btnAction').on("click", function (){
        let product = $(this).attr("data-product");
        $.post("Server.php", { product },function (data, status) {
            let newData = JSON.parse(data);
            $('.modal-title').text(newData.title);
            $('.modal-body').text(newData.body);
        })
    })
});