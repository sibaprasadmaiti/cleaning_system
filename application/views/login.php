
<!DOCTYPE html>
<html>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Login Page</title>
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/css/forms/icheck/custom.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/components.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pages/login-register.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <style>
        .form-control-position {
            top: 12px;
        }
    </style>
</head>

<body class="vertical-layout vertical-menu-modern 1-column blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <div>
                                            <h1>Admin login</h1>
                                        </div>
                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Login</span></h6>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form id="login_form" class="form-horizontal">
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Your Username" required>
                                                <div class="form-control-position">
                                                    <i class="la la-user"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                                                <div class="form-control-position">
                                                    <i class="la la-key"></i>
                                                </div>
                                            </fieldset>
                                            <button type="submit" class="btn btn-info btn-block"><i class="ft-unlock"></i>Login</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="">

                                        <p class="float-xl-right text-center m-0">
                                            Want to login as contractor?
                                            <a href="<?php echo base_url('contractor/login') ?>" class="card-link">
                                                Login
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script>

        var vRules = {
            user_name: {
                required: true
            },
            password: {
                required: true
            }
        };
        var vMessages = {
            user_name: {
                required: "<b class='text-danger'>Please Enter User Name</b>"
            },
            password: {
                required: "<b class='text-danger'>Please Enter Password</b>"
            }
        };
        $("#login_form").validate({
            rules: vRules,
            messages: vMessages,
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    url: "<?php echo base_url('login/check_login'); ?>",
                    type: 'post',
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == 'success') {
                            window.location.href="<?php echo base_url('subcontractor')?>";
                        }
                        else{
                            alert(response.message);
                        }

                    },
                    error: function() {
                        alert('Problem in login. Please try again.');
                    }
                });
            }
        });
    </script>
</body>

</html>
