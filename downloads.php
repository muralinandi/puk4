<?php
#include("menu.php");
include("home.php");
?>
<div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div>
<center><h2  style="color: red;">पाणिनीयव्याकरणोदाहरणकोशः - निक्षिपतु </h2></center>
<p align="right" style="margin-right: 5%;">
<input type="radio" name="lang" id="lang" value="d"><label>संस्कृतम्</label>
<input type="radio" name="lang" id="lang" value="f"><label>Français</label>
<input type="radio" name="lang" id="lang" value="e"><label>English</label>
<script>
$(document).on('change', '[name="lang"]' , function(){
  	var val1 = $('[name="lang"]:checked').val();
	if(val1==="d")
	{
		document.getElementById("a1").innerHTML='मुखपृष्ठम्';
		document.getElementById("a2").innerHTML='उपोद्घातः';
		document.getElementById("a21").innerHTML='संस्कृतम्';
		document.getElementById("a22").innerHTML='Français';
		document.getElementById("a23").innerHTML='English';
		document.getElementById("a3").innerHTML='उदाहरणानि';
		document.getElementById("a4").innerHTML='तद्धितप्रत्ययाः';
		/*document.getElementById("a41").innerHTML='सानुबन्धाः';
		document.getElementById("a42").innerHTML='निरनुबन्धाः';
		document.getElementById("a43").innerHTML='प्रत्ययार्थः';*/
		document.getElementById("a5").innerHTML='प्रकरणानि';
		document.getElementById("a6").innerHTML='सूत्राणि';
		document.getElementById("a61").innerHTML='सूत्राणि-1';
		document.getElementById("a611").innerHTML='अक्षरक्रमेण';
		document.getElementById("a612").innerHTML='अष्टाध्यायी';
		document.getElementById("a62").innerHTML='सूत्राणि-2';
		document.getElementById("a621").innerHTML='अक्षरक्रमेण';
		document.getElementById("a622").innerHTML='अष्टाध्यायी';
		document.getElementById("a7").innerHTML='वार्तिकानि';
		document.getElementById("a71").innerHTML='अक्षरक्रमेण';
		document.getElementById("a72").innerHTML='वार्तिकसंख्याद्वारा';
		document.getElementById("a8").innerHTML='पारभाषिकपदानि';
		document.getElementById("a9").innerHTML='निक्षिपतु';
		
		document.getElementById("i1").innerHTML="एतत् विशदतया, स्पष्टतया द्रष्टुं स्वीयसङ्गणकयन्त्रे अधोनिर्दिष्ट फॉन्ट्स विनामूल्यम् निक्षिपतु । ";
		document.getElementById("cs").innerHTML="सूत्राणि";
		document.getElementById("ce").innerHTML="उदाहरणानि";
		document.getElementById("exbtn1").innerHTML="अस्तु";
	}
	else if(val1 === "f")
	{
		document.getElementById("a1").innerHTML="Page d'accueil";
		document.getElementById("a2").innerHTML='Introduction';
		document.getElementById("a21").innerHTML='संस्कृतम्';
		document.getElementById("a22").innerHTML='Français';
		document.getElementById("a23").innerHTML='English';
		document.getElementById("a3").innerHTML='Exemples';
		document.getElementById("a4").innerHTML='Suffixes';
		/*document.getElementById("a41").innerHTML='Avec indices grammaticaux';
		document.getElementById("a42").innerHTML='Formes concrètes';
		document.getElementById("a43").innerHTML='Sens des suffixes'; */
		document.getElementById("a5").innerHTML='Par chapitre';
		document.getElementById("a6").innerHTML='Sūtra';
		document.getElementById("a61").innerHTML='Sūtra-1';
		document.getElementById("a611").innerHTML='Ordre alphabétique';
		document.getElementById("a612").innerHTML='Aṣṭādhyāyī';
		document.getElementById("a62").innerHTML='Sūtra-2';
		document.getElementById("a621").innerHTML='Ordre alphabétique';
		document.getElementById("a622").innerHTML='Aṣṭādhyāyī';
		document.getElementById("a7").innerHTML='Vārtika';
		document.getElementById("a71").innerHTML='Ordre alphabétique';
		document.getElementById("a72").innerHTML='Numéros d’ordre';
		document.getElementById("a8").innerHTML='Terminologie';
		document.getElementById("a9").innerHTML='Télécharger';
		
		document.getElementById("i1").innerHTML=" ";
		document.getElementById("cs").innerHTML="&nbsp; &nbsp; &nbsp; Sūtra";
		document.getElementById("ce").innerHTML="&nbsp; &nbsp; &nbsp; Exemples";
		document.getElementById("exbtn1").innerHTML="OK";
	}
	else if(val1 === "e")
	{
		document.getElementById("a1").innerHTML='Home';
		document.getElementById("a2").innerHTML='Introduction';
		document.getElementById("a21").innerHTML='संस्कृतम्';
		document.getElementById("a22").innerHTML='Français';
		document.getElementById("a23").innerHTML='English';
		document.getElementById("a3").innerHTML='Examples';
		document.getElementById("a4").innerHTML='Suffixes';
		/*document.getElementById("a41").innerHTML='Suffixes';
		document.getElementById("a42").innerHTML='Actual Forms';
		document.getElementById("a43").innerHTML='Meaning of the suffixes'; */
		document.getElementById("a5").innerHTML='Prakaraṇa-s';
		document.getElementById("a6").innerHTML='Sūtra';
		document.getElementById("a61").innerHTML='Sūtra-1';
		document.getElementById("a611").innerHTML='Alphabetical Order';
		document.getElementById("a612").innerHTML='Aṣṭādhyāyī';
		document.getElementById("a62").innerHTML='Sūtra-2';
		document.getElementById("a621").innerHTML='Alphabetical Order';
		document.getElementById("a622").innerHTML='Aṣṭādhyāyī';
		document.getElementById("a7").innerHTML='Vārtika';
		document.getElementById("a71").innerHTML='Alphabetical Order';
		document.getElementById("a72").innerHTML='Serial Numbers';
		document.getElementById("a8").innerHTML='Technical Terms';
		document.getElementById("a9").innerHTML="Download";
		
		document.getElementById("i1").innerHTML="To see the site perfectly, download the fonts for free. ";
		//document.getElementById("cs").innerHTML="&nbsp; &nbsp; &nbsp; Sūtra";
		//document.getElementById("ce").innerHTML="Examples";
		//document.getElementById("exbtn1").innerHTML="OK";
	}
});
</script>
</div>
<div>
<p align="center">
<label id="i1">एतत् विशदतया, स्पष्टतया द्रष्टुं स्वीयसङ्गणकयन्त्रे अधोनिर्दिष्ट फॉन्ट्स विनामूल्यम् निक्षिपतु ।
</label>
<br>
<br>
<a href="fonts/Sanskrit2003.ttf">Sanskrit 2003</a><br>
<a href="fonts/GANDUR_.ttf">Gandhari Unicode Roman</a><br>
<a href="fonts/gub_0.ttf">Gandhari Unicode Bold</a><br>
<a href="fonts/gubi_0.ttf">Gandhari Unicode Bold Italic</a><br>
<a href="fonts/gui_0.ttf">Gandhari Unicode Italic</a><br>
</p>
</div>