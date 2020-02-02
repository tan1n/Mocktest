<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css"
      integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous">

<style>

    body { background:#ffffff;}


    .page-header {background:#ccc;margin:0;}

    .profile-head { width:100%;background-color: rgb(65, 105, 255);float: left;padding: 15px 5px;border-radius: 30px;}
    .profile-head img { height:180px; width:180px; margin:0 auto; border:5px solid #fff; border-radius:5px;}
    .profile-head h5 {width: 100%;padding:5px 5px 0px 5px;text-align:justify;font-weight: bold;color: #fff;font-size: 25px;text-transform:capitalize;
        margin-bottom: 0;}
    .profile-head p {width: 100%;text-align: justify;padding:0px 5px 5px 5px;color: #fff;font-size:17px;text-transform:capitalize;margin:0;}
    .profile-head a {width: 100%;text-align: center;padding: 10px 5px;color: #fff;font-size: 15px;text-transform: capitalize;}

    .profile-head ul { list-style:none;padding: 0;}
    .profile-head ul li { display:block; color:#ffffff;padding:5px;font-weight: 400;font-size: 15px;}
    .profile-head ul li:hover span { color:rgb(0, 4, 51);}
    .profile-head ul li span { color:#ffffff;padding-right: 10px;}
    .profile-head ul li a { color:#ffffff;}
    .profile-head h6 {width: 100%;text-align: center;font-weight: 100;color: #fff;font-size: 15px;text-transform: uppercase;margin-bottom: 0;}


    .nav-tabs {margin: 0;padding: 0;border: 0;}
    .nav-tabs > li > a {background: #DADADA;border-radius: 0;
        box-shadow: inset 0 -8px 7px -9px rgba(0,0,0,.4),-2px -2px 5px -2px rgba(0,0,0,.4);}
    .nav-tabs > li.active > a,
    .nav-tabs > li.active > a:hover {background: #F5F5F5;
        box-shadow: inset 0 0 0 0 rgba(0,0,0,.4),-2px -3px 5px -2px rgba(0,0,0,.4);}
    .tab-pane {background: #ffffff;box-shadow: 0 0 4px rgba(0,0,0,.4);border-radius: 0;text-align: center;padding: 10px;}
    .tab-content>.active {margin-top:50px;/*width:100% !important;*/}

    /* edit profile css*/

    .hve-pro {    background-color:rgb(255, 102, 0);padding: 5px; width:100%; height:auto;float:left;}
    .hve-pro p {float: left;color:#fff;font-size: 15px;text-transform: capitalize;padding: 5px 20px;font-family: 'Noto Sans', sans-serif;}
    h2.register { padding:10px 25px; text-transform:capitalize;font-size: 25px;color: rgb(255, 102, 0);}
    .fom-main { overflow:hidden;}

    legend {font-family: 'Bitter', serif;color:#ff3200;border-bottom:0px solid;}
    .main_form {background-color: #;}
    label.control-label {font-family: 'Noto Sans', sans-serif;font-weight: 100; margin-bottom:5px !important;
        text-align:left !important; text-transform:uppercase; color:#798288;}
    .submit-button {color: #fff;background-color:rgb(255, 102, 0);width:190px;border: 0px solid;border-radius: 0px; transition:all ease 0.3s;margin: 5px;
        float:left;}
    .submit-button:hover, .submit-button:focus {color: #fff;background-color:rgb(0, 4, 51);}
    .edit-button {color: #fff;background-color:rgb(255, 102, 0);width:190px;border: 0px solid;border-radius: 0px; transition:all ease 0.3s;margin: 5px;
        float:left;}
    .edit-button:hover, .submit-button:focus {color: #fff;background-color:rgb(0, 4, 51);}
    .hint_icon {color:#ff3200;}
    .form-control:focus {border-color: #ff3200;}
    select.selectpicker { color:#99999c;}
    select.selectpicker option { color:#000 !important;}
    select.selectpicker option:first-child { color:#99999c;}
    .input-group { width:100%;}
    .uplod-picture {width: 100%; background-color:#;color: #fff; padding:20px 10px;margin-bottom:10px;}
    .uplod-file {position: relative;overflow: hidden;color: #fff;background-color: rgb(0, 4, 51);border: 0px solid #a02e09;border-radius: 0px;
        transition:all ease 0.3s;margin: 5px;}
    .uplod-file input[type=file] {position: absolute;top: 0;right: 0;min-width: 100%;min-height: 100%;font-size: 100px;text-align: right;
        filter: alpha(opacity=0);opacity: 0;outline: none;background: white;cursor: inherit;display: block;}
    .uplod-file:hover, .uplod-file:focus {color: #fff;background-color:rgb(255, 102, 0);}
    h4.pro-title { font-size:24px; color:rgba(0, 4, 51, 0.96); text-transform:capitalize; text-align:justify;padding: 10px 15px;font-family: 'Bitter', serif;}
    .bio-table { width:75%;border:0px solid;}
    .bio-table td {text-transform: capitalize;text-align: left;font-size: 15px;}
    .bio-table>tbody>tr>td { border:0px solid;text-transform: capitalize;color: rgb(0, 4, 51); font-size:15px;}
    .responsiv-table { border:0px solid;}
    .nav-menu li a {margin: 5px 5px 5px 5px;position: relative;display: block;padding: 10px 50px;border: 0px solid !important;box-shadow: none !important;
        background-color: rgb(0, 4, 51) !important;color: #fff !important;    white-space: nowrap;}
    .nav-menu li.active a {background-color: rgb(255, 102, 0) !important;}
    .stick{position:fixed !important;top:0;z-index:999 !important;width:100%;background:#ffffff !important;height:auto; transition:all ease 0.8s;
        -webkit-box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 2px 7px 0px rgba(0,0,0,0.75);}
    .stick a { line-height:20px !important;}
    .stick img { margin:0 !important;}



    @media all and (max-width:768px){

        .navbar-inverse .drop_menu {display: block;visibility: visible;width: 110px;height:1000px;padding:0px 20px;position: absolute;right:-100px;
            transition:all ease 0.5s;border-top: 0px solid;cursor: pointer;}
        .navbar-brand {padding: 0;margin-left: 10px !important;}
        a.menu { display:block !important;margin: 9px 2px;float: right;color: rgba(255, 102, 0, 0.98); border:0px solid; background:none; font-size:30px;width:27px;position: relative;
            cursor:pointer;}
        a.menu:hover, a.menu:focus { color:rgb(0, 4, 51);}

        .drop_menu1 { display: block;visibility: visible;width:250px;height:1000px;padding:5px 30px;position: absolute;right:0 !important;
            background-color:#ffffff !important; transition:all ease 0.5s;border-top: 0px solid;cursor: pointer;}

    }

    @media all and (max-width:430px){
        .profile-head ul li {font-size: 12px !important;}
        .nav-menu li { width:50%;}
        .bio-table>tbody>tr>td {font-size: 13px;}

    }

    /***
    Bootstrap Line Tabs by @keenthemes
    A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
    Licensed under MIT
    ***/

    /* Tabs panel */
    .tabbable-panel {
        border:1px solid #eee;
        padding: 10px;
    }

    /* Default mode */
    .tabbable-line > .nav-tabs {
        border: none;
        margin: 0px;
    }
    .tabbable-line > .nav-tabs > li {
        margin-right: 2px;
    }
    .tabbable-line > .nav-tabs > li > a {
        border: 0;
        margin-right: 0;
        color: #737373;
    }
    .tabbable-line > .nav-tabs > li > a > i {
        color: #a6a6a6;
    }
    .tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {
        border-bottom: 4px solid #fbcdcf;
    }
    .tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {
        border: 0;
        background: none !important;
        color: #333333;
    }
    .tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {
        color: #a6a6a6;
    }
    .tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
        margin-top: 0px;
    }
    .tabbable-line > .nav-tabs > li.active {
        border-bottom: 4px solid #f3565d;
        position: relative;
    }
    .tabbable-line > .nav-tabs > li.active > a {
        border: 0 !important;
        color: #333333;
    }
    .tabbable-line > .nav-tabs > li.active > a > i {
        color: #404040;
    }
    .tabbable-line > .tab-content {
        margin-top: -3px;
        background-color: #fff;
        border: 0;
        border-top: 1px solid #eee;
        padding: 15px 0;
    }
    .portlet .tabbable-line > .tab-content {
        padding-bottom: 0;
    }

    /* Below tabs mode */

    .tabbable-line.tabs-below > .nav-tabs > li {
        border-top: 4px solid transparent;
    }
    .tabbable-line.tabs-below > .nav-tabs > li > a {
        margin-top: 0;
    }
    .tabbable-line.tabs-below > .nav-tabs > li:hover {
        border-bottom: 0;
        border-top: 4px solid #fbcdcf;
    }
    .tabbable-line.tabs-below > .nav-tabs > li.active {
        margin-bottom: -2px;
        border-bottom: 0;
        border-top: 4px solid #f3565d;
    }
    .tabbable-line.tabs-below > .tab-content {
        margin-top: -10px;
        border-top: 0;
        border-bottom: 1px solid #eee;
        padding-bottom: 15px;
    }

    .menu_title {
        padding: 15px 10px;
        border-bottom: 1px solid #eee;
        margin: 0 5px;
    }
</style>


<div class="container" style="margin-top: 30px;">
    <div class="profile-head">
        <!--col-md-4 col-sm-4 col-xs-12 close-->
        <div class="col-md- col-sm-4 col-xs-12">
            <img src="http://www.newlifefamilychiropractic.net/wp-content/uploads/2014/07/300x300.gif" class="img-responsive"/>
            <h6>Vijayan Karuppaiah</h6>
            <div class="container"style="margin-left: 90px;">
                <span class="btn btn-default uplod-file">
                        Upload Photo <input type="file" />
                </span>
            </div>
        </div>
        <!--col-md-4 col-sm-4 col-xs-12 close-->

        <div class="col-md-5 col-sm-5 col-xs-12">
            <h5>Vijayan Karuppaiah</h5>
            <p>Content Designer / Content Engineer </p>
            <ul>
                <li><span class="glyphicon glyphicon-briefcase"></span> 9 years</li>
                <li><span class="glyphicon glyphicon-map-marker"></span> India</li>
                <li><span class="glyphicon glyphicon-home"></span> Chamiers Towers (East Wing), 5<sup>th</sup> Floor, No: 37,<br/>    Chamiers Road, Teynampet, Chennai-600018 </li>
                <li><span class="glyphicon glyphicon-phone"></span> <a href="#" title="call">(+91) 9840550049</a></li>
                <li><span class="glyphicon glyphicon-envelope"></span><a href="#" title="mail">vijayan@rsicms.com</a></li>
            </ul>
        </div>
    </div>
    <!--profile-head close-->
</div>
<!--container close-->


<br/>
<br/>

<div class="container">
    <div class="col-sm-8">
        <div data-spy="scroll" class="tabbable-panel">
            <div class="tabbable-line">
                <ul class="nav nav-tabs ">
                    <li class="active">
                        <a href="#tab_default_1" data-toggle="tab">Personal Info </a>
                    </li>
                    <li>
                        <a href="#tab_default_2" data-toggle="tab">Education</a>
                    </li>
                    <li>
                        <a href="#tab_default_3" data-toggle="tab">Work Experience</a>
                    </li>
                    <li>
                        <a href="#tab_default_4" data-toggle="tab">Contact Details</a>
                    </li>
                    <li>
                        <a href="#tab_default_5" data-toggle="tab">Address Details</a>
                    </li>
                    <li>
                        <a href="#tab_default_6" data-toggle="tab">Resume</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">
                        <div class="well well-sm">
                            <h4>PERSONAL DATA</h4>
                        </div>
                        <p align="right">
                            <button type="button" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-edit"></span> Edit</button>
                        </p>
                        <table class="table bio-table">
                            <tbody>
                            <tr>
                                <td>Firstname</td>
                                <td>: Vijayan</td>
                            </tr>
                            <tr>
                                <td>Lastname</td>
                                <td>: Karuppaiah</td>
                            </tr>
                            <tr>
                                <td>Date of Birthday</td>
                                <td>: 6 March 1980</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>: Male</td>
                            </tr>
                            <tr>
                                <td>Spouse </td>
                                <td>: Vijayalakshmi</td>
                            </tr>
                            <tr>
                                <td>Name of Children</td>
                                <td>: Darshan</td>
                            </tr>
                            <tr>
                                <td>Father's Name</td>
                                <td>: Karuppaiah</td>
                            </tr>
                            <tr>
                                <td>Mother's Name</td>
                                <td>: Palani Mayil</td>
                            </tr>
                            <tr>
                                <td>Citizenship</td>
                                <td>: Indian</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane" id="tab_default_2">
                        <div class="well well-sm">
                            <h4>EDUCATIONAL BACKGROUND</h4>
                        </div>
                        <p align="right">
                            <button type="button" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-edit"></span> Edit</button>
                        </p>
                        <table class="table bio-table">
                            <tbody>
                            <tr>
                                <td>Elementary School</td>
                                <td>: </td>
                                <td>Year Graduated</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>High School</td>
                                <td>: </td>
                                <td>Year Graduated</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Under Graduate</td>
                                <td>: </td>
                                <td>Year Graduated</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Post Graduate</td>
                                <td>: </td>
                                <td>Year Graduated</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Master of Philosophy (MPhil)</td>
                                <td>: </td>
                                <td>Year Graduated </td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Doctor of Philosophy (PhD)</td>
                                <td>: </td>
                                <td>Year Graduated</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Bachelor of Engineering (B.Eng)<br/>Bachelor of Technology (B.Tech)</td>
                                <td>: </td>
                                <td>Year Graduated</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Master of Engineering (M.Eng)<br/>Master of Technology (M.Tech)</td>
                                <td>: </td>
                                <td>Year Graduated</td>
                                <td>: </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane" id="tab_default_3">
                        <div class="well well-sm">
                            <h4>EMPLOYMENT RECORD</h4>
                        </div>
                        <p align="right">
                            <button type="button" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-edit"></span> Edit</button>
                        </p>
                        <table class="table bio-table">
                            <tbody>
                            <tr>
                                <td>Date</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Position</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Principle Activites</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Employer</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Type of Activites</td>
                                <td>: </td>
                            </tr>
                            </tbody>
                        </table>

                        <br/>

                        <table class="table bio-table">
                            <tbody>
                            <tr>
                                <td>Date</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Position</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Principle Activites</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Employer</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Type of Activites</td>
                                <td>: </td>
                            </tr>
                            </tbody>
                        </table>

                        <br/>

                        <table class="table bio-table">
                            <tbody>
                            <tr>
                                <td>Date</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Position</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Principle Activites</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Employer</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Type of Activites</td>
                                <td>: </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane" id="tab_default_4">
                        <div class="well well-sm">
                            <h4>OFFICIAL AND PERSONAL CONTACTS</h4>
                        </div>
                        <p align="right">
                            <button type="button" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-edit"></span> Edit</button>
                        </p>
                        <table class="table bio-table">
                            <tbody>
                            <tr>
                                <td>Office Telephone Number</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Office Mobile Phone</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Official Email Address</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Personal Mobile Phone</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Personal Email Address </td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Home Phone</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Facebook Account</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Twitter Account</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Skype Account</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>LinkedIn Account</td>
                                <td>: </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="tab-pane" id="tab_default_5">
                        <div class="well well-sm">
                            <h4>ADDRESS DETAILS</h4>
                        </div>
                        <p align="right">
                            <button type="button" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-edit"></span> Edit</button>
                        </p>
                        <table class="table bio-table">
                            <thead>
                            <tr>
                                <th colspan="2">Present Residential Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>   Line 1</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Line 2</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   City</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   State</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Country</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Pin code</td>
                                <td>: </td>
                            </tr>
                            </tbody>
                        </table>

                        <br/>

                        <table class="table bio-table">
                            <thead>
                            <tr>
                                <th colspan="2">Permanent Residential Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>   Plot No / Door No / Part No / Block No</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Street Name</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   City</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   State</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Country</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Pin code</td>
                                <td>: </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>

                    <div class="tab-pane" id="tab_default_6">
                        <div class="well well-sm">
                            <h4>ADDRESS DETAILS</h4>
                        </div>
                        <p align="right">
                            <button type="button" class="btn btn-default btn-sm">
                                <span class="glyphicon glyphicon-edit"></span> Edit</button>
                        </p>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <form class="form-horizontal" role="form">
                                    <fieldset>
                                        <!-- Form Name -->
                                        <legend>Address Details</legend>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="textinput">Line 1</label>
                                            <div class="col-sm-10">
                                                <input type="text" placeholder="Address Line 1" class="form-control">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="textinput">Line 2</label>
                                            <div class="col-sm-10">
                                                <input type="text" placeholder="Address Line 2" class="form-control">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="textinput">City</label>
                                            <div class="col-sm-10">
                                                <input type="text" placeholder="City" class="form-control">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="textinput">State</label>
                                            <div class="col-sm-4">
                                                <input type="text" placeholder="State" class="form-control">
                                            </div>
                                            <label class="col-sm-2 control-label" for="textinput">Postcode</label>
                                            <div class="col-sm-4">
                                                <input type="text" placeholder="Post Code" class="form-control">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="textinput">Country</label>
                                            <div class="col-sm-10">
                                                <input type="text" placeholder="Country" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <div class="pull-right">
                                                    <button type="submit" class="btn btn-default">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </div>

                                    </fieldset>
                                </form>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->

                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="menu_title">
                <b>Employee Info</b>
                <p>RSI Content Solutions India Pvt. Ltd</p>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="email">Name:</label>
                            <p>Vijayan K. </p>
                        </div>
                        <div class="form-group">
                            <label for="email">Emp ID:</label>
                            <p>1020</p>
                        </div>
                        <div class="form-group">
                            <label for="email">Data of Joining:</label>
                            <p>09-05-2016</p>
                        </div>
                        <div class="form-group">
                            <label for="email">Blood Group:</label>
                            <p>O+ve</p>
                        </div>
                        <div class="form-group">
                            <label for="email">In Case of emergency please contact:</label>
                            <p>9500028421</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>