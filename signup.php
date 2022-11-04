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
                    <form action="#">
                        <div class="error-txt">
                            Произошла ошибка!
                        </div>
                        <div class="name-details">
                            <div class="field input">
                                <label>Имя</label>
                                <input type="text" placeholder="Имя">
                            </div>
                            <div class="field input">
                                <label>Фамилия</label>
                                <input type="text" placeholder="Фамилия">
                            </div>
                        </div>
                        <div class="field input">
                            <label>Почта</label>
                            <input type="email" placeholder="Почта">
                        </div>
                        <div class="field input">
                            <label>Пароль</label>
                            <input type="password" placeholder="Пароль">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="field image">
                            <label>Аватар</label>
                            <input type="file">
                        </div>
                        <div class="field button">
                            <input type="submit" value="Зарегистрироваться">
                        </div>
                    </form>
                    <div class="link">Зарегистрированы?<a href="#">Войти в аккаунт</a></div>
                </section>
            </div>
        </div>
        <script src="js/pass-show-hide.js"></script>
    </body>
</html>