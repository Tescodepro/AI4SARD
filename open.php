<?php
require_once 'vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

function generateQRCode($text)
{
    // Create QR code
    $qrCode = QrCode::create($text);

    // Create PNG writer
    $writer = new PngWriter();
    // Generate QR code image
    $result = $writer->write($qrCode);

    // Get the image data as a string
    $imageData = $result->getString();

    // Encode the image data as base64
    $imageBase64 = base64_encode($imageData);
    // $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
    // $imageBase64 = $generator->getBarcode($text, $generator::TYPE_CODE_128);

    return $imageBase64;
}

// Handle API request
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // if (isset($_GET['text'])) {
    $rand = substr(uniqid(rand(00000, 999999)), 0, 6);
    $text = $rand . ' verified at BarcodeLove
            Status: ORIGNAL
            verifier: Endroid Library V2 Barcode Lover
            Client: AKINLABI Fountain University Osogbo';
    $qrCodeImage = generateQRCode($text);
    echo '<img src="data:image/png;base64,' . $qrCodeImage . '">';
    // echo  $qrCodeImage;
    // } else {
    // header('HTTP/1.1 400 Bad Request');
    // echo 'Error: Missing text parameter';
    // }
} else {
    header('HTTP/1.1 405 Method Not Allowed');
    echo 'Error: Only GET requests are allowed';
}