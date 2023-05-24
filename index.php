<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>SIGN UP</title>
    <link rel="icon" href="">
</head>

<body>

    <div class="container">
        <div class="row">



            <div class="col-12 header">
                <div class="row">
                    <label class="form-label signUp">Sign Up</label>
                </div>
            </div>

            <div class="msg d-none" id="msg">
                <div class="message" id="message">
                    <span class="messageText" id="messageText"></span>
                </div>
            </div>


            <label for="image" class="img" onclick="celectImg();">
                
                <img src="img/user.png" class="profileImg" id="img">
                <input type="file" class="d-none" id="image" accept="image/**">
            </label>


            <div class="nameDiv">

                <div class="firstName">
                    <label class="form-label nameTitle">First Name</label>
                    <input type="text" class="input" placeholder="First Name" id="firstName">
                </div>
                <div class="lastName">
                    <label class="form-label nameTitle">Last Name</label>
                    <input type="text" class="input" placeholder="Last Name" id="lastName">
                </div>

            </div>
            <div class="emailDiv">

                <div class="email">
                    <label class="form-label nameTitle">Email</label>
                    <input type="text" class="input" placeholder="jony@gmail.com" id="email">
                </div>
            </div>

            <div class="nameDiv">

                <div class="firstName">
                    <label class="form-label nameTitle">Mobile Number</label>
                    <input type="text" class="input" placeholder="Mobile Number" id="mobileNumber">
                </div>
                <div class="lastName">
                    <label class="form-label nameTitle">Password</label>
                    <input type="password" class="input" placeholder="Password" id="password">
                </div>

            </div>

            <div class="button">
                <button class="savebtn" type="submit" onclick="save();">Save</button>
            </div>

        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>