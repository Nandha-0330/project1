<div class="body__inner">
    <div class="body__description">
        <h1>Instagram {{ $type }}</h1>
        <br>
        <p>DEMO is a unique Instagram platform where you can get followers on Instagram, fast and unlimited. Don't take
            our word for it, use form below to receive your fast, Instagram followers.</p>
    </div>
    <div class="body__imprint imprint-subscription-features">
        <div class="imprint-subscription-features__item">
            <div class="icon">
                |
                <img src="img/human-outline.svg">
            </div>
            <p>Only real {{ $type }} from real Instagram users.</p>
        </div>
        <div class="imprint-subscription-features__item">
            <div class="icon">
                <img src="img/ -outline.svg">
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
                        <div class="bg-red-200 text-red-800 p-4 rounded mb-4">
                            <strong>Validation Error:</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
         @endif


        @if ($type === 'Likes')
            <form action="{{ route('store.request') }}"  method="post" >
                @csrf

                <div class="form">
                    <input type="hidden" value="{{$type}}" name="request_for">
                    <div class="form__element form__element--with-left-icon form__element--select">
                        <label for="country-select">Select User Type</label>
                        <select id="country-select" name="user_type">
                            <option value="#">Select User Type</option>
                            <option value="foreign">Foreign</option>
                            <option value="indian">Indian</option>
                        </select>
                        <img class="form__element-icon" src="https://cdn-icons-png.freepik.com/512/3688/3688585.png?ga=GA1.1.619290522.1667876743&" draggable="false"
                            alt="Globe icon">
                    </div>
                    <div class="form__element form__element--with-left-icon form__element--select">
                        <label for="package-select">Select Package</label>
                        <select id="package-select" name="package">
                        </select>
                        <img class="form__element-icon" src="https://www.prime-likes.com/img/icon-dropdown-heart.svg" draggable="false"
                            alt="Red heart icon">
                    </div>

                    <script>
                        document.getElementById('country-select').addEventListener('change', function() {
                            var packageSelect = document.getElementById('package-select');
                            var selectedCountry = this.value;

                            // Clear previous options
                            // packageSelect.innerHTML = '';

                            // Add options based on selected country
                            if (selectedCountry === 'foreign') {
                                packageSelect.add(new Option('39 Rs - 500 {{ $type }}', '39 Rs_500 {{ $type }}'));
                                packageSelect.add(new Option('59 Rs - 1000 {{ $type }}', '59 Rs_1000 {{ $type }}'));
                                packageSelect.add(new Option('99 Rs - 5000 {{ $type }}', '99_5000 {{ $type }}'));
                                packageSelect.add(new Option('199 Rs - 10000 {{ $type }}', '199_10000 {{ $type }}'));

                                // Add more options as needed for foreign packages
                            } else if (selectedCountry === 'indian') {
                                packageSelect.add(new Option('49 Rs - 500 {{ $type }}', '49_500 {{ $type }}'));
                                packageSelect.add(new Option('89 Rs - 1000 {{ $type }}', '89_1000 {{ $type }}'));
                                packageSelect.add(new Option('198 Rs - 5000 {{ $type }}', '198_5000 {{ $type }}'));
                                packageSelect.add(new Option('390 Rs - 10000 {{ $type }}', '390_10000 {{ $type }}'));
                                // Add more options as needed for Indian packages
                            }
                        });
                    </script>
                    <div class="form__element form__element--with-left-icon">
                        <label for="username-input">Enter username</label>
                        <input id="username-input" name="username" type="text" placeholder="Instagram Username">
                        <div class="form__element-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="120%" height="120%" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-brand-instagram"><path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path><path d="M16.5 7.5l0 .01"></path></svg>
                        </div>
                    </div>
                    <div class="form__element form__element--with-left-icon">
                        <label for="username-input">Enter email</label>
                        <input id="username-input" name="email" type="text" placeholder="email">
                        <div class="form__element-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-at"><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path><path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"></path></svg>
                        </div>
                    </div>
                    <div class="form__element form__element--with-left-icon">
                        <label for="username-input">Post URL:</label>
                        <input id="username-input" type="text" name="url" placeholder="Instragram  URL">
                        <img class="form__element-icon" src="https://cdn-icons-png.freepik.com/512/5692/5692695.png?ga=GA1.1.619290522.1667876743&"  draggable="false" alt="User icon">
                    </div>
                    <div class="form__element form__element--with-left-icon">
                        <label for="username-input">Transaction ID:</label>
                        <div class="input-with-button">
                            <input id="username-input" type="text" name="transaction_id" placeholder="Transaction ID">
                            <button type="button" class="button-right">Button</button>
                        </div>
                        <img class="form__element-icon" src="img/icon-username.svg" draggable="false" alt="User icon">
                    </div>

                    <button class="large-button large-button--with-loader">
                        <p>Order {{ $type }} Now</p>
                    </button>
                </div>
            </form>
        @elseif($type === 'Followers')


