
// add notes to database
function addnotes(){
    // console.log("ok")
    var notes_email = $("#notes_email").val()
    var notes_address = $("#notes_address").val()
    var course_id = $("#course_id").val()
    var branch_id = $("#branch_id").val()
    var year_id = $("#year_id").val()
    var subject_id = $("#subject_id").val()
    var notes_description = $("#notes_description").val()

    if(notes_address.trim() == "") {
        $("#statusMsg1").html("<small style='color:red'>Please Enter Name</small>");
        $("#notes_address").focus();
        return false;
    } else if(course_id.trim() == "") {
        console.log("course")
        $("#statusMsg2").html("<small style='color:red'>Please enter Email</small>");
        $("#course_id").focus();
        return false;
    }else if(branch_id.trim() == "") {
        console.log("branch")
        $("#statusMsg2").html("<small style='color:red'>Please enter a valid Email</small>");
        $("#branch_id").focus();
        return false;
    } else if(year_id.trim() == "") {
        console.log("year")
        $("#statusMsg3").html("<small style='color:red'>Please Enter Password</small>");
        $("#year_id").focus();
        return false;
    } else if(subject_id.trim() == "") {
        console.log("sub")
        $("#statusMsg3").html("<small style='color:red'>Please Enter Password</small>");
        $("#subject").focus();
        return false;
    } else if(notes_description.trim() == "") {
        console.log("des")
        $("#statusMsg3").html("<small style='color:red'>Please Enter Password</small>");
        $("#subject").focus();
        return false;
    } else {
        console.log("ok")
        $.ajax({
            url: '../student/unapprovednotes.php',
            method: 'POST',
            dataType: "json",
            data:{
                notes_email: notes_email,
                notes_address: notes_address,
                course_id: course_id,
                branch_id: branch_id,
                year_id: year_id,
                subject_id: subject_id,
                notes_description: notes_description
            },
            success:function(data){
                if(data == "OK") {
                    $('#SuccessMsg').html("<span class='alert alert-success'>Registration Successful !</span>")
                    // clearStuRegField()
                }
                else if(data == "Failed") {
                    $('#SuccessMsg').html("<span class='alert alert-danger'>Unable to Register</span>")
                    // clearStuRegField()
                }
            }
        })
    }

}