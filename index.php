<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    body {
        padding-top: 60px;
        padding-bottom: 40px;
    }
    </style>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            <![endif]-->

            <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

          <div class="container">
            <div class="row-fluid">
                <div class="span12">
                    <div class="span6">
                        <div class="area">
                            <form class="form-horizontal">
                                <div class="heading">
                                    <h4 class="form-heading">Sign In</h4>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputUsername">Username</label>
                                    <div class="controls">
                                        <input type="text" id="inputUsername" placeholder="E.g. kevjumba">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Password</label>
                                    <div class="controls">
                                        <input type="password" id="inputPassword" placeholder="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                      <!--   <label class="checkbox">
                                            <input type="checkbox"> Keep me signed in   ¦
                                            <a href="#" class="btn btn-link">Forgot my password</a>
                                        </label> -->
                                        <button type="submit" id="submitlogin" name="submitlogin" class="btn">Sign In</button>
                                        <!-- <button type="button" class="btn">Help</button> -->
                                    </div>
                                </div>  
                            </form> 
                        </div>                           
                    </div>
                    <div class="span6">
                        <div class="area">
                            <form class="form-horizontal">
                                <div class="heading">
                                    <h4 class="form-heading">Sign Up</h4>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputFirst">First Name</label>
                                    <div class="controls">
                                        <input type="text" id="inputFirst" placeholder="E.g kevjumba">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Email</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" placeholder="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Password</label>
                                    <div class="controls">
                                        <input type="password" id="inputPassword" placeholder="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <!-- <label class="checkbox"> -->
                                            <!-- <input type="checkbox"> I agree all your <a href="#">Terms of Services</a> -->
                                        <!-- </label> -->
                                        <button type="submit" class="btn">Sign Up</button>
                                        <!-- <button type="button" class="btn">Help</button> -->
                                    </div>
                                </div>  
                            </form> 
                        </div>                            
                    </div>
                </div>
                
            </div>
        </div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript">

$(document).ready(function(){

    $("#submitlogin").click(function(){

        var username=$("#inputUsername").val();
            //alert(username);
            var password=$("#inputPassword").val();
           // alert(password);
           $.post('login.php', {username: username, password:password},
            function(data){
                if(data === 'true'){
                    window.location.href= "home.php";
                }
                else{
                   $("#password").val('');
                    alert(data);

                }
            });
           return false;
       });
});
</script>
<script>
var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src='//www.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>
