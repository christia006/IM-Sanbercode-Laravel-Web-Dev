<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - SanberBook</title>
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
            max-width: 800px;
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

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        p {
            margin: 10px 0 5px 0;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: green;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 14px;
            border-radius: 3px;
        }

        input[type="submit"]:hover {
            background-color: darkgreen;
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
        <div class="title">REGISTER</div>
        <div class="underline"></div>

        <form action="/welcome" method="POST">
            @csrf
            <p>First name:</p>
            <input type="text" name="first_name" required>

            <p>Last name:</p>
            <input type="text" name="last_name" required>

            <p>Gender:</p>
            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="Other">
            <label for="other">Other</label>

            <p>Nationality:</p>
            <select name="nationality">
                <option value="Indonesian">Indonesian</option>
                <option value="American">American</option>
                <option value="British">British</option>
                <option value="Other">Other</option>
            </select>

            <p>Language Spoken:</p>
            <input type="checkbox" id="bahasa_indonesia" name="language[]" value="Bahasa Indonesia">
            <label for="bahasa_indonesia">Bahasa Indonesia</label><br>
            <input type="checkbox" id="english" name="language[]" value="English">
            <label for="english">English</label><br>
            <input type="checkbox" id="language_other" name="language[]" value="Other">
            <label for="language_other">Other</label>

            <p>Bio:</p>
            <textarea name="bio" rows="4"></textarea>

            <br>
            <input type="submit" value="Sign Up">
        </form>
    </main>

    <footer>
        © Copyright <b>Company</b> All Rights Reserved
    </footer>

</body>
</html>
