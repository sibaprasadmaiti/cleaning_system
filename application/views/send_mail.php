</head>
<?php $this->load->view('includes/head'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/css/forms/selects/select2.min.css">
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Send Inspection</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Send Inspection</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right">
                    <button type="button" class='btn btn-primary text-white' onclick="add()" >Add</button>
                    <button type="button" class='btn btn-info text-white' onclick="edit()">Edit</button>

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
                                <h4 class="card-title">Send Inspection</h4>
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
                                                <th>Seen</th>
                                                <th>Updated By</th>
                                                <th>Updated Datetime</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; foreach ($send_mail_listing as $sml){ ?>
                                            <tr>
                                                <td><input class='mr-2' type="radio" value="<?php echo $sml['id']?>"></td>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $sml['sub']; ?></td>
                                                <td><?php echo $sml['msg']; ?></td>
                                                <td><?php echo $sml['seen']; ?></td>
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
                    <input type="hidden" name="log_id" id="log_id"/>
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
                        <textarea placeholder="Messages" id="classic-editor" class="form-control" name="messages" ></textarea>
                    </div>
                    <label>Select Images</label>
                    <fieldset class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="files[]" id="file" multiple>
                            <label class="custom-file-label" for="file" aria-describedby="file">Choose file</label>
                        </div>
                    </fieldset>
                    <label>Select Video</label>
                    <fieldset class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="fileToUpload" id="fileToUpload">
                            <label class="custom-file-label" for="fileToUpload" aria-describedby="fileToUpload">Choose file</label>
                        </div>
                    </fieldset>
                    <div id="spanFile"></div>
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
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/vendors.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/extensions/dropzone.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.form.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/scripts/editors/ckeditor-super-build.js"></script>
<script src="<?php echo base_url(); ?>assets/js/scripts/editors/editor-ckeditor.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/scripts/extensions/dropzone.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/scripts/forms/select/form-select2.js"></script>
<script>
    var vRules = {
        to_email: {
            required: true
        },
        messages: {
            required: true
        },
        file: {
            required: true
        }
    };
    var vMessages = {
        to_email: {
            required: "<b class='text-danger'>Please Enter To Email</b>"
        },
        messages: {
            required: "<b class='text-danger'>Please Enter Messages</b>"
        },
        files: {
            required: "<b class='text-danger'>Please Select File</b>"
        }
    };
    $("#send_mail").validate({
        rules: vRules,
        messages: vMessages,
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                url: "<?php echo base_url('send_mail/send_msg'); ?>",
                type: 'post',
                enctype: 'form-data/multi-part',
                dataType: 'json',
                async: false,
                success: function(response) {
                    if (response.status == 'success'){
                         location.reload(1);
                    } else {
                        alert(response.message);
                    }
                },
                error: function() {
                    alert('Please try again.');
                }
            });
        }
    });

    $(document).ready(function() {
        $("#contractor_email").select2({
            placeholder: 'Select Contractor',
            width: '100%',
            dropdownParent: $('#inlineForm')
        });
    })
    function add()
    {
        $('#send_mail')[0].reset();
        $("#contractor_email").select2('val','');
        $("#classic-editor").val('Details of inspection has been send  to you on the portal');
        $(".ck-placeholder").html('Details of inspection has been send  to you on the portal');
        $("#inlineForm").modal('show');
    }
    function edit()
    {
        var selectedVal ='';
        var selected = $("input[type='radio']:checked");
        if (selected.length > 0) {
            selectedVal = selected.val();
        }
        else
        {
            alert('Please Select Record');
        }
        $.ajax({
            url:'<?php echo base_url('send_mail/get_log');?>',
            type:'POST',
            data:{
                'log_id': selectedVal,
            },
            dataType: 'json',
            success:function(data){
                $("#log_id").val(data.id);
                $("#contractor_email").select2('val',data.sub_contractor_id);
                $("#sub").val(data.sub);
                $(".ck-placeholder").html('Details of inspection has been updated');
                $("#classic-editor").val('Details of inspection has been updated');
                var attachment = data.file_name.split(",");
                var html = '';
                attachment.forEach(function(val) {
                    if (val)
                    {
                        html+='<div class="form-group col-12 mb-2 file-repeater">'+
                                '<div data-repeater-list="repeater-list">'+
                                    '<div data-repeater-item>'+
                                        '<div class="row mb-1">'+
                                            '<div class="col-9 col-xl-10">'+
                                                '<label class="file center-block">'+
                                                    '<span><a target="_new" href="<?php echo base_url('uploads/')?>'+val+'">'+val+'</a></span>'+
                                                    '<span class="file-custom"></span>'+
                                                '</label>'+
                                            '</div>'+
                                            '<div class="col-2 col-xl-2">'+
                                                '<button type="button" file="'+val+'" id='+data.id+' onclick="delete_file(this)" data-repeater-delete class="btn btn-icon btn-danger mr-1"><i class="ft-x"></i></button>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>';
                    }
                   
                });
                $("#spanFile").html(html);
                $("#inlineForm").modal('show');
            },
            error:function(data){
                alert('Please Try Again Later');
            }
            
        });
    }
    function delete_file(ids)
    {
        var file = $(ids).attr('file');
        var id = $(ids).attr('id');

        $.ajax({
            url:'<?php echo base_url('send_mail/delete_file');?>',
            type:'POST',
            data:{
                'log_id': id,
                'file':file
            },
            dataType: 'json',
            success:function(data){
                if (data.status =='success')
                {
                    $(ids).closest('.file-repeater').remove();
                }
            },
            error:function(data){
                alert('Please Try Again Later');
            }
        })
    }
</script>