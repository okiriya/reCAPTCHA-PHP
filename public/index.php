<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recaptcha</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        .g-recaptcha {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-5">
            <h3>FindMyDate - Sign In</h3>
            <form method="POST" action="login.php">
                <div class="form-group">
                    <label for="username">Username</label>
                    <div>
                        <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="">     
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="">
                    </div>
                </div>
                <br/>
                <div class="g-recaptcha" data-sitekey="6LfFPmscAAAAAJeo2QMI1dWx4qBKXSMBvjTEY1YS"></div>
                <br/>
                
                <div class="form-group">
                    <div>
                        <button type="submit" class="btn btn-primary" name="submit">Sign In</button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>  
    </div>

</body>
</html>




