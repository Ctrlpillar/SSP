function sendData(){
    var nm = $("#username").val();
    var em = $("#email").val();
    var db = $("#DOB").val();
    var pw = $("#password").val();

    if(nm && em && db && pw){
        $.ajax({
            url:"./script2.php",
            type:"POST",
            data:{
                username: nm,
                email: em,
                DOB: db,
                password: pw,
            },
            success:function(response){
                // $("#username").val(""),
                // $("#email").val(""),
                // $("#DOB").val(""),
                // $("#password").val(""),
                // console.log("Response: " +response);
                $("#ajaxResponse").html(response);
                setTimeout(function() {
                $("#ajaxResponse").html(response).fadeOut(400)}
                ,3000);

            },
            error:function(error){
                alert("connection timeout",error);
            }
        });
    } else {
        alert("Fill the complete form!");
    }
}