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
                <section class="form signup">
                    <header>
                        Ez Chat
                    </header>
                    <form action="#" enctype="multipart/form-data">
                        <div class="error-txt">
                        </div>
                        <div class="name-details">
                            <div class="field input">
                                <label>Имя</label>
                                <input type="text" name="fname" placeholder="Имя" required>
                            </div>
                            <div class="field input">
                                <label>Фамилия</label>
                                <input type="text" name="lname" placeholder="Фамилия" required>
                            </div>
                        </div>
                        <div class="field input">
                            <label>Почта</label>
                            <input type="email" name="email" placeholder="Почта" require>
                        </div>
                        <div class="field input">
                            <label>Пароль</label>
                            <input type="password" name="pswrd" placeholder="Пароль" require>
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="field image">
                            <label>Аватар</label>
                            <input type="file" name="image" require>
                        </div>
                        <div class="field button">
                            <input type="submit" value="Зарегистрироваться">
                        </div>
                    </form>
                    <div class="link">Зарегистрированы?<a href="index.php">Войти в аккаунт</a></div>
                </section>
            </div>
        </div>
        <script src="js/pass-show-hide.js"></script>
        <script src="js/signup.js"></script>
    </body>
</html>