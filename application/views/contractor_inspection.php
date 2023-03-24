</head>
<?php $this->load->view('includes/contractor_head'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/css/forms/selects/select2.min.css">
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Check Inspection</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Check Inspection</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right">
                   <!-- <button id="edit" class="btn btn-info">Edit</button> -->
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
                                <h4 class="card-title">Check Inspection</h4>
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
                                    <table class="table table-striped table-bordered dataex-res-configuration">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>SR NO</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Document</th>
                                                <th>Updated By</th>
                                                <th>Updated Datetime</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; foreach ($send_mail_listing as $sml){ ?>
                                            <tr>
                                                <td><input class='mr-2' type="checkbox"></td>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $sml['sub']; ?></td>
                                                <td><?php echo $sml['msg']; ?></td>
                                                <td><a onclick="downloadDocument(<?php echo $sml['id']; ?>)">Download</a></td>
                                                <td><?php echo $sml['updated_by']; ?></td>
                                                <td><?php echo $sml['updated_datetime']; ?></td>
                                            </tr>
                                            <?php } ?>
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
<div class="modal  fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <label class="modal-title text-text-bold-600" id="myModalLabel33">Send Mail</label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" name="send_mail" id="send_mail">
                <div class="modal-body">
                    <label>To Email</label>
                    <div class="form-group">
                        <select id="contractor_email" name="contractor_email" class="form-control" multiple>
                            <?php foreach ($contractor_list as $cl) { ?>
                                <option value="<?php echo $cl['sub_contractor_id']; ?>"><?php echo $cl['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <label>Subject</label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="sub" id="sub" />
                    </div>
                    <label>Messages</label>
                    <div class="form-group">
                        <textarea placeholder="Messages" id="classic-editor" class="form-control" name="messages" id="messages"></textarea>
                    </div>
                    <label>Select Images</label>
                    <fieldset class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="files[]" id="file" multiple>
                            <label class="custom-file-label" for="file" aria-describedby="file">Choose file</label>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-secondary btn-lg" data-dismiss="modal" value="close">
                    <input type="submit" class="btn btn-success btn-lg" value="Send">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END: Content-->

<script>
    // var vRules = {
    //     to_email: {
    //         required: true
    //     },
    //     messages: {
    //         required: true
    //     },
    //     file: {
    //         required: true
    //     }
    // };
    // var vMessages = {
    //     to_email: {
    //         required: "<b class='text-danger'>Please Enter To Email</b>"
    //     },
    //     messages: {
    //         required: "<b class='text-danger'>Please Enter Messages</b>"
    //     },
    //     files: {
    //         required: "<b class='text-danger'>Please Select File</b>"
    //     }
    // };
    // $("#send_mail").validate({
    //     rules: vRules,
    //     messages: vMessages,
    //     submitHandler: function(form) {
    //         $(form).ajaxSubmit({
    //             url: "<?php echo base_url('send_mail/send_msg'); ?>",
    //             type: 'post',
    //             enctype: 'form-data/multi-part',
    //             dataType: 'json',
    //             success: function(response) {
    //                 if (response.status == 'success'){
    //                     // location.reload(1);
    //                 } else {
    //                     alert(response.message);
    //                 }
    //             },
    //             error: function() {
    //                 alert('Problem in login. Please try again.');
    //             }
    //         });
    //     }
    // });

    // $(document).ready(function() {
    //     $("#contractor_email").select2({
    //         placeholder: 'Select Contractor',
    //         width: '100%',
    //         dropdownParent: $('#inlineForm')
    //     });
    // })

    function downloadDocument(id){
        $.ajax({
            url: "<?php echo base_url('contractor/add_seen'); ?>",
            type: 'post',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                if (response.status == 'success'){
                    window.open('<?php echo base_url('uploads/pdf/file/') ?>'+response.name);
                } else {
                    alert(response.message);
                }
            },
            error: function() {
                alert('Problem in login. Please try again.');
            }
        });
    }
</script>