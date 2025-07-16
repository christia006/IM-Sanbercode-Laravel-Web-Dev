<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - SanberBook</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      color: #000;
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

    nav a {
      margin-left: 20px;
      text-decoration: none;
      color: #000;
      font-size: 14px;
    }

    nav a:hover {
      color: green;
    }

    /* Main content */
    main {
      max-width: 900px;
      margin: 50px auto;
      padding: 0 20px;
    }

    .title {
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

    .welcome {
      font-size: 32px;
      margin-bottom: 10px;
    }

    .description {
      font-size: 20px;
      color: #444;
    }

    /* Footer */
    footer {
      background-color: #000;
      color: #fff;
      font-size: 12px;
      text-align: center;
      padding: 15px 0;
      margin-top: 50px;
    }

    footer a {
      color: green;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">COMPANY<span>.</span></div>
    <nav>
      <a href="#">HOME</a>
      <a href="#">ABOUT</a>
      <a href="#">SERVICES</a>
      <a href="#">PORTFOLIO</a>
      <a href="#">PRICING</a>
      <a href="#">BLOG</a>
      <a href="#">CONTACT</a>
    </nav>
  </header>

  <main>
    <div class="title">DASHBOARD</div>
    <div class="underline"></div>

    <div class="welcome">Selamat Datang {{ $first_name }} {{ $last_name }}</div>
    <div class="description">Terima kasih telah bergabung di Sanberbook. Social Media kita bersama</div>
  </main>

  <footer>
    © Copyright <b>Company</b> All Rights Reserved
    <br>
    Designed by <a href="#">BootstrapMade</a> Distributed by <a href="#">ThemeWagon</a>
  </footer>

</body>
</html>
