<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
        </div>

        <div class="navbar-brand">
            <a href="./"><img src="#" alt="Logo" class="img-responsive logo"></a>                
        </div>

        <div class="navbar-right">
            <form id="navbar-search" class="navbar-form search-form">
                <input value="" class="form-control" placeholder="Search here..." type="text">
                <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
            </form>                

            <div id="navbar-menu">
                <ul class="nav navbar-nav">


                    <li>
                        <a href="app-inbox.html" class="icon-menu d-none d-sm-block"><i class="icon-envelope"></i><span class="notification-dot"></span></a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="icon-bell"></i>
                            <span class="notification-dot"></span>
                        </a>

                    </li>

                    <li>
                        <a href="#" class="icon-menu"><i class="icon-login"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="../assets/images/u.png" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?php echo $_SESSION["name"]; ?></strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="doctor-profile.html"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="../post-and-get/oncologist-log-out.php"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
            <hr>
            <ul class="row list-unstyled">
                <li class="col-4">
                     <small>Email</small>
                    <h6><?php echo $_SESSION["email"]; ?></h6>
                </li>
                <li class="col-4">
                    <!--                                <small>Awards</small>
                                                    <h6>13</h6>-->
                </li>

            </ul>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>                

        </ul>

     <!-- Tab panes -->
        <div class="tab-content p-l-0 p-r-0">
            <div class="tab-pane active" id="menu">
                <nav class="sidebar-nav">
                    <ul class="main-menu metismenu">
                        <li><a href="./"><i class="icon-home"></i><span>Dashboard</span></a></li>
                        <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-user"></i><span>Patients</span> </a>
                            <ul aria-expanded="false" class="collapse in">
                                  
                                <li><a href="patients-all.php">All Patients</a></li>
                                <li><a href="patients-tested.php">Tested Patients</a></li>
                            
                            </ul>
                        </li>
                        <li><a href="#"><i class="icon-calendar"></i>Appointments</a></li>
                        <li><a href="#"><i class="icon-bubbles"></i>Chat App</a></li>
                        <li><a href="#"><i class="icon-user-follow"></i>Doctors</a></li>




                    </ul>
                </nav>
            </div>

        </div>           
    </div>
</div>