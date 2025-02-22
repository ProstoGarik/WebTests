<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация - Haha.ru</title>
    <link rel="stylesheet" href="/using/style.css">
    <style>
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 50px 20px;
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

        form input[type="text"],
        form input[type="email"],
        form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        form input[type="radio"] {
            margin-right: 10px;
        }

        form .account-specific {
            display: none;
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
    </style>
    <script>
        function toggleAccountFields() {
            const workerFields = document.getElementById('worker-fields');
            const companyFields = document.getElementById('company-fields');
            const accountType = document.querySelector('input[name="account-type"]:checked').value;

            if (accountType === 'worker') {
                workerFields.style.display = 'block';
                companyFields.style.display = 'none';
            } else if (accountType === 'company') {
                workerFields.style.display = 'none';
                companyFields.style.display = 'block';
            }
        }
    </script>
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
        <h1>Регистрация</h1>
        <form action="/php/functions.php" method="post">
            <label>Тип аккаунта</label>
            <label>
                <input type="radio" name="account-type" value="worker" onchange="toggleAccountFields()" required>
                Работник
            </label>
            <label>
                <input type="radio" name="account-type" value="company" onchange="toggleAccountFields()"> Кампания
            </label>

            <label for="email">Почта</label>
            <input type="email" id="email" name="email" required>

            <div id="worker-fields" class="account-specific">
                <label for="worker-name">Имя</label>
                <input type="text" id="worker-name" name="worker-name">

                <label for="worker-surname">Фамилия</label>
                <input type="text" id="worker-surname" name="worker-surname">
            </div>

            <div id="company-fields" class="account-specific">
                <label for="company-name">Название кампании</label>
                <input type="text" id="company-name" name="company-name">
            </div>

            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Повторите пароль</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <button type="submit">Зарегистрироваться</button>
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