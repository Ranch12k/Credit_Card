<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- DataTables CSS for Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

</head>
<body>

<div class="container py-5">
   <div class="row"> <div class="left col-10"><h1>Welcome <span class="text-primary">{{Auth::User()->name}}</span></h1></div> <div class="right col-2"><a class="btn btn-md btn-primary" href="{{route('User.logout')}}">Logout</a></div></div>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">datatable</h5>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped mt-5" id="myTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    

                    
                        @foreach($data as $user)
                            
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>
                            <!-- Edit button -->
                            <a href="{{ route('User.showuser', $user->id) }}" class="btn btn-warning btn-sm">View</a>
                            <a href="{{ route('User.Edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('User.hide', $user->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                                </tr>
                            
                        @endforeach

                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>

</body>
</html>
