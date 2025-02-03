let images = [
    "https://via.placeholder.com/150",
    "https://via.placeholder.com/150/ff0000",
    "https://via.placeholder.com/150/00ff00",
    "https://via.placeholder.com/150/0000ff"
];

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
