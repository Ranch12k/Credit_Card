<!--  DataTable Script  Start-->
   

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
<!--  DataTable Script  Start-->
<script>
  $(document).ready(function() {
    $("#registerForm").validate({
      rules: {
        name: {
          required: true,
          minlength: 6 
        },
        phone: {
          required: true,
          minlength: 10 
        },
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          minlength: 6
        }
      },
      messages: {
        name: {
          required: "Please enter your name", 
          minlength: "Your name must be at least 6 characters long"
        },
        phone: {
          required: "Please enter your name", 
          minlength: "Your name must be at least 10 characters long"
        },
        email: {
          required: "Please enter your email address",
          email: "Please enter a valid email address"
        },
        password: {
          required: "Please enter your password",
          minlength: "Your password must be at least 6 characters long"
        }
      },
      errorElement: "div",
      errorClass: "alert alert-danger",
      validClass: "is-valid",
      highlight: function(element) {
        $(element).addClass("is-invalid").removeClass("is-valid");
      },
      unhighlight: function(element) {
        $(element).removeClass("is-invalid").addClass("is-valid");
      }
    });
  });
</script>
<script>
  $(document).ready(function() {
    $("#AdminEditForm").validate({
      rules: {
        name: {
          required: true,
          minlength: 6 
        },
        phone: {
          required: true,
          minlength: 10 
        },
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          minlength: 6
        }
      },
      messages: {
        name: {
          required: "Please enter your name", 
          minlength: "Your name must be at least 6 characters long"
        },
        phone: {
          required: "Please enter your phone number", 
          minlength: "Your phone number must be at least 10 characters long"
        },
        email: {
          required: "Please enter your email address",
          email: "Please enter a valid email address"
        },
        password: {
          required: "Please enter your password",
          minlength: "Your password must be at least 6 characters long"
        }
      },
      errorElement: "div",
      errorClass: "alert alert-danger",
      validClass: "is-valid",
      highlight: function(element) {
        $(element).addClass("is-invalid").removeClass("is-valid");
      },
      unhighlight: function(element) {
        $(element).removeClass("is-invalid").addClass("is-valid");
      }
    });
  });
  $(document).ready(function(){

$("#kamal").click(function(){
  alert('kamal');
});
});
</script>


    <!-- Bootstrap core JavaScript-->
    <!-- <script src="{{url('Assets/vendor/jquery/jquery.min.js')}}"></script> -->
    <script src="{{url('Assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    

    
