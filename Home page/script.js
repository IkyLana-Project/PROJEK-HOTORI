// JavaScript untuk menggeser gambar
let currentIndex = 0;
const images = ['tes.gif', 'footergif.gif',]; // Ganti dengan nama gambar Anda

const imageElement = document.querySelector('.trailer-image img');

function changeImage() {
    currentIndex = (currentIndex + 1) % images.length;
    imageElement.src = images[currentIndex];
}

// Ubah gambar setiap 5 detik
setInterval(changeImage, 5000);
