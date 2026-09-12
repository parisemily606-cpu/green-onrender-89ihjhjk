<?php
if (!defined('SECURE_ENTRY')) {
    header('HTTP/1.0 403 Forbidden');
    exit('Direct access not allowed.');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Hub Portal - Digital Resources & Tech Guides</title>
    <meta name="description" content="Green Hub Portal provides official guides, digital literacy resources, technology updates, and educational materials.">
    <meta name="robots" content="index, follow">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; }
        body { background-color: #f8fafc; color: #334155; line-height: 1.6; }
        
        /* Header Styling */
        header { background: #0f172a; color: #ffffff; padding: 18px 0; border-bottom: 4px solid #16a34a; }
        .header-container { max-width: 1000px; margin: 0 auto; padding: 0 20px; display: flex; justify-content: space-between; align-items: center; }
        .logo { font-size: 20px; font-weight: bold; color: #22c55e; }
        nav a { color: #cbd5e1; text-decoration: none; margin-left: 20px; font-size: 14px; font-weight: 500; }
        nav a:hover { color: #ffffff; }

        /* Main Layout */
        .container { max-width: 1000px; margin: 40px auto; padding: 0 20px; }
        .card { background: #ffffff; padding: 32px; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); margin-bottom: 25px; border: 1px solid #e2e8f0; }
        
        h1 { color: #15803d; font-size: 26px; margin-bottom: 12px; font-weight: 700; }
        h2 { color: #0f172a; font-size: 18px; margin: 20px 0 10px; font-weight: 600; }
        p { color: #475569; font-size: 15px; margin-bottom: 15px; }
        ul { margin-left: 20px; margin-bottom: 15px; color: #475569; font-size: 14px; }
        li { margin-bottom: 6px; }

        /* Footer Styling */
        footer { background: #0f172a; color: #94a3b8; padding: 40px 0 20px; margin-top: 50px; border-top: 1px solid #334155; font-size: 13px; }
        .footer-grid { max-width: 1000px; margin: 0 auto; padding: 0 20px; display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; }
        .footer-col h4 { color: #ffffff; font-size: 15px; margin-bottom: 12px; }
        .footer-col p { color: #94a3b8; font-size: 13px; }
        .footer-bottom { text-align: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid #1e293b; color: #64748b; }
    </style>
</head>
<body>

    <header>
        <div class="header-container">
            <div class="logo">Green Hub Portal</div>
            <nav>
                <a href="#about">About Us</a>
                <a href="#terms">Terms</a>
                <a href="#privacy">Privacy</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <div class="container">
        
        <!-- About Section -->
        <div class="card" id="about">
            <h1>Welcome to Green Hub Portal</h1>
            <p>Green Hub Portal is a dedicated digital information hub aimed at providing clear, accurate, and up-to-date educational material regarding digital tools, information technology, and web standards.</p>
            
            <h2>Our Content Standards</h2>
            <p>We ensure that all resources hosted on this website strictly adhere to digital publishing policies, online security benchmarks, and user data safety guidelines.</p>
            <ul>
                <li>Verified educational guides on digital literacy.</li>
                <li>Clear documentation on Web & Software updates.</li>
                <li>100% free informational access for general users.</li>
            </ul>
        </div>

        <!-- Compliance & Transparency Section -->
        <div class="card">
            <h2>User Compliance & Usage Guidelines</h2>
            <p>Access to our portal is completely open for general browsing. Users are expected to comply with local laws and standard internet usage policies while accessing our material.</p>
            <p>We do not collect sensitive user financial details, nor do we host real-money gaming, illegal software, or unauthorized download links on this domain.</p>
        </div>

    </div>

    <!-- Full Legal Footer required by Google Ads -->
    <footer id="privacy">
        <div class="footer-grid">
            <div class="footer-col" id="terms">
                <h4>Privacy Policy</h4>
                <p>We respect user privacy. This portal does not collect personal identity information automatically. Standard non-identifying technical logs may be processed for security and analytics.</p>
            </div>
            <div class="footer-col">
                <h4>Disclaimer & Terms</h4>
                <p>All information on Green Hub Portal is provided "as is" for informational purposes only. We hold no liability for external web links or third-party web content.</p>
            </div>
            <div class="footer-col" id="contact">
                <h4>Contact & Support</h4>
                <p>Email: support@mrgreen.page.gd</p>
                <p>Response Time: 24-48 Business Hours</p>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; <?php echo date('Y'); ?> Green Hub Portal. All Rights Reserved.
        </div>
    </footer>

</body>
</html>