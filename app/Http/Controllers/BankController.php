<?php

// app/Http/Controllers/BankController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankController extends Controller
{

    public function ifscPage(){

        return view('codeifsc');
    }

    public function getBankDetails(Request $request)
    {
        $ifscCode = $request->input('ifsc_code');  // IFSC Code passed via AJAX
        echo $ifscCode;die;
        // Check if IFSC code is provided
        if (!$ifscCode) {
            return response()->json(['error' => 'IFSC code is required'], 400);
        }
    
        $url = "https://api-preproduction.signzy.app/api/v3/bank/searchByIfscCode";
        $headers = [
            "Authorization: rQrgFqa2Em0vtlIYQefAqVFCVBBPR2Ls",
            "x-client-unique-id: itops@srfcnbfc.com",
            "Content-Type: application/json"
        ];
    
        // Prepare the cURL request
        $curl = curl_init();
    
        // Ensure you're passing the IFSC code in the correct JSON format
        $postData = [
            'ifsc_code' => $ifscCode
        ];
    
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($postData), // Ensure the payload is properly encoded
            CURLOPT_HTTPHEADER => $headers,
        ]);
    
        // Execute the request
        $response = curl_exec($curl);
        dd( $response);
        // Check for cURL errors
        if (curl_errno($curl)) {
            return response()->json(['error' => curl_error($curl)], 500);
        }
    
        // Close cURL
        curl_close($curl);
    
        // Decode and return the response
        $decodedResponse = json_decode($response, true);
    
        // Check if the response is valid and contains the bank details
        if (isset($decodedResponse['error'])) {
            return response()->json(['error' => $decodedResponse['error']['message']], 400);
        }
    
        // Return the valid response
        return response()->json($decodedResponse);
    }
    
}
