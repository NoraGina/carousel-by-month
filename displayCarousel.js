let slideIndex = 0;
function showSlides(n){
    let i;
    let slides = document.querySelectorAll(".carousel-item");
  
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
     
        // slides[i].style.display = "none";
        slides[i].classList.add('inactive');
    }
   
    slideIndex ++;
    // slides[slideIndex-1].style.display = "block";
    slides[slideIndex-1].classList.remove('inactive');
    slides[slideIndex-1].classList.add('active');
    
  }
  function plusSlides(n){
    clearInterval(myTimer);
    if (n < 0){
      console.log(slides.length);
      showSlides(slideIndex -= 1);
    } else {
      console.log(slides.length);
     showSlides(slideIndex += 1); 
    }
    if (n === -1){
      myTimer = setInterval(function(){plusSlides(n + 2)}, 5000);
    } else {
      myTimer = setInterval(function(){plusSlides(n + 1)}, 5000);
    }
  }
  
  window.addEventListener("load",function() {
    showSlides(slideIndex);
    myTimer = setInterval(function(){plusSlides(1)}, 4000);
  })