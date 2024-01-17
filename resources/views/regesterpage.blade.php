<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <script defer src="script.js"></script>
</head>

<body>
    <div class="form_pox">
        <div class="button_pox">
            <div id="btn"></div>
            <button type="button" id="login_putton" class="toggle-button" onclick="login()">login</button>
            <button type="button" id="regester_putton" class="toggle-button" onclick="regester()">regester</button>
        </div>

        <div>
            <!-- login form -->
            <form class="form" id="login_form">
                <label style="font-size: 25px;" for="email"> E-Mail :</label> 
                <input style="margin-bottom: 40px ;" type="text" id="email" class="input" placeholder="blease enter your email" onkeyup="validate()" required>
                
                <label style="font-size: 25px;" for="pass" >Password :</label>
                <input style="margin-bottom: 40px ;" type="password" id="pass" class="input" placeholder="please enter your password" required>
                <button type="submit" id="login">Login</button>
            </form>


            <!-- regestration form -->
            <form class="form" id="regester_form">
                <div>
                    <input type="text" id="fname" class="input" placeholder="Enter your first name" required />
                </div>
                <div>
                    <input type="text" class="input" id="lname" placeholder="Enter your last name" required />
                </div>
                <div>
                    <input type="text" id="fullname"class="input" placeholder="your full name is:" name="Fullname" readonly />
                </div>
                <div>
                    <input type="text" id="email" class="input"placeholder="blease enter your email" onkeyup="validate()" required>
                </div>
                        <input class="input" type="password" id="pass" placeholder="please enter your password" required>
                <div >
                    <div style="display: flex;">
                    <select class="input" id="code" required>
                        <option value="011">011</option>
                        <option value="012">012</option>
                        <option value="015">015</option>
                        <option value="010">010</option>
                    </select>
                    <input class="input"type="tel" id="phone" placeholder="blease enter your phone"
                        maxlength="8" required>
                    </div>
                </div>
                <button type="submit" id="submit">submit</button>
            </form>
        </div>
    </div>
</body>

</html>