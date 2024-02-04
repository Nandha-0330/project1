<!-- resources/views/admin_dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin_styles.css') }}">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">Instagram Requests <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('facebook_requests') }}">Facebook Requests</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('youtube_requests') }}">YouTube Requests</a>
            </li>

        </ul>
    </div>
</nav>

<div class="container mt-3">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Content for Instagram Requests -->
    <div class="dashboard-content">
        <h2>Facebook Requests</h2>
        <div class="table-responsive">
        <style>

            /* public/css/admin_styles.css */





/* Add any additional styles or adjustments as needed */

    .table-container {
        max-height: 5%;

    }

    .actions-buttons {
        display: flex;
        gap: 10px;
    }

    .approve-btn {
        background-color: #28a745;
        color: #fff;
    }

    .reject-btn {
        background-color: #dc3545;
        color: #fff;
    }

    .btn-container {
        display: flex;
        gap: 10px;
    }

    .status-label {
        font-weight: bold;
        text-transform: capitalize;
    }

    .status-approved {
        color: #28a745;
    }

    .status-rejected {
        color: #dc3545;
    }

    .thumbnail-img {
        max-width: 50px;
        height: auto;
    }
    .image-popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 80%;
        max-height: 80%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }

    .thumbnail-img {
        max-width: 100%;
        height: auto;
    }

    .popup-close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        font-size: 24px;
    }
</style>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Transaction ID</th>
            <th>Package</th>
            <th>Username</th>
            <th>URL</th>
            <th>Email</th>
            <th>Request For</th>
            <th>image</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody class="table-container">
    @foreach($fb_requests as $request)
            <td>{{ $request->id }}</td>
            <td>{{ $request->transaction_id }}</td>
            <td>{{ $request->package }}</td>
            <td>{{ $request->username }}</td>
            <td><a href="{{ $request->url }}" target="_blank">{{ $request->url }}</a></td>
            <td>{{ $request->email }}</td>
            <td>{{ $request->request_for }}</td>
            <td>
                <img src="{{ asset('storage/' . $request->image) }}" alt="Thumbnail" class="thumbnail-img" onclick="showPopup('{{ asset('storage/' . $request->image) }}')">
                <div id="imagePopup" class="image-popup">
                    <img src="" alt="Thumbnail" class="thumbnail-img" id="popupImage">
                    <div class="popup-close">
                        <span onclick="closePopup()">&times;</span>
                    </div>
                </div>
            </td>
            <td class="status-label {{ $request->status === 'approved' ? 'status-approved' : 'status-rejected' }}">{{ $request->status }}</td>
            <td>
                <div class="btn-container">
                @if($request->status != 'approved' && $request->status != 'disapproved')
                        <form id="approveForm{{ $request->id }}" action="{{ route('send.fbemail') }}" method="post">
                            @csrf
                            <input type="hidden" name="email" value="{{ $request->email }}">
                            <input type="hidden" name="package" value="{{ $request->package }}">
                            <input type="hidden" name="username" value="{{ $request->username }}">
                            <input type="hidden" name="id" value="{{ $request->id }}">
                            <input type="hidden" name="status" value="approved"> <!-- Set status to 'approved' -->
                            <button type="button" class="btn approve-btn" onclick="confirmApprove('{{ $request->id }}')">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>

                        <form action="{{ route('fbdisapprove') }}" method="post">
                            @csrf
                            <input type="hidden" name="email" value="{{ $request->email }}">
                            <input type="hidden" name="id" value="{{ $request->id }}">
                            <button type="submit" class="btn reject-btn"><i class="fas fa-times"></i></button>
                        </form>
                @endif
                </div>
            </td>
        </tr>
    @endforeach

</tbody>

<script>
    function showPopup(imageSrc) {
        document.getElementById('popupImage').src = imageSrc;
        document.getElementById('imagePopup').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('imagePopup').style.display = 'none';
    }

    function confirmApprove(id) {
        if (confirm("Are you sure you want to approve?")) {
            document.getElementById("approveForm" + id).submit();
        }
    }
</script>

</table>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

