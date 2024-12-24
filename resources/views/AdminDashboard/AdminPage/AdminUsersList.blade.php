<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>
<!-- Jquery cdn  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- j qeury form validation cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
   <!-- Custom fonts for this template-->
    <link href="{{url('Assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('Assets/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <!-- DataTable Css Section  Start-->
      <!-- DataTables CSS for Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <!-- DataTable Css Section End -->

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('AdminDashboard.Layout.AdminSidebar')


        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                 @include('AdminDashboard.Layout.AdminTopbar')
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div> -->
                    <!-- Content Row -->
                    <!-- DataTable Section Start -->
            <div class="container-fluid">
            <div class="row"> 
                
            <div class="left col-12"></div> </div>
            <div class="card">
                    <div class="card-header">
                        
                        <div class="col-12 d-flex "><h5 class="card-title">datatable</h5></div>
                        
                        <!--  AddUser Modal Code Start-->
                              @include('AdminDashboard.Layout.AddUserModal')

                        <!--  AddUser Modal Code End-->
                    </div>
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            ADD USER
                        </button>
                    </div>
                        <div class="table-responsive">
                        <table class="table table-striped mt-2" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(Auth::user()->role=='superadmin')
                                   
                                    @foreach($data as $user)

                                         @if($user->status=='show')
                                                <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->phone }}</td>
                                                    <td>
                                                        <!-- Edit button -->
                                                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditUser{{ $user->id }}">
                                                            Edit
                                                        </button> -->
                                                        <!-- Edit Button -->
                                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ShowUser{{ $user->id }}">View</button>
                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#EditUser{{ $user->id }}">Edit </button>
                                                        <a href="{{ route('User.hide', $user->id) }}" class="btn btn-danger btn-sm">Delete</a>


                                                        <!-- <a href="{{ route('User.showuser', $user->id) }}" class="btn btn-warning btn-sm">View</a>
                                                        <a href="{{ route('User.Edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                        <a href="{{ route('User.hide', $user->id) }}" class="btn btn-danger btn-sm">Delete</a> -->
                                                    </td>
                                                </tr>
                                                @include('AdminDashboard.Layout.EditUserModal')
                                                @include('AdminDashboard.Layout.ShowProfile')
                                            @endif

                                     @endforeach

                                @elseif(Auth::user()->role=='admin')

                                      @foreach($data as $user)
                                            @if($user->role=='customer')
                                            <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->phone }}</td>
                                                    <td>
                                                        <!-- Edit button -->
                                                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditUser{{ $user->id }}">
                                                            Edit
                                                        </button> -->
                                                        <!-- Edit Button -->
                                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ShowUser{{ $user->id }}">View</button>
                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#EditUser{{ $user->id }}">Edit </button>
                                                        <a href="{{ route('User.hide', $user->id) }}" class="btn btn-danger btn-sm">Delete</a>


                                                        <!-- <a href="{{ route('User.showuser', $user->id) }}" class="btn btn-warning btn-sm">View</a>
                                                        <a href="{{ route('User.Edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                        <a href="{{ route('User.hide', $user->id) }}" class="btn btn-danger btn-sm">Delete</a> -->
                                                    </td>
                                                </tr>
                                                @include('AdminDashboard.Layout.EditUserModal')
                                                @include('AdminDashboard.Layout.ShowProfile')
                                            @elseif($user->role=='admin')
                                            <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->phone }}</td>
                                                    <td>
                                                        <!-- Edit button -->
                                                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditUser{{ $user->id }}">
                                                            Edit
                                                        </button> -->
                                                        <!-- Edit Button -->
                                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ShowUser{{ $user->id }}">View</button>
                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#EditUser{{ $user->id }}">Edit </button>
                                                        <a href="{{ route('User.hide', $user->id) }}" class="btn btn-danger btn-sm">Delete</a>


                                                        <!-- <a href="{{ route('User.showuser', $user->id) }}" class="btn btn-warning btn-sm">View</a>
                                                        <a href="{{ route('User.Edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                        <a href="{{ route('User.hide', $user->id) }}" class="btn btn-danger btn-sm">Delete</a> -->
                                                    </td>
                                                </tr>
                                                @include('AdminDashboard.Layout.EditUserModal')
                                                @include('AdminDashboard.Layout.ShowProfile')
                                            @endif
                                            
                                        @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
             </div>
                     <!-- Datatabel Section End -->
                   
            </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('AdminDashboard.Layout.LogutModal')

    @include('AdminDashboard.Layout.AdminDScript')
 
</body>

</html>