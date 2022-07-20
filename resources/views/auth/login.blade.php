<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        label{
            display: block;
        }
       .container{
            width: 80%;
            margin: 30px auto;
        }
        .form-container{
            border: 1px solid #666;
        }
        .form-group{
            margin-right:15px;
            margin-left:15px;
        }
       
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="text" name="password" id="password">
            </div>
            <div class="form-group">
            <button id="submit_btn">login</button>
        </div>

            
        </div>
    </div> 
    
    <script src="/app.js">  </script>
</body>
</html>