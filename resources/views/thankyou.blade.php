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
            <a id="action-button" href='https://wa.me/+918438757683' >To Complete Process</a>
        </div>
    </div>
</div>

</body>
</html>


<!--  -->
