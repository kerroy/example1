$(document).ready(function() {
    $('.moreDetail ').click(function (event) {
        let boxClicked = event.target.id;
        $('.overlay ').removeClass('hideme');
        $.post("Server.php", { boxClicked },function (data, status) {
            // alert("data " + data + "\nstatus: " + status)
            $('.modal-body').html(data);
        })
    })

    $('#closeMe').click(function () {
        $('.overlay ').addClass('hideme');
    })
});