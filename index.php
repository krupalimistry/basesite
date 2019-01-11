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
        <h1 class="float-left">Form</h1>
        <div class="float-right breadcrumb_block">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form</li>
          </ol>
        </div>
        <div class="clearfix"></div>
        <form>
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <div class="form-group">
                <label><span>*</span>Text</label>
                <input type="text" name="lname" id="lname" class="form-control" required oninvalid="this.setCustomValidity('Please enter your Last Name')"
                  oninput="setCustomValidity('')" />
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="form-group">
                <label><span>*</span>Email </label>
                <input type="email" name="email" id="email" class="form-control" pattern="[^ @]*@[^ @]*" required
                  oninvalid="this.setCustomValidity('Please enter your Email Address in valid format')" oninput="setCustomValidity('')" />
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="form-group">
                <label><span>*</span>Phone </label>
                <input type="text" name="phone" id="phone" class="form-control" pattern="[0-9\-.\s]+" required
                  oninvalid="this.setCustomValidity('Please enter your Phone Number in xxx.xxx.xxxx format')" oninput="setCustomValidity('')" />
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12">
              <div class="form-group">
                <label><span>*</span>Textarea </label>
                <textarea name="address" id="address" class="form-control" required oninvalid="this.setCustomValidity('Please enter your Address')"
                  oninput="setCustomValidity('')"></textarea>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label><span>*</span>Password </label>
                <input type="password" class="form-control" required id="password" oninvalid="this.setCustomValidity('Please enter your Password')"
                  oninput="setCustomValidity('')" />
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label><span>*</span>Confirm Password </label>
                <input type="password" class="form-control" required id="confirm_password" oninvalid="this.setCustomValidity('Please confirm your password')"
                  oninput="setCustomValidity('')" />
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 col-sm-12">
              <div class="form-group">
                <label><span>*</span>Date Time </label>
                <input type="text" readonly class="form-control form_datetime" />
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="form-group">
                <label><span>*</span>Date </label>
                <input type="text" readonly class="form-control form_date" />
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="form-group">
                <label><span>*</span>Time </label>
                <input type="text" readonly class="form-control form_time" />
              </div>
            </div>
            <div class="col-md-2 col-sm-12">
              <div class="form-group">
                <label><span>*</span>Rating</label>
                <br>
                <div class="rate_stars">
                  <input type="radio" id="rating5" name="rating" value="5" /><label for="rating5" title="5 stars"></label>
                  <input type="radio" id="rating45" name="rating" value="4.5" /><label class="half" for="rating45"
                    title="4.5 stars"></label>
                  <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="4 stars"></label>
                  <input type="radio" id="rating35" name="rating" value="3.5" /><label class="half" for="rating35"
                    title="3.5 stars"></label>
                  <input type="radio" id="rating3" name="rating" value="3" /><label for="rating3" title="3 stars"></label>
                  <input type="radio" id="rating25" name="rating" value="2.5" /><label class="half" for="rating25"
                    title="2.5 stars"></label>
                  <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="2 stars"></label>
                  <input type="radio" id="rating15" name="rating" value="1.5" /><label class="half" for="rating15"
                    title="1.5 stars"></label>
                  <input type="radio" id="rating1" name="rating" value="1" /><label for="rating1" title="1 star"></label>
                  <input type="radio" id="rating05" name="rating" value="0.5" /><label class="half" for="rating05"
                    title="0.5 star"></label>
                </div>
                <input type="text" readonly class="form-control rating_input" />
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="form-group">
                <label><span>*</span>Radio Button</label>
                <br>
                <div class="radio_box">
                  <input type="radio" name="role" id="role1" value="Role1">
                  <label for="role1" title="Role1">Role 1</label>
                </div>
                <div class="radio_box">
                  <input type="radio" name="role" id="role2" value="Role2">
                  <label for="role2" title="Role2">Role 2 </label>
                </div>
                <div class="radio_box">
                  <input type="radio" name="role" id="role3" value="Role3">
                  <label for="role3" title="Role3">Role 3</label>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="form-group">
                <label><span>*</span>Checkbox</label>
                <br>
                <div class="check_box">
                  <input type="checkbox" name="Check" id="Check1" value="Check1">
                  <label for="Check1" title="Check1" class="checkboxbtn_label">Role 1</label>
                </div>
                <div class="check_box">
                  <input type="checkbox" name="Check" id="Check2" value="Check2">
                  <label for="Check2" title="Check2" class="checkboxbtn_label">Role 2 </label>
                </div>
                <div class="check_box">
                  <input type="checkbox" name="Check" id="Check3" value="Check3">
                  <label for="Check3" title="Check3" class="checkboxbtn_label">Role 3</label>
                </div>
              </div>
            </div>
            <div class="col-md-1 col-sm-12">
              <div class="form-group">
                <label><span>*</span>Active</label>
                <br>
                <div class="activeyes_box">
                  <input type="checkbox" name="active1" id="active1" checked value="Yes">
                  <label for="active1"></label>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 col-sm-12">
              <div class="form-group">
                <label><span>*</span>Default Dropdown</label>
                <select class="form-control">
                  <option>Option1</option>
                  <option>Option2</option>
                  <option>Option3</option>
                  <option>Option4</option>
                  <option>Option5</option>
                </select>
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="form-group ">
                <label><span>*</span>Select2 Dropdown </label>
                <select class="select2">
                  <option>Select City</option>
                  <option>Alabama</option>
                  <option>Delaware</option>
                  <option>California</option>
                  <option>Kansas</option>
                  <option>Virginia</option>
                </select>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="form-group">
                <label><span>*</span>Multi Select Dropdown</label>
                <div class="dropdown_checkbox">
                  <select class="form-control" id="multiselectdropdown" multiple="multiple">
                    <option>Krupali</option>
                    <option>Anand</option>
                    <option>Mitesh</option>
                    <option>Vidhi</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-6">
              <div class="form-group">
                <label><span>*</span>Simple Auto Complete </label>
                <input class="form-control autocomplete" type="text" />
              </div>
            </div>
            <div class="col-md-12 col-sm-6">
              <div class="form-group">
                <label><span>*</span>Typeahead</label>
                <input type="text" class="form-control" value="Amsterdam,Washington" id="tagsinput" data-role="tagsinput" />
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-6">
              <div class="form-group file_upload">
                <label><span>*</span>Single File Upload</label>
                <input type="text" disabled class="form-control" />
                <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" />
              </div>
            </div>
            <div class="col-md-12 col-sm-12">
              <div class="form-group">
                <label><span>*</span>Multi File Upload</label>
                <input type="file" id="multiupload" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf"
                  multiple>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="text-center col-md-12 col-sm-12">
              <button class="theme_btn">Register</button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Content -->
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!-- Footer -->
<?php include("footer.php");?>
<!-- End Footer -->