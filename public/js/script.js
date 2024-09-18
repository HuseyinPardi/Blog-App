document.addEventListener("DOMContentLoaded", function () {
    // Tüm auth-button sınıfına sahip butonları seç
    const buttons = document.querySelectorAll(".auth-button");

    // Her butona tıklanma olayını ekle
    buttons.forEach((button) => {
        button.addEventListener("click", function () {
            this.classList.toggle("clicked");
        });
    });
});
