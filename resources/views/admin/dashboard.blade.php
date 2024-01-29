<!-- resources/views/insta_requests.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insta Requests</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <h2>Insta Requests</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Transaction ID</th>
                        <th>Package</th>
                        <th>Username</th>
                        <th>URL</th>
                        <th>UserType</th>
                        <th>Request For</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($insta_requests as $request)
                    <tr>
                        <td>{{ $request->id }}</td>
                        <td>{{ $request->transaction_id }}</td>
                        <td>{{ $request->package }}</td>
                        <td>{{ $request->username }}</td>
                        <td>{{ $request->url }}</td>
                        <td>{{ $request->user_type }}</td>
                        <td>{{ $request->request_for }}</td>
                        <td>{{ $request->status }}</td>
                        <td>
                            <form action="{{ route('send.email') }}" method="post">
                                @csrf
                                <input type="hidden" name="email" value="{{ $request->email }}">
                                <input type="hidden" name="package" value="{{ $request->package}}">
                                <input type="hidden" name="username" value="{{ $request->username}}">
                                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i></button>
                            </form>
                            <form action="{{ route('send.email') }}" method="post">
                                @csrf
                                <input type="hidden" name="email" value="{{ $request->email }}">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i></button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
