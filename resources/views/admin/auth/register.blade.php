
@if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
        @endif
<div class="container mt-5">
    <div class="row justify-content-center">

        @if ($errors->any())
                <ul>
                    {!! implode('',$errors->all('<li>:message</li>')) !!}
                </ul>

        @endif
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4>Register</h4>
          </div>
          <div class="card-body">
            <form action="{{ route('store') }}" method="post">
              @csrf
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
