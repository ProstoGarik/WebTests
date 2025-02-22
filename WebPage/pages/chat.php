<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Чат - Haha.ru</title>
    <link rel="stylesheet" href="/using/style.css">
    <style>
        main {
            display: flex;
        }

        .chat-list {
            width: 30%;
            background-color: #ffffff;
            border-right: 1px solid #ddd;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .chat-list .placeholder {
            text-align: center;
            color: #888;
            font-size: 1.2em;
            padding: 20px;
        }

        .chat-window {
            width: 70%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;
            color: #888;
            font-size: 1.2em;
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
        <div class="chat-list">
            <div class="placeholder">Тут появятся ваши чаты</div>
        </div>
        <div class="chat-window">
            Открытый чат отображается здесь
        </div>
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
        document.getElementById('search-link').addEventListener('click', function(event) {
            event.preventDefault();
            const searchContainer = this.parentElement;
            searchContainer.innerHTML = '<input type="text" placeholder="Введите запрос...">';
        });
    </script>
</body>
</html>
