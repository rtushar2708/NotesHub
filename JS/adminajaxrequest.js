// Admin Login Verification

function checkadminlog(){
    var adminloginemail = $("#adminloginemail").val();
    var adminloginpass = $("#adminloginpass").val();

    $.ajax({
        url: 'admin/AdminLoginverification.php',
        method: 'POST',
        data:{
            adminloginemail: adminloginemail,
            adminloginpass: adminloginpass,
        },
        success:function(data){
            // console.log(data);
            if(data == 1){
                console.log("ok");
                $('#adminLoginSuccessMsg').html("<div class='spinner-border text-success' role='status'></div>");
                setTimeout(()=>{
                    window.location.href = 'admin/admin_dashboard.php';
                }, 1000);
                clearadminlogfield();
                

            }else if(data == 0){
                console.log("not find");
                $('#adminLoginSuccessMsg').html('<small class="alert alert-danger">Invalid Email-Id or Password</small>');
                setTimeout(()=>{
                    window.location.href = 'admin/admin_dashboard.php';
                }, 1000);
                clearadminlogfield();
            } else {
                console.log("xyz");
                $('#adminLoginSuccessMsg').html('<small class="alert alert-danger">Invalid Email-Id or Password</small>');
                clearadminlogfield();
            }
        }
    })
}

// Empty all field

function clearadminlogfield(){
    $("#AdminLoginForm").trigger("reset");
}