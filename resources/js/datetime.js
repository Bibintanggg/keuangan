document.addEventListener("DOMContentLoaded", function () {
    const jam = new Date().getHours();
    let salam = "";

    if (jam >= 4 && jam < 10) {
        salam = "Selamat pagi";
    } else if (jam >= 10 && jam < 15) {
        salam = "Selamat siang";
    } else if (jam >= 15 && jam < 18) {
        salam = "Selamat sore";
    } else if (jam >= 18 || jam < 4) {
        salam = "Selamat malam";
    }

    const elemen = document.getElementById("ucapan-waktu");
    if (elemen) {
        elemen.textContent = salam;
    } 
});
