<div class="body__inner">
    <div class="body__description">
        <h1>{{$app_name}} {{ $type }}</h1>
        <br>
        <p>Jeranyt is a unique Youtube platform where you can get Subscribers  on Youtube, fast and unlimited. Don't take
            our word for it, use form below to receive your fast, Youtube Subscribers.</p>
    </div>
    
    <div class="body__card card-step card-select">
        <h2>Select your Youtube {{ $type }} package below:</h2>
        <div class="message message--red">
            <div class="message__title">
                <p></p>
                <img class="message__close" src="img/cross-black.svg" draggable="false" alt="Black X icon" />
            </div>
            <div class="message__body">
                <p></p>
            </div>
        </div>

        @if($type === 'Subscribers')
        <div class="container">
            <div class="row justify-content-center mt-2">
                <div class="col-md-12">
                @include('pages.form.error')
                <form id="multi-step-form" action="{{ route('store.request.yt') }}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div id="step-1" class="form-step">
                            <input type="hidden" value="{{$type}}" name="request_for">
                            <div class="form-group">
                                <label for="package-select">Select Package</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-box"></i></span>
                                    </div>
                                    <select id="package-select" name="package" class="form-control">
                                        <option value="590_1000 Subscribers Slow Service">₹590 -  1000 Subscribers Slow Service ( Complete 1 Week )</option>
                                        <option value="890_1000 Subscribers Fast Service ( 1 Day Complete )">₹890  -  1000 Subscribers Fast Service ( 1 Day Complete ) </option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username-input">Enter Account Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input id="username-input" name="username" type="text" class="form-control" placeholder="Account Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email-input">Enter Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input id="email-input" name="email" type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="url-input">Youtube Profile URL:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-link"></i></span>
                                    </div>
                                    <input id="url-input" type="text" name="url" class="form-control" placeholder="Youtube URL">
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="nextStep()"><i class="fas fa-arrow-right"></i> Next</button>
                        </div>

                        <div id="step-2" class="form-step" style="display: none;">
                        @include('pages.form.paymentinfo')
                            <div class="form-group">
                                <label for="transaction-input">Transaction ID:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                                    </div>
                                    <input id="transaction-input" type="text" name="transaction_id" class="form-control" placeholder="Transaction ID">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image-upload">Screenshot:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-image"></i></span>
                                    </div>
                                    <input id="image-upload" type="file" name="image" class="form-control">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="button" class="btn btn-secondary" onclick="prevStep()"><i class="fas fa-arrow-left"></i> Previous</button>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


            <script>
                function nextStep() {
                        // Validate step 1 fields
                        var package = document.getElementsByName('package')[0].value;
                        var username = document.getElementsByName('username')[0].value;
                        var email = document.getElementsByName('email')[0].value;
                        var url = document.getElementsByName('url')[0].value;

                        if (username.trim() === '' || email.trim() === ''  || package.trim() === '' || url.trim() === '') {
                    alert('Please fill in all fields.');
                    return;
                }

                // URL Validation
                const urlRegex = /^(ftp|http|https):\/\/[^ "]+$/;

                if (!urlRegex.test(url.trim())) {
                    alert('Please enter a valid URL.');
                    return;
                }

                        document.getElementById('step-1').style.display = 'none';
                        document.getElementById('step-2').style.display = 'block';
                    }

                    function prevStep() {
                        document.getElementById('step-2').style.display = 'none';
                        document.getElementById('step-1').style.display = 'block';
                    }

                    document.getElementById('package-select').addEventListener('change', function() {
                        var selectedOption = this.value.split('_');
                        var price = selectedOption[0];
                        var request = selectedOption[1];
                    });


            </script>
        @else
        @endif
    </div>
