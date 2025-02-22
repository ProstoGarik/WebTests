<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форум - Haha.ru</title>
    <link rel="stylesheet" href="/using/style.css">
    <style>
        main {
            padding: 50px 20px;
            height: 100vh;
        }

        main h1 {
            font-size: 3em;
            color: #004d40;
            margin-bottom: 20px;
            text-align: center;
        }

        main .no-posts {
            font-size: 1.5em;
            color: #00796b;
            text-align: center;
            margin-bottom: 40px;
        }

        .post-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        .post {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .post h2 {
            margin: 0 0 10px;
            font-size: 1.5em;
            color: #004d40;
        }

        .post p {
            margin: 0 0 10px;
            font-size: 1em;
            color: #333;
        }

        .post .meta {
            font-size: 0.9em;
            color: #777;
        }

        .create-post {
            text-align: center;
            margin: 40px 0;
        }

        .create-post button {
            padding: 10px 20px;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .create-post button:hover {
            background-color: #004d40;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #d0f8d0;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #004d40;
            color: white;
            padding: 10px 20px;
        }

        .logo-and-forum {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        header img {
            height: 80px;
        }

        .logo-and-forum nav {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .logo-and-forum nav a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
            position: relative;
        }

        header nav a {
            color: white;
            text-decoration: none;
            background-color: #00796b;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        header nav a:hover {
            background-color: #004d40;
        }

        footer {
            background-color: #004d40;
            color: white;
            padding: 20px 40px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-content h3 {
            margin-bottom: 10px;
            font-size: 1.5em;
        }

        .footer-content p,
        .footer-content a {
            font-size: 1em;
            margin: 5px 0;
            text-decoration: none;
            color: white;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .footer-content a:hover {
            text-decoration: underline;
        }

        .icons {
            display: flex;
            gap: 10px;
        }

        .icons img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            transition: transform 0.3s ease;
        }

        .icons img:hover {
            transform: scale(1.2);
        }

        .icon {
            width: 20px;
            height: 20px;
            object-fit: contain;
        }

        .support-link {
            display: inline-block;
            background-color: #00796b;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            transition: background-color 0.3s ease;
        }

        .support-link:hover {
            background-color: #004d40;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
            border-top: 1px solid #00796b;
            padding-top: 10px;
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
        <h1>Последние посты</h1>
        <p class="no-posts">Пока постов нет</p>

        <div class="create-post">
            <button>Создать новый пост</button>
        </div>

        <div class="post-list">
            <div class="post">
                <h2>Заголовок поста</h2>
                <p>Краткое описание поста. Это место для содержания, которое привлекает внимание пользователей.</p>
                <p class="meta">Автор: Имя пользователя | Дата: 01.01.2025</p>
            </div>

            <div class="post">
                <h2>Ещё один пост</h2>
                <p>Краткое содержание поста. Здесь может быть дополнительная информация.</p>
                <p class="meta">Автор: Другой пользователь | Дата: 02.01.2025</p>
            </div>
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
        document.getElementById('search-link').addEventListener('click', function (event) {
            event.preventDefault();
            const searchContainer = this.parentElement;
            searchContainer.innerHTML = '<input type="text" placeholder="Введите запрос...">';
        });
    </script>
</body>

</html>