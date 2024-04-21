<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html { scroll-padding-top: 30px;}
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  margin-top: 100px;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  width: 100%;
  top: 0;
  justify-content: space-between;
  position: fixed;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: red;
}

.subnav-content {
  display: none;
  position: fixed;
  left: 0;
  background-color: red;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
</style>
<h1>पाणिनीयव्याकरणउदाहरणकोशः</h1>
<h1>तद्धितप्रकरणम्</h1>
</head>
<body>
<div>

</div>
<div class="navbar">
  <img src='img/puk5.png' width=200 height=50 alt='' />
  <a href="#home">Home</a>
  <div class="subnav">
    <button class="subnavbtn">Language <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#company">संस्कृतम्</a>
      <a href="#team">Français</a>
      <a href="#careers">English</a>
    </div>
  </div> 
    <a href="#contact">उपोद्घातः</a>  
  <div class="subnav">
    <button class="subnavbtn">उदाहरणानि <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#bring">अक्षरक्रमेण</a>
      <a href="#deliver">अव्याकृतानि</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">तद्धितप्रत्ययाः <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#link1">सानुबन्धः</a>
      <a href="#link2">निरनुबन्धः</a>
      <a href="#link3">प्रत्ययार्थः</a>
    </div>
  </div>  
  <a href="#contact">प्रकरणानि</a>  
  <div class="subnav">
    <button class="subnavbtn">सूत्राणि <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#link1">सूत्राणि-1</a>
      <a href="#link2">Link 2</a>
      <a href="#link3">Link 3</a>
      <a href="#link4">Link 4</a>
	  <a href="#link5">सूत्राणि-2</a>
    </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">वार्तिकानि <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#link1">अक्षरक्रमेण</a>
      <a href="#link2">सङ्खाक्रमेण</a>
    </div>
  </div>
  <a href="#contact">पारिभाषिकपदानि</a>  
</div>

<div class="main">
  <h1 style="padding: 20px;">Fixed Top Menu</h1>
</div>

</body>
</html>
