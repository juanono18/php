<!DOCTYPE html>
<html>
  
<head>
    <title>creating mailing system</title>
    <style>
        legend {
            display: block;
            padding-left: 2px;
            padding-right: 2px;
            border: none;
        }
        @keyframes showLogin {
            0% {
                background: #d7e7f1;
                transform: translate(40%, 10px);
            }
            50% {
                transform: translate(0, 0);
            }
            100% {
                background-color: #fff;
                transform: translate(42.5vw, -20px);
            }
        }
    </style>
    <script type="text/javascript">
        function validate() {
  
            var user = document.getElementById("e").value;
            var user2 = document.getElementById("e");
            var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (re.test(user)) {
                alert("done");
                return true;
            }
            else {
                user2.style.border = "red solid 3px";
                return false;
            }
        }
    </script>
</head>
  
<body bgcolor="cyan">
    <center>
        <h1>Email Registration</h1>
        <form>
            <fieldset style="width:300px">
                <legend>Registation Form</legend>
                <table>
                    <tr>
                        <input type="text" 
                            placeholder="firstname" 
                            maxlength="10">
                    </tr>
                    <br><br>
                    <tr>
                        <input type="text" 
                            placeholder="lastname" 
                            maxlength="10">
                    </tr>
                    <br><br>
                    <tr>
                        <input type="email" 
                            placeholder="username@gmail.com" id="e">
                    </tr>
                    <br><br>
                    <tr>
                        <input type="password" placeholder="password">
                    </tr>
                    <br><br>
                    <tr>
                        <input type="password" placeholder="confirm">
                    </tr>
                    <br><br>
                    <tr>
                        <input type="text" placeholder="contact">
                    </tr>
                    <br><br>
                    <tr>
                        <label>Gender:</label>
                        <select id="gender">
                            <option value="male">male</option>
                            <option value="female">female</option>
                            <option value="others">others</option>
                        </select>
                    </tr>
                    <br><br>
                    <tr><input type="submit" 
                        onclick="validate()" value="create">
                    </tr>
                </table>
            </fieldset>
        </form>
    </center>
</body>
  
</html>