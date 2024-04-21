<?php
echo "<!DOCTYPE html>";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <!-- <title> Responsive Drop Down Navigation Menu | CodingLab </title>-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="style1.css">
		<link rel="stylesheet" href="css/resp_table.css" />	
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

<script>
var sk;
async function fun1(fname) {
//alert("in getUsers"+fname);
	    let url = fname; //'t1.json';
    try {
        let res = await fetch(url);
        return await res.json();
    } catch (error) {
        console.log(error);
    }
}

async function funMB(fnameMB) {
//alert("MB "+fnameMB);
	    let url1 = fnameMB; //'t1.json';
    try {
        let resMB = await fetch(url1);
        return await resMB.json();
    } catch (error) {
        console.log(error);
    }
}
async function funKV(fnameKV) {
//alert("KV "+fnameKV);
	    let url2 = fnameKV; //'t1.json';
    try {
        let resKV = await fetch(url2);
        return await resKV.json();
    } catch (error) {
        console.log(error);
    }
}
async function funBV(fnameBV) {
//alert("BV "+fnameBV);
	    let url3 = fnameBV; //'t1.json';
    try {
        let resBV = await fetch(url3);
        return await resBV.json();
    } catch (error) {
        console.log(error);
    }
}

async function fun2(f1) {
    sk = await fun1('http://localhost/tadditha/0sk1.json');
	mb = await funMB('http://localhost/tadditha/0MB1.json');
	kv = await funKV('http://localhost/tadditha/0KV1.json');
	bv = await funBV('http://localhost/tadditha/0BV1.json');
	Vig = await vigraha();
	Vig1 = Vig.split(/\r?\n/);
	Varti = await Vartika();
	Vartika1 = Varti.split(/\r?\n/);
	//alert(Vartika1.length);
}

async function vigraha() {
//alert("BV "+fnameBV);
	    let url4 = 'http://localhost/tadditha/Vigraha.txt'; //'t1.json';
    try {
        let Vigrah = await fetch(url4);
        return await Vigrah.text();
    } catch (error) {
        console.log(error);
    }
}

async function Vartika() {
//alert("BV "+fnameBV);
	    let url5 = 'http://localhost/tadditha/Vartika.txt'; //'t1.json';
    try {
        let Vartika = await fetch(url5);
        return await Vartika.text();
    } catch (error) {
        console.log(error);
    }
}

function fun3(){
	readTextFile("t1.json", function(t1){
		var sk = JSON.parse(t1);
		alert("fun2->"+sk.length);
//		alert(sk[0].SKNO);
	});
}
function readTextFile(file, callback) {
    var rawFile = new XMLHttpRequest();
    rawFile.overrideMimeType("application/json");
    rawFile.open("GET", file, true);
    rawFile.onreadystatechange = function() {
        if (rawFile.readyState === 4 && rawFile.status == "200") {
            callback(rawFile.responseText);
        }
    }
    rawFile.send(null);
}
</script>
	 
   </head>
<body onload="fun2();">
  <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><a id="mcap" href="#">पाणिनीयव्याकरणोदाहरणकोशः</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">पाणिनीयव्याकरणोदाहरणकोशः</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
		  <li><a id="a0" href="https://www.ifpindia.org/"><img src="img/ifp1.png" style="width: 30pt; height: 30pt; " /></a></li>
          <li><a id="a1" href="indx.php">मुखपृष्ठम्</a></li>
          <li>
            <a id="a2" href="#">उपोद्घातः</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a id="a21" href="intro-skt.pdf">संस्कृतम्</a></li>
              <li><a id="a22" href="intro-fr.pdf">Français</a></li>
              <li><a id="a23" href="intro-eng.pdf">English</a></li>
            </ul>
          </li>
		  <li><a id="a3" href="example.php">उदाहरणानि</a></li>
          <li>
            <a id="a4" href="anubandha.php">तद्धितप्रत्ययाः</a>
            <!-- <i class='bx bxs-chevron-down js-arrow arrow '></i>
            <ul class="js-sub-menu sub-menu">
              <li><a id="a41" href="anubandha.php">Secondary Suffixes</a></li>
              <li><a id="a42" href="">Actual Forms</a></li>
              <li><a id="a43" href="#">Meaning of the Suffixes</a></li>
            </ul> -->
          </li>
          <li><a id="a5" href="prakarana.php">प्रकरणानि</a></li>
          <li>
            <a id="a6" href="#">सूत्राणि</a>
            <i class='bx bxs-chevron-down htmlcss-arrow1 arrow  '></i>
            <ul class="htmlCss-sub-menu1 sub-menu">
              <li class="more">
                <a id="a61" href="#">सूत्राणि-1</a>
                <i class='bx bxs-chevron-right arrow more-arrow'></i>
                <ul class="more-sub-menu sub-menu">
                  <li><a id="a611" href="sak-1.php">अक्षरक्रमेण</a></li>
                  <li><a id="a612" href="ssk-1.php">अष्टाध्यायी</a></li>
                </ul>
              </li>
              <li class="more">
                <a id="a62" href="#">सूत्राणि-2</a>
                <i class='bx bxs-chevron-right arrow more-arrow1'></i>
                <ul class="more-sub-menu1 sub-menu">
                  <li><a id="a621" href="sak-2.php">अक्षरक्रमेण</a></li>
                  <li><a id="a622" href="ssk-2.php">अष्टाध्यायी</a></li>
                </ul>
              </li>			  
            </ul>
          </li>

		  <li><a id="a7" href="#">वार्तिकानि</a>
			<i class='bx bxs-chevron-down arrow js-arrow1'></i>
			<ul class="js-sub-menu1 sub-menu">
				<li><a id="a71" href="vartika.php">अक्षरक्रमेण</a></li>
				<li><a id="a72" href="vartikaAll.php">संख्याद्वारा</a></li>				
			</ul>
		  </li>		  
		  
          <li><a id="a8" href="pari.php">पारभाषिकपदानि</a></li>
		  <li><a id="a9" href="downloads.php">निक्षिपतु</a></li>
        </ul>
      </div>
	  
      <div class="search-box">
        <!-- <i class='bx bx-search'></i> -->
        <div class="input-box">
          
        </div>
      </div>

    </div>
  </nav>
  <!--<script src="script.js"></script> -->
<script>
  // search-box open close js code
let navbar = document.querySelector(".navbar");
/*
let searchBox = document.querySelector(".search-box .bx-search");
// let searchBoxCancel = document.querySelector(".search-box .bx-x");

searchBox.addEventListener("click", ()=>{
  navbar.classList.toggle("showInput");
  if(navbar.classList.contains("showInput")){
    searchBox.classList.replace("bx-search" ,"bx-x");
  }else {
    searchBox.classList.replace("bx-x" ,"bx-search");
  }
});
*/

// sidebar open close js code
let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .bx-menu");
let menuCloseBtn = document.querySelector(".nav-links .bx-x");
menuOpenBtn.onclick = function() {
navLinks.style.left = "0";
}
menuCloseBtn.onclick = function() {
navLinks.style.left = "-100%";
}


// sidebar submenu open close js code
let htmlcssArrow = document.querySelector(".htmlcss-arrow");
htmlcssArrow.onclick = function() {
 navLinks.classList.toggle("show1");
}
let htmlcssArrow1 = document.querySelector(".htmlcss-arrow1");
htmlcssArrow1.onclick = function() {
 navLinks.classList.toggle("show11");
}
let moreArrow = document.querySelector(".more-arrow");
moreArrow.onclick = function() {
 navLinks.classList.toggle("show2");
}
let moreArrow1 = document.querySelector(".more-arrow1");
moreArrow1.onclick = function() {
 navLinks.classList.toggle("show22");
}
//let jsArrow = document.querySelector(".js-arrow");
//jsArrow.onclick = function() {
// navLinks.classList.toggle("show3");
//}
let jsArrow1 = document.querySelector(".js-arrow1");
jsArrow1.onclick = function() {
 navLinks.classList.toggle("show33");
}
</script>

<div class="d1">

</div>
