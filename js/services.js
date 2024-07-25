let slideIndex = 1;
let autoSlideInterval;

function showSlides(n) {
    const slides = document.getElementsByClassName("carousel-item");
    if (n > slides.length) { slideIndex = 1; }
    if (n < 1) { slideIndex = slides.length; }
    for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove("active");
    }
    slides[slideIndex - 1].classList.add("active");
    autoSlideInterval = setTimeout(function() { plusSlides(1); }, 3000); 
}

function plusSlides(n) {
    clearTimeout(autoSlideInterval);
    showSlides(slideIndex += n);
}

document.addEventListener("DOMContentLoaded", function() {
    showSlides(slideIndex);

    document.querySelector(".carousel-control-prev").addEventListener("click", function() {
        plusSlides(-1);
    });
    document.querySelector(".carousel-control-next").addEventListener("click", function() {
        plusSlides(1);
    });

    const images = document.getElementsByClassName("service-img");
    for (let i = 0; i < images.length; i++) {
        images[i].onclick = function () {
            const modal = document.getElementById("fullpic-modal");
            const modalImg = document.getElementById("modal-image");
            const captionText = document.getElementById("caption");
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
    }

    const closeModal = function() {
        document.getElementById("fullpic-modal").style.display = "none";
    }

    const closeBtn = document.getElementsByClassName("close")[0];
    closeBtn.addEventListener("click", closeModal);
});
