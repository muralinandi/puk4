<?php
#include("menu.php");
include("home.php");
?>
<style>
/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block !important; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute !important;
		top: -9999px !important;
		left: -9999px !important;
	}
table { 
  width: 100% !important; 
  border-collapse: collapse !important; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee !important; 
}
th { 
  background: #333 !important; 
  color: white !important; 
  font-weight: bold !important; 
}
td, th { 
  padding: 6px !important; 
  border: 1px solid #ccc !important; 
  text-align: left !important; 
}	
	tr { border: 1px solid #ccc !important; }
	
	td { 
		/* Behave  like a "row" */
		border: none !important;
		border-bottom: 1px solid #eee !important; 
		position: relative !important;
		padding-left: 50% !important; 
	}
	
	td:before { 
		/* Now like a table header */
		position: absolute !important;
		/* Top/left values mimic padding */
		top: 6px !important;
		left: 6px !important;
		width: 45% !important; 
		padding-right: 10px !important; 
		white-space: nowrap !important;
	}

}
</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
/*
async function getUsers() {
//    let url = 'users.json';
alert("in getUsers");
	    let url = '0sk.json';
    try {
        let res = await fetch(url);
        return await res.json();
    } catch (error) {
        console.log(error);
    }
}
*/

function skdisplay(skdiv) {
	var skdiv = document.getElementById(skdiv);
	if (skdiv.style.display === "none") {
		skdiv.style.display = "block";
	} else {
		skdiv.style.display = "none";
	}
}

function exf1()
{
	document.getElementById("cont").innerHTML="";

	readTextFile("http://localhost/tadditha/tadditha.JSON", function(text){

    var data1 = JSON.parse(text); //parse JSON

	for(j=0;j<=data1.d.length-1;j++)
	{
		if(data1.d[j].Word == document.getElementById("ex").value)
		{
			document.getElementById('cont').innerHTML += '<p align=left>';
			document.getElementById('cont').innerHTML += '<span style="color: #960D4A"><b>Example / उदाहरणम् :</b></span> <span style="color: #FF00B4"><b>'+data1.d[j].Word+'</b></span><br>';
			if(data1.d[j].Sloka != ""){document.getElementById('cont').innerHTML += '<span style="color: #960D4A"><br><b>Sloka / श्लोकः :</b></span> <span style="color: #aa0fef"><b>'+data1.d[j].Sloka+'</b></span><br>';}
			if(data1.d[j].Sutra != ""){document.getElementById('cont').innerHTML += '<span style="color: #960D4A"><br><b>Reference / संपर्कः :</b></span> <br>';}
				for(aref=0;aref<=data1.d[j].Sutra.length-1;aref++)
				{
					let ref9 = data1.d[j].Sutra[aref].replace(/\s+A & SK: /,'');
					let ref90 = ref9.replace(/\s+/g,'%');
					let ref91 = ref90.replace('Source:','');
					let ref10 = ref91.replace(/%+/,'%');
					data1.d[j].Sutra[aref] = ref10;
					ASS1 = data1.d[j].Sutra[aref].substr(0,7);
					skno = data1.d[j].Sutra[aref].substr(8,4);
					var books = ref10.split("%");
					let ASS2 = ASS1.replace(/\./g,'-');
					let ASS = ASS2.replace(/-0+/,'-');
					let comm = "";
					let commBtn = "";
					let comms = "";
					let finalRef = '<table><tr><td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>';
					for(c9=0;c9<=books.length-1;c9++)
					{
						if(/^S/.test(books[c9]))
						{ 
							try{
							let comSK = sk.find(el => el.ASNO === ASS);
							comm = '<p><h3>'+comSK.SKNO+' &nbsp; &nbsp; &nbsp; '+comSK.Sutra+' &nbsp; &nbsp; &nbsp; '+comSK.ASNO+'</h3></p> <p align="justify">'+comSK.Comm+'</p>';
							}catch(err){console.log(books[c9]+"; "+ASS); alert(err.message); alert(ASS);}
							books[c9] = '<button type="button" id="sk'+aref+c9+'" name="sk'+aref+c9+'" data-toggle="modal" data-target="#m'+aref+c9+'" style="padding: 1px 6px 0px;" >'+books[c9]+'</button>';
							comms = '<div class="modal fade" id="m'+aref+c9+'" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">सिद्धान्तकौमुदी</h4></div><div class="modal-body" style="height:300px;overflow:scroll">'+comm+ '</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div>';
						}
						else if(/^M/.test(books[c9]))
						{
							try{
							let comMB = mb.find(el => el.ASNO === ASS);
							comm = '<p><h3>'+comMB.Sutra+' &nbsp; &nbsp; &nbsp; '+comMB.ASNO+'</h3></p> <p align="justify">'+comMB.Comm+'</p>';
							}catch(err){console.log(books[c9]+"; "+ASS); alert(err.message); alert(ASS);}
							books[c9] = '<button type="button" id="mb'+aref+c9+'" name="mb'+aref+c9+'" data-toggle="modal" data-target="#m'+aref+c9+'" style="padding: 1px 7px 0px;" >'+books[c9]+'</button>';
							comms = '<div class="modal fade" id="m'+aref+c9+'" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">महाभाष्यम्</h4></div><div class="modal-body" style="height:300px;overflow:scroll">'+comm+ '</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div>';
						}
						else if(/^K/.test(books[c9]))
						{
							try{
							let comKV = kv.find(el => el.ASNO === ASS);
							comm = '<p><h3>'+comKV.Sutra+' &nbsp; &nbsp; &nbsp; '+comKV.ASNO+'</h3></p> <p align="justify">'+comKV.Comm+'</p>';
							}catch(err){console.log(books[c9]+"; "+ASS); alert(err.message); alert(ASS);}
							books[c9] = '<button type="button" id="kv'+aref+c9+'" name="kv'+aref+c9+'" data-toggle="modal" data-target="#m'+aref+c9+'" style="padding: 1px 8px 0px;">'+books[c9]+'</button>';
							comms = '<div class="modal fade" id="m'+aref+c9+'" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">काशिकावृत्तिः</h4></div><div class="modal-body" style="height:300px;overflow:scroll">'+comm+ '</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div>';
						}
						else if(/^B/.test(books[c9]))
						{
							try{
							let comBV = bv.find(el => el.ASNO === ASS);
							comm = '<p><h3>'+comBV.Sutra+' &nbsp; &nbsp; &nbsp; '+comBV.ASNO+'</h3></p> <p align="justify">'+comBV.Comm+'</p>';
							}catch(err){console.log(books[c9]+"; "+ASS); alert(err.message); alert(ASS);}
							books[c9] = '<button type="button" id="bv'+aref+c9+'" name="bv'+aref+c9+'" data-toggle="modal" data-target="#m'+aref+c9+'" style="padding: 1px 9px 0px;" >'+books[c9]+'</button>';
							comms = '<div class="modal fade" id="m'+aref+c9+'" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">भाषावृत्तिः</h4></div><div class="modal-body" style="height:300px;overflow:scroll">'+comm+ '</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div>';
						} 
						finalRef += '<td>'+books[c9].replace(/[,;]/g,'')+comms+'</td>'; //'&nbsp; &nbsp; &nbsp;';
					}
						finalRef += '</tr>';
						document.getElementById('cont').innerHTML += finalRef;
						console.log(finalRef);
				}
			if(data1.d[j].Def != "")
			{
				for(v1=1;v1<=Vig1.length-1;v1++)
				{
					vig2=Vig1[v1].split("%");
					vig3=vig2[1].split("$");
					if(vig2[0] === document.getElementById("ex").value)
					{
						document.getElementById('cont').innerHTML += '<span style="color: #960D4A"><br><b>Definition / विग्रहः :</b></span> <span style="color: #FE7800"><b>'+data1.d[j].Def+'</b></span> || <span style="font-family: `Gandhari Unicode`; color: #081981">'+vig3[0]+'</b></span> || <span style="font-family: `Gandhari Unicode`; color: #F53442"><b>'+vig3[1]+'</b></span><br><br>';
						break;
					}
				}
			}
			if(data1.d[j].Prakriya != ""){
				var pra = '<table border=1 class="beta">'; 
				var p = data1.d[j].Prakriya.length;
				for(k=0;k<=p-1;k++)
				{
					var x = data1.d[j].Prakriya[k];
					var p1 = x.split("$");
					let id1=p1[2];
					let pat1 =/\d\.\d\.\d+\/\d\d\d\d/;
					let reslt = pat1.test(p1[2]);
					if(reslt)
					{
						var sref = p1[2].split("/");
						for(koumudi=0;koumudi<=sk.length-1;koumudi++)
						{
							sref[1] = sref[1].replace(/^0+/, "");
							try{
							if(sk[koumudi].SKNO === sref[1])
							{
								var skoumudi = '<p><h3>'+sk[koumudi].SKNO+' &nbsp; &nbsp; &nbsp; '+sk[koumudi].Sutra+' &nbsp; &nbsp; &nbsp; '+sk[koumudi].ASNO+'</h3></p>';
								skoumudi = skoumudi + '<p align="justify">'+sk[koumudi].Comm+'</p>'
							}
							}catch(err){console.log(err);}
						}
						p1[2] = '<button type="button" id="b'+sref[1]+'" name="b'+sref[1]+'" data-toggle="modal" data-target="#m'+sref[1]+'">'+p1[2]+'</button>';
  					}
					else
					{
						var sref="vartika";
					}
					p1[0] = '<tr><td style="padding: 5px;">'+p1[0]+'</td>';
					p1[1] = '<td style="padding: 5px;">'+p1[1]+'</td>';
					if(sref !== "vartika")
					{
						p1[2] = '<td style="padding: 5px;">'+p1[2]+'<div class="modal fade" id="m'+sref[1]+'" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">सिद्धान्तकौमुदी</h4></div><div class="modal-body" style="height:300px;overflow:scroll">'+skoumudi + '</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div>';
					}
					else
					{
						p1[2] = '<td style="padding: 5px;">'+p1[2]+'</td>';
					}

					p1[3] = '<td style="padding: 5px;">'+p1[3]+'</td></tr>';
						
					pra = pra + p1[0]+p1[1]+p1[2]+p1[3];
				}
				pra = pra + "</table>"
				console.log(pra);
				document.getElementById('cont').innerHTML += pra; //"</table>";
			}
			if(data1.d[j].Notes != ""){document.getElementById('cont').innerHTML += '<span style="color: #960D4A"><br><b>Notes:</b></span> '+data1.d[j].Notes+'<br></p>';}
		}
	}
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
<div style="margin-top: 100px;">
<div style="width: 100%;">
    <div style="width: auto; text-align: right; height: 25px;">
		<fieldset style="padding: 5px; margin-right: 5px; border: 1px solid rgb(128,128,128) width: 200px; float: right">
		<legend style="color: rgb(11,63,113); font-weight: bold; font-size: 11pt;">For translation of instructions</legend>
			<input type="radio" name="lang" id="lang" value="d"><label>संस्कृतम्</label>
			<input type="radio" name="lang" id="lang" value="f"><label>Français</label>
			<input type="radio" name="lang" id="lang" value="e"><label>English</label><br>
		</fieldset>
	</div>
<br><br>
<center><h2  style="color: red;">पाणिनीयव्याकरणोदाहरणकोशः - तद्धितप्रत्ययाः </h2></center>	
</div>
<script>
$(document).on('change', '[name="lang"]' , function(){
  	var val1 = $('[name="lang"]:checked').val();
	if(val1==="d")
	{
		//document.getElementById("a0").innerHTML='IFP';
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
		document.getElementById("a72").innerHTML='संख्याद्वारा';
		document.getElementById("a8").innerHTML='पारभाषिकपदानि';
		document.getElementById("a9").innerHTML='निक्षिपतु';
		
		document.getElementById("i1").innerHTML="अक्षरमालानुसारेण सानुबन्धाः प्रत्ययाः, प्रत्ययार्थाः प्रथमपेटिकायां दृश्यन्ते। तेषाम् ऊर्ध्वाधोनयनेन अपेक्षितं प्रत्ययम्, प्रत्ययार्थं वा चिनोतु। तत्प्रत्ययविधायकानि सूत्राणि, वार्तिकानि वा अष्टाध्यायीसूत्रसंख्यया, सिद्धान्तकौमुदीक्रमसंख्यया, वार्तिकसंख्यया च द्वितीयपेटिकायाम् आविर्भवन्ति। ततः अपेक्षितं सूत्रम्, वार्तिकं वा चिनोतु। ततः उदाहरणानि तृतीयपेटिकायाम् आविर्भवन्ति। ततः अपेक्षितम् उदाहरणं द्रष्टुम् अस्तु इत्यत्र नोदनं करोतु। ";
		document.getElementById("cp").innerHTML="&nbsp; &nbsp; &nbsp; प्रत्ययाः-प्रत्ययार्थाः";
		document.getElementById("cs").innerHTML="&nbsp; &nbsp; &nbsp; सूत्राणि/वार्तिकानि";
		document.getElementById("ce").innerHTML="उदाहरणानि";
		$("#exbtn1").prop("value", "अस्तु");
	}
	else if(val1 === "f")
	{
		//document.getElementById("a0").innerHTML="IFP";
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
		document.getElementById("a5").innerHTML='Chapitres';
		document.getElementById("a6").innerHTML='Sūtra';
		document.getElementById("a61").innerHTML='Sūtra-1';
		document.getElementById("a611").innerHTML='Ordre alphabétique';
		document.getElementById("a612").innerHTML='Aṣṭādhyāyī';
		document.getElementById("a62").innerHTML='Sūtra-2';
		document.getElementById("a621").innerHTML='Ordre alphabétique';
		document.getElementById("a622").innerHTML='Aṣṭādhyāyī';
		document.getElementById("a7").innerHTML='Vārtika';
		document.getElementById("a71").innerHTML='Ordre alphabétique';
		document.getElementById("a72").innerHTML='Ordre numérique';
		document.getElementById("a8").innerHTML='Termes techniques';
		document.getElementById("a9").innerHTML='Télécharger';
		
		document.getElementById("i1").innerHTML="Choisir le suffixe ou son sens dans la liste déroulante, ou en utilisant le clavier, dans la première fenêtre. Si le sens est donné par un sūtra, le texte de ce dernier apparaît dans la deuxième fenêtre avec ses références dans l'Aṣṭādhyāyī et dans la Siddhāntakaumudī.  Si le sens du suffixe est donné par un vārtika, le texte de ce dernier apparaît aussi avec sa référence dans la deuxième fenêtre. Les exemples apparaîtront dans la dernière fenêtre. Sélectionner et cliquer sur OK.";
		document.getElementById("cp").innerHTML="&nbsp; &nbsp; &nbsp; Suffixes et Sens";
		document.getElementById("cs").innerHTML="&nbsp; &nbsp; &nbsp; Sūtras ou Vārtikas";
		document.getElementById("ce").innerHTML="&nbsp; &nbsp; &nbsp; Exemples";
		$("#exbtn1").prop("value", "OK");
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
		
		document.getElementById("i1").innerHTML="Select the secondary suffix or its meaning in the first window, using the scroll-down list or keying it in using the keyboard. The Sūtras and their reference in the Aṣṭādhyāyī and in the Siddhāntakaumudī will appear in the second window.  Select the desired Sūtra or Vārtika.  The list of examples will appear in the last window.  Select the desired example and click on OK.";
		document.getElementById("cp").innerHTML="&nbsp; &nbsp; &nbsp; Secondary Suffixes with meaning";
		document.getElementById("cs").innerHTML="&nbsp; &nbsp; &nbsp; Sūtras or Vārtika";
		document.getElementById("ce").innerHTML="&nbsp; &nbsp; &nbsp; Examples";
		$("#exbtn1").prop("value", "OK");
	}
});
</script>
</div>
<center>
<p><center>
<label id="i1">अक्षरमालानुसारेण सानुबन्धाः प्रत्ययाः, प्रत्ययार्थाः प्रथमपेटिकायां दृश्यन्ते। तेषाम् ऊर्ध्वाधोनयनेन अपेक्षितं प्रत्ययम्, प्रत्ययार्थं वा चिनोतु। तत्प्रत्ययविधायकानि सूत्राणि, वार्तिकानि वा अष्टाध्यायीसूत्रसंख्यया, सिद्धान्तकौमुदीक्रमसंख्यया, वार्तिकसंख्यया च द्वितीयपेटिकायाम् आविर्भवन्ति। ततः अपेक्षितं सूत्रम्, वार्तिकं वा चिनोतु। ततः उदाहरणानि तृतीयपेटिकायाम् आविर्भवन्ति। ततः अपेक्षितम् उदाहरणं द्रष्टुम् अस्तु इत्यत्र नोदनं करोतु। 
</label>
</center></p>
<br>
<br>
<form name="f1" width="100%" autocomplete="off">
<br>
<label id="cp">प्रत्ययाः-प्रत्ययार्थाः</label>
	<input list="pari1" name="pari" id="pari" style="width: 50%;" onfocus="this.value=''" onchange="loadSutras();" autocomplete="off" placeholder = "Suffix or meaning">
	<datalist id="pari1"></datalist>
<br>
<label id="cs">सूत्राणि/वार्तिकानि</label>
	<input list="sak1" name="sak1" id="sak" style="width: 50%;" onfocus="this.value=''" onchange="loadexamples();" autocomplete="off" placeholder = "Select Sutra">
	<datalist id="sak1"></datalist>
<br>
<label id="ce">उदाहरणानि &nbsp; &nbsp; &nbsp; &nbsp;</label>
	<input list="examples" name="ex" id="ex" style="width: 50%;" onfocus="this.value=''" onchange="this.blur();" autocomplete="off" placeholder = "Select Example">
	<datalist id="examples"></datalist>
<br>
	<input type=button value="अस्तु" id="exbtn1" name="exbtn1" style="width: 50pt;" onClick="exf1();">
</form>
<SCRIPT language=JavaScript src="devkb.js"></SCRIPT>
<script>
function myFunction() {
  var x = document.getElementById("d2");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function loadSutras(){
	$('#sak1').empty();
	$('#examples').empty();
	document.getElementById("sak1").innerHTML='';
	document.getElementById("examples").innerHTML='';
	
	var b = document.getElementById("pari").value;
	const list = document.getElementById('sak1');
	for (const f of a) 
	{
		let ast1 = f.split("$");

		if(b.trim() === ast1[0]+"\t"+ast1[1])
		{
			let ast2 = ast1[2].split(",");
			for(i=0;i<=ast2.length-1;i++)
			{
				const option = document.createElement('option');
				var x = ast2[i].replace("%"," - ");
				option.value = x.trim();
				list.appendChild(option);//}
			}
		}
	};
}

function loadexamples(){
$('#examples').empty();
document.getElementById("examples").innerHTML='';
var sas="";
var pra2 = document.getElementById("sak").value;
var pra1 = pra2.trim();
if(pra1.indexOf("V.") > 1)
{
	var stno=pra1.split("V");
	sas="V"+stno[1].substring(0,6);

    $.ajax({
        url : "http://localhost/tadditha/VARTIKA.txt",
        dataType: "text",
        success : function (data) {
        a = data.split("\n");
        $('#examples').empty();
        const list = document.getElementById('examples');
		var ij=0;
        for (const f of a) {
	        let ast10 = f.split("$");
			if(ast10[0] === sas)
			{
				ast11 = ast10[3].split(",");
				for(m=0;m<=ast11.length-1;m++)
				{
					const option = document.createElement('option');
					option.value = ast11[m];
					list.appendChild(option);					
				}
			}
        };
//****** remove duplicate examples from the list
			var map = {};
			$('#examples option').each(function() {
			if (map[this.value])
			{
				$(this).remove();
			}
				map[this.value] = true;
			});
//******
        }
	});	
}
else
{
	sas = pra1.substring(pra1.indexOf("/")-7); //pra1.split('\t');
}
	const list1 = document.getElementById('examples');

	readTextFile("http://localhost/tadditha/tadditha.JSON", function(text){
		var data1 = JSON.parse(text);
		for(i=0;i<=data1.d.length-1;i++)
		{
			for(j=0;j <= data1.d[i].Sutra.length-1;j++)
			{
				if(data1.d[i].Sutra[j].indexOf(sas) !== -1)
				{
					var option = document.createElement('option');
					option.value = data1.d[i].Word;
					list1.appendChild(option);					
				}
			}
		}
	});
}
</script>
<div id="d101" style="color:red; ">
<div id="d2" style="display: none;">
<INPUT name=lastChar type=hidden>
<table border=2 style="background-color:#fff;"> 
	<tbody>
		
		<tr >
			<td>
				<input type=button name="btn" style="width: 24px" value="&#x0905;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0906;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0907;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0908;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0909;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x090A;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x090F;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0910;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0913;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0914;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0905;&#x0902;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0905;&#x0903;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x090D;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0911;" onClick="keyboard(this.value)">

			</td>
		</tr>
		<tr>
			<td>
				<input type=button name="btn" style="width: 24px" value="&#x094D;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x093E;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x093F;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0940;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0941;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0942;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0947;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0948;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x094B;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x094C;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0902;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0903;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0945;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0949;" onClick="keyboard(this.value)">
			</td>
		</tr>
		<tr>
			<td>
				
				<input type=button name="btn" style="width: 24px" value="&#x0915;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0916;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0917;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0918;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0919;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x091A;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x091B;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x091C;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x091D;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x091E;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 100px" value="Backspace" onClick="BackSpace()">
			
			</td>
		</tr>
		<tr>
			<td>
				<input type=button name="btn" style="width: 24px" value="+" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x091F;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0920;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0921;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0922;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0923;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="">
				<input type=button name="btn" style="width: 24px" value="">
				<input type=button name="btn" style="width: 24px" value="">
				<input type=button name="btn" style="width: 24px" value="&#x0924;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0925;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0926;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0927;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0928;" onClick="keyboard(this.value)">
			</td>
		</tr>
		<tr>
			<td>
				<input type=button name="btn" style="width: 24px" value="/" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x092A;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x092B;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x092C;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x092D;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x092E;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="">
				<input type=button name="btn" style="width: 24px" value="">
				<input type=button name="btn" style="width: 24px" value="">
				<input type=button name="btn" style="width: 24px" value="&#x092F;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0930;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0932;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0935;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0964;" onClick="keyboard(this.value)">
			</td>
		</tr>
		<tr>
			<td>
				<input type=button name="btn" style="width: 24px" value="*" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0936;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0937;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0938;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="">
				<input type=button name="btn" style="width: 24px" value="&#x090B;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x090C;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0943;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0944;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x093D;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="">
				<input type=button name="btn" style="width: 24px" value="&#x0939;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="">
				<input type=button name="btn" style="width: 24px" value="&#x0965;" onClick="keyboard(this.value)">
			</td>
		</tr>
		<tr>
			<td>
				
				<input type=button name="btn" style="width: 24px" value="&#x0924;&#x094D;&#x0930;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x091C;&#x094D;&#x091E;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0915;&#x094D;&#x0937;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x0936;&#x094D;&#x0930;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 200px" value="Space Bar" onClick="Space()">
				<input type=button name="btn" style="width: 24px" value="&#x0901;" onClick="keyboard(this.value)">
				<input type=button name="btn" style="width: 24px" value="&#x093C;" onClick="keyboard(this.value)">
			</td>
		</tr>
	</tbody>
</table>

</div>
<div id="d303" style="color: red; ">
<p style="color: red; "> <A href="#" onclick="myFunction()"> <img src="img/keyboard.png" width=5% height=5%> </a></p>
</div>
<div id="cont" style="margin-left: 10px; color: black; text-align: left; "></div>
</div>
</center>
<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script>
var a;
$(document).ready(function() {
	$("#cont").empty();
        $.ajax({
            url : "http://localhost/tadditha/pratyaya.txt",
            dataType: "text",
            success : function (data) {
                a = data.split("\n");
				$('#pari1').empty();
                const list = document.getElementById('pari1');
					for (const f of a) 
					{
						let ast1 = f.split("$"); //f.replace(/\$/g,'\t');
						const option = document.createElement('option');
						var sfx = ast1[0]+"\t"+ast1[1];
						option.value = ast1[0]+"\t"+ast1[1];
						//if(f.startsWith(val1,0)){
						list.appendChild(option);//}
					};
            }
        });
    });
</script>






