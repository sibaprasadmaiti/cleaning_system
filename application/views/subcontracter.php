</head>
<?php $this->load->view('includes/head');
$this->load->view('includes/left_nav'); ?>

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Subcontractor master</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Subcontractor master</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right">
                    <button type="button" class="btn btn-primary" id="add">Add</button>
                    <button id="edit" class="btn btn-info">Edit</button>
                    <button id="active" class="btn btn-success">Active</button>
                    <button id="inactive" class="btn btn-danger">Inactive</button>
                </div>
                <div class="btn-group float-md-right"></div>
            </div>
        </div>
        <div class="content-body">
            <!-- Configuration option table -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Subcontractor master</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <table id="subcontractor_table" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>SR NO</th>
                                                <th>Full name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Location</th>
                                                <th>Date added</th>
                                                <th>Is Active</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Configuration option table -->
        </div>
    </div>
</div>
<!-- END: Content-->

<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <label class="modal-title text-text-bold-600" id="myModalLabel33">Inline Login Form</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="subcontractor_frm">
                <div class="modal-body">
                    <input type="hidden" id="subcontractor_id" name="subcontractor_id" />
                    <label>Full name</label>
                    <div class="form-group">
                        <input type="text" placeholder="Enter full name" name="name" id="name" class="form-control">
                    </div>
                    <label>Email</label>
                    <div class="form-group">
                        <input type="email" placeholder="Enter email" name="email" id="email" class="form-control">
                    </div>
                    <label>Password</label>
                    <div class="form-group">
                        <input type="password" placeholder="Enter password" name="password" id="password" class="form-control">
                    </div>
                    <label>Phone</label>
                    <div class="form-group">
                        <input type="number" placeholder="Enter number" name="phone" id="phone" class="form-control">
                    </div>
                    <label>Location</label>
                    <div class="form-group">
                        <input type="text" placeholder="Enter location" name="location" id="location" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-secondary btn-lg" data-dismiss="modal" value="Close">
                    <input type="submit" class="btn btn-success btn-lg" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
<?php  $this->load->view('includes/js');
        $this->load->view('includes/footer');
        ?>


<script>
    var subContractorTable = $("#subcontractor_table").DataTable();

    $(document).ready(function() {
        subcontractor_listing();
    });

    function subcontractor_listing() {
        $.ajax({
            url: "<?php echo base_url('subcontractor/subcontractor_listing'); ?>",
            type: 'get',
            dataType: 'json',
            success: function(response) {
                subContractorTable.rows().remove().draw();
                var i = 1;
                response.forEach(res => {
                    subContractorTable.row.add([
                        '<input class="mr-2" type="radio" name="subContractor" value="' + res.sub_contractor_id + '">',
                        i++,
                        res.name,
                        res.email,
                        res.phone,
                        res.location,
                        res.updated_datetime,
                        res.is_active,
                    ]).draw(false);
                });
            },
            error: function() {
                alert('Problem in getting subcontractor Data. Please try again.');
            }
        });
    }

    var vRules = {
        name: {
            required: true
        },
        email: {
            required: true
        },
        password: {
            required: true
        },
        phone: {
            required: true
        },
        location: {
            required: true
        }
    };
    var vMessages = {
        name: {
            required: "<b class='text-danger'>Please Enter Name</b>"
        },
        email: {
            required: "<b class='text-danger'>Please Enter Email Address</b>"
        },
        password: {
            required: "<b class='text-danger'>Please Enter Password</b>"
        },
        phone: {
            required: "<b class='text-danger'>Please Enter Phone</b>"
        },
        location: {
            required: "<b class='text-danger'>Please Enter Location</b>"
        }
    };
    $("#subcontractor_frm").validate({
        rules: vRules,
        messages: vMessages,
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                url: "<?php echo base_url('subcontractor/update_subcontractor'); ?>",
                type: 'post',
                dataType: 'json',
                success: function(response) {
                    if (response.status == 'success') {
                        $("#inlineForm").modal('hide');
                        clearFormData();
                        subcontractor_listing();
                    }
                    alert(response.message);
                },
                error: function() {
                    alert('Problem in updating sub contract data. Please try again.');
                }
            });
        }
    });

    function clearFormData() {
        $("#name").val('');
        $("#email").val('');
        $("#password").val('');
        $("#phone").val('');
        $("#location").val('');
        $("#subcontractor_id").val('');
    }

    $("#edit").click(function() {
        var id = $("input[type='radio'][name='subContractor']:checked").val();
        if (id) {
            $.ajax({
                url: "<?php echo base_url('subcontractor/get_subcontractor_data_by_id'); ?>",
                type: 'post',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    clearFormData();
                    $("#name").val(response.name);
                    $("#email").val(response.email);
                    $("#password").val(response.password);
                    $("#phone").val(response.phone);
                    $("#location").val(response.location);
                    $("#subcontractor_id").val(response.sub_contractor_id);
                    $("#inlineForm").modal('show');
                },
                error: function() {
                    alert('Problem in getting subcontractor Data. Please try again.');
                }
            });
        } else {
            alert('Select the contractor you want to edit');
        }
    });

    $("#add").click(function() {
        $("#inlineForm").modal('show');
    });

    $("#active").click(function() {
        var id = $("input[type='radio'][name='subContractor']:checked").val();
        if (id) {
            $.ajax({
                url: "<?php echo base_url('subcontractor/active_inactive_subcontractor'); ?>",
                type: 'post',
                data: {
                    id: id,
                    active: 'Y'
                },
                dataType: 'json',
                success: function(response) {
                    subcontractor_listing();
                },
                error: function() {
                    alert('Problem in activating subcontractor. Please try again.');
                }
            });
        } else {
            alert('Select the contractor you want to active');
        }
    });

    $("#inactive").click(function() {
        var id = $("input[type='radio'][name='subContractor']:checked").val();
        if (id) {
            $.ajax({
                url: "<?php echo base_url('subcontractor/active_inactive_subcontractor'); ?>",
                type: 'post',
                data: {
                    id: id,
                    active: 'N'
                },
                dataType: 'json',
                success: function(response) {
                    subcontractor_listing();
                },
                error: function() {
                    alert('Problem in deactivating subcontractor. Please try again.');
                }
            });
        } else {
            alert('Select the contractor you want to deactive');
        }
    });

</script>