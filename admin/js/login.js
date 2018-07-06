$(function() {

    $('.message a').click(function(){
        $('.form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });

    $('.alert-invalid').hide();

    function loadData() {
        let user = $('#username').val();
        let pass = $('#pass').val();
        
        if(user != "" && pass != "") {
            $.ajax({
                method: 'POST',
                url: 'clearance.php',
                data: {
                    username : user,
                    pass
                },
                success: function(data) {
                    if (JSON.parse(data) === 'Login') {
                        window.location.replace('appointment.php');
                    }
                    else {
                        $('.alert-invalid').show();
                        $('.alert-invalid').html(JSON.parse(data));
                    }
                }
            }).done(             
                setTimeout(function() {
                $('.alert-invalid').fadeTo(2000, 500).slideUp(500, function(){
                  $('.alert-invalid').slideUp(500);
              });
            },3000))
        }
    }

    $('#submit').click(function(){
        loadData();
    })

    $('#login-form').submit(function(event) {
        return false;
    })
    
});