<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/heroslider.css')}}">
    <title>Document</title>
</head>
<body>
   
    <div class="blog-slider">
        <div class="blog-slider__wrp swiper-wrapper">
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__img">
              
              <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759872/kuldar-kalvik-799168-unsplash.webp" alt="">
            </div>
            <div class="blog-slider__content">
              <span class="blog-slider__code">26 December 2019</span>
              <div class="blog-slider__title">Lorem Ipsum Dolor</div>
              <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>
              <a href="#" class="blog-slider__button">READ MORE</a>
            </div>
          </div>
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__img">
              <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759871/jason-leung-798979-unsplash.webp" alt="">
            </div>
            <div class="blog-slider__content">
              <span class="blog-slider__code">26 December 2019</span>
              <div class="blog-slider__title">Lorem Ipsum Dolor2</div>
              <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?</div>
              <a href="#" class="blog-slider__button">READ MORE</a>
            </div>
          </div>
          
          <div class="blog-slider__item swiper-slide">
            <div class="blog-slider__img">
              <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759871/alessandro-capuzzi-799180-unsplash.webp" alt="">
            </div>
            <div class="blog-slider__content">
              <span class="blog-slider__code">26 December 2019</span>
              <div class="blog-slider__title">Lorem Ipsum Dolor</div>
              <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?</div>
              <a href="#" class="blog-slider__button">READ MORE</a>
            </div>
          </div>
          
        </div>
        <div class="blog-slider__pagination"></div>
      </div>
              
    
              
    
      
    <script src="{{ asset('js/hero.js')}}"></script>
</body>
</html>