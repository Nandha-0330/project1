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
