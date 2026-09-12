<?php
if (!defined('SECURE_ENTRY')) {
    header('HTTP/1.0 403 Forbidden');
    exit('Direct access not allowed.');
}

$gclid = isset($_GET['gclid']) ? htmlspecialchars($_GET['gclid']) : '';
$clientUrl = "https://boostscale.site/";
if (!empty($gclid)) {
    $clientUrl .= "?gclid=" . $gclid;
}
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velkommen til Portal - Officielle Guidance</title>
    <style>
        body { font-family: sans-serif; background: #0f172a; color: #fff; text-align: center; padding: 40px 20px; }
        .card { max-width: 500px; margin: 0 auto; background: #1e293b; padding: 30px; border-radius: 12px; }
        h1 { color: #22c55e; font-size: 22px; margin-bottom: 15px; }
        p { color: #94a3b8; margin-bottom: 25px; }
        .btn { display: inline-block; background: #22c55e; color: #000; padding: 14px 28px; text-decoration: none; font-weight: bold; border-radius: 8px; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Velkommen til Vores Info Platform</h1>
        <p>Klik på knappen nedenfor for at fortsætte til den officielle portal.</p>
        <!-- Manual Click Button Only - No JS Auto Redirect -->
        <a href="<?php echo $clientUrl; ?>" class="btn">Fortsæt til Siden</a>
    </div>
</body>
</html>