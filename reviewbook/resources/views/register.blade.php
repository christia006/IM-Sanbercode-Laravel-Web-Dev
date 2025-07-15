<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun Baru</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
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
        <textarea name="bio" rows="10" cols="30"></textarea><br>

        <input type="submit" value="Sign Up">
    </form>
</body>
</html>
