<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>
 
      <!-- Custom fonts for this template-->
      <link href="{{url('Assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('Assets/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <!-- DataTable Css Section  Start-->
      <!-- DataTables CSS for Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <!-- DataTable Css Section End -->
 <!-- Include jQuery and jQuery Validation Plugin -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
   

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
                
            <div class="left col-12">
                <h1>Welcome 
                    @if(Auth::user()->role=='admin')
                    <span class="text-primary">Admin :: {{Auth::user()->name}}</span>
                    @elseif(Auth::user()->role=='superadmin')
                    <span class="text-primary">SuperAdmin :: {{Auth::user()->name}}</span>
                    @endif
                </h1>
            </div> 
            </div>

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
                            <table class="table table-striped " id="myTable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <!-- <th>Father's Name</th>
                                        <th>Address</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Pincode</th>
                                        <th>Occupation</th>
                                        <th>Pan Card</th>
                                        <th>Aadhar Card</th> -->
                                        <th>Apply Date</th>
                                        <th>Status</th>
                                        <th>Select Status</th>
                                        <th>Action </th>

                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    @foreach($data as $user)

                                                <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->phone }}</td>
                                                    <!-- <td>{{ $user->fname }}</td>
                                                    <td>{{ $user->address }}</td>
                                                    <td>{{ $user->state }}</td>
                                                    <td>{{ $user->city }}</td>
                                                    <td>{{ $user->pincode }}</td>
                                                    <td>{{ $user->occupation }}</td>
                                                    <td>{{ $user->pancard }}</td>
                                                    <td>{{ $user->aadharcard }}</td> -->
                                                    <td>{{ $user->created_at }}</td>
                                                    <td>{{ $user->status }}</td>
                                                    <td>
                                                        <!-- <a href="" class="btn btn-danger btn-sm px-4">Delete</a> -->
                                                        
                                                         <form action="{{ route('Admin.ApproveCCard', $user->id) }}"  method="post">
                                                            @csrf 
                                                            <select class="btn btn-success" name="status" id="status"  onchange="this.form.submit()">
                                                                <option value="Aproved" Disable>{{ $user->status }}</option>
                                                                <option value="Aproved">Approve</option>
                                                                <option value="Pending">Pending</option>
                                                                <option value="Rejected">Reject</option>
                                                            </select>
                                                     
                                                        </form>

                                                    
                                                    </td>
                                                    <td>
                                                        <!-- Edit Button -->
                                                        <button type="button" class="btn btn-warning btn-sm px-4" data-toggle="modal" data-target="#ShowUser{{ $user->id }}">View</button>
                                                        <!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#EditUser{{ $user->id }}">Edit </button>
                                                        <a href="{{ route('User.hide', $user->id) }}" class="btn btn-danger btn-sm">Delete</a> -->
                                                    </td>
                                                </tr>
                                                @include('AdminDashboard.Layout.EditUserModal')
                                                @include('AdminDashboard.Layout.ShowProfile')

                                     @endforeach

                               
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
                        <!-- <span>Copyright &copy; Your Website 2021</span> -->
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