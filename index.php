<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ez Chat</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    </head>
    <body>
        <div class="wrapper">
            <div class="auth">
                <section class="form login">
                    <header>
                        Ez Chat
                    </header>
                    <form action="#">
                        <div class="error-txt">
                            Произошла ошибка!
                        </div>
                        <div class="field input">
                            <label>Почта</label>
                            <input type="email" placeholder="Почта" name="email" required>
                        </div>
                        <div class="field input">
                            <label>Пароль</label>
                            <input type="password" placeholder="Пароль" name="pswrd" required>
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="field button">
                            <input type="submit" value="Войти">
                        </div>
                    </form>
                    <div class="link">Впервые здесь?<a href="signup.php">Регистрация</a></div>
                </section>
            </div>
        </div>
        <script src="js/pass-show-hide.js"></script>
        <script src="js/login.js"></script>
    </body>
</html>