<html>
<head>
<style>
html 
  box-sizing: border-box
  background: #1a1a1a;

*,
*:before,
*:after 
  box-sizing: inherit;
  padding: 0;
  margin: 0;
  list-style: none;
  text-decoration: none
  font-family: -apple-system, BlinkMacSystemFont, "avenir next", avenir,
    "helvetica neue", helvetica, ubuntu, roboto, noto, "segoe ui", arial,
    sans-serif;


nav 
  background: #212121;
  height: 70px;
  z-index: 1;
  display flex 
  justify-content space-between
  align-items center
  padding 0 10px
  #brand 
    font-size: 40px
    font-weight: bold
    color: #fff
  #menu
    position: relative;
    display flex
    height 100%
    li 
      padding: 0px 30px
      cursor: pointer;
      line-height: 70px
      transition: all 0.3s ease-out
      &:hover 
         background: #333
      a
        color #fff
    @media (max-width: 768px) 
       display none

 



#hamburger 
  position: absolute
  right: 10px;
  top: 14px;
  z-index: 999;
  width: 40px;
  height: 40px
  cursor: pointer
  transition: all 0.3s ease-out;
  visibility: hidden
  opacity: 0;
  .line 
    height: 7px;
    background: #444;
    margin: 5px auto;
    backface-visibility: hidden;
  &.active 
    #one
      transform: rotate(45deg) translateX(6px) translateY(6px);
    #two
       opacity: 0;
    #three
      transform: rotate(-45deg) translateX(10px) translateY(-12px);
  @media (max-width: 768px) 
    visibility: visible;
    opacity: 1;

.mobile-menu 
  z-index: 1;
  position: absolute;
  top: 0px;
  background: #ddd;
  width: 100%;
  height: 100%;
  visibility: hidden;
  opacity: 0;
  transition: all 0.3s ease-out;
  display: table;
  .mobile-menu__items 
    height: 50px;
    display: table-cell;
    vertical-align: middle;
    li 
      display: block;
      text-align: center;
      padding: 20px 0; 
      text-align: center;
      font-size: 35px;
      min-height: 50px;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s ease-out
      &:hover 
        color: #fff;
        background: #212121;
        a
           transition: all 0.3s ease-out
           color: #fff
      a 
         color: #212121
  &.active 
    visibility: visible;
    opacity: 0.99;
  @media (min-width: 768px)
     visibility: hidden !important
</style>
</head>
<header>
  <nav>
    <a href="javascript:;" id="brand">Brand</a>
    <ul id="menu">
      <li><a href="javascript:;">HOME</a></li>
      <li><a href="javascript:;">ABOUT</a></li>
      <li><a href="javascript:;">CONTACT</a></li>
      <li><a href="javascript:;">FAQ</a></li>
    </ul>

    <div id="hamburger">
      <div class="line" id="one"></div>
      <div class="line" id="two"></div>
      <div class="line" id="three"></div>
    </div>
  </nav>

  <div class="mobile-menu">
    <ul class="mobile-menu__items">
      <li><a href="javascript:;">HOME</a></li>
      <li><a href="javascript:;">ABOUT</a></li>
      <li><a href="javascript:;">CONTACT</a></li>
      <li><a href="javascript:;">FAQ</a></li>
    </ul>
  </div>
</header>
<script>
document.getElementById("hamburger").addEventListener("click", function(){
  this.classList.toggle("active");
  document.querySelector(".mobile-menu").classList.toggle("active");
});

</script>
	
</html>