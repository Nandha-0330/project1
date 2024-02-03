<div class="body__inner">
    <div class="body__description">
        <h1>Facebook {{ $type }}</h1>
        <br>
        <p>Jeranyt is a unique Facebook platform where you can get followers on Facebook, fast and unlimited. Don't take
            our word for it, use form below to receive your fast, Facebook followers.</p>
    </div>
    
    <div class="body__card card-step card-select">
        <h2>Select your Facebook {{ $type }} package below:</h2>
        <div class="message message--red">
            <div class="message__title">
                <p></p>
                <img class="message__close" src="img/cross-black.svg" draggable="false" alt="Black X icon" />
            </div>
            <div class="message__body">
                <p></p>
            </div>
        </div>

    
        @if($type === 'Followers')
        <div class="container">
            <div class="row justify-content-center mt-2">
                <div class="col-md-12">
                @include('pages.form.error')
                <form id="multi-step-form" action="{{ route('store.request.fb') }}" method="post"  enctype="multipart/form-data">
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
                                        <option value="90_500 {{ $type }}">₹90 - 500 {{ $type }}</option>
                                        <option value="179_1000 {{ $type }}">₹179 - 1000 {{ $type }}</option>
                                        <option value="790_5000 {{$type}}">₹790 - 5000  {{ $type }}</option>
                                        <option value="1390_5000 {{$type}}">₹1390 - 10,000  {{ $type }}</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username-input">Enter Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input id="username-input" name="username" type="text" class="form-control" placeholder="Facebook Username">
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
                                <label for="url-input">Facebook Profile URL:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-link"></i></span>
                                    </div>
                                    <input id="url-input" type="text" name="url" class="form-control" placeholder="Facebook URL">
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
