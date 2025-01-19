<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Form</title>
    <style>
        body{
            font-family: Arial, sans-serif;
        }
        .main {
            width: 500px;
            height: 650px;
            margin: 70px auto;
            text-align: center;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="main">
        <img src="img/logo/menu-logo.png" height="40px" width="40px">
        <p><b>BHRS COLLEGE</b></p>
        <h2>Apply Form</h2>
        <h4>Fillup the form and Submit to the committee</h4>
        <form method="post" action="">
            <p>1. Name: <input required type="text" name="name"></p>
            <p>2. Father's Name: <input required type="text" name="father_name"></p>
            <p>3. Mother's Name: <input required type="text" name="mother_name"></p>
            <p>4. Birthday Date: <input required type="date" name="birthday_date"></p>
            <p><label for="gnd">5. Gender</label>
            <select name="gender" for="gnd">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
            </select>
            </p>
            <p>6. Current Address: <input required type="text" name="current_address"></p>
            <p>7. Permanent Address: <input required type="text" name="permanent_address"></p>
            <p>
                <label for="group">8. Group</label>
                <select name="group_name" for="group">
                    <option value="Science">Science</option>
                    <option value="Arts">Arts</option>
                    <option value="commerce">Commerce</option>
                </select>
            </p>
            <p>9. Mobile Number: <input required type="number" name="mobile_number"></p>
            <p>10. E-mail Address: <input required type="email" name="email_address"></p>
            <p>11. Nationality: <input required type="text" name="nationality"></p>
            <p>12. Image: <input required type="file" name="image"></p>
            <p><input type="submit" name="btn" value="Submit"></p>
        </form>
    </div>
</body>
</html>