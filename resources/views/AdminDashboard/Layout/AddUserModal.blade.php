<!-- Modal -->
<div class="modal lg-modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-light">
        <h5 class="modal-title" id="exampleModalLabel">ADD USER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('Admin.Registration') }}" id="registerForm">
          @csrf
          <!-- Display Validation Errors -->
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <!-- Display Custom Authentication Error -->
          @if(session('error'))
            <div class="alert alert-danger">
              {{ session('error') }}
            </div>
          @endif

          <div class="form-group mb-3">
            <label for="exampleInputName">Name </label>
            <input type="text" class="form-control" id="exampleInputName" name="name" placeholder="Enter name" required value="{{ old('name') }}">
            <small id="nameHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
          </div>
          <div class="form-group mb-3">
            <label for="exampleInputPhone">Phone </label>
            <input type="text" class="form-control" id="exampleInputPhone" name="phone" placeholder="Enter phone" required value="{{ old('phone') }}">
            <small id="PhoneHelp" class="form-text text-muted">We'll never share your phone with anyone else.</small>
          </div>
          <div class="form-group mb-3">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" required value="{{ old('email') }}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group mb-3">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
          </div>
          <div class="form-group form-check mb-3">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
          </div>
          <button type="submit" class="btn btn-custom">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>


