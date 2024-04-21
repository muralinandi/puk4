<?php
echo "<!DOCTYPE html>";
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--Font Awesome (added because you use icons in your prepend/append)-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/resp_table.css" />
<style>
@import boostrap.less
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"); /* import font */
:root{
    --white: #f9f9f9 !important;
    --black: #36383F !important;
    --gray: #85888C !important;
} /* variables*/

.d1 {
	padding-top: 60px !important;
	padding-left: 5px !important;
}

.copyright-bar {
	margin: 0 !important;
	height: 70px !important;
	width: 100% !important;
	padding-top: 20px !important;
	background-color: #333 !important;
	position: relative !important;
	bottom: 0 !important;
	padding-left: 0px !important;
}

.copyright-bar p {
	color: #ffffff !important;
	font-weight: 700 !important;
	margin: 0 !important;
}


ul {
    position: fixed !important;
    margin: 0 !important;
    list-style:none !important;
    //background: rgb(22, 160, 133) !important;
	background-color: #333 !important;
	width: 100%; //calc(100% - 0px) !important;
	padding-left: 0px !important;
}

li {
	list-style-type: none !important;
    display: inline-block !important;
    padding: 5px 10px !important;
    position: relative !important;
	margin: 1px !important;
}
li ul { display: none; width: auto;}
li:hover > ul {
    display: block !important;
	position: absolute !important;
}
li:hover > ul li { white-space: nowrap; }
ul ul {
    position: absolute !important;
    display: none !important;
    margin: 0 !important;
    padding: 5px 5px !important;
}
ul ul li {
    display: block !important;
}

ul ul ul {
    position: absolute !important;
    top: 0 !important;
    left: 100% !important;
}
/*************
 * EXTRA CSS
 *************/
a{
  color: #FFF !important;
  text-decoration: none !important;
}
a:hover {
  border-bottom: 1px dashed #FFF !important;
}

</style>
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
    <ul>
		<li><img src="img/puk5-1.png" width=200 height=40 alt="" /></li>
        <li><a id="a1" href="#">Home</a></li>
		<li><a id="a2" href="#">Introduction</a>
            <ul>
                <li><a id="a21" href="intro-skt.pdf">Sanskrit</a></li>
                <li><a id="a22" href="intro-fr.pdf">Français</a></li>
				<li><a id="a23" href="intro-eng.pdf">English</a></li>
            </ul>
		</li>
        <li><a id="a3" href="example.php">Examples</a>
            <!-- <ul>
                <li><a href="#">Alphabetical Order</a></li>
                <li><a href="#">Discorded Examples</a></li>
            </ul>
			-->
        </li>
        <li><a id="a4" href="#">Tadditha Suffixes</a>
            <ul>
                <li><a id="a41" href="#">Sanubandhah</a></li>
                <li><a id="a42" href="#">Niranubandhah</a></li>
				<li><a id="a43" href="#">Pratyaya Meaning</a></li>
            </ul>
        </li>	
		<li><a id="a5" href="#">Prakaranas</a></li>
        <li><a id="a6" href="#">Sutras</a>
            <ul>
              <li><a id="a61" href="#">Sutra-1</a>
                                     <ul>
                                          <li><a id="a611" href="#">Alphabetical Order</a></li>
                                          <li><a id="a612" href="#">Sutra Number</a></li>
                                     </ul>
              </li>
              <li><a id="a62" href="#">Sutra-2</a>
                                     <ul>
                                          <li><a id="a621" href="#">Alphabetical Order</a></li>
                                          <li><a id="a622" href="#">Sutra Number</a></li>
                                     </ul>
              </li>
            </ul>

        </li>
        <li><a id="a7" href="#">Vartika</a>
            <ul>
                <li><a id="a71" href="#">Alphabetical Order</a></li>
                <li><a id="a72" href="#">Vartika Number</a></li>
            </ul>
        </li>
        <li><a id="a8" href="#">Terminology</a></li>
		<li><a id="a9" href="#">Downloads</a></li>
    </ul>
</nav>

<div class="d1">

</div>
