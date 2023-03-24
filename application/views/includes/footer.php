        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>
        <footer class="footer footer-static footer-light navbar-border navbar-shadow">
            <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block"> Copyright &copy; <?php echo date('Y'); ?> AOSPL</span></p>
        </footer>
        <div class="modal  fade text-left" id="change_password_model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <label class="modal-title text-text-bold-600" id="myModalLabel33">Change Password</label>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="change_password_frm">
                        <div class="modal-body">
                            <label>New Password</label>
                            <div class="form-group">
                                <input type="password" class="form-control" name="new_password" id="new_password" placeholder="****************" />
                            </div>
                            <label>Confirm Password</label>
                            <div class="form-group">
                                <input type="password" class="form-control" name="conf_password" id="conf_password" placeholder="****************" />
                            </div>
                            <div id="forPassErr"></div>
                        </div>
                        <div class="modal-footer">
                            <input type="reset" class="btn btn-secondary btn-sm" data-dismiss="modal" value="close">
                            <input type="submit" class="btn btn-success btn-sm" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<script>
    function changePassword()
    {
        clearChangePasswordFrm();
        $("#change_password_model").modal('show');
    }

    function clearChangePasswordFrm()
    {
        $("#new_password").val('');
        $("#conf_password").val('');
    }

    var fpRules = {
        new_password: {
            required: true
        },
        conf_password: {
            required: true
        }
    };
    var fpMessages = {
        new_password: {
            required: "<b class='text-danger'>Enter New Password</b>"
        },
        conf_password: {
            required: "<b class='text-danger'>Enter Confirm Password</b>"
        }
    };
    $("#change_password_frm").validate({
        rules: fpRules,
        messages: fpMessages,
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                url: "<?php echo base_url('login/update_password'); ?>",
                type: 'post',
                dataType: 'json',
                success: function(response) {
                    if (response.status == 'success') {
                        $("#change_password_model").modal('hide');
                    }
                    alert(response.message);
                },
                error: function() {
                    alert('Problem in login. Please try again.');
                }
            });
        }
    });
</script>