<div class="payment-container">
    <label for="payment-instructions">Payment Instructions:</label>
    <p>Choose your preferred payment method:</p>

    <div class="payment-method-links">
        <a href="#" onclick="showDetails('qr-code-details')">QR Code</a>
        <span>|</span>
        <a href="#" onclick="showDetails('bank-transfer-details')">Bank Transfer</a>
    </div>

    <div id="qr-code-details" class="payment-details">
        <p>Scan the QR code or use the following UPI ID in your payment app to complete the payment:</p>
        <p><strong class="highlight-text">UPI ID:</strong> Jeranyt.upi</p>
        <img src="{{ asset('assets/qrcode.jpeg') }}" alt="UPI QR Code" class="img-fluid" id="payment-img">
    </div>

    <div id="bank-transfer-details" class="payment-details" style="display: none;">
        <p>For bank transfer, use the following details:</p>
        <!-- <p><strong class="highlight-text">Account Name:</strong> Your Name</p>
        <p><strong class="highlight-text">Account Number:</strong> XXXX-XXXX-XXXX</p>
        <p><strong class="highlight-text">Bank Name:</strong> Your Bank</p> -->
        <img src="{{ asset('assets/bankdetails.jpeg') }}" alt="Bank Transfer Details" class="img-fluid" id="payment-img">
    </div>
</div>

<style>
    .payment-container {
        background-color: #f8f9fa;
        padding: 20px;
        border: 1px solid #ced4da;
        border-radius: 5px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease;
    }

    .payment-container:hover {
        background-color: #d1ecf1;
    }

    .payment-method-links {
        margin-bottom: 15px;
    }

    .payment-method-links a {
        cursor: pointer;
        text-decoration: none;
        color: #007bff;
        transition: color 0.3s ease;
    }

    .payment-method-links a:hover {
        color: #0056b3;
    }

    .payment-details {
        transition: opacity 0.3s ease;
    }

    .highlight-text {
        background-color: #17a2b8;
        color: #fff;
        padding: 3px;
        border-radius: 3px;
    }

    img.img-fluid {
        max-width: 100%;
        height: auto;
        margin-top: 10px;
        transition: transform 0.3s ease;
    }

    .payment-details:hover img.img-fluid {
        transform: scale(1.1);
    }
</style>

<script>
    function showDetails(detailsId) {
        const allDetails = document.querySelectorAll('.payment-details');
        allDetails.forEach(details => {
            if (details.id === detailsId) {
                details.style.display = 'block';
            } else {
                details.style.display = 'none';
            }
        });
    }
</script>
