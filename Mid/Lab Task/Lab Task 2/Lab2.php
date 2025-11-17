<!DOCTYPE html>
<html>
<head>
    <title>Event Registration</title>
    <style>
        .form {
            border: 2px solid #fff0f0ff;
            border-radius: 10px;
            padding: 20px;
            width: 520px;
            background: white;
        }
        input {
            width: 95%;
            padding: 7px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #0863adff;
            color: white;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            font-size: 17px;
        }
        button:hover {
            background: red;
        }
        #output, #activityList {
            margin: 15px;
            font-size: 15px;
        }
        .activity-item {
            background: #e8f0fe;
            padding: 10px;
            border-radius: 5px;
            margin-top: 5px;
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body style="background: skyblue;">
    <center>
        <table class="form">
            <tr><td><h1>Participant Registration</h1></td></tr>

            <tr><td>Full Name:</td></tr>
            <tr><td><input type="text" id="name"></td></tr>

            <tr><td>Email:</td></tr>
            <tr><td><input type="text" id="email"></td></tr>

            <tr><td>Phone Number:</td></tr>
            <tr><td><input type="text" id="phone"></td></tr>

            <tr><td>Password:</td></tr>
            <tr><td><input type="password" id="password"></td></tr>

            <tr><td>Confirm Password:</td></tr>
            <tr><td><input type="password" id="confirmPassword"></td></tr>

            <tr><td><button onclick="validateForm()">Register</button></td></tr>

            <tr><td><div id="output"></div></td></tr>

            <tr><td><h1>Activity Selection</h1></td></tr>

            <tr><td>Activity Name:</td></tr>
            <tr><td><input type="text" id="activityInput"></td></tr>

            <tr><td><button onclick="addActivity()">Add Activity</button></td></tr>

            <tr><td><div id="activityList"></div></td></tr>
        </table> 
    </center>

    <script>
        function validateForm() {
            let name = document.getElementById("name").value.trim();
            let email = document.getElementById("email").value.trim();
            let phone = document.getElementById("phone").value.trim();
            let password = document.getElementById("password").value.trim();
            let confirmPassword = document.getElementById("confirmPassword").value.trim();

            let output = document.getElementById("output");

            if (!name || !email || !phone || !password || !confirmPassword) {
                output.innerHTML = "<span style='color:red;'>All fields are required!</span>";
                return;
            }

            if (password !== confirmPassword) {
                output.innerHTML = "<span style='color:red;'>Passwords do not match!</span>";
                return;
            }

            output.innerHTML = "<span style='color:green;'>Registration Successful!</span>";
        }

        function addActivity() {
            let activity = document.getElementById("activityInput").value.trim();
            let list = document.getElementById("activityList");

            if (!activity) return;

            let div = document.createElement("div");
            div.className = "activity-item";
            div.innerHTML = `${activity} <button onclick="this.parentElement.remove()">X</button>`;

            list.appendChild(div);
            document.getElementById("activityInput").value = "";
        }
    </script>
</body>
</html>
