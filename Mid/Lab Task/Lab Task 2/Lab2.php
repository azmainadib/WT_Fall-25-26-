<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Event Registration<title>
 <style>
    body {
        font-family:Arial;
        margin:40px;
        background:lightcoral;
    }

    h1,h2{
        color: black;
    }

    .container{
        background: white;
        padding: 20px:
        border-radius: 8px;
        border-radius: 8px;
        width: auto;

    }

    input{
        width:100%;
        padding: 8px:
        margin:6px 0 15px 0;
        border:1px solid #aaa;
        border-radius: 4px;

    }
    button{
        background:#007bff;
        color:white;
        padding: 10px 18px;
        border:none;
        border-radius:5px;
        cursor:pointer;

    }
    button:hover{
        background:red;
    }
    .activity-item{
        background:#e8f0fe;
        padding: 10px ;
        margin-top:8px;
        border-radius:5px;
        display: flex;
        justify-content: space-between;
        
    }
    .success{
        background:#c8f7c5;
        padding:10px;
        border-left:5px solid green;
        margin-bottom: 20px;
    }
    </style>
    </head>

    <body>
    <div class = "container">
        <h1>1. participent Registration</h1>
        <div id="successMessage"></div>

    <form id="registrationForm">
        <label>Full Name</label>
        <input type="text" id="name">
        <label>Email</label>
        <input type="text" id="email">

        <label>Phone Number</label>
        <input type="text" id="phone">

        <label>Password</label>
        <input type="password" id="password">

        <label>Confirm Password</label>
        <input type="password" id="confirmPassword">
        <button type="button" onclick="validateForm()">Register</button>
</from>
<hr>
<h2>2.Activity Selection</h2>

<input type="text" id="activityInput" placeholder="Enter Activity Name">
    <button onclick="addActivity()">Add Activity</button>

    <div id="activityList"></div>

</div>