<div class="container">
    <div class="row justify-content-center mt-2">
        <div class="col-md-12">
            <form id="multi-step-form" action="{{ route('store.request') }}" method="post">
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
                        <p>Scan the QR code or use the following UPI ID in your Google Pay app to complete the payment:</p>
                        <p><strong>UPI ID:</strong> Jeranyt.upi</p>
                        <img src="{{ asset('assets/qr.jpeg') }}" alt="Google Pay QR Code" class="img-fluid">
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
                            packageSelect.add(new Option('79 Rs - 500 {{ $type }}', '79_500 {{ $type }}'));
                            packageSelect.add(new Option('149 Rs - 1000 {{ $type }}', '149_1000 {{ $type }}'));
                            packageSelect.add(new Option('279 Rs - 2000 {{ $type }}', '279_2000 {{ $type }}'));
                            packageSelect.add(new Option('590 Rs - 5000 {{ $type }}', '590_5000 {{ $type }}'));
                            packageSelect.add(new Option('990 Rs - 10,000 {{ $type }}', '990_10,000 {{ $type }}'));
                            packageSelect.add(new Option('1790 Rs - 20,000 {{ $type }}', '1790_20,000 {{ $type }}'));
                            packageSelect.add(new Option('4590 Rs - 50,000 {{ $type }}', '4590_50,000 {{ $type }}'));

                        } else if (selectedCountry === 'indian') {
                            packageSelect.add(new Option('98 Rs - 500 {{ $type }}', '98_500 {{ $type }}'));
                            packageSelect.add(new Option('189 Rs - 1000 {{ $type }}', '189_1000 {{ $type }}'));
                            packageSelect.add(new Option('359 Rs - 2000 {{ $type }}', '359_2000 {{ $type }}'));
                            packageSelect.add(new Option('690 Rs - 5000 {{ $type }}', '690_5000 {{ $type }}'));
                            packageSelect.add(new Option('1190 Rs - 10,000 {{ $type }}', '1190_10,000 {{ $type }}'));
                            packageSelect.add(new Option('2190 Rs - 20,000 {{ $type }}', '2190_20,000 {{ $type }}'));

                        }
                    });
                </script>

        @elseif($type === 'Views')
            <form action="{{ route('store.request') }}"  method="post" >
                @csrf
                <div class="form">
                    <input type="hidden" value="{{$type}}" name="request_for">
                    <div class="form__element form__element--with-left-icon form__element--select">
                        <label for="package-select">Select Package</label>
                        <select id="package-select" name="package">
                            <option value="39_1000 {{ $type }}">39 Rs - 1000 {{ $type }}</option>
                            <option value="98_5000 {{ $type }}">98 Rs - 5000 {{ $type }}</option>
                            <option value="190_10,000 {{$type}}">190 Rs - 10,000 {{ $type }}</option>
                        </select>
                        <img class="form__element-icon" src="img/icon-dropdown-heart.svg" draggable="false"
                            alt="Red heart icon">
                    </div>
                    <div class="form__element form__element--with-left-icon">
                        <label for="username-input">Enter username</label>
                        <input id="username-input" name="username" type="text" placeholder="Instagram Username">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div class="form__element form__element--with-left-icon">
                        <label for="username-input">Enter email</label>
                        <input id="username-input" name="email" type="text" placeholder="email">
                        <img class="form__element-icon" src="img/icon-username.svg" draggable="false" alt="User icon">
                    </div>
                    <div class="form__element form__element--with-left-icon">
                        <label for="username-input">Post URL:</label>
                        <input id="username-input" type="text" name="url" placeholder="Instragram  URL">
                        <img class="form__element-icon" src="img/icon-username.svg" draggable="false"
                            alt="User icon">
                    </div>
                    <div class="form__element form__element--with-left-icon">
                        <label for="username-input">Transaction ID::</label>
                        <input id="username-input" type="text" name="transaction_id"
                            placeholder=" Transaction ID">
                        <img class="form__element-icon" src="img/icon-username.svg" draggable="false"
                            alt="User icon">
                    </div>
                    <button id="submit-button" class="large-button large-button--with-loader">
                        <p>Generate {{ $type }}</p>
                    </button>

                </div>
            </form>
            <script>
                document.getElementById('package-select').addEventListener('change', function() {
                    var selectedOption = this.value.split('_');
                    var price = selectedOption[0];
                    var request = selectedOption[1];

                });
            </script>
        @else
        @endif
    </div>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    {{-- <script>

        function storeRequest() {
            var formData = {
                'transaction_id': $('#transaction_id').val(),
                'username': $('#username-input').val(),
                'url': $('#url-input').val(),
                'user_type':$('#country-select').val(),
                'request_for':'{{$type}}',
                'price': '', // Initialize price
                'package': ''

            };

            if (formData['package']) {
            var selectedOption = formData['package'].split('_');
            formData['price'] = selectedOption[0];
            formData['package'] = selectedOption[1];
            }

            $.ajax({
                type: 'POST',
                url: '{{ route('store.request') }}',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    // Handle success response
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    // Handle error response
                }
            });
        }

        $(document).ready(function() {
            $('#submit-button').click(function(e) {
                e.preventDefault(); // Prevent form submission
                storeRequest(); // Call the storeRequest function
            });
            $('#package-select').change(function() {
            storeRequest();
        });
        });
    </script> --}}
