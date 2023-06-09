<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="register-photo">
    <div class="form-container">
        <div class="image-holder"></div>
        <form method="post" action="index.html">
            <h2 class="text-center"><strong>Welcome back!</strong></h2>
            <div class="form-group"><input class="form-control" type="text" name="Username" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group">
                <div class="d-flex justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                    </div>
                    <div>
                        <a href="#" class="text-info">Forgot Password</a>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-block btn-info" type="submit">Login</button>
            </div>
            <a class="already" href="#">Terms of Use and Privacy Policy</a>
        </form>
    </div>
</div>
</body>
</html>
