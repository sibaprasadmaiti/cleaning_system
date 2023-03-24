    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendors/css/editors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pages/app-email.css">
</head>
<?php $this->load->view('includes/head');?>

<div class="app-content content">
    <div class="sidebar-left">
        <div class="sidebar">
            <div class="sidebar-content email-app-sidebar d-flex">
                <!-- sidebar close icon -->
                <span class="sidebar-close-icon">
                    <i class="ft-x"></i>
                </span>
                <!-- sidebar close icon -->
                <div class="email-app-menu">
                    <div class="form-group form-group-compose">
                        <!-- compose button  -->
                        <button type="button" class="btn btn-danger btn-glow btn-block my-2 compose-btn">
                            <i class="ft-plus"></i>
                            Compose
                        </button>
                    </div>
                    <div class="sidebar-menu-list">
                        <!-- sidebar menu  -->
                        <div class="list-group list-group-messages">
                            <a href="#" class="list-group-item active" id="inbox-menu">
                                <div class="d-inline mr-25">
                                    <i class="ft-mail"></i>
                                </div>
                                Inbox
                                <span class="badge badge-success badge-pill badge-round float-right">5</span>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="d-inline mr-25">
                                    <i class="ft-play"></i>
                                </div>
                                Sent
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="d-inline mr-25">
                                    <i class="ft-edit-1"></i>
                                </div> Draft
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="d-inline mr-25">
                                    <i class="ft-star"></i>
                                </div>
                                Starred
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="d-inline mr-25">
                                    <i class="ft-info"></i>
                                </div>
                                Spam
                                <span class="badge badge-warning badge-pill badge-round float-right">3</span>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="d-inline mr-25">
                                    <i class="ft-trash-2"></i>
                                </div>
                                Trash
                            </a>
                        </div>
                        <!-- sidebar menu  end-->

                        <!-- sidebar label start -->
                        <label class="sidebar-label">Labels</label>
                        <div class="list-group list-group-labels ">
                            <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                Product
                                <span class="bullet bullet-success bullet-sm"></span>
                            </a>
                            <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                Work
                                <span class="bullet bullet-primary bullet-sm"></span>
                            </a>
                            <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                Misc
                                <span class="bullet bullet-warning bullet-sm"></span>
                            </a>
                            <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                Family
                                <span class="bullet bullet-danger bullet-sm"></span>
                            </a>
                            <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
                                Design
                                <span class="bullet bullet-info bullet-sm"></span>
                            </a>
                        </div>
                        <!-- sidebar label end -->
                    </div>
                </div>
            </div>
            <!-- User new mail right area -->
            <div class="compose-new-mail-sidebar">
                <div class="card mb-0 shadow-none quill-wrapper p-0">
                    <div class="card-header">
                        <h3 class="card-title" id="emailCompose">New Message</h3>
                        <button type="button" class="close close-icon">
                            <i class="ft-x"></i>
                        </button>
                    </div>
                    <!-- form start -->
                    <form action="#" id="compose-form">
                        <div class="card-content">
                            <div class="card-body pt-0">
                                <div class="form-group pb-50">
                                    <label for="emailfrom">from</label>
                                    <input type="text" id="emailfrom" class="form-control" placeholder="user@example.com" disabled>
                                </div>
                                <div class="form-label-group mb-1">
                                    <input type="email" id="emailTo" class="form-control" placeholder="To" required>
                                </div>
                                <div class="form-label-group mb-1">
                                    <input type="text" id="emailSubject" class="form-control" placeholder="Subject">
                                </div>
                                <div class="form-label-group mb-1">
                                    <input type="text" id="emailCC" class="form-control" placeholder="CC">
                                </div>
                                <div class="form-label-group mb-1">
                                    <input type="text" id="emailBCC" class="form-control" placeholder="BCC">
                                </div>
                                <!-- Compose mail Quill editor -->
                                <div class="snow-container border rounded p-50 ">
                                    <div class="compose-editor mx-75"></div>
                                    <div class="d-flex justify-content-end">
                                        <div class="compose-quill-toolbar pb-0">
                                            <span class="ql-formats mr-0">
                                                <button class="ql-bold"></button>
                                                <button class="ql-italic"></button>
                                                <button class="ql-underline"></button>
                                                <button class="ql-link"></button>
                                                <button class="ql-image"></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="emailAttach">
                                        <label class="custom-file-label" for="emailAttach">Attach file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-0 d-flex justify-content-end pt-0">
                            <button type="reset" class="btn btn-secondary cancel-btn mr-1">
                                <i class='ft-x mr-25'></i>
                                <span class="d-sm-inline d-none">Cancel</span>
                            </button>
                            <button type="submit" class="btn-send btn btn-danger btn-glow">
                                <i class='ft-play mr-25'></i> <span class="d-sm-inline d-none">Send</span>
                            </button>
                        </div>
                    </form>
                    <!-- form start end-->
                </div>
            </div>
            <!--/ User Chat profile right area -->

        </div>
    </div>
    <div class="content-right">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- email app overlay -->
                <div class="app-content-overlay"></div>
                <div class="email-app-area">
                    <!-- Email list Area -->
                    <div class="email-app-list-wrapper">
                        <div class="email-app-list">
                            <div class="email-action">
                                <!-- action left start here -->
                                <div class="action-left d-flex align-items-center">
                                    <!-- select All checkbox -->
                                    <div class="custom-control custom-checkbox selectAll mr-50">
                                        <input type="checkbox" class="custom-control-input" id="checkboxsmall">
                                        <label class="custom-control-label" for="checkboxsmall"></label>
                                    </div>
                                    <!-- delete unread dropdown -->
                                    <ul class="list-inline m-0 d-flex">
                                        <li class="list-inline-item mail-delete">
                                            <button type="button" class="btn btn-icon action-icon">
                                                <i class="ft-trash-2"></i>
                                            </button>
                                        </li>
                                        <li class="list-inline-item mail-unread">
                                            <button type="button" class="btn btn-icon action-icon">
                                                <i class="ft-mail"></i>
                                            </button>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="dropdown">
                                                <button type="button" class="dropdown-toggle btn btn-icon action-icon" id="folder" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ft-folder mr-0"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="folder">
                                                    <a class="dropdown-item" href="#"><i class="ft-edit"></i> Draft</a>
                                                    <a class="dropdown-item" href="#"><i class="ft-info"></i>Spam</a>
                                                    <a class="dropdown-item" href="#"><i class="ft-trash-2"></i>Trash</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-icon dropdown-toggle action-icon" id="tag" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ft-tag mr-0"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="tag">
                                                    <a href="#" class="dropdown-item align-items-center">
                                                        <span class="bullet bullet-success bullet-sm"></span>
                                                        <span>Product</span>
                                                    </a>
                                                    <a href="#" class="dropdown-item align-items-center">
                                                        <span class="bullet bullet-primary bullet-sm"></span>
                                                        <span>Work</span>
                                                    </a>
                                                    <a href="#" class="dropdown-item align-items-center">
                                                        <span class="bullet bullet-warning bullet-sm"></span>
                                                        <span>Misc</span>
                                                    </a>
                                                    <a href="#" class="dropdown-item align-items-center">
                                                        <span class="bullet bullet-danger bullet-sm"></span>
                                                        <span>Family</span>
                                                    </a>
                                                    <a href="#" class="dropdown-item align-items-center">
                                                        <span class="bullet bullet-info bullet-sm"></span>
                                                        <span> Design</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- action left end here -->

                                <!-- action right start here -->
                                <div class="action-right d-flex flex-grow-1 align-items-center justify-content-around">
                                    <!-- search bar  -->
                                    <div class="email-fixed-search flex-grow-1">
                                        <div class="sidebar-toggle d-block d-lg-none">
                                            <i class="ft-align-justify"></i>
                                        </div>
                                        <fieldset class="form-group position-relative has-icon-left m-0">
                                            <input type="text" class="form-control" id="email-search" placeholder="Search email">
                                            <div class="form-control-position">
                                                <i class="ft-search"></i>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <!-- pagination and page count -->
                                    <span class="d-none d-sm-block">1-10 of 653</span>
                                    <button class="btn btn-icon email-pagination-prev d-none d-sm-block">
                                        <i class="ft-chevron-left"></i>
                                    </button>
                                    <button class="btn btn-icon email-pagination-next d-none d-sm-block">
                                        <i class="ft-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- / action right -->

                            <!-- email user list start -->
                            <div class="email-user-list list-group">
                                <ul class="users-list-wrapper media-list">
                                    <li class="media mail-read">
                                        <div class="user-action">
                                            <div class="checkbox-con">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxsmall1">
                                                    <label class="custom-control-label" for="checkboxsmall1"></label>
                                                </div>
                                            </div>
                                            <span class="favorite warning">
                                                <i class="ft-star"></i>
                                            </span>
                                        </div>
                                        <div class="pr-50">
                                            <div class="avatar">
                                                <img src="<?php echo base_url(); ?>assets/images/portrait/small/avatar-s-20.png" alt="avtar img holder">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="user-details">
                                                <div class="mail-items">
                                                    <span class="list-group-item-text text-truncate">Open source project public release 👍</span>
                                                </div>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="mail-date">4:14 AM</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mail-message">
                                                <p class="list-group-item-text truncate mb-0">
                                                    Hey John, bah kivu decrete epanorthotic unnotched
                                                    Argyroneta nonius veratrine preimaginary
                                                </p>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="bullet bullet-success bullet-sm"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media mail-read">
                                        <div class="user-action">
                                            <div class="checkbox-con mr-25">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxsmall2">
                                                    <label class="custom-control-label" for="checkboxsmall2"></label>
                                                </div>
                                            </div>
                                            <span class="favorite"><i class="ft-star"></i></span>
                                        </div>
                                        <div class="pr-50">
                                            <div class="avatar">
                                                <img class="rounded-circle" src="<?php echo base_url(); ?>assets/images/portrait/small/avatar-s-17.png" alt="Generic placeholder image">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="user-details">
                                                <div class="mail-items">
                                                    <span class="list-group-item-text text-truncate">Ecommerce website Paypal integration 😃</span>
                                                </div>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="mail-date">2:15 AM</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mail-message">
                                                <p class="list-group-item-text mb-0 truncate">
                                                    We will start the new application development soon once
                                                    this will be completed.
                                                </p>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="bullet bullet-danger bullet-sm"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="user-action">
                                            <div class="checkbox-con mr-25">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxsmall3">
                                                    <label class="custom-control-label" for="checkboxsmall3"></label>
                                                </div>
                                            </div>
                                            <span class="favorite">
                                                <i class="ft-star"></i>
                                            </span>
                                        </div>
                                        <div class="pr-50">
                                            <div class="avatar">
                                                <img class="rounded-circle" src="<?php echo base_url(); ?>assets/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="user-details">
                                                <div class="mail-items">
                                                    <span class="list-group-item-text text-truncate">How To Set Intentions That Energize You</span>
                                                </div>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="mail-date">2:15 AM</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mail-message">
                                                <p class="list-group-item-text mb-0 truncate">
                                                    I will provide you more details after this Saturday. Hope
                                                    that will be fine for you..
                                                </p>
                                                <div class="mail-meta-item">
                                                    <span class="float-right d-flex align-items-center">
                                                        <i class="ft-paperclip mr-50"></i>
                                                        <span class="bullet bullet-success bullet-sm"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="user-action">
                                            <div class="checkbox-con mr-25">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxsmall4">
                                                    <label class="custom-control-label" for="checkboxsmall4"></label>
                                                </div>
                                            </div>
                                            <span class="favorite">
                                                <i class="ft-star"></i>
                                            </span>
                                        </div>
                                        <div class="pr-50">
                                            <div class="avatar">
                                                <img class="rounded-circle" src="<?php echo base_url(); ?>assets/images/portrait/small/avatar-s-5.png" alt="Generic placeholder image">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="user-details">
                                                <div class="mail-items">
                                                    <span class="list-group-item-text text-truncate">Harness The Power Of Words In Your Life</span>
                                                </div>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="mail-date">Yesterday</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mail-message">
                                                <p class="list-group-item-text text-truncate mb-0">
                                                    When the equation, first to ability the forwards, the a but travelling, outlines sentinels
                                                    bad expand to goodness....
                                                </p>
                                                <div class="mail-meta-item">
                                                    <span class="float-right d-flex align-items-center">
                                                        <i class="ft-paperclip mr-50"></i>
                                                        <span class="bullet bullet-warning bullet-sm"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media mail-read">
                                        <div class="user-action">
                                            <div class="checkbox-con mr-25">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxsmall5">
                                                    <label class="custom-control-label" for="checkboxsmall5"></label>
                                                </div>
                                            </div>
                                            <span class="favorite">
                                                <i class="ft-star"></i>
                                            </span>
                                        </div>
                                        <div class="pr-50">
                                            <div class="avatar">
                                                <img class="rounded-circle" src="<?php echo base_url(); ?>assets/images/portrait/small/avatar-s-3.png" alt="Generic placeholder image">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="user-details">
                                                <div class="mail-items">
                                                    <span class="list-group-item-text text-truncate mb-0">Helen Keller A Teller And A Seller</span>
                                                </div>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="mail-date">15 July</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mail-message">
                                                <p class="list-group-item-text mb-0 truncate">
                                                    Thanks for your feedback ! Here's a new layout for a new Modern Admin theme.
                                                </p>
                                                <div class="mail-meta-item">
                                                    <span class="float-right d-flex align-items-center">
                                                        <i class="ft-paperclip mr-50"></i>
                                                        <span class="bullet bullet-warning bullet-sm"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media mail-read">
                                        <div class="user-action">
                                            <div class="checkbox-con mr-25">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxsmall6">
                                                    <label class="custom-control-label" for="checkboxsmall6"></label>
                                                </div>
                                            </div>
                                            <span class="favorite warning">
                                                <i class="ft-star"></i>
                                            </span>
                                        </div>
                                        <div class="pr-50">
                                            <div class="avatar">
                                                <img class="rounded-circle" src="<?php echo base_url(); ?>assets/images/portrait/small/avatar-s-8.png" alt="Generic placeholder image">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="user-details">
                                                <div class="mail-items">
                                                    <span class="list-group-item-text text-truncate mb-0">
                                                        Use Your Reset Button To Change Your Vibration 🎉
                                                    </span>
                                                </div>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="mail-date">12-07-2019</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mail-message">
                                                <p class="list-group-item-text mb-0 truncate">
                                                    Hey John, bah kivu decrete epanorthotic unnotched
                                                    Argyroneta nonius veratrine preimaginary.</p>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="bullet bullet-info bullet-sm"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="user-action">
                                            <div class="checkbox-con mr-25">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxsmall7">
                                                    <label class="custom-control-label" for="checkboxsmall7"></label>
                                                </div>
                                            </div>
                                            <span class="favorite warning">
                                                <i class="ft-star"></i>
                                            </span>
                                        </div>
                                        <div class="pr-50">
                                            <div class="avatar">
                                                <img class="rounded-circle" src="<?php echo base_url(); ?>assets/images/portrait/small/avatar-s-11.png" alt="Generic placeholder image">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="user-details">
                                                <div class="mail-items">
                                                    <span class="list-group-item-text text-truncate mb-0">Harness The Power Of Words In Your Life</span>
                                                </div>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="mail-date">03-29-2019</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mail-message">
                                                <p class="list-group-item-text mb-0 truncate">
                                                    Hope your like it, or feel free to comment, feedback or rebound !
                                                </p>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="bullet bullet-success bullet-sm"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media mail-read">
                                        <div class="user-action">
                                            <div class="checkbox-con mr-25">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxsmall8">
                                                    <label class="custom-control-label" for="checkboxsmall8"></label>
                                                </div>
                                            </div>
                                            <span class="favorite">
                                                <i class="ft-star"></i>
                                            </span>
                                        </div>
                                        <div class="pr-50">
                                            <div class="avatar">
                                                <img class="rounded-circle" src="<?php echo base_url(); ?>assets/images/portrait/small/avatar-s-10.png" alt="Generic placeholder image">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="user-details">
                                                <div class="mail-items">
                                                    <span class="list-group-item-text text-truncate mb-0">Hypnosis 12 Steps To Acquire Mind Power</span>
                                                </div>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="mail-date">19 Jun</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mail-message">
                                                <p class="list-group-item-text mb-0 truncate">
                                                    Monstrous with geared from far and these, morals, phase rome; Class. Called get amidst of geared from
                                                    next...
                                                </p>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="bullet bullet-danger bullet-sm"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media mail-read">
                                        <div class="user-action">
                                            <div class="checkbox-con mr-25">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxsmall9">
                                                    <label class="custom-control-label" for="checkboxsmall9"></label>
                                                </div>
                                            </div>
                                            <span class="favorite">
                                                <i class="ft-star"></i>
                                            </span>
                                        </div>
                                        <div class="pr-50">
                                            <div class="avatar">
                                                <img class="rounded-circle" src="<?php echo base_url(); ?>assets/images/portrait/small/avatar-s-6.png" alt="Generic placeholder image">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="user-details">
                                                <div class="mail-items">
                                                    <span class="list-group-item-text text-truncate mb-0">How To Stop Living Your Life On Autopilot</span>
                                                </div>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="mail-date">2 Jun</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mail-message">
                                                <p class="list-group-item-text mb-0 truncate">
                                                    Thanks for your feedback ! Here's a new layout for a new
                                                    Modern Admin theme.
                                                </p>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="bullet bullet-info bullet-sm"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="user-action">
                                            <div class="checkbox-con mr-25">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxsmall10">
                                                    <label class="custom-control-label" for="checkboxsmall10"></label>
                                                </div>
                                            </div>
                                            <span class="favorite">
                                                <i class="ft-star"></i>
                                            </span>
                                        </div>
                                        <div class="pr-50">
                                            <div class="avatar">
                                                <img class="rounded-circle" src="<?php echo base_url(); ?>assets/images/portrait/small/avatar-s-9.png" alt="Generic placeholder image">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="user-details">
                                                <div class="mail-items">
                                                    <span class="list-group-item-text text-truncate mb-0">
                                                        Invest a few hours contributing to the software
                                                        you use and love. 🍕
                                                    </span>
                                                </div>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="mail-date">29 May</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mail-message">
                                                <p class="list-group-item-text mb-0 truncate">
                                                    Hope your like it, or feel free to comment, feedback or rebound !
                                                </p>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="bullet bullet-info bullet-sm"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="user-action">
                                            <div class="checkbox-con mr-25">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxsmall11">
                                                    <label class="custom-control-label" for="checkboxsmall11"></label>
                                                </div>
                                            </div>
                                            <span class="favorite">
                                                <i class="ft-star"></i>
                                            </span>
                                        </div>
                                        <div class="pr-50">
                                            <div class="avatar">
                                                <img class="rounded-circle" src="<?php echo base_url(); ?>assets/images/portrait/small/avatar-s-20.png" alt="Generic placeholder image">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="user-details">
                                                <div class="mail-items">
                                                    <span class="list-group-item-text text-truncate mb-0">Harness The Power Of Words In Your Life</span>
                                                </div>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="mail-date">17 May</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mail-message">
                                                <p class="list-group-item-text mb-0 truncate">
                                                    Hope your like it, or feel free to comment, feedback or rebound !.
                                                </p>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="bullet bullet-warning bullet-sm"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media mail-read">
                                        <div class="user-action">
                                            <div class="checkbox-con mr-25">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkboxsmall12">
                                                    <label class="custom-control-label" for="checkboxsmall12"></label>
                                                </div>
                                            </div>
                                            <span class="favorite">
                                                <i class="ft-star"></i>
                                            </span>
                                        </div>
                                        <div class="pr-50">
                                            <div class="avatar">
                                                <img class="rounded-circle" src="<?php echo base_url(); ?>assets/images/portrait/small/avatar-s-17.png" alt="Generic placeholder image">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="user-details">
                                                <div class="mail-items">
                                                    <span class="list-group-item-text text-truncate mb-0"> Know Yourself Your Inner Power </span>
                                                </div>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="mail-date">21 Mar</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mail-message">
                                                <p class="list-group-item-text mb-0 truncate">
                                                    Hope your like it, or feel free to comment, feedback or rebound !
                                                </p>
                                                <div class="mail-meta-item">
                                                    <span class="float-right">
                                                        <span class="bullet bullet-warning bullet-sm"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- email user list end -->

                                <!-- no result when nothing to show on list -->
                                <div class="no-results">
                                    <i class="ft-info font-large-2"></i>
                                    <h5>No Items Found</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Email list Area -->

                    <!-- Detailed Email View -->
                    <div class="email-app-details">
                        <!-- email detail view header -->
                        <div class="email-detail-header">
                            <div class="email-header-left d-flex align-items-center mb-1">
                                <span class="go-back mr-50">
                                    <i class="ft-chevron-left font-medium-4 align-middle"></i>
                                </span>
                                <h5 class="email-detail-title font-weight-normal mb-0">
                                    Advertising Internet Online
                                    <span class="badge badge-light-danger badge-pill ml-1">PRODUCT</span>
                                </h5>
                            </div>
                            <div class="email-header-right mb-1 ml-2 pl-1">
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <button class="btn btn-icon action-icon">
                                            <i class="ft-trash-2"></i>
                                        </button>
                                    </li>
                                    <li class="list-inline-item">
                                        <button class="btn btn-icon action-icon">
                                            <i class="ft-mail"></i>
                                        </button>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <button class="btn btn-icon dropdown-toggle action-icon" id="open-mail-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ft-folder mr-0"></i>

                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="open-mail-menu">
                                                <a class="dropdown-item" href="#"><i class="ft-edit"></i> Draft</a>
                                                <a class="dropdown-item" href="#"><i class="ft-info"></i> Spam</a>
                                                <a class="dropdown-item" href="#"><i class="ft-trash-2"></i> Trash</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <button class="btn btn-icon dropdown-toggle action-icon" id="open-mail-tag" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ft-tag mr-0"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="open-mail-tag">
                                                <a href="#" class="dropdown-item align-items-center">
                                                    <span class="bullet bullet-success bullet-sm"></span>
                                                    Product
                                                </a>
                                                <a href="#" class="dropdown-item align-items-center">
                                                    <span class="bullet bullet-primary bullet-sm"></span>
                                                    Work
                                                </a>
                                                <a href="#" class="dropdown-item align-items-center">
                                                    <span class="bullet bullet-warning bullet-sm"></span>
                                                    Misc
                                                </a>
                                                <a href="#" class="dropdown-item align-items-center">
                                                    <span class="bullet bullet-danger bullet-sm"></span>
                                                    Family
                                                </a>
                                                <a href="#" class="dropdown-item align-items-center">
                                                    <span class="bullet bullet-info bullet-sm"></span>
                                                    Design
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <span class="no-of-list d-none d-sm-block ml-1">1-10 of 653</span>
                                    </li>
                                    <li class="list-inline-item">
                                        <button class="btn btn-icon email-pagination-prev action-icon">
                                            <i class='ft-chevron-left'></i>
                                        </button>
                                    </li>
                                    <li class="list-inline-item">
                                        <button class="btn btn-icon email-pagination-next action-icon">
                                            <i class='ft-chevron-right'></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- email detail view header end-->
                        <div class="email-scroll-area">
                            <!-- email details  -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="collapsible email-detail-head">
                                        <div class="card collapse-header" role="tablist">
                                            <div id="headingCollapse5" class="card-header d-flex justify-content-between align-items-center" data-toggle="collapse" role="tab" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                                <div class="collapse-title media">
                                                    <div class="pr-1">
                                                        <div class="avatar mr-75">
                                                            <img src="<?php echo base_url(); ?>assets/images/portrait/small/avatar-s-18.png" alt="avtar img holder" width="30" height="30">
                                                        </div>
                                                    </div>
                                                    <div class="media-body mt-25">
                                                        <span class="text-primary">Elnora Reese</span>
                                                        <span class="d-sm-inline d-none"> &lt;elnora@gmail.com&gt;</span>
                                                        <small class="text-muted d-block">to Lois Jimenez</small>
                                                    </div>
                                                </div>
                                                <div class="information d-sm-flex d-none align-items-center">
                                                    <small class="text-muted mr-50">15 Jul 2019, 10:30</small>
                                                    <span class="favorite">
                                                        <i class="ft-star mr-25"></i>
                                                    </span>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" id="fisrt-open-submenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class='ft-more-vertical mr-0'></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="fisrt-open-submenu">
                                                            <a href="#" class="dropdown-item mail-reply">
                                                                <i class='ft-share-2'></i>
                                                                Reply
                                                            </a>
                                                            <a href="#" class="dropdown-item">
                                                                <i class='ft-corner-up-right'></i>
                                                                Forward
                                                            </a>
                                                            <a href="#" class="dropdown-item">
                                                                <i class='ft-info'></i>
                                                                Report Spam
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="collapse5" role="tabpanel" aria-labelledby="headingCollapse5" class="collapse">
                                                <div class="card-content">
                                                    <div class="card-body py-1">
                                                        <p class="text-bold-500">Greetings!</p>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                                            type and scrambled it to make a type specimen book.
                                                        </p>
                                                        <p>
                                                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                                            essentially unchanged.
                                                        </p>
                                                        <p class="mb-0">Sincerely yours,</p>
                                                        <p class="text-bold-500">Envato Design Team</p>
                                                    </div>
                                                    <div class="card-footer pt-0 border-top">
                                                        <label class="sidebar-label">Attached Files</label>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="cursor-pointer pb-25">
                                                                <img src="<?php echo base_url(); ?>assets/images/icons/psd.png" height="30" alt="psd.png">
                                                                <small class="text-muted ml-1 attchement-text">uikit-design.psd</small>
                                                            </li>
                                                            <li class="cursor-pointer">
                                                                <img src="<?php echo base_url(); ?>assets/images/icons/sketch.png" height="30" alt="sketch.png">
                                                                <small class="text-muted ml-1 attchement-text">uikit-design.sketch</small>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card collapse-header" role="tablist">
                                            <div id="headingCollapse6" class="card-header d-flex justify-content-between align-items-center" data-toggle="collapse" role="tab" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                                <div class="collapse-title media">
                                                    <div class="pr-1">
                                                        <div class="avatar mr-75">
                                                            <img src=""<?php echo base_url(); ?>assets/images/portrait/small/avatar-s-19.png" alt="avtar img holder" width="30" height="30">
                                                        </div>
                                                    </div>
                                                    <div class="media-body mt-25">
                                                        <span class="text-primary">Lois Jimenez </span>
                                                        <span class="d-sm-inline d-none"> &lt;lois_jim@gmail.com&gt;</span>
                                                        <small class="text-muted d-block">to Elnora Reese</small>
                                                    </div>
                                                </div>
                                                <div class="information d-sm-flex d-none align-items-center">
                                                    <i class='ft-paperclip mr-50'></i>
                                                    <small class="text-muted mr-50">10 Jul 2019, 10:30</small>
                                                    <span class="favorite">
                                                        <i class="ft-star mr-25"></i>
                                                    </span>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" id="second-open-submenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class='ft-more-vertical mr-0'></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="second-open-submenu">
                                                            <a href="#" class="dropdown-item mail-reply">
                                                                <i class='ft-share-2'></i>
                                                                Reply
                                                            </a>
                                                            <a href="#" class="dropdown-item">
                                                                <i class='ft-corner-up-right'></i>
                                                                Forward
                                                            </a>
                                                            <a href="#" class="dropdown-item">
                                                                <i class='ft-info'></i>
                                                                Report Spam
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="collapse6" role="tabpanel" aria-labelledby="headingCollapse7" class="collapse">
                                                <div class="card-content">
                                                    <div class="card-body py-1">
                                                        <p class="text-bold-500">Greetings!</p>
                                                        <p>
                                                            Successful businesses have many things in common, today we’ll look at the big ‘R’of recognition
                                                            and how a digital advertising network may help. Recognition can be illustrated by two individuals
                                                            entering a crowded room at a party. Both walk to the far side of the room, one of them slips
                                                            through the crowd easily and unnoticed as they reach the far side.
                                                        </p>
                                                        <p>
                                                            Gummies sweet tart marzipan lemon drops donut pie. Chocolate cake gingerbread jujubes gingerbread
                                                            chocolate cake tart bear claw apple pie jelly-o.
                                                            Gummies biscuit brownie marshmallow oat cake tootsie roll bear claw topping. Oat cake sesame snaps
                                                            icing cupcake wafer tiramisu jelly-o sugar plum carrot cake
                                                        </p>
                                                        <p class="mb-0">Sincerely yours,</p>
                                                        <p class="text-bold-500">Envato Design Team</p>
                                                    </div>
                                                    <div class="card-footer pt-0 border-top">
                                                        <label class="sidebar-label">Attached Files</label>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="cursor-pointer pb-25">
                                                                <img src=""<?php echo base_url(); ?>assets/images/icons/psd.png" height="30" alt="psd.png">
                                                                <small class="text-muted ml-1 attchement-text">uikit-design.psd</small>
                                                            </li>
                                                            <li class="cursor-pointer">
                                                                <img src=""<?php echo base_url(); ?>assets/images/icons/sketch.png" height="30" alt="sketch.png">
                                                                <small class="text-muted ml-1 attchement-text">uikit-design.sketch</small>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card collapse-header open" role="tablist">
                                            <div id="headingCollapse7" class="card-header d-flex justify-content-between align-items-center" data-toggle="collapse" role="tab" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                                <div class="collapse-title media">
                                                    <div class="pr-1">
                                                        <div class="avatar mr-75">
                                                            <img src=""<?php echo base_url(); ?>assets/images/portrait/small/avatar-s-18.png" alt="avtar img holder" width="30" height="30">
                                                        </div>
                                                    </div>
                                                    <div class="media-body mt-25">
                                                        <span class="text-primary">Elnora Reese</span>
                                                        <span class="d-sm-inline d-none">&lt;elnora@gmail.com&gt;</span>
                                                        <small class="text-muted d-block">to Lois Jimenez</small>
                                                    </div>
                                                </div>
                                                <div class="information d-sm-flex d-none align-items-center">
                                                    <small class="text-muted mr-50">05 Jul 2019, 10:30</small>
                                                    <span class="favorite warning">
                                                        <i class="ft-star mr-25"></i>
                                                    </span>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle" id="third-open-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class='ft-more-vertical mr-0'></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="second-open-submenu">
                                                            <a href="#" class="dropdown-item mail-reply">
                                                                <i class='ft-share-2'></i>
                                                                Reply
                                                            </a>
                                                            <a href="#" class="dropdown-item">
                                                                <i class='ft-corner-up-right'></i>
                                                                Forward
                                                            </a>
                                                            <a href="#" class="dropdown-item">
                                                                <i class='ft-info'></i>
                                                                Report Spam
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="collapse7" role="tabpanel" aria-labelledby="headingCollapse7" class="collapse show">
                                                <div class="card-content">
                                                    <div class="card-body py-1">
                                                        <p class="text-bold-500">Greetings!</p>
                                                        <p>
                                                            It is a long established fact that a reader will be distracted by the readable content of a page
                                                            when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal
                                                            distribution of letters, as opposed to using 'Content here, content here',making it look like
                                                            readable English.
                                                        </p>
                                                        <p>
                                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                                            alteration in some form, by injected humour, or randomised words which don't look even slightly
                                                            believable.
                                                        </p>
                                                        <p class="mb-0">Sincerely yours,</p>
                                                        <p class="text-bold-500">Envato Design Team</p>
                                                    </div>
                                                    <div class="card-footer pt-0 border-top">
                                                        <label class="sidebar-label">Attached Files</label>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="cursor-pointer pb-25">
                                                                <img src="<?php echo base_url(); ?>assets/images/icons/psd.png" height="30" alt="psd.png">
                                                                <small class="text-muted ml-1 attchement-text">uikit-design.psd</small>
                                                            </li>
                                                            <li class="cursor-pointer">
                                                                <img src="<?php echo base_url(); ?>assets/images/icons/sketch.png" height="30" alt="sketch.png">
                                                                <small class="text-muted ml-1 attchement-text">uikit-design.sketch</small>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- email details  end-->
                            <div class="row px-2 mb-4">
                                <!-- quill editor for reply message -->
                                <div class="col-12 px-0">
                                    <div class="card shadow-none border rounded">
                                        <div class="card-body quill-wrapper">
                                            <span>Reply to Lois Jimenez</span>
                                            <div class="snow-container" id="detail-view-quill">
                                                <div class="detail-view-editor"></div>
                                                <div class="d-flex justify-content-end">
                                                    <div class="detail-quill-toolbar">
                                                        <span class="ql-formats mr-50">
                                                            <button class="ql-bold"></button>
                                                            <button class="ql-italic"></button>
                                                            <button class="ql-underline"></button>
                                                            <button class="ql-link"></button>
                                                            <button class="ql-image"></button>
                                                        </span>
                                                    </div>
                                                    <button class="btn btn-primary send-btn">
                                                        <i class='ft-play mr-25'></i>
                                                        <span class="d-none d-sm-inline"> Send</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Detailed Email View -->
                </div>

            </div>
        </div>
    </div>
</div>
<!--     
    <script src="<?php echo base_url(); ?>assets/vendors/js/vendors.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/js/tables/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/js/tables/datatable/dataTables.colReorder.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script> 
    <script src="<?php echo base_url(); ?>assets/vendors/js/tables/datatable/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendors/js/editors/quill/quill.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts/pages/app-email.js"></script> -->

    
    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/vendors/js/editors/quill/quill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/js/scripts/pages/app-email.js"></script>
    <!-- END: Page JS-->
