<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$title}}</title>

    <!-- Custom fonts for this template-->
    <link href="{{url('public/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('public/css/sb-admin-2.min.css')}}" rel="stylesheet">

    


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('frotend.admin.gallery')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">IIP ADMIN </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('frotend.admin.gallery')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>IIP Project</span></a>
            </li>

           


          

           

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#submenu-3"
                aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-table"></i>
                    <span>GALLERY</span></a>
                    <div class="collapse submenu" id="submenu-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('frotend.admin.gallery')}}" >View</a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href="{{route('frotend.admin.galleryadd')}}" >Add</a>
                        </li>

                    </ul>
                </div>
            </li>


             <!-- Nav Item About Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#submenu-5"
                aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-table"></i>
                    <span>About</span></a>
                    <div class="collapse submenu" id="submenu-5">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.frotend.aboutview')}}" >View Page</a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.frotend.aboutadd')}}" >About Add</a>
                        </li>

                    </ul>
                </div>
            </li>


              <!-- Nav Item News Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#submenu-6"
                aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-table"></i>
                    <span>News</span></a>
                    <div class="collapse submenu" id="submenu-6">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('frotend.news.view')}}" >News View </a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href="{{route('frotend.news')}}" >News Add</a>
                        </li>

                    </ul>
                </div>
            </li>



                <!-- Nav Item Course Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#submenu-7"
                aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Course</span></a>
                    <div class="collapse submenu" id="submenu-7">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('frotend.admin.add.course.view')}}" >Course View </a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href="{{route('frotend.admin.add.course')}}" >Course Add</a>
                        </li>

                    </ul>
                </div>
            </li>

<!-- Nav Item Contact Tables -->
             <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#submenu-8"
                aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Contact</span></a>
                    <div class="collapse submenu" id="submenu-8">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.contact.view')}}" >Contact Update </a>
                        </li>

                        

                    </ul>
                </div>
            </li>


              <!-- Nav Item Country Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#submenu-9"
                aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Country</span></a>
                    <div class="collapse submenu" id="submenu-9">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.country.view')}}" >Country View </a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.country')}}" >Country Add</a>
                        </li>

                    </ul>
                </div>
            </li>


            
              <!-- Nav Item Country Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#submenu-11"
                aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Enquiry</span></a>
                    <div class="collapse submenu" id="submenu-11">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('enquiry.view')}}" >Enquiry View </a>
                        </li>

                      

                    </ul>
                </div>
            </li>



              <!-- Nav Item Country Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#submenu-10"
                aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-table"></i>
                    <span>State</span></a>
                    <div class="collapse submenu" id="submenu-10">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.state.view')}}" >State View </a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.state.add')}}" >State Add</a>
                        </li>

                    </ul>
                </div>
            </li>



           

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

          

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                        
                    </form>

                   
                    <div>
                       <a href="{{route('admin.fortend.user',['id' => encrypt(session('id'))])}}"> <button class="btn btn-info"> {{session('name')}}  </button></a>&nbsp;&nbsp;
                    </div> 

                   <div> 
                    <a href="{{route('admin.fortend.logout')}}">
                        <button type="button"  class="btn btn-primary"> LogOut</button>
                    </a>
                </div>
                   
                  
                </nav>
                <!-- End of Topbar -->

               