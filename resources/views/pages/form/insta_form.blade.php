<div class="body__inner">
    <div class="body__description">
        <h1>Instagram {{ $type }}</h1>
        <br>
        <p>Jeranyt is a unique Instagram platform where you can get followers on Instagram, fast and unlimited. Don't take
            our word for it, use form below to receive your fast, Instagram followers.</p>
    </div>
    <div class="body__imprint imprint-subscription-features">
        <div class="imprint-subscription-features__item">
            <div class="icon">

                <img src="https://www.prime-likes.com/img/human-outline.svg">
            </div>
            <p>Only real {{ $type }} from real Instagram users.</p>
        </div>
        <div class="imprint-subscription-features__item">
            <div class="icon">
                <img src="">
            </div>
            <p>This service is absolutely and can be used an unlimited amount of times.</p>
        </div>
    </div>
    <div class="body__card card-step card-select">
        <h2>Select your Instagram {{ $type }} package below:</h2>
        <div class="message message--red">
            <div class="message__title">
                <p></p>
                <img class="message__close" src="img/cross-black.svg" draggable="false" alt="Black X icon" />
            </div>
            <div class="message__body">
                <p></p>
            </div>
        </div>

        @if ($errors->any())
        <div  >
            <strong>Validation Error:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li class="bg-red-200 text-red-800 p-4 rounded mb-2 ">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        @if ($type === 'Likes')
        <div class="container">
            <div class="row justify-content-center mt-2">
                <div class="col-md-12">
                <form id="multi-step-form" action="{{ route('store.request') }}" method="post"  enctype="multipart/form-data">
                  @csrf
                        <div id="step-1" class="form-step">
                            <input type="hidden" value="{{$type}}" name="request_for">
                            <div class="form-group">
                                <label for="country-select">Select User Type</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-globe"></i></span>
                                    </div>
                                    <select id="country-select" name="user_type" class="form-control">
                                        <option value="#">Select User Type</option>
                                        <option value="foreign">Foreign</option>
                                        <option value="indian">Indian</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="package-select">Select Package</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-box"></i></span>
                                    </div>
                                    <select id="package-select" name="package" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username-input">Enter Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input id="username-input" name="username" type="text" class="form-control" placeholder="Instagram Username">
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
                                <label for="url-input">Post URL:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-link"></i></span>
                                    </div>
                                    <input id="url-input" type="text" name="url" class="form-control" placeholder="Instagram URL">
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="nextStep()"><i class="fas fa-arrow-right"></i> Next</button>
                        </div>

                        <div id="step-2" class="form-step" style="display: none;">
                            <div class="form-group">
                                <label for="upi-instructions">Instructions for Google Pay:</label>
                                <p>Scan the QR code or use the following UPI ID in your Paytm app to complete the payment:</p>
                                <p><strong>UPI ID:</strong> Jeranyt.upi</p>
                                <img src="{{ asset('assets/qrcode.jpeg') }}" alt="Google Pay QR Code" class="img-fluid">
                            </div>
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

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            function nextStep() {
                // Validate step 1 fields
                var package = document.getElementsByName('package')[0].value;
                var country = document.getElementsByName('user_type')[0].value;
                var username = document.getElementsByName('username')[0].value;
                var email = document.getElementsByName('email')[0].value;
                var url = document.getElementsByName('url')[0].value;

                if (username.trim() === '' || email.trim() === '' || country.trim() === '' || package.trim() === '' || url.trim() === '') {
                    alert('Please fill in all fields .');
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
            document.getElementById('country-select').addEventListener('change', function() {
                var packageSelect = document.getElementById('package-select');
                var selectedCountry = this.value;

                // Clear previous options
                packageSelect.innerHTML = '';

                // Add options based on selected country
                if (selectedCountry === 'foreign') {
                    packageSelect.add(new Option('₹39 - 500 {{ $type }}', '39 Rs_500 {{ $type }}'));
                    packageSelect.add(new Option('₹59 - 1000 {{ $type }}', '59 Rs_1000 {{ $type }}'));
                    packageSelect.add(new Option('₹99 - 5000 {{ $type }}', '99_5000 {{ $type }}'));
                    packageSelect.add(new Option('₹199 - 10000 {{ $type }}', '199_10000 {{ $type }}'));

                    // Add more options as needed for foreign packages
                } else if (selectedCountry === 'indian') {
                    packageSelect.add(new Option('₹49 - 500 {{ $type }}', '49_500 {{ $type }}'));
                    packageSelect.add(new Option('₹89 - 1000 {{ $type }}', '89_1000 {{ $type }}'));
                    packageSelect.add(new Option('₹198 - 5000 {{ $type }}', '198_5000 {{ $type }}'));
                    packageSelect.add(new Option('₹390  - 10000 {{ $type }}', '390_10000 {{ $type }}'));
                    // Add more options as needed for Indian packages
                }
            });
        </script>
        @elseif($type === 'Followers')

        <div class="container">
            <div class="row justify-content-center mt-2">
                <div class="col-md-12">
                    <form id="multi-step-form" action="{{ route('store.request') }}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div id="step-1" class="form-step">
                            <input type="hidden" value="{{$type}}" name="request_for">
                            <div class="form-group">
                                <label for="country-select">Select User Type</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-globe"></i></span>
                                    </div>
                                    <select id="country-select" name="user_type" class="form-control">
                                        <option value="#">Select User Type</option>
                                        <option value="foreign">Foreign</option>
                                        <option value="indian">Indian</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="package-select">Select Package</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-box"></i></span>
                                    </div>
                                    <select id="package-select" name="package" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username-input">Enter Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input id="username-input" name="username" type="text" class="form-control" placeholder="Instagram Username">
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
                                <label for="url-input">Instragram URL:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-link"></i></span>
                                    </div>
                                    <input id="url-input" type="text" name="url" class="form-control" placeholder="Instagram URL">
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="nextStep()"><i class="fas fa-arrow-right"></i> Next</button>
                        </div>

                        <div id="step-2" class="form-step" style="display: none;">
                            <div class="form-group">
                                <label for="upi-instructions">Instructions for Google Pay:</label>
                                <p>Scan the QR code or use the following UPI ID in your Paytm app to complete the payment:</p>
                                <p><strong>UPI ID:</strong> Jeranyt.upi</p>
                                <img src="{{ asset('assets/qrcode.jpeg') }}" alt="Google Pay QR Code" class="img-fluid">
                            </div>
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

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>


        <script>
            function nextStep() {
                // Validate step 1 fields
                var package = document.getElementsByName('package')[0].value;
                var country = document.getElementsByName('user_type')[0].value;
                var username = document.getElementsByName('username')[0].value;
                var email = document.getElementsByName('email')[0].value;
                var url = document.getElementsByName('url')[0].value;

                if (username.trim() === '' || email.trim() === '' || country.trim() === '' || package.trim() === '' || url.trim() === '') {
                    alert('Please fill in all fields .');
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
            document.getElementById('country-select').addEventListener('change', function() {
                var packageSelect = document.getElementById('package-select');
                var selectedCountry = this.value;

                packageSelect.innerHTML = '';

                if (selectedCountry === 'foreign') {
                    packageSelect.add(new Option('₹79 - 500 {{ $type }}', '79_500 {{ $type }}'));
                    packageSelect.add(new Option('₹149 - 1000 {{ $type }}', '149_1000 {{ $type }}'));
                    packageSelect.add(new Option('₹279 - 2000 {{ $type }}', '279_2000 {{ $type }}'));
                    packageSelect.add(new Option('₹590 - 5000 {{ $type }}', '590_5000 {{ $type }}'));
                    packageSelect.add(new Option('₹990 - 10,000 {{ $type }}', '990_10,000 {{ $type }}'));
                    packageSelect.add(new Option('₹1790 - 20,000 {{ $type }}', '1790_20,000 {{ $type }}'));
                    packageSelect.add(new Option('₹4590 - 50,000 {{ $type }}', '4590_50,000 {{ $type }}'));

                } else if (selectedCountry === 'indian') {
                    packageSelect.add(new Option('₹98  - 500 {{ $type }}', '98_500 {{ $type }}'));
                    packageSelect.add(new Option('₹189  - 1000 {{ $type }}', '189_1000 {{ $type }}'));
                    packageSelect.add(new Option('₹359  - 2000 {{ $type }}', '359_2000 {{ $type }}'));
                    packageSelect.add(new Option('₹690  - 5000 {{ $type }}', '690_5000 {{ $type }}'));
                    packageSelect.add(new Option('₹1190  - 10,000 {{ $type }}', '1190_10,000 {{ $type }}'));
                    packageSelect.add(new Option('₹2190  - 20,000 {{ $type }}', '2190_20,000 {{ $type }}'));

                }
            });
        </script>

        @elseif($type === 'Views')

        <div class="container">
            <div class="row justify-content-center mt-2">
                <div class="col-md-12">
                <form id="multi-step-form" action="{{ route('store.request') }}" method="post"  enctype="multipart/form-data">
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
                                        <option value="39_1000 {{ $type }}">39 Rs - 1000 {{ $type }}</option>
                                        <option value="98_5000 {{ $type }}">98 Rs - 5000 {{ $type }}</option>
                                        <option value="190_10,000 {{$type}}">190 Rs - 10,000 {{ $type }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username-input">Enter Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input id="username-input" name="username" type="text" class="form-control" placeholder="Instagram Username">
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
                                <label for="url-input">Instragram URL:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-link"></i></span>
                                    </div>
                                    <input id="url-input" type="text" name="url" class="form-control" placeholder="Instagram URL">
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="nextStep()"><i class="fas fa-arrow-right"></i> Next</button>
                        </div>

                        <div id="step-2" class="form-step" style="display: none;">
                            <div class="form-group">
                                <label for="upi-instructions">Instructions for Google Pay:</label>
                                <p>Scan the QR code or use the following UPI ID in your Paytm app to complete the payment:</p>
                                <p><strong>UPI ID:</strong> Jeranyt.upi</p>
                                <img src="{{ asset('assets/qrcode.jpeg') }}" alt="Google Pay QR Code" class="img-fluid">
                            </div>
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
                var country = document.getElementsByName('user_type')[0].value;
                var username = document.getElementsByName('username')[0].value;
                var email = document.getElementsByName('email')[0].value;
                var url = document.getElementsByName('url')[0].value;

                if (username.trim() === '' || email.trim() === '' || country.trim() === '' || package.trim() === '' || url.trim() === '') {
                    alert('Please fill in all fields .');
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