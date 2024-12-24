<!-- resources/views/bank.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Details by IFSC Code</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div>
        <h2>Get Bank Details by IFSC Code</h2>
        <form id="beneficiary_ifsc" action="{{ url('/get-bank-details') }}" method="POST">
            @csrf  <!-- Add CSRF token directly to the form if not handled globally -->
            <label for="ifsc-code">Enter IFSC Code:</label>
            <input type="text" id="ifsc-code" name="ifsc_code" required>
            <button type="submit">Get Details</button>
        </form>

        <div id="bank-details">
            <!-- Bank details will appear here -->
        </div>
    </div>

    <script>
        $(document).ready(function(){
            // Listen for the keyup event on the IFSC input field
            $("#ifsc-code").on('keyup', function(event) {
                // Get the IFSC code entered by the user
                var ifscCode = $("#ifsc-code").val();

                // Only proceed if the IFSC code is not empty
                if (ifscCode) {
                    // Perform AJAX request to get bank details based on IFSC code
                    $.ajax({
                        url: "{{ url('/get-bank-details') }}",  // Make sure this route exists in your web.php
                        method: 'POST',
                        data: {
                            ifsc_code: ifscCode,
                            _token: '{{ csrf_token() }}'  // Include CSRF token
                        },
                        success: function(response) {
                            // Handle the response from the server
                            if (response.error) {
                                $('#bank-details').html('<p>Error: ' + response.error + '</p>');
                            } else {
                                // Assuming the response contains bank details
                                var bankDetails = response || 'No data found';
                                $('#bank-details').html('<p>Bank Name: ' + bankDetails.bank_name + '</p>');
                            }
                        },
                        error: function(xhr, status, error) {
                            // Handle any AJAX error
                            $('#bank-details').html('<p>An error occurred: ' + error + '</p>');
                        }
                    });
                } else {
                    // Clear the bank details if input is empty
                    $('#bank-details').empty();
                }
            });
        });
    </script>
</body>
</html>
