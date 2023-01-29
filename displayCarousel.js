// let slideIndex = 1; 
// let i;
// let slides = document.querySelectorAll(".carousel-item");

// auto();


// function showSlides(n) {
//     console.log(slides.length);
//   if (n > slides.length) {slideIndex = 1}    
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
     
//     slides[i].classList.remove("active");
//   }
  
  
//   slides[slideIndex-1].classList.add('active'); 
  
 
// }

// function auto() {
//   slideIndex++;
//   if (slideIndex > slides.length) {slideIndex = 1}
//   showSlides(slideIndex);
//   console.log(slides[slideIndex]); 
//   setTimeout(auto, 4000);
// }
let indexValue = 0;
  function slideShow(){
           setTimeout(slideShow, 3500);
       let x;
          const img = document.querySelectorAll(".carousel-item");
           for(x = 0; x < img.length; x++){
             img[x].style.display = "none";
            }
            indexValue++;
            if(indexValue > img.length){indexValue = 1}
            img[indexValue -1].style.display = "block";
            console.log(img[indexValue]);
          }
         slideShow();
