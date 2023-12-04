<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="active">Login Register</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Login Content Area -->
<div class="page-section mb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                <!-- Login Form s-->
                <form action="controllers/xuly_account.php" method="POST">
                    <div class="login-form">
                        <h4 class="login-title">Login</h4>
                        <div class="row">
                            <div class="col-md-12 col-12 mb-20">
                                <label>Email Address*</label>
                                <input class="mb-0" type="email" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="col-12 mb-20">
                                <label>Password</label>
                                <input class="mb-0" type="password" name="pass" placeholder="Password" required>
                            </div>
                            <div class="col-md-8">
                                <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                    <input type="checkbox" id="remember_me" name="remember_log">
                                    <label for="remember_me">Remember me</label>
                                </div>
                            </div>
                            <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                <a href="#"> Forgotten pasward?</a>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" style="cursor: pointer;" name="logAccount" class="register-button mt-0">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <form id="formReg" action="controllers/xuly_account.php" method="POST">
                    <div class="login-form">
                        <h4 class="login-title">Register</h4>
                        <div class="row">
                            <div class="col-md-6 col-12 mb-20">
                                <label>First Name</label>
                                <input class="mb-0" type="text" name="firstName" placeholder="First Name" id="firstNameReg" required>
                            </div>
                            <div class="col-md-6 col-12 mb-20">
                                <label>Last Name</label>
                                <input class="mb-0" type="text" name="lastName" placeholder="Last Name" id="lastNameReg" required>
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Email Address*</label>
                                <input class="mb-0" type="email" name="email" placeholder="Email Address" id="emailReg" required>
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Password</label>
                                <input class="mb-0" type="password" id="passReg" name="pass" placeholder="Password" required>
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Confirm Password</label>
                                <input class="mb-0" type="password" id="passAgain" name="againPass" placeholder="Confirm Password" required>
                            </div>
                            <div class="col-12 checkErrorReg" style="color: red; text-align: center;"></div>
                            <div class="col-12">
                                <button type="submit" style="cursor: pointer;" name="regAccount" class="register-button mt-0">Register</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function checkErrorReg() {
        $('#passAgain').keyup(function() {
            var again = $('#passAgain').val();
            var pass = $('#passReg').val();
            if(again != pass) {
                $('#passReg').css('border', '1px solid red');
                $('#passAgain').css('border', '1px solid red');
                $('.checkErrorReg').text('-Mật khẩu nhập lại không trùng khớp!');
            } else {
                $('#passReg').css('border', '1px solid green');
                $('#passAgain').css('border', '1px solid green');
                $('.checkErrorReg').text(' ');
            }
        });

        $('#emailReg').change(function() {
            $.ajax({
                url: 'controllers/xuly_account.php',
                method: 'POST',
                data: {
                    check: 'checkMailReg',
                    value: $('#emailReg').val()
                },
                success: function(data) {
                    $('.checkErrorReg').text(data);
                    if(data == '') {
                        $('#emailReg').css('border', '1px solid green');
                    } else {
                        $('#emailReg').css('border', '1px solid red');
                    }
                }
            });
        });

        $('#firstNameReg').change(function() {
            if($('#firstNameReg').val() == '') {
                $('#firstNameReg').css('border', '1px solid red');
            } else {
                $('#firstNameReg').css('border', '1px solid green');
            }
        });
        
        $('#lastNameReg').change(function() {
            if($('#lastNameReg').val() == '') {
                $('#lastNameReg').css('border', '1px solid red');
            } else {
                $('#lastNameReg').css('border', '1px solid green');
            }
        });

        $('#formReg').submit(function(event) {
            if ($('#passReg').css('border-color') === 'rgb(255, 0, 0)' || $('#passAgain').css('border-color') === 'rgb(255, 0, 0)' || $('#emailReg').css('border-color') === 'rgb(255, 0, 0)' || $('#firstNameReg').val() === '' || $('#lastNameReg').val() === '') {
                event.preventDefault();
                return false;
            }
        });
    }
    checkErrorReg();
</script>