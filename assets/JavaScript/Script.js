let slideIndex = 0;

function showSlides() {
    let i;
    const slides = document.getElementsByClassName("slide");
    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    
    slideIndex++;
    
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    
    slides[slideIndex - 1].style.display = "block";  
    setTimeout(showSlides, 3000);
}

function plusSlides(n) {
    showSlides(slideIndex += n);
}

window.onload = function() {
    showSlides();
};
