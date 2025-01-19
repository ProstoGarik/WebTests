document.addEventListener("DOMContentLoaded", function () {
    fetch('/using/footer.html')
        .then(response => response.text())
        .then(html => {
            document.body.insertAdjacentHTML('beforeend', html);
        })
        .catch(err => console.error('Ошибка загрузки футера:', err));
});
