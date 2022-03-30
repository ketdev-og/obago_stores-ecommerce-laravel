
// var slideIndex = 0;

// showSlides();

// function showSlides() {
//   var i;
//   const slides = document.querySelectorAll('.slide');
//   const indicators = document.querySelectorAll('.ind_details')
  
//   slideIndex++;
//   if (slideIndex > slides.length) {slideIndex = 1}

  
//   slides[slideIndex-1].classList.replace('remove_slide', 'show_slide');
//   indicators[slideIndex-1].classList.replace('remove_border', 'show_border');
//   setTimeout(removeSlide, 5000); // Change image every 2 seconds
//   setTimeout(showSlides, 5000)
// }

// function removeSlide(){
//     const slides = document.querySelectorAll('.slide');
//     const indicators = document.querySelectorAll('.ind_details')
//     slides[slideIndex-1].classList.replace('show_slide', 'remove_slide');
//     indicators[slideIndex-1].classList.replace('show_border', 'remove_border');
// }


var slidetoshow = 1
var slide = document.querySelectorAll('.slide');
var sele_con = document.querySelectorAll('.ind_details');


function currentslide(n){
    slidetoshow = n
    slideshow()  
}

function slideshow(){
    var i;   
    for(i=0; i<slide.length; i++){
        slide[i].style.display = "none"
        sele_con[i].style.border = 'none';
        var cos = sele_con[i].children
        cos[0].style.color = "#b3b3b3" 
    }

    slide[slidetoshow-1].style.display="block"
    slide[slidetoshow-1].classList.add('show_slide')

    sele_con[slidetoshow - 1].style.borderBottom = '2px solid #8b323234';
    var cos = sele_con[slidetoshow-1].children
    cos[0].style.color = "#b90808"  
    
}

function change(){
        setInterval(function(){
            slidetoshow++
            if(slidetoshow > slide.length){
                slidetoshow =1 
            }
            slideshow()
        }, 8000);
        
}

function dropDown() {
    document.getElementById("myDropdown").classList.toggle("ob-show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("ob-dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('ob-show')) {
          openDropdown.classList.remove('ob-show');
        }
      }
    }
  }

slideshow()
change();




  