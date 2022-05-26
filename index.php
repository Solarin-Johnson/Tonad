<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Forn</title>
</head>

<body>

    <!--  -->
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: cursive;
        }

        #title {
            text-align: center;
        }

        .form {
            margin: 5% auto;
            width: 85%;
            display: flex;
            flex-flow: row nowrap;
            justify-content: center;
        }

        #form-group {
            padding: 1rem;
        }

        button {
            padding: .5rem 2rem;
            border-radius: 5px;
            cursor: pointer;
            border: none;
        }
        button:hover{
            background-color: black;
            color: white;
            letter-spacing: 1px;
        }
    </style>

    <div class="form">

        <form action="user_data.php" method="post">
            <div id="title">Registration Form</div>
            <!-- name -->
            <div id="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required><br>
            </div>

            <!-- email -->
            <div id="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required><br>
            </div>

            <!-- DOB -->
            <div id="form-group">
                <label for="dob">Date Of Birth:</label>
                <input type="date" name="dob" id="dob" required>
            </div>

            <!-- Gender -->
            <div id="form-group">
                <label for="gender">Gender:</label>
                <input type="text" name="gender" id="gender" required>
            </div>

            <!-- Country -->
            <div id="form-group">
                <label for="country">Country:</label>
                <input type="text" name="country" id="country" required>
            </div>

            <div style="text-align: right;">
                <button name="submit" type="submit">submit</button>
            </div>


        </form>
    </div>

</body>

</html>