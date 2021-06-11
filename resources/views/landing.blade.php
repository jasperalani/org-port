<!DOCTYPE html>
<html>

<head>
    <title>Org-Port</title>

    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/org-port.css') }}">
</head>

<body>

    <div class="page-wrapper container">

        <h1>Org-Port</h1>

        <div class="box-wrapper">

            <div class="login">

                <form>

                    <h3>Welcome back</h3>

                    <label for="username">
                        <span>Username</span>
                        <input type="text" name="username" required/>
                    </label>

                    <label for="password">
                        <span>Password</span>
                        <input type="password" name="password" required/> 
                    </label>

                    <button class="submit" type="submit">Login</button>

                </form>

            </div>

            <div class="register">

                <form method="post" action="/register">

                    <h3>Create an account</h3>

                    <label for="username">
                        <span>Username</span>
                        <input type="text" name="username" required/>
                    </label>
 
                    <label for="email"> 
                        <span>Email</span>
                        <input type="text" name="email" required/>
                    </label>

                    <label for="password">
                        <span>Password</span>
                        <input type="password" name="password" required/>
                    </label>

                    <button class="submit" type="submit">Register</button>

                </form>

        </div>

    </div>

</div>

</body>

</html>