<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<!-- Modal -->
<div class="modal lg-modal fade" id="EditUser{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-light">
        <h5 class="modal-title" >Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('Admin.update', $user->id) }}" id="AdminEditForm{{ $user->id }}">
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
            <label for="exampleInputName">Name</label>
            <input type="text" class="form-control"  name="name" placeholder="Enter name" required value="{{ old('name', $user->name) }}">
            <small id="nameHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
          </div>

          <div class="form-group mb-3">
            <label for="exampleInputPhone">Phone</label>
            <input type="text" class="form-control"  name="phone" placeholder="Enter phone" required value="{{ old('phone', $user->phone) }}">
            <small id="PhoneHelp" class="form-text text-muted">We'll never share your phone with anyone else.</small>
          </div>

          <div class="form-group mb-3">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control"  name="email" placeholder="Enter email" required value="{{ old('email', $user->email) }}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>

          <!-- <div class="form-group mb-3">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control"  name="password" placeholder="Password" value="{{ old('password', $user->password) }}">
            <small id="passwordHelp" class="form-text text-muted">Leave blank to keep the current password.</small>
          </div> -->

          <div class="form-group form-check mb-3">
            <input type="checkbox" class="form-check-input"  name="remember">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
          </div>

        </form>
        <button type="submit" class="btn btn-custom" id="kamal">Submit</button>
      </div>
    </div>
  </div>
</div>

