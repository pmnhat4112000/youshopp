
 //menu click line
const $a = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const tabs = $$(".tab-item");
const panes = $$(".tab-pane");

const tabActive = $a(".tab-item.active");
const line = $a(".tabs .line");

line.style.left = tabActive.offsetLeft + "px";
line.style.width = tabActive.offsetWidth + "px";

tabs.forEach((tab, index) => {
  const pane = panes[index];

  tab.onclick = function () {
    $a(".tab-item.active").classList.remove("active");
   

    line.style.left = this.offsetLeft + "px";
    line.style.width = this.offsetWidth + "px";

    this.classList.add("active");
   
  };
});



// 




//silde 
 $(document).ready(function(){
	   $('.autoslide').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  autoplay: true,
  autoplaySpeed: 1900,
   prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fas fa-chevron-left  btn-left' aria-hidden='true' ></i></button>",
   nextArrow:"<button type='button' class='slick-next pull-right'><i class='fas fa-chevron-right btn-right ' aria-hidden='true'></i></button>",
   dots: true,
   responsive: [
    {
        breakpoint: 415,
        settings: {
            arrows: false,
            infinite: false
        }
    }
   ]

    });
});
//product chi tiết
 $(document).ready(function(){
       $('.autoproduct').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  arrows: true,
  autoplay: true,
  autoplaySpeed: 1900,

   prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fas fa-chevron-left  btn-left' aria-hidden='true' ></i></button>",
   nextArrow:"<button type='button' class='slick-next pull-right'><i class='fas fa-chevron-right btn-right ' aria-hidden='true'></i></button>",
   
   
   responsive: [
    {
        breakpoint: 415,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: true,
            infinite: false
        }
    }
   ]

    });
});



//back top
 $(document).ready(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop()){
                $('.backtop').fadeIn();
            }
            else{
                $('.backtop').fadeOut();
            }
        });
        $('.backtop').click(function(){
            $('html, body').animate({
                scrollTop: 0
            }, 400);
        });
    });



// mở modul

$('.open').on('click', function() {
    $('.product-list-mobile').show();
});
//tắt
 
 $('.menuOff').on('click', function(){
    $('.product-list-mobile').hide();
 })


    
















   

