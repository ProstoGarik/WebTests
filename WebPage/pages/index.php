<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная - Haha.ru</title>
    <link rel="stylesheet" href="/using/style.css">
    <style>
        main {
            text-align: center;
            padding: 50px 20px;
        }

        main h1 {
            font-size: 3em;
            color: #004d40;
            margin-bottom: 20px;
        }

        main p {
            font-size: 1.2em;
            color: #00796b;
        }

        .search-container {
            display: inline-block;
        }

        .search-container input[type="text"] {
            padding: 5px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
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
        <h1>Добро пожаловать на Haha.ru</h1>
        <div class="slider">
            <div class="slide">
                <img src="/resources/Workers.jpg" alt="Фото 1">
                <p>Нанимайте проффесионалов</p>
            </div>
            <div class="slide">
                <img src="/resources/Career.jpg" alt="Фото 2">
                <p>Поднимайтесь по карьерной лестнице</p>
            </div>
            <div class="slide">
                <img src="/resources/Office.jpg" alt="Фото 3">
                <p>Общайтесь с единомышленниками</p>
            </div>
            <div class="slide">
                <img src="/resources/WorldWeb.jfif" alt="Фото 4">
                <p>Будьте частью IT-сообщества</p>
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
        let currentIndex = 0;
        const slides = document.querySelectorAll('.slider .slide');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                if (i === index) {
                    slide.classList.add('active');
                }
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }

        setInterval(nextSlide, 3000);
        showSlide(currentIndex);

        document.getElementById('search-link').addEventListener('click', function (event) {
            event.preventDefault();
            const searchContainer = this.parentElement;
            searchContainer.innerHTML = '<input type="text" placeholder="Введите запрос...">';
        });
    </script>
</body>
</html>