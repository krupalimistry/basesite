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
                <h1 class="float-left">Datatable</h1>
                <div class="float-right breadcrumb_block">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Datatable</li>
                    </ol>
                </div>
                <div class="clearfix"></div>
                <table id="list_tables" class="table table-striped table-bordered table-hover dataTable no-footer"
                    style="width:100%">
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
                                <button class="delete" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button>
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
                        <tr>
                            <td class="text-center">6</td>
                            <td>Brielle Williamson</td>
                            <td>brielle.williamson@infosys.com</td>
                            <td>Integration Specialist</td>
                            <td>Infosys</td>
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
                            <td class="text-center">7</td>
                            <td>Ralph Wiest</td>
                            <td>ralphwiest@gmail.com</td>
                            <td>Sales Assistant</td>
                            <td>HCL</td>
                            <td class="text-center">
                                <div class="activeyes_box">
                                    <input type="checkbox" name="active1" id="active1" value="No">
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
                            <td class="text-center">8</td>
                            <td>Rhona Davidson</td>
                            <td>rhona.dav@hp.com</td>
                            <td>Jr.Manager</td>
                            <td>HP</td>
                            <td class="text-center">
                                <div class="activeyes_box">
                                    <input type="checkbox" name="active1" id="active1" value="No">
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
                            <td class="text-center">9</td>
                            <td>Michal Delura</td>
                            <td>michaldelura@yahoo.com</td>
                            <td>Javascript Developer</td>
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
                            <td class="text-center">10</td>
                            <td>Sonya Frost</td>
                            <td>sonya.frost@facebook.com</td>
                            <td>Software Engineer</td>
                            <td>Facebook</td>
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
                            <td class="text-center">11</td>
                            <td>Troy Bryant</td>
                            <td>troy.bryant@infosys.com</td>
                            <td>Office Manager</td>
                            <td>Infosys</td>
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
                            <td class="text-center">12</td>
                            <td>Rick Brown</td>
                            <td>rick.brown@hcl.com</td>
                            <td>Support Lead</td>
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
                            <td class="text-center">13</td>
                            <td>Shane Griffin</td>
                            <td>shangriffin@tcs.com</td>
                            <td>Regional Director</td>
                            <td>Tata Consultancy Services</td>
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
                            <td class="text-center">14</td>
                            <td>Sara Fecadu</td>
                            <td>sara.fecadu@google.com</td>
                            <td>Senior Marketing Designer</td>
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
                            <td class="text-center">15</td>
                            <td>Michael Tilahun</td>
                            <td>michael.til@tcs.com</td>
                            <td>Regional Director</td>
                            <td>Tata Consultancy Services</td>
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
            </div>
            <!-- End Content -->
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- Footer -->
<?php include("footer.php");?>
<!-- End Footer -->