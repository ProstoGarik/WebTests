<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход - Haha.ru</title>
    <link rel="stylesheet" href="/using/style.css">
    <style>
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        main h1 {
            font-size: 2.5em;
            color: #004d40;
            margin-bottom: 20px;
        }

        form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        form label {
            display: block;
            margin-bottom: 10px;
            font-size: 1rem;
            color: #004d40;
        }

        form input[type="email"],
        form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        form button {
            width: 100%;
            padding: 10px;
            background-color: #00796b;
            color: white;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #004d40;
        }

        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .remember-me input {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo-and-forum">
            <a href="index.php">
                <img src="/resources/HahaLogo.png" alt="Логотип">
            </a>
            <nav>
                <div class="search-container">
                    <a href="#" id="search-link">Поиск</a>
                </div>
                <a href="forum.php">Форум</a>
                <a href="chat.php">Чаты</a>
            </nav>
        </div>
        <nav>
            <a href="registration.php">Регистрация</a>
            <a href="login.php">Вход</a>
        </nav>
    </header>
    <main>
        <h1>Вход</h1>
        <form action="/php/functions.php" method="post">
            <label for="email">Почта</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Пароль</label>
            <input type="text" id="password" name="password" required>

            <div class="remember-me">
                <input type="checkbox" id="remember-me" name="remember-me">
                <label for="remember-me">Запомнить меня</label>
            </div>
            <button type="submit">Войти</button>
        </form>
    </main>
    <footer>
        <div class="footer-content">
            <div class="contact-us">
                <h3>Связаться с нами:</h3>
                <p>
                    <img src="/resources/email.png" alt="Почта" class="icon">
                    RealPochta100@haha.ru
                </p>
                <p>
                    <img src="/resources/phone.png" alt="Телефон" class="icon">
                    8 (800) 555-35-35
                </p>
                <p>
                    <img src="/resources/home.png" alt="Адрес" class="icon">
                    г. Тверь, ул. Настоящая, д. 1
                </p>
            </div>
            <div class="social-media">
                <h3>Мы в соцсетях:</h3>
                <div class="icons">
                    <a href="#"><img src="/resources/facebook.png" alt="Facebook"></a>
                    <a href="#"><img src="/resources/twitter.png" alt="Twitter"></a>
                    <a href="#"><img src="/resources/instagram.png" alt="Instagram"></a>
                    <a href="#"><img src="/resources/vk.png" alt="Vk"></a>
                </div>
            </div>
            <div class="support-project">
                <h3>Поддержать проект:</h3>
                <a href="#" class="support-link">Сделать вклад</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Bananchik. Никакие права не защищены.</p>
        </div>
    </footer>
    <script>
        document.getElementById('search-link').addEventListener('click', function (event) {
            event.preventDefault();
            const searchContainer = this.parentElement;
            searchContainer.innerHTML = '<input type="text" placeholder="Введите запрос...">';
        });
    </script>
</body>

</html>