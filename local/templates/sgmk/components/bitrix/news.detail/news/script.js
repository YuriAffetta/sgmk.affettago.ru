document.addEventListener("DOMContentLoaded", function() {
    const thumbnails = document.querySelectorAll('.thumbnail');
    const mainImage = document.getElementById('current-image');
    const modal = document.getElementById("modal");
    const modalImage = document.getElementById("modal-image");
    const closeModal = document.getElementById("close-modal");

    let currentIndex = 0; // Изначально показываем первое изображение

    // Функция для обновления изображения
    function updateMainImage(index) {
        const src = thumbnails[index].dataset.fullsize;
        mainImage.style.opacity = 0; // Устанавливаем непрозрачность на 0
        setTimeout(() => {
            mainImage.src = src; // Устанавливаем новое изображение
            mainImage.onload = () => {
                mainImage.style.opacity = 1; // Устанавливаем непрозрачность обратно на 1
            };
        }, 300); // Ждем 300 мс перед изменением изображения
    }

    // Функция для переключения изображений
    window.changeImage = function(direction) {
        currentIndex += direction;
        if (currentIndex < 0) {
            currentIndex = thumbnails.length - 1; // Переход к последнему изображению
        } else if (currentIndex >= thumbnails.length) {
            currentIndex = 0; // Переход к первому изображению
        }
        updateMainImage(currentIndex);
    };

    thumbnails.forEach((thumbnail, index) => {
        thumbnail.addEventListener('click', function() {
            currentIndex = index; // Сохраняем индекс изображения
            updateMainImage(currentIndex); // Меняем главное изображение
        });
    });

    // Открытие модального окна при клике на главное изображение
    mainImage.addEventListener('click', function() {
        modal.style.display = "block";
        modalImage.src = mainImage.src; // Устанавливаем источник изображения в модальном окне
    });

    // Закрытие модального окна
    closeModal.addEventListener('click', function() {
        modal.style.display = "none";
    });

    // Закрытие модального окна по клику вне изображения
    modal.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });

    // Устанавливаем первое изображение при загрузке
    updateMainImage(currentIndex);
});