
<style>
  .slider{
  width:400px;
  margin:20px auto;
  text-align: center;
  padding:20px;
  color:white;
  .parent-slide{padding:15px;}
  img{display: block;margin:auto;}
}
  </style>


<div class="slider">
  <div class="slide">
    <img src="http://fillmurray.com/300/300" alt="" class="img-responsive" />
    <h1>slide 1</h1>
  </div>
  <div class="slide">
    <img src="http://fillmurray.com/300/300" alt="" class="img-responsive" />
    <h1>slide 2</h1>
  </div>
  <div class="slide">
    <img src="http://fillmurray.com/300/300" alt="" class="img-responsive" />
    <h1>slide 3</h1>
  </div>
  <div class="slide">
    <img src="http://fillmurray.com/300/300" alt="" class="img-responsive" />
    <h1>slide 4</h1>
  </div>
  <div class="slide">
    <img src="http://fillmurray.com/300/300" alt="" class="img-responsive" />
    <h1>slide 5</h1>
  </div>
</div>

<script>
  window.onload=function(){
  $('.slider').slick({
  autoplay:true,
  autoplaySpeed:1500,
  arrows:true,
  prevArrow:'<button type="button" class="slick-prev"></button>',
  nextArrow:'<button type="button" class="slick-next"></button>',
  centerMode:true,
  slidesToShow:3,
  slidesToScroll:2
  });
};
</script>