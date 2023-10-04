$(document).ready(function(){
    var url = 'https://app.bosstracker.uz/download/rftrack?a=A19';
    console.log("Salom 1");
    $("#login-send").click(function (e) {
        e.preventDefault();
        var data = $("#login-form").serializeArray();
        let name = data[0].value;
        let number = data[1].value;


        $.ajax({
            type: "POST",
            url: "https://production.bosstrackergroup.uz/api/v1/register/rf_tracker/create/",
            data: {
                "partner": 3,
                "number": number,
                "full_name": name,
                "agent_key": "rf_tracker_agent_a1",
                "is_active": true,
                "operator_status": "agent",
                "created": "2023-10-18T15:41:00+05:00"
            },
            success:function (x){
                console.log(x.message);
                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                if (x.status && x.status === "success"){
                    Swal.fire({
                        icon: 'success',
                        title: 'Ajoyib !!!',
                        text: x.message,
                    }).then(function (){
                        setInterval(window.location.reload(),300);
                    });

                }
            },
            error:function (x) {
                Swal.fire({
                    icon: 'error',
                    title: 'Xatolik',
                    text: "Yuborishdagi xatolik",
                }).then(function (){
                    setInterval(window.location.reload(),300);
                });
            }
        });
    });
});