const imagens = document.querySelectorAll('.gallery img');

// Cria um array para armazenar os src das imagens
const images = [];

// Itera sobre cada imagem e adiciona o src ao array
imagens.forEach(imagem => {
    images.push(imagem.src);
});

let currentIndex = 0;

function openFullscreen(index) {
    currentIndex = index;
    document.getElementById("fullscreen-img").src = images[currentIndex];
    document.getElementById("fullscreen-view").style.display = "flex";
    document.body.style.overflow = "hidden";
    updateThumbnails();
}

function closeFullscreen(event) {
    if (event.target.id === "fullscreen-view" || event.target.classList.contains("close")) {
        document.getElementById("fullscreen-view").style.display = "none";
        document.body.style.overflow = "auto";
    }
}

function prevImage(event) {
    event.stopPropagation();
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    document.getElementById("fullscreen-img").src = images[currentIndex];
}

function nextImage(event) {
    event.stopPropagation();
    currentIndex = (currentIndex + 1) % images.length;
    document.getElementById("fullscreen-img").src = images[currentIndex];
}

function updateThumbnails() {
    let container = document.getElementById("thumbnails");
    container.innerHTML = "";
    images.forEach((img, index) => {
        let thumb = document.createElement("img");
        thumb.src = img;
        thumb.onclick = () => openFullscreen(index);
        container.appendChild(thumb);
    });
}

function toggleThumbnails() {
    let container = document.getElementById("thumbnails");
    container.style.display = container.style.display === "none" ? "flex" : "none";
}
