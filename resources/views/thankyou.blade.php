<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Steps</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .step-container {
            text-align: center;
            margin-top: 50px;
        }

        .step {
            display: inline-block;
            margin: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .step img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
        }

        .step-content {
            padding: 20px;
        }

        .step p {
            font-size: 16px;
            color: #555;
            margin-bottom: 15px;
        }

        #action-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        #action-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="step-container">
    <div class="step">
        <img src="{{ asset('assets/step1.jpeg') }}" alt="Step 1">
        <div class="step-content">
            <p>Step 1: Package Details and Profile Details</p>
        </div>
    </div>

    <div class="step">
        <img src="{{ asset('assets/step2.jpeg') }}" alt="Step 2">
        <div class="step-content">
            <p>Step 2: Payment Process</p>
        </div>
    </div>

    <div class="step">
        <img src="{{ asset('assets/step3.jpeg') }}" alt="Step 3">
        <div class="step-content">
            <p>Step 3: Ordered Successfully</p>
            <button id="action-button" onclick="handleButtonClick()">Next</button>
        </div>
    </div>
</div>

<script>
    function handleButtonClick() {
        // Add your logic or redirect to the next page here
        window.location.href = "https://wa.me/+918438757683";
    }
</script>

</body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="vh-100 d-flex flex-column justify-content-center align-items-center">
        <!-- Image Section -->
        <div class="mt-4">
            <!-- Step 1 Button -->
            <button class="btn btn-secondary" onclick="showImage('image1')">Step 1</button>
            <!-- Step 2 Button -->
            <button class="btn btn-secondary" onclick="showImage('image2')">Step 2</button>
            <!-- Step 3 Button -->
            <button class="btn btn-secondary" onclick="showImage('image3')">Step 3</button>

            <!-- Image Container -->
            <div id="imageContainer" class="mt-4">
                <!-- Default Image -->
                <img src="{{ asset('assets/step1.jpeg') }}" alt="Step 1 Image" id="image1" style="display: block;">
                <!-- Second Image (Initially Hidden) -->
                <img src="{{ asset('assets/step2.jpeg') }}" alt="Step 2 Image" id="image2" style="display: none;">
                <!-- Third Image (Initially Hidden) -->
                <img src="{{ asset('assets/step3.jpeg') }}" alt="Step 3 Image" id="image3" style="display: none;">

                <!-- Button under Step 3 Image -->
                <button class="btn btn-primary mt-3" >Complete Process</button>
            </div>
        </div>

        <script>
            function showImage(imageId) {
                // Hide all images
                document.getElementById('image1').style.display = 'none';
                document.getElementById('image2').style.display = 'none';
                document.getElementById('image3').style.display = 'none';

                // Show the selected image
                document.getElementById(imageId).style.display = 'block';
            }

            
        </script>
    </body>

</html>
