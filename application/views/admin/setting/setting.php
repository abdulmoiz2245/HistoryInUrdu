
            <!-- <pre><?php //var_dump( $categorie) ?></pre> -->
            <?php $this->load->view('admin/layout/header') ?>
            
            <!-- Topbar Start -->
            <?php $this->load->view('admin/layout/top_nav') ?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php $this->load->view('admin/layout/sidebar') ?>
            <style>
            .switchery{background-color:#fff;border:1px solid #dfdfdf;border-radius:20px;cursor:pointer;display:inline-block;height:30px;position:relative;vertical-align:middle;width:50px;-moz-user-select:none;-khtml-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none;box-sizing:content-box;background-clip:content-box}.switchery>small{background:#fff;border-radius:100%;box-shadow:0 1px 3px rgba(0,0,0,0.4);height:30px;position:absolute;top:0;width:30px}.switchery-small{border-radius:20px;height:20px;width:33px}.switchery-small>small{height:20px;width:20px}.switchery-large{border-radius:40px;height:40px;width:66px}.switchery-large>small{height:40px;width:40px}
            </style>

            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                <div class="content-wrapper">
                    <div class="content-header row">
                    <div class="content-header-left col-md-6 col-12 mb-2" style="margin-left: 40px;">
                        <h3 class="content-header-title mb-0">Account setting</h3>
                        <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Users</a>
                            </li>
                            <li class="breadcrumb-item active">Account setting
                            </li>
                            </ol>
                        </div>
                        </div>
                    </div>
                   
                    </div>
                    <div class="content-body"><!-- account setting page start -->
                    <section id="page-account-settings">
                        <div class="row">
                            <!-- left menu section -->
                            <div class="col-md-3 mb-2 mb-md-0">
                                <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                            <i class="feather icon-globe"></i>
                                            General
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                            <i class="feather icon-lock"></i>
                                            Change Password
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex" id="account-pill-social" data-toggle="pill" href="#account-vertical-social" aria-expanded="false">
                                            <i class="feather icon-camera"></i>
                                            Social links
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex" id="account-pill-notifications" data-toggle="pill" href="#account-vertical-notifications" aria-expanded="false">
                                            <i class="feather icon-message-circle"></i>
                                            Notifications
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- right content section -->
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                                    <div class="media">
                                                        <a href="javascript: void(0);">
                                                            <img src="../../../app-assets/images/portrait/small/avatar-s-18.png" class="rounded mr-75" alt="profile image" height="64" width="64">
                                                        </a>
                                                        <div class="media-body mt-75">
                                                            <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                                <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer" for="account-upload">Upload new photo</label>
                                                                <input type="file" id="account-upload" hidden="">
                                                                <button class="btn btn-sm btn-secondary ml-50">Reset</button>
                                                            </div>
                                                            <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max
                                                                    size of
                                                                    800kB</small></p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <form novalidate="">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Username</label>
                                                                        <input type="text" class="form-control" id="account-username" placeholder="Username" value="hermione007" required="" data-validation-required-message="This username field is required">
                                                                    <div class="help-block"></div></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-name">Name</label>
                                                                        <input type="text" class="form-control" id="account-name" placeholder="Name" value="Hermione Granger" required="" data-validation-required-message="This name field is required">
                                                                    <div class="help-block"></div></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-e-mail">E-mail</label>
                                                                        <input type="email" class="form-control" id="account-e-mail" placeholder="Email" value="granger007@hogward.com" required="" data-validation-required-message="This email field is required">
                                                                    <div class="help-block"></div></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                    <p class="mb-0">
                                                                        Your email is not confirmed. Please check your inbox.
                                                                    </p>
                                                                    <a href="javascript: void(0);">Resend confirmation</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="account-company">Company</label>
                                                                    <input type="text" class="form-control" id="account-company" placeholder="Company name">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                                    changes</button>
                                                                <button type="reset" class="btn btn-light">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade " id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                                    <form novalidate="">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-old-password">Old Password</label>
                                                                        <input type="password" class="form-control" id="account-old-password" required="" placeholder="Old Password" data-validation-required-message="This old password field is required">
                                                                    <div class="help-block"></div></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-new-password">New Password</label>
                                                                        <input type="password" name="password" id="account-new-password" class="form-control" placeholder="New Password" required="" data-validation-required-message="The password field is required" minlength="6">
                                                                    <div class="help-block"></div></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-retype-new-password">Retype New
                                                                            Password</label>
                                                                        <input type="password" name="con-password" class="form-control" required="" id="account-retype-new-password" data-validation-match-match="password" placeholder="New Password" data-validation-required-message="The Confirm password field is required" minlength="6">
                                                                    <div class="help-block"></div></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                                    changes</button>
                                                                <button type="reset" class="btn btn-light">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="account-vertical-info" role="tabpanel" aria-labelledby="account-pill-info" aria-expanded="false">
                                                    <form novalidate="">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="accountTextarea">Bio</label>
                                                                    <textarea class="form-control" id="accountTextarea" rows="3" placeholder="Your Bio data here..."></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-birth-date">Birth date</label>
                                                                        <input type="text" class="form-control birthdate-picker picker__input" required="" placeholder="Birth date" id="account-birth-date" data-validation-required-message="This birthdate field is required" readonly="" aria-haspopup="true" aria-readonly="false" aria-owns="account-birth-date_root"><div class="picker" id="account-birth-date_root" aria-hidden="true"><div class="picker__holder" tabindex="-1"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__header"><div class="picker__month">March</div><div class="picker__year">2021</div><div class="picker__nav--prev" data-nav="-1" tabindex="0" role="button" aria-controls="account-birth-date_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" tabindex="0" role="button" aria-controls="account-birth-date_table" title="Next month"> </div></div><table class="picker__table" id="account-birth-date_table" role="grid" aria-controls="account-birth-date" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">Sun</th><th class="picker__weekday" scope="col" title="Monday">Mon</th><th class="picker__weekday" scope="col" title="Tuesday">Tue</th><th class="picker__weekday" scope="col" title="Wednesday">Wed</th><th class="picker__weekday" scope="col" title="Thursday">Thu</th><th class="picker__weekday" scope="col" title="Friday">Fri</th><th class="picker__weekday" scope="col" title="Saturday">Sat</th></tr></thead><tbody><tr><td><div class="picker__day picker__day--outfocus" data-pick="1614452400000" id="account-birth-date_1614452400000" tabindex="0" role="gridcell" aria-label="February, 28, 2021">28</div></td><td><div class="picker__day picker__day--infocus" data-pick="1614538800000" id="account-birth-date_1614538800000" tabindex="0" role="gridcell" aria-label="March, 1, 2021">1</div></td><td><div class="picker__day picker__day--infocus" data-pick="1614625200000" id="account-birth-date_1614625200000" tabindex="0" role="gridcell" aria-label="March, 2, 2021">2</div></td><td><div class="picker__day picker__day--infocus" data-pick="1614711600000" id="account-birth-date_1614711600000" tabindex="0" role="gridcell" aria-label="March, 3, 2021">3</div></td><td><div class="picker__day picker__day--infocus" data-pick="1614798000000" id="account-birth-date_1614798000000" tabindex="0" role="gridcell" aria-label="March, 4, 2021">4</div></td><td><div class="picker__day picker__day--infocus" data-pick="1614884400000" id="account-birth-date_1614884400000" tabindex="0" role="gridcell" aria-label="March, 5, 2021">5</div></td><td><div class="picker__day picker__day--infocus" data-pick="1614970800000" id="account-birth-date_1614970800000" tabindex="0" role="gridcell" aria-label="March, 6, 2021">6</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1615057200000" id="account-birth-date_1615057200000" tabindex="0" role="gridcell" aria-label="March, 7, 2021">7</div></td><td><div class="picker__day picker__day--infocus" data-pick="1615143600000" id="account-birth-date_1615143600000" tabindex="0" role="gridcell" aria-label="March, 8, 2021">8</div></td><td><div class="picker__day picker__day--infocus" data-pick="1615230000000" id="account-birth-date_1615230000000" tabindex="0" role="gridcell" aria-label="March, 9, 2021">9</div></td><td><div class="picker__day picker__day--infocus" data-pick="1615316400000" id="account-birth-date_1615316400000" tabindex="0" role="gridcell" aria-label="March, 10, 2021">10</div></td><td><div class="picker__day picker__day--infocus" data-pick="1615402800000" id="account-birth-date_1615402800000" tabindex="0" role="gridcell" aria-label="March, 11, 2021">11</div></td><td><div class="picker__day picker__day--infocus" data-pick="1615489200000" id="account-birth-date_1615489200000" tabindex="0" role="gridcell" aria-label="March, 12, 2021">12</div></td><td><div class="picker__day picker__day--infocus" data-pick="1615575600000" id="account-birth-date_1615575600000" tabindex="0" role="gridcell" aria-label="March, 13, 2021">13</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1615662000000" id="account-birth-date_1615662000000" tabindex="0" role="gridcell" aria-label="March, 14, 2021">14</div></td><td><div class="picker__day picker__day--infocus" data-pick="1615748400000" id="account-birth-date_1615748400000" tabindex="0" role="gridcell" aria-label="March, 15, 2021">15</div></td><td><div class="picker__day picker__day--infocus" data-pick="1615834800000" id="account-birth-date_1615834800000" tabindex="0" role="gridcell" aria-label="March, 16, 2021">16</div></td><td><div class="picker__day picker__day--infocus" data-pick="1615921200000" id="account-birth-date_1615921200000" tabindex="0" role="gridcell" aria-label="March, 17, 2021">17</div></td><td><div class="picker__day picker__day--infocus" data-pick="1616007600000" id="account-birth-date_1616007600000" tabindex="0" role="gridcell" aria-label="March, 18, 2021">18</div></td><td><div class="picker__day picker__day--infocus" data-pick="1616094000000" id="account-birth-date_1616094000000" tabindex="0" role="gridcell" aria-label="March, 19, 2021">19</div></td><td><div class="picker__day picker__day--infocus" data-pick="1616180400000" id="account-birth-date_1616180400000" tabindex="0" role="gridcell" aria-label="March, 20, 2021">20</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1616266800000" id="account-birth-date_1616266800000" tabindex="0" role="gridcell" aria-label="March, 21, 2021">21</div></td><td><div class="picker__day picker__day--infocus" data-pick="1616353200000" id="account-birth-date_1616353200000" tabindex="0" role="gridcell" aria-label="March, 22, 2021">22</div></td><td><div class="picker__day picker__day--infocus" data-pick="1616439600000" id="account-birth-date_1616439600000" tabindex="0" role="gridcell" aria-label="March, 23, 2021">23</div></td><td><div class="picker__day picker__day--infocus" data-pick="1616526000000" id="account-birth-date_1616526000000" tabindex="0" role="gridcell" aria-label="March, 24, 2021">24</div></td><td><div class="picker__day picker__day--infocus" data-pick="1616612400000" id="account-birth-date_1616612400000" tabindex="0" role="gridcell" aria-label="March, 25, 2021">25</div></td><td><div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted" data-pick="1616698800000" id="account-birth-date_1616698800000" tabindex="0" role="gridcell" aria-label="March, 26, 2021" aria-activedescendant="1616698800000">26</div></td><td><div class="picker__day picker__day--infocus" data-pick="1616785200000" id="account-birth-date_1616785200000" tabindex="0" role="gridcell" aria-label="March, 27, 2021">27</div></td></tr><tr><td><div class="picker__day picker__day--infocus" data-pick="1616871600000" id="account-birth-date_1616871600000" tabindex="0" role="gridcell" aria-label="March, 28, 2021">28</div></td><td><div class="picker__day picker__day--infocus" data-pick="1616958000000" id="account-birth-date_1616958000000" tabindex="0" role="gridcell" aria-label="March, 29, 2021">29</div></td><td><div class="picker__day picker__day--infocus" data-pick="1617044400000" id="account-birth-date_1617044400000" tabindex="0" role="gridcell" aria-label="March, 30, 2021">30</div></td><td><div class="picker__day picker__day--infocus" data-pick="1617130800000" id="account-birth-date_1617130800000" tabindex="0" role="gridcell" aria-label="March, 31, 2021">31</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1617217200000" id="account-birth-date_1617217200000" tabindex="0" role="gridcell" aria-label="April, 1, 2021">1</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1617303600000" id="account-birth-date_1617303600000" tabindex="0" role="gridcell" aria-label="April, 2, 2021">2</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1617390000000" id="account-birth-date_1617390000000" tabindex="0" role="gridcell" aria-label="April, 3, 2021">3</div></td></tr><tr><td><div class="picker__day picker__day--outfocus" data-pick="1617476400000" id="account-birth-date_1617476400000" tabindex="0" role="gridcell" aria-label="April, 4, 2021">4</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1617562800000" id="account-birth-date_1617562800000" tabindex="0" role="gridcell" aria-label="April, 5, 2021">5</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1617649200000" id="account-birth-date_1617649200000" tabindex="0" role="gridcell" aria-label="April, 6, 2021">6</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1617735600000" id="account-birth-date_1617735600000" tabindex="0" role="gridcell" aria-label="April, 7, 2021">7</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1617822000000" id="account-birth-date_1617822000000" tabindex="0" role="gridcell" aria-label="April, 8, 2021">8</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1617908400000" id="account-birth-date_1617908400000" tabindex="0" role="gridcell" aria-label="April, 9, 2021">9</div></td><td><div class="picker__day picker__day--outfocus" data-pick="1617994800000" id="account-birth-date_1617994800000" tabindex="0" role="gridcell" aria-label="April, 10, 2021">10</div></td></tr></tbody></table><div class="picker__footer"><button class="picker__button--today" type="button" data-pick="1616698800000" disabled="" aria-controls="account-birth-date">Today</button><button class="picker__button--clear" type="button" data-clear="1" disabled="" aria-controls="account-birth-date">Clear</button><button class="picker__button--close" type="button" data-close="true" disabled="" aria-controls="account-birth-date">Close</button></div></div></div></div></div></div>
                                                                    <div class="help-block"></div></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="accountSelect">Country</label>
                                                                    <select class="form-control" id="accountSelect">
                                                                        <option>USA</option>
                                                                        <option>India</option>
                                                                        <option>Canada</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="languageselect2">Languages</label>
                                                                    <select class="form-control select2-hidden-accessible" id="languageselect2" multiple="" data-select2-id="languageselect2" tabindex="-1" aria-hidden="true">
                                                                        <option value="English" selected="" data-select2-id="2">English</option>
                                                                        <option value="Spanish">Spanish</option>
                                                                        <option value="French">French</option>
                                                                        <option value="Russian">Russian</option>
                                                                        <option value="German">German</option>
                                                                        <option value="Arabic" selected="" data-select2-id="3">Arabic</option>
                                                                        <option value="Sanskrit">Sanskrit</option>
                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="English" data-select2-id="4"><span class="select2-selection__choice__remove" role="presentation">×</span>English</li><li class="select2-selection__choice" title="Arabic" data-select2-id="5"><span class="select2-selection__choice__remove" role="presentation">×</span>Arabic</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-phone">Phone</label>
                                                                        <input type="text" class="form-control" id="account-phone" required="" placeholder="Phone number" value="(+656) 254 2568" data-validation-required-message="This phone number field is required">
                                                                    <div class="help-block"></div></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="account-website">Website</label>
                                                                    <input type="text" class="form-control" id="account-website" placeholder="Website address">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="musicselect2">Favourite Music</label>
                                                                    <select class="form-control select2-hidden-accessible" id="musicselect2" multiple="" data-select2-id="musicselect2" tabindex="-1" aria-hidden="true">
                                                                        <option value="Rock">Rock</option>
                                                                        <option value="Jazz" selected="" data-select2-id="7">Jazz</option>
                                                                        <option value="Disco">Disco</option>
                                                                        <option value="Pop">Pop</option>
                                                                        <option value="Techno">Techno</option>
                                                                        <option value="Folk" selected="" data-select2-id="8">Folk</option>
                                                                        <option value="Hip hop">Hip hop</option>
                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="6" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="Jazz" data-select2-id="9"><span class="select2-selection__choice__remove" role="presentation">×</span>Jazz</li><li class="select2-selection__choice" title="Folk" data-select2-id="10"><span class="select2-selection__choice__remove" role="presentation">×</span>Folk</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="moviesselect2">Favourite movies</label>
                                                                    <select class="form-control select2-hidden-accessible" id="moviesselect2" multiple="" data-select2-id="moviesselect2" tabindex="-1" aria-hidden="true">
                                                                        <option value="The Dark Knight" selected="" data-select2-id="12">The Dark Knight
                                                                        </option>
                                                                        <option value="Harry Potter" selected="" data-select2-id="13">Harry Potter</option>
                                                                        <option value="Airplane!">Airplane!</option>
                                                                        <option value="Perl Harbour">Perl Harbour</option>
                                                                        <option value="Spider Man">Spider Man</option>
                                                                        <option value="Iron Man" selected="" data-select2-id="14">Iron Man</option>
                                                                        <option value="Avatar">Avatar</option>
                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="11" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="The Dark Knight
                                                                        " data-select2-id="15"><span class="select2-selection__choice__remove" role="presentation">×</span>The Dark Knight
                                                                        </li><li class="select2-selection__choice" title="Harry Potter" data-select2-id="16"><span class="select2-selection__choice__remove" role="presentation">×</span>Harry Potter</li><li class="select2-selection__choice" title="Iron Man" data-select2-id="17"><span class="select2-selection__choice__remove" role="presentation">×</span>Iron Man</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                                    changes</button>
                                                                <button type="reset" class="btn btn-light">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade " id="account-vertical-social" role="tabpanel" aria-labelledby="account-pill-social" aria-expanded="false">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="account-twitter">Twitter</label>
                                                                    <input type="text" id="account-twitter" class="form-control" placeholder="Add link" value="https://www.twitter.com">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="account-facebook">Facebook</label>
                                                                    <input type="text" id="account-facebook" class="form-control" placeholder="Add link">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="account-google">Google+</label>
                                                                    <input type="text" id="account-google" class="form-control" placeholder="Add link">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="account-linkedin">LinkedIn</label>
                                                                    <input type="text" id="account-linkedin" class="form-control" placeholder="Add link" value="https://www.linkedin.com">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="account-instagram">Instagram</label>
                                                                    <input type="text" id="account-instagram" class="form-control" placeholder="Add link">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="account-quora">Quora</label>
                                                                    <input type="text" id="account-quora" class="form-control" placeholder="Add link">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                                    changes</button>
                                                                <button type="reset" class="btn btn-light">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="account-vertical-connections" role="tabpanel" aria-labelledby="account-pill-connections" aria-expanded="false">
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <a href="javascript: void(0);" class="btn btn-info">Connect to
                                                                <strong>Twitter</strong></a>
                                                        </div>
                                                        <div class="col-12 mb-3">
                                                            <button class=" btn btn-sm btn-secondary float-right">edit</button>
                                                            <h6>You are connected to facebook.</h6>
                                                            <span>Johndoe@gmail.com</span>
                                                        </div>
                                                        <div class="col-12 mb-3">
                                                            <a href="javascript: void(0);" class="btn btn-danger">Connect to
                                                                <strong>Google</strong>
                                                            </a>
                                                        </div>
                                                        <div class="col-12 mb-2">
                                                            <button class=" btn btn-sm btn-secondary float-right">edit</button>
                                                            <h6>You are connected to Instagram.</h6>
                                                            <span>Johndoe@gmail.com</span>
                                                        </div>
                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                                changes</button>
                                                            <button type="reset" class="btn btn-light">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel" aria-labelledby="account-pill-notifications" aria-expanded="false">
                                                    <div class="row">
                                                        <h6 class="ml-1 mb-2">Activity</h6>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <input type="checkbox" class="switchery" data-size="sm" checked="" id="accountSwitch1" data-switchery="true" style="display: none;"><span class="switchery switchery-small switchery-default" style="background-color: rgb(55, 188, 155); border-color: rgb(55, 188, 155); box-shadow: rgb(55, 188, 155) 0px 0px 0px 0px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                                                <label class="ml-50" for="accountSwitch1">Email me when someone
                                                                    comments</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <input type="checkbox" class="switchery" data-size="sm" checked="" id="accountSwitch2" data-switchery="true" style="display: none;"><span class="switchery switchery-small switchery-default" style="background-color: rgb(55, 188, 155); border-color: rgb(55, 188, 155); box-shadow: rgb(55, 188, 155) 0px 0px 0px 0px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                                                <label for="accountSwitch2" class="ml-50">Email me when someone answers
                                                                    on</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <input type="checkbox" class="switchery" data-size="sm" id="accountSwitch3" data-switchery="true" style="display: none;"><span class="switchery switchery-small switchery-default" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                                                <label for="accountSwitch3" class="ml-50">Email me hen someone follows
                                                                    me</label>
                                                            </div>
                                                        </div>
                                                        <h6 class="ml-1 my-2">Application</h6>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <input type="checkbox" class="switchery" data-size="sm" checked="" id="accountSwitch4" data-switchery="true" style="display: none;"><span class="switchery switchery-small switchery-default" style="background-color: rgb(55, 188, 155); border-color: rgb(55, 188, 155); box-shadow: rgb(55, 188, 155) 0px 0px 0px 0px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                                                <label for="accountSwitch4" class="ml-50">News and announcements</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <input type="checkbox" class="switchery" data-size="sm" id="accountSwitch5" data-switchery="true" style="display: none;"><span class="switchery switchery-small switchery-default" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                                                <label for="accountSwitch5" class="ml-50">Weekly product updates</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <input type="checkbox" class="switchery" data-size="sm" checked="" id="accountSwitch6" data-switchery="true" style="display: none;"><span class="switchery switchery-small switchery-default" style="background-color: rgb(55, 188, 155); border-color: rgb(55, 188, 155); box-shadow: rgb(55, 188, 155) 0px 0px 0px 0px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                                                                <label for="accountSwitch6" class="ml-50">Weekly blog digest</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                                changes</button>
                                                            <button type="reset" class="btn btn-light">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
            <!-- account setting page end -->
                    </div>
                </div>
                </div>
            </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" ></script> -->

    <?php $this->load->view('admin/layout/footer') ?>