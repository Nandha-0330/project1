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
                        <img class="form__element-icon" src="img/icon-dropdown-globe.svg" draggable="false"
                            alt="Globe icon">
                    </div>
                    <div class="form__element form__element--with-left-icon form__element--select">
                        <label for="package-select">Select Package</label>
                        <select id="package-select" name="package">
                        </select>
                        <img class="form__element-icon" src="img/icon-dropdown-heart.svg" draggable="false"
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
                        <img class="form__element-icon" src="img/icon-username.svg" draggable="false" alt="User icon">
                    </div>
                    <div class="form__element form__element--with-left-icon">
                        <label for="username-input">Enter email</label>
                        <input id="username-input" name="email" type="text" placeholder="email">
                        <img class="form__element-icon" src="img/icon-username.svg" draggable="false" alt="User icon">
                    </div>
                    <div class="form__element form__element--with-left-icon">
                        <label for="username-input">Post URL:</label>
                        <input id="username-input" type="text" name="url" placeholder="Instragram  URL">
                        <img class="form__element-icon" src="img/icon-username.svg" draggable="false" alt="User icon">
                    </div>
                    <div class="form__element form__element--with-left-icon">
                        <label for="username-input">Transaction ID::</label>
                        <input id="username-input" type="text" name="transaction_id" placeholder=" Transaction ID">
                        <img class="form__element-icon" src="img/icon-username.svg" draggable="false" alt="User icon">
                    </div>
                    <button class="large-button large-button--with-loader">
                        <p>Generate {{ $type }}</p>
                    </button>
                </div>
            </form>
        @elseif($type === 'Followers')
            <form action="{{ route('store.request') }} "  method="post" >
                @csrf
                <div class="form">
                    <input type="hidden" value="{{$type}}" name="request_for">
                    <div class="form__element form__element--with-left-icon form__element--select">
                        <label for="country-select">Select User Type</label>
                        <select id="country-select" name="country">
                            <option value="#">Select User Type</option>
                            <option value="foreign">Foreign</option>
                            <option value="indian">Indian</option>
                        </select>
                        <img class="form__element-icon" src="img/icon-dropdown-globe.svg" draggable="false"
                            alt="Globe icon">
                    </div>
                    <div class="form__element form__element--with-left-icon form__element--select">
                        <label for="package-select">Select Package</label>
                        <select id="package-select" name="package">
                        </select>
                        <img class="form__element-icon" src="img/icon-dropdown-heart.svg" draggable="false"
                            alt="Red heart icon">
                    </div>

                    <script>
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
                    <div class="form__element form__element--with-left-icon">
                        <label for="username-input">Enter username</label>
                        <input id="username-input" name="username" type="text" placeholder="Instagram Username">
                        <img class="form__element-icon" src="img/icon-username.svg" draggable="false" alt="User icon">
                    </div>
                    <div class="form__element form__element--with-left-icon">
                        <label for="username-input">Enter email</label>
                        <input id="username-input" name="email" type="text" placeholder="email">
                        <img class="form__element-icon" src="img/icon-username.svg" draggable="false" alt="User icon">
                    </div>
                    <div class="form__element form__element--with-left-icon">
                        <label for="username-input">URL:</label>
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
                        <img class="form__element-icon" src="img/icon-username.svg" draggable="false"
                            alt="User icon">
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
