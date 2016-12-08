<html>
    <body>
        <h2>Math 270 Regex</h2><br>
        <form>
              <b>First & Last Name:</b> <br><input onkeyup = "checkName();"type="text" id = "name" name="name"><br>
              <span id="confirmName" class="confirmMessage"></span><br>
              <b>Date of Birth</b><br><input onkeyup = "checkBirth();" type="text" id="dob" name="dob"><br>
              <span id="confirmDOB" class="confirmMessage"></span><br>
              <b>OtterID</b> <br><input type="text" id = "otter" name="otter" onkeyup="checkID();"><br>
              <span id="confirmOtter" class="confirmMessage"></span><br>
              <b>Phone Number</b> <br><input type="text" id="number" name="number" onkeyup="checkNumber();"><br>
              <span id="confirmNumber" class="confirmMessage"></span><br>
              <b>ZIP Code</b><br><input type="text" id = "zip" name="zip" onkeyup="checkZip();"><br>
              <span id="confirmZip" class="confirmMessage"></span><br>
              <b>Class </b><br><input type="text" id = "class" name="class" onkeyup="checkClass();"><br>
              <span id="confirmClass" class="confirmMessage"></span><br>
              <b>Password</b><br><input type="password" id = "pass" name="pass" onkeyup="checkPw();"><br>
              <span id="confirmPass" class="confirmMessage"></span><br>

        </form>
    </body>
    
    
</html>
<script>
    function checkName(){
        var name = document.getElementById('name').value;
        var message = document.getElementById("confirmName");
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        var pattern = new RegExp('^[A-Za-z ,.\'-]+$');
        
        if(pattern.test(name)){
            
            document.getElementById('name').style.backgroundColor = goodColor;
            document.getElementById("confirmName").style.color = goodColor;
            document.getElementById("confirmName").innerHTML = "Regex Match!";
        }
        else{
            document.getElementById('name').style.backgroundColor = badColor;
            document.getElementById("confirmName").style.color = badColor;
            document.getElementById("confirmName").innerHTML = "Regex Mismatch";
        }
    }
    function checkBirth(){
        var name = document.getElementById('dob').value;
        var message = document.getElementById("confirmDOB");
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        var boolShit = /(\d{1,2})\/(\d{1,2})\/(\d{4})/.test(name);
        
        if(boolShit){
            
            
            document.getElementById('dob').style.backgroundColor = goodColor;
            document.getElementById("confirmDOB").style.color = goodColor;
            document.getElementById("confirmDOB").innerHTML = "Regex Match!";
        }
        else{
            //alert("fail");
            document.getElementById('dob').style.backgroundColor = badColor;
            document.getElementById("confirmDOB").style.color = badColor;
            document.getElementById("confirmDOB").innerHTML = "Regex Mismatch, correct format is : mm/dd/yyyy";
        }
    }
    function checkID(){
        var name = document.getElementById('otter').value;
        var message = document.getElementById("confirmOtter");
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        var boolShit = /[a-z]{4}[0-9]{4}$/.test(name);
        
        if(boolShit){
            
            document.getElementById('otter').style.backgroundColor = goodColor;
            document.getElementById("confirmOtter").style.color = goodColor;
            document.getElementById("confirmOtter").innerHTML = "Regex Match!";
        }
        else{
            //alert("fail");
            document.getElementById('otter').style.backgroundColor = badColor;
            document.getElementById("confirmOtter").style.color = badColor;
            document.getElementById("confirmOtter").innerHTML = "Regex Mismatch, correct format is abcd1234";
        }
    }
    function checkZip(){
        var name = document.getElementById('zip').value;
        var message = document.getElementById("confirmZip");
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        var boolShit = /^\d{5}(?:[-\s]\d{4})?$/.test(name);
        
        if(boolShit){
            
            document.getElementById('zip').style.backgroundColor = goodColor;
            document.getElementById("confirmZip").style.color = goodColor;
            document.getElementById("confirmZip").innerHTML = "Regex Match!";
        }
        else{
            //alert("fail");
            document.getElementById('zip').style.backgroundColor = badColor;
            document.getElementById("confirmZip").style.color = badColor;
            document.getElementById("confirmZip").innerHTML = "Regex Mismatch, correct format is 93281 or 93281-2314 ";
        }
    }
    function checkNumber(){
        var name = document.getElementById('number').value;
        var message = document.getElementById("confirmNumber");
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        var boolShit = /^((\(\d{3}\) ?)|(\d{3}-))?\d{3}-\d{4}$/.test(name);
        
        if(boolShit){
            
            document.getElementById('number').style.backgroundColor = goodColor;
            document.getElementById("confirmNumber").style.color = goodColor;
            document.getElementById("confirmNumber").innerHTML = "Regex Match!";
        }
        else{
            document.getElementById('number').style.backgroundColor = badColor;
            document.getElementById("confirmNumber").style.color = badColor;
            document.getElementById("confirmNumber").innerHTML = "Regex Mismatch, correct format is (281)330-8004";
        }
    }
    function checkClass(){
        var name = document.getElementById('class').value;
        var message = document.getElementById("confirmClass");
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        var boolShit = /[a-zA-Z]{3,4}[\s][0-9]{3}/.test(name);
        
        if(boolShit){
            document.getElementById('class').style.backgroundColor = goodColor;
            document.getElementById("confirmClass").style.color = goodColor;
            document.getElementById("confirmClass").innerHTML = "Regex Match!";
        }
        else{
            document.getElementById('class').style.backgroundColor = badColor;
            document.getElementById("confirmClass").style.color = badColor;
            document.getElementById("confirmClass").innerHTML = "Regex Mismatch, correct format is MATH 270";
        }
    }
    function checkPw(){
        var name = document.getElementById('pass').value;
        var message = document.getElementById("confirmPass");
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        var boolShit = /^(?=.*[A-Z])(?=.*[$@$!%#*?&])[A-Za-z\d$@#$!%*?&]{5,}/.test(name);
        
        if(boolShit){
            document.getElementById('pass').style.backgroundColor = goodColor;
            document.getElementById("confirmPass").style.color = goodColor;
            document.getElementById("confirmClass").innerHTML = "Regex Match!";
        }
        else{
            document.getElementById('pass').style.backgroundColor = badColor;
            document.getElementById("confirmPass").style.color = badColor;
            document.getElementById("confirmPass").innerHTML = 
            "Regex Mismatch, You must have at least 5 characters, one uppercase and one special character!";
        }
    }
    

</script>