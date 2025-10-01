$(document).ready(function(){
    // Ajax call for already exist email verification
    $("#stuemail").on("keypress blur", function() {
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var stuemail = $("#stuemail").val();
        $.ajax({
            url: 'student/emailverification.php',
            method: 'POST',
            // dataType: 'json',
            data:{
                checkemail: "Checkmail",
                stuemail: stuemail,
            },
            success:function(data){
                // console.log(data);
                if(data != 0){
                    $("#statusMsg2").html("<small style='color:red'>Email Id Already Exist</small>");
                    $("#signup").attr("disabled", true);
                }else if (data == 0){
                    $("#statusMsg2").html("<small style='color:green'></small></small>");
                    $("#signup").attr("disabled", false);
                }
            }
        })
    })
})

// Get Student Registration Record
function addStu(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuname = $("#stuname").val()
    var stuemail = $("#stuemail").val()
    var stupass = $("#stupass").val()

    if(stuname.trim() == "") {
        $("#statusMsg1").html("<small style='color:red'>Please Enter Name</small>");
        $("#stuname").focus();
        return false;
    } else if(stuemail.trim() == "") {
        $("#statusMsg2").html("<small style='color:red'>Please enter Email</small>");
        $("#stuname").focus();
        return false;
    }else if(stuemail.trim() != "" && !reg.test(stuemail)) {
        $("#statusMsg2").html("<small style='color:red'>Please enter a valid Email</small>");
        $("#stuname").focus();
        return false;
    } else if(stupass.trim() == "") {
        $("#statusMsg3").html("<small style='color:red'>Please Enter Password</small>");
        $("#stuname").focus();
        return false;
    } else {
        $.ajax({
            url: 'student/addstudent.php',
            method: 'POST',
            dataType: "json",
            data:{
                stuname: stuname,
                stuemail: stuemail,
                stupass: stupass,
            },
            success:function(data){
                // console.log(data)
                if(data == "OK") {
                    $('#SuccessMsg').html("<span class='alert alert-success'>Registration Successful !</span>")
                    clearStuRegField()
                }
                else if(data == "Failed") {
                    $('#SuccessMsg').html("<span class='alert alert-danger'>Unable to Register</span>")
                    clearStuRegField()
                }
            }
        })
    }

}

// Empty all fields 

function clearStuRegField(){
    $("#StuRegForm").trigger("reset");
    $("#statusMsg1").html(" ");
    $("#statusMsg2").html(" ");
    $("#statusMsg3").html(" ");
}

// Student Login Verification 

function checkstulog(){
    var stuloginemail = $("#stuloginemail").val();
    var stuloginpass = $("#stuloginpass").val();

    $.ajax({
        url: 'student/loginverification.php',
        method: 'POST',
        data:{
            stuloginemail: stuloginemail,
            stuloginpass: stuloginpass,
        },
        success:function(data){
            if(data == 1){
                $('#LoginSuccessMsg').html("<div class='spinner-border text-success' role='status'></div>");
                setTimeout(()=>{
                    window.location.href = 'index.php';
                }, 1000);
                clearstulogfield();
                

            }else if(data == 0){
                $('#LoginSuccessMsg').html('<small class="alert alert-danger">Invalid Email-Id or Password</small>');
                clearstulogfield();
            }
        }
    })
}

// Empty all field

function clearstulogfield(){
    $("#StuLoginForm").trigger("reset");
}