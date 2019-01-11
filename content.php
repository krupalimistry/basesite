<!-- Header -->
<?php include("header.php");?>
<!-- End Header -->
<div class="content_block">
    <div class="container-fluid">
        <div class="row">
            <!--Sidebar -->
            <?php include("sidebar.php");?>
            <!--End Sidebar -->

            <!-- Content -->
            <div class="col-md-10 col-sm-10 offset-md-2 main_block">
                <h1 class="float-left">Content</h1>
                <div class="float-right breadcrumb_block">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Content</li>
                    </ol>
                </div>
                <div class="clearfix"></div>
                <p class="padding_15">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                    took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                    more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                    Ipsum.</p>
                <p class="padding_30">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                    survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged.</p>
                <h1>Heading 1</h1>
                <h2>Heading 2</h2>
                <h3>Heading 3</h3>
                <h4>Heading 4</h4>
                <h5>Heading 5</h5>
                <h6>Heading 6</h6>
                <br>
                <ul class="list_li margin_li">
                    <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.</li>
                    <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li>
                    <li>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                </ul>
                <ol class="ollist_li margin_li">
                    <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.</li>
                    <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li>
                    <li>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                </ol>
                <button class="theme_btn">Theme Button</button>
                <button class="themeoption_btn"><i class="fa fa-undo"></i> Theme Button</button>
                <button class="icon_btn"><i class="fa fa-undo"></i></button>
                <div class="clearfix"></div>
                <br>
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center sr_no_width">S.No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Title</th>
                            <th>Company</th>
                            <th class="text-center active_width">Active?</th>
                            <th class="text-center action_width">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Tiger Nixon</td>
                            <td>tiger.nixon@google.com</td>
                            <td>System Architect</td>
                            <td>Google</td>
                            <td class="text-center">
                                <div class="activeyes_box">
                                    <input type="checkbox" name="active1" id="active1" checked value="Yes">
                                    <label for="active1"></label>
                                </div>
                            </td>
                            <td class="text-center">
                                <button class="edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                <button class="delete" data-toggle="tooltip" data-placement="top" title="Delete"><i
                                        class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Garrett Winters</td>
                            <td>garrett.winters@yahoo.com</td>
                            <td>Accountant</td>
                            <td>Yahoo</td>
                            <td class="text-center">
                                <div class="activeyes_box">
                                    <input type="checkbox" name="active1" id="active1" checked value="Yes">
                                    <label for="active1"></label>
                                </div>
                            </td>
                            <td class="text-center">
                                <button class="edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                <button class="delete" data-toggle="tooltip" data-placement="top" title="Delete"><i
                                        class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Trushant Mehta</td>
                            <td>TMehta@TheOpenEyes.com</td>
                            <td>CEO</td>
                            <td>OpenEyes Technologies</td>
                            <td class="text-center">
                                <div class="activeyes_box">
                                    <input type="checkbox" name="active1" id="active1" checked value="Yes">
                                    <label for="active1"></label>
                                </div>
                            </td>
                            <td class="text-center">
                                <button class="edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                <button class="delete" data-toggle="tooltip" data-placement="top" title="Delete"><i
                                        class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Cedric Kelly</td>
                            <td>cedrickelly@hcl.com</td>
                            <td>Senior Javascript Developer</td>
                            <td>HCL</td>
                            <td class="text-center">
                                <div class="activeyes_box">
                                    <input type="checkbox" name="active1" id="active1" checked value="Yes">
                                    <label for="active1"></label>
                                </div>
                            </td>
                            <td class="text-center">
                                <button class="edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                <button class="delete" data-toggle="tooltip" data-placement="top" title="Delete"><i
                                        class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Airi Satou</td>
                            <td>airi.satou@google.com</td>
                            <td>Manager</td>
                            <td>Google</td>
                            <td class="text-center">
                                <div class="activeyes_box">
                                    <input type="checkbox" name="active1" id="active1" checked value="Yes">
                                    <label for="active1"></label>
                                </div>
                            </td>
                            <td class="text-center">
                                <button class="edit" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                <button class="delete" data-toggle="tooltip" data-placement="top" title="Delete"><i
                                        class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <br>
                <div class="accodion_block">
                    <div id="Contentaccordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    Collapsible Group Item #1<span class="minus_plus"></span>
                                </button> </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#Contentaccordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson
                                    ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                                    truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on
                                    it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad
                                    vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                    aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                    sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    Collapsible Group Item #2 <span class="minus_plus"></span>
                                </button>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#Contentaccordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson
                                    ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                                    truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on
                                    it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad
                                    vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                    aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                    sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    Collapsible Group Item #3 <span class="minus_plus"></span>
                                </button>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#Contentaccordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson
                                    ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                                    truck
                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on
                                    it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad
                                    vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                    aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                    sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="tab_block">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                aria-controls="pills-home" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                                aria-controls="pills-profile" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                                aria-controls="pills-contact" aria-selected="false">Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">Anim
                            pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3
                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                            heard of them accusamus labore sustainable VHS.</div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                            vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.</div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Anim
                            pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3
                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,</div>
                    </div>
                </div>
                <br>
                <button type="button" class="theme_btn" data-toggle="modal" data-target="#exampleModal">
                    Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <h3>Sweet Alerts</h3>
                <button class="btn btn-info info_swal">Info</button>
                <button class="btn btn-success success_swal">Success</button>
                <button class="btn btn-warning warning_swal">Warning</button>
                <button class="btn btn-danger danger_swal">Danger</button>
            </div>
            <!-- End Content -->
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- Footer -->
<?php include("footer.php");?>
<!-- End Footer -->