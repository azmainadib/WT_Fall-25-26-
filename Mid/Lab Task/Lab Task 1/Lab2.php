<!DOCTYPE html>
<html>
    <head>
        <title>
            AIUB Course Registration
        </title>
        <style>
            .form {
            border: 3px solid #ff4d4d;
            border-radius: 10px;
            }
            .setcolour{
                border-bottom: 2px solid red;
                color: red;
            }
        </style>
    </head>
    <body>
        <center>
            
            <table class="form">
                <tr><td><h2 class="setcolour">Student Registration Information</h2></td></tr>
                <tr><td>First Name:</td></tr><br>
                <tr><td><input type="text"></td><br></tr>
               <tr><td>Last Name:</td></tr> 
                <tr><td><input type="text"><br></td></tr>
                <tr><td>Student ID:</td></tr>
                <tr><td><input type="text"></td></tr>
                <tr><td>Program/Major:</td></tr>
                <tr><td>
                <select>
                    <option> Select Program/Major</option>
                    <option>IP</option>
                    <option>JAVA</option>
                    <option>WT</option>
                    <option>OS</option>
                    <option>DS</option>
                    <option>RM</option>
                    <option>ICS</option>

                </select></td>
                <tr><td>Depertment</td></tr>
                <tr><td> <select>
                    <option> Select Department</option>
                    <option>CSE</option>
                    <option>BBA</option>
                    <option>EEE</option>

                </select></td></td></tr>
               

                <tr><td>Phone :</td></tr>
                <tr><td><input type="text"></td></tr>
                <tr><td>University Email:</td></tr>
                <tr><td><input type="email"></td></tr>
                <tr><td>Create Password:</td></tr>
                <tr><td><input type="passeord"></td></tr>
                <tr><td>Confirm Password:</td></tr>
                <tr><td><input type="password"></td></tr>
                <tr><td>Semister Selection</td></tr>
                <tr><td><input type="radio">Summer 2024
                        <input type="radio">Fall 2024
                        <input type="radio">Spring 2025
                        <input type="radio">Other/Special Term</td></tr>
                <tr><td>Request Credit Load(Max 15):</td></tr>
                <tr><td><input type="text" value="c.g.,9 or 12"></td></tr>
                <tr><td><input type="checkbox">I require academic advising before final registration.</td></tr>
                <tr><td><h2 class="setcolour">Course Selection</h2></td></tr><br><br>
                <tr><td><input type="checkbox">MATH 1201(cALCULUS)
                        <input type="checkbox">CS 2105 (Data Structures)
                        <input type="checkbox">ECON 1001 (Microeconomics)</td></tr>
                        <tr><td><input type="checkbox">PHY 1102 (Physics lab)</td></tr>

                        <tr><td>Comments/Special Request</td></tr>
                        <tr><td><input type="text"></td></tr>


                



                </table>
<center><button type="Submit">Submit
</center>
        </center>
    </body>
</html>