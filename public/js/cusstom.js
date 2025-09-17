$(document).ready(function() {
    
    $("#register-form").submit(function(e) {
    
    $("#register-form").parsley();

    e.preventDefault();

    var form = $(this);

    $.ajax({

        type: "POST",

        url: "/register-user",

        data: form.serialize(),

        success: function(res){

          if(res.message == "User Already Exist!"){

            toastr.error(res.message);

          }else if(res.message == "You're successfully registered!"){

            toastr.success(res.message);

            setTimeout(function(){

                window.location.href = "/login";

            },3000);

        }

        }
    });
    
    });
});



$(document).ready(function() {
    
    $("#login-form").submit(function(e) {

    $("#login-form").parsley();

    e.preventDefault();

    var form = $(this);

    $.ajax({

        type: "POST",

        url: "/login-user",

        data: form.serialize(),

        success: function(res){

          if(res.message == "Invalid Credentials!"){

            toastr.error(res.message);

          }else if(res.message == "Login Successful!"){

            toastr.success(res.message);

            setTimeout(function(){

              window.location.href = "/dashboard";

            },3000);

        }

        }
    });
    
    });
});