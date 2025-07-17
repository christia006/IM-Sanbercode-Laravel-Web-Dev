<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SanberBook</title>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        color: #000;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    /* Header */
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 50px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .logo {
        font-weight: bold;
        font-size: 22px;
    }

    .logo span {
        color: green;
    }

    nav {
        font-size: 14px; /* lebih tipis */
    }

    nav a {
        margin-left: 20px;
        text-decoration: none;
        color: #000;
    }

    nav a:hover {
        color: green;
    }

    /* Dropdown ABOUT */
    .dropdown {
        display: inline-block;
        position: relative;
    }

    .dropdown-toggle::after {
        content: ' ▼';
        font-size: 8px;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fff;
        min-width: 80px;
        box-shadow: 0px 2px 6px rgba(0,0,0,0.1);
        z-index: 1;
        left: 0;
        top: 18px;
    }

    .dropdown-content a {
        display: block;
        padding: 4px 8px;
        color: #000;
        font-size: 14px; /* sangat tipis */
    }

    .dropdown-content a:hover {
        background-color: #f0f0f0;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Main content */
    main {
        flex: 1;
        width: 100%;
        margin: 30px 0;
    }

    .home-title {
        text-align: center;
        font-size: 28px;
        font-weight: bold;
    }

    .underline {
        width: 40px;
        height: 3px;
        background-color: green;
        margin: 5px auto 30px auto;
    }

    .content-left {
        text-align: left;
        max-width: 600px;
        margin-left: 0;
        padding-left: 20px;
    }

    h1 {
        font-size: 32px;
        margin-bottom: 10px;
    }

    h2 {
        font-size: 20px;
        margin-bottom: 5px;
    }

    h3 {
        margin-top: 25px;
        font-size: 20px;
    }

    p, li {
        color: #444;
        font-size: 14px;
    }

    a {
        color: green;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    /* Footer */
    footer {
        background-color: #000;
        color: #fff;
        font-size: 12px;
        text-align: center;
        padding: 15px 0;
    }
</style>
</head>
<body>

<header>
    <div class="logo">COMPANY<span>.</span></div>
    <nav>
        <a href="#">HOME</a>
        <div class="dropdown">
            <a href="#" class="dropdown-toggle">ABOUT</a>
            <div class="dropdown-content">
                <a href="#">Our Team</a>
                <a href="#">Our Story</a>
            </div>
        </div>
        <a href="#">SERVICES</a>
        <a href="#">PORTFOLIO</a>
        <a href="#">PRICING</a>
        <a href="#">BLOG</a>
        <a href="#">CONTACT</a>
    </nav>
</header>

<main>
    <div class="home-title">HOME</div>
    <div class="underline"></div>

    <div class="content-left">
        <h1>SanberBook</h1>
        <h2>Social Media Developer Santai Berkualitas</h2>
        <p>Belajar dan Berbagi agar hidup ini semakin santai berkualitas</p>

        <h3>Benefit Join di SanberBook</h3>
        <ul>
            <li>Mendapatkan motivasi dari sesama developer</li>
            <li>Sharing knowledge dari para mastah Sanber</li>
            <li>Dibuat oleh calon web developer terbaik</li>
        </ul>

        <h3>Cara Bergabung ke SanberBook</h3>
        <ol>
            <li>Mengunjungi Website ini</li>
            <li>mendaftar di <a href="{{ url('/register') }}">Form Sign Up</a></li>
            <li>Dibuat oleh calon web developer terbaik</li>
        </ol>
    </div>
</main>

<footer>
    © Copyright <b>Company</b> All Rights Reserved
</footer>

</body>
</html>
