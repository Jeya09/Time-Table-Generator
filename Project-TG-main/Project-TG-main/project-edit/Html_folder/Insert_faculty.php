<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Faculty Login form</title>
    <style>
        form {
            display: flex;
            justify-content: center;
            position: relative;
        }
        fieldset {
            background-color: #eeeeee;
            max-width: 75%;
            min-width: fit-content;
            font-family: serif;
            font-size: 20px;
            display: block;
        }
        label {
            display: inline-block;
            width: 50%;
            font-family: serif;
            font-size: 25px;
        }
        input[type="text"],
        input[type="email"],
        select {
            font-family: serif;
            font-size: 20px;
            width: 200px; /* Adjust the width of input boxes */
            display: inline-block; /* Ensure each input is on a new line */

        }
        select{
            text-align: center;
        }
        #FACULTY_PASSWORD{
            font-family: serif;
            font-size: 20px;
            max-width: 150px; /* Adjust the width of input boxes */
            display: inline-block; /* Ensure each input is on a new line */      
        }
        #password-toggle {
            display: inline-block;
            font-family: serif;
            font-size: 16px;
        }
        button {
            font-family: serif;
            font-size: 20px;
        }
    </style>
</head>
<body>
    
    <form action="Php_folder\Insert-faculty.php" method="post">
        <fieldset id="formfield">
            <legend align="center"> FACULTY REGISTRATION </legend><br>
            <label for="FACULTY ID">FACULTY ID</label>
            <input type="text" id="FACULTY_ID" name="FACULTY_ID" required><br><br><br>

            <label for="FACULTY NAME">FACULTY NAME</label>
            <input type="text" id="FACULTY_NAME" name="FACULTY_NAME" required><br><br><br>

            <label for="FACULTY DEPARTMENT">DEPARTMENT</label>
            <select id="FACULTY_DEPARTMENT" name="FACULTY_DEPARTMENT" required>
                <option value="CSE">CSE</option>
                <option value="IT">IT</option>
                <option value="ECE">ECE</option>
                <option value="BME">BME</option>
            </select><br><br><br>

            <label for="FACULTY EMAIL">EMAIL</label>
            <input type="email" id="FACULTY_EMAIL" name="FACULTY_EMAIL" required><br><br><br>

            <label for="FACULTY_PASSWORD">PASSWORD</label>
            <input type="password" id="FACULTY_PASSWORD" name="FACULTY_PASSWORD" minlength="8">
            <button type="button" id="password-toggle" onclick="togglePassword()">view</button>
            <br><br><br>

            <label for="FACULTY_ROLE">ROLE</label>
            <select id="FACULTY_ROLE" name="FACULTY_ROLE" required>
                <option value="ADMIN">ADMIN</option>
                <option value="FACULTY">FACULTY</option>
            </select><br><br><br>

            <label for="FACULTY_ROLE_DESCRIPTION">ROLE DESCRIPTION</label>
            <input type="text" id="FACULTY_ROLE_DESCRIPTION" name="FACULTY_ROLE_DESCRIPTION" required><br><br><br>
            <center><button onclick="handleLogout()">Submit</button></center>
            
        </fieldset>
    </form>
    <form action="Php_folder/faculty_csv.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload CSV" name="submit">
    </form>

    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("FACULTY_PASSWORD");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
        function handleLogout(){
            window.location.href = "Html_folder\Php_folder\logout.php";
        };
    </script>
    
</body>
</html>
<?php
    session_destroy();
    exit();
?>
