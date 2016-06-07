<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-car"></i> <span>MypirpClass</span></a>
        </div>
        <div class="clearfix"></div>
        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="{{ URL::asset('superadmin/images/no-profile-pic.png') }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->    
        <br />
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Dashboard</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home</a></li>
                    <li><a><i class="fa fa-users"></i> Admin Users</a></li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Admin Activities</a></li>   
                    <li><a><i class="fa fa-desktop"></i> Profile</a></li>
                    <li><a><i class="fa fa-sign-out"></i> Logout</a></li>
                                     
                </ul>
            </div>          
        </div>
        <!-- /sidebar menu -->
    </div>
</div>