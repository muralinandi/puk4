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
/*function fun2(){
	readTextFile("t1.json", function(t1){
		var sk1 = JSON.parse(t1);
		alert("fun2->"+sk1.length);
		sk = sk1;
//		alert(sk[0].SKNO);
	});
}
*/
function exf1()
{
	document.getElementById("cont").innerHTML="";
//	alert("exf1 "+sk[0].SKNO);
readTextFile("http://localhost/tadditha/tadditha.JSON", function(text){
    var data1 = JSON.parse(text); //parse JSON
    //console.log(data);
	//alert("in9 "+data1.d[0].Word);
	//alert("json length is "+data1.d.length);
	/*
	$.getJSON('0sk.json', function(sktext) {
		//JSON.stringify(sk);
		sk =  JSON.parse(JSON.stringify(sktext));
		skl=sk.sk1.length;
		alert("skl=>"+skl);
	});
	*/
	//let sk = getUsers();
	for(j=0;j<=data1.d.length;j++)
	{
		if(data1.d[j].Word == document.getElementById("ex").value)
		{
			//document.getElementById('cont').innerHTML ="<h1>" + myyear + "/" + mymonth + "/" + mytoday + "</h1>";
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
					//alert(data1.d[j].Sutra[aref]);
					//alert("astadhyayi-> "+data1.d[j].Sutra[aref].substr(1,7));
					ASS1 = data1.d[j].Sutra[aref].substr(0,7);
					skno = data1.d[j].Sutra[aref].substr(8,4);
					var books = ref10.split("%");
					let ASS2 = ASS1.replace(/\./g,'-');
					let ASS = ASS2.replace(/-0+/,'-');
					//alert("ASS-> "+ASS);
					let comm = "";
					let commBtn = "";
					let comms = "";
					let finalRef = '<table><tr><td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>';
					for(c9=0;c9<=books.length-1;c9++)
					{
						//alert("books: "+books[c9]);
						if(/^S/.test(books[c9]))
						{ 
							//alert("in SK: "+books[c9]+" ASS: "+ASS);
							try{
							let comSK = sk.find(el => el.ASNO === ASS);
							//alert(" SKNO: "+comSK.SKNO);
							comm = '<p><h3>'+comSK.SKNO+' &nbsp; &nbsp; &nbsp; '+comSK.Sutra+' &nbsp; &nbsp; &nbsp; '+comSK.ASNO+'</h3></p> <p align="justify">'+comSK.Comm+'</p>';
							//alert("comSK: "+comSK.Sutra);
							}catch(err){console.log(books[c9]+"; "+ASS); alert(err.name); alert(err.message); alert(ASS);}
							books[c9] = '<button type="button" id="sk'+aref+c9+'" name="sk'+aref+c9+'" data-toggle="modal" data-target="#m'+aref+c9+'" style="padding: 1px 6px 0px;" >'+books[c9]+'</button>';
							comms = '<div class="modal fade" id="m'+aref+c9+'" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">सिद्धान्तकौमुदी</h4></div><div class="modal-body" style="height:300px;overflow:scroll">'+comm+ '</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div>';
						}
						else if(/^M/.test(books[c9]))
						{
							//alert("in MB: "+books[c9]+" ASS: "+ASS);							
							try{
							let comMB = mb.find(el => el.ASNO === ASS);
							//alert(" mb ASNO: "+comMB.ASNO);
							comm = '<p><h3>'+comMB.Sutra+' &nbsp; &nbsp; &nbsp; '+comMB.ASNO+'</h3></p> <p align="justify">'+comMB.Comm+'</p>';
							//alert("comMB: "+comMB.Sutra);
							}catch(err){console.log(books[c9]+"; "+ASS); alert(err.name); alert(err.message); alert(ASS);}
							books[c9] = '<button type="button" id="mb'+aref+c9+'" name="mb'+aref+c9+'" data-toggle="modal" data-target="#m'+aref+c9+'" style="padding: 1px 7px 0px;" >'+books[c9]+'</button>';
							comms = '<div class="modal fade" id="m'+aref+c9+'" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">महाभाष्यम्</h4></div><div class="modal-body" style="height:300px;overflow:scroll">'+comm+ '</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div>';
						}
						else if(/^K/.test(books[c9]))
						{
							//alert("in KV: "+books[c9]+" ASS: "+ASS);
							try{
							let comKV = kv.find(el => el.ASNO === ASS);
							//alert(" kv ASNO: "+comKV.ASNO);
							comm = '<p><h3>'+comKV.Sutra+' &nbsp; &nbsp; &nbsp; '+comKV.ASNO+'</h3></p> <p align="justify">'+comKV.Comm+'</p>';
							//alert("comKV: "+comKV.Sutra);
							}catch(err){console.log(books[c9]+"; "+ASS); alert(err.name); alert(err.message); alert(ASS);}
							books[c9] = '<button type="button" id="kv'+aref+c9+'" name="kv'+aref+c9+'" data-toggle="modal" data-target="#m'+aref+c9+'" style="padding: 1px 8px 0px;">'+books[c9]+'</button>';
							comms = '<div class="modal fade" id="m'+aref+c9+'" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">काशिकावृत्तिः</h4></div><div class="modal-body" style="height:300px;overflow:scroll">'+comm+ '</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div>';
						}
						else if(/^B/.test(books[c9]))
						{
							//alert("in BV2: "+books[c9]+" ASS: "+ASS);
							try{
							let comBV = bv.find(el => el.ASNO === ASS);
							//alert(" bv SKNO: "+comBV.ASNO);
							comm = '<p><h3>'+comBV.Sutra+' &nbsp; &nbsp; &nbsp; '+comBV.ASNO+'</h3></p> <p align="justify">'+comBV.Comm+'</p>';
							//alert("comBV: "+comBV.Sutra);
							}catch(err){console.log(books[c9]+"; "+ASS); alert(err.name); alert(err.message); alert(ASS);}
							books[c9] = '<button type="button" id="bv'+aref+c9+'" name="bv'+aref+c9+'" data-toggle="modal" data-target="#m'+aref+c9+'" style="padding: 1px 9px 0px;" >'+books[c9]+'</button>';
							comms = '<div class="modal fade" id="m'+aref+c9+'" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">भाषावृत्तिः</h4></div><div class="modal-body" style="height:300px;overflow:scroll">'+comm+ '</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div>';
						} 
						//document.getElementById('cont').innerHTML +=
						finalRef += '<td>'+books[c9].replace(/[,;]/g,'')+comms+'</td>'; //'&nbsp; &nbsp; &nbsp;';
						//alert(finalRef);
					}
						finalRef += '</tr>';
						document.getElementById('cont').innerHTML += finalRef;
						console.log(finalRef);
						//finalRef="";
				}
				/*
			for(s1=0;s1<=data1.d[j].Sutra.length-1;s1++)
			{
				if(data1.d[j].Sutra != ""){document.getElementById('cont').innerHTML += '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="color: #D8710C">'+data1.d[j].Sutra[s1]+'</b></span><br>';}
			}
			*/
			if(data1.d[j].Def != "")
			{
				//document.getElementById('cont').innerHTML += '<span style="color: #960D4A"><b>Definition/विग्रहः :</b></span> <span style="color: #D80CAF"><b>'+data1.d[j].Def+'</b></span><br>';
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
					var x = data1.d[j].Prakriya[k]; //.split("$");
					var p1 = x.split("$");
					let id1=p1[2];
					let pat1 =/\d\.\d\.\d+\/\d\d\d\d/;
					let reslt = pat1.test(p1[2]);
					if(reslt)
					{ 
						var sref = p1[2].split("/");
						//alert(skl);
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
						//console.log(result);
						p1[2] = '<button type="button" id="b'+sref[1]+'" name="b'+sref[1]+'" data-toggle="modal" data-target="#m'+sref[1]+'">'+p1[2]+'</button>';
  					}
					else
					{
						var sref="vartika";
					}					
					p1[0] = '<tr><td style="padding: 5px;">'+p1[0]+'</td>';
					p1[1] = '<td style="padding: 5px;">'+p1[1]+'</td>';
////					p1[2] = '<td>'+p1[2]+'<div id="'+id1+'" style="display: none;">'+skoumudi+'</div></td>';
//					p1[2] = '<td>'+p1[2]+'<div class="modal fade" id="m'+sref[1]+'" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">सिद्धान्तकौमुदी</h4></div><div class="modal-body" style="height:300px;overflow:scroll">'+skoumudi + '</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div>';
////					alert("p1[2] "+p1[2]);
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
					
					//var x = data1.d[j].Prakriya[k].replace(/\$/g, "</td><td>");
					//x = "<tr><td>"+x;
					//x = x + "</td></tr>";
					//pra = pra+x;
					////document.getElementById('cont').innerHTML += x;
				}
				pra = pra + "</table>"
				//alert(pra);
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
<center><h2  style="color: red;">पाणिनीयव्याकरणोदाहरणकोशः - वार्तिकानि - अक्षरक्रमेण </h2></center>	
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
		
		document.getElementById("i1").innerHTML="अपेक्षितस्य वार्तिकस्य प्रथमाक्षरं चिनोतु। ततः अक्षरमालायां यदक्षरं चितं तदक्षरादीनि कानिचन वार्तिकानि  वार्तिकसंख्यया सह प्रथमपेटिकायाम् आविर्भवन्ति। ततः अपेक्षितं वार्तिकं  चिनोतु। ततः तद्वार्तिकसंबद्धानि उदाहरणानि द्वितीयपेटिकायाम् आविर्भवन्ति। ततः अपेक्षितम् उदाहरणं द्रष्टुम् अस्तु इत्यत्र नोदनं करोतु।";
		//document.getElementById("i2").innerHTML="";
		document.getElementById("cs").innerHTML="वार्तिकानि";
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
		
		document.getElementById("i1").innerHTML="Choisir l’initiale du vārtika. Ce dernier apparaîtra dans la liste déroulante avec sa référence dans la première fenêtre. La liste des exemples du vārtika choisi apparaît dans la seconde fenêtre. Sélectionner et cliquer sur OK.";
		//document.getElementById("i2").innerHTML="";
		document.getElementById("cs").innerHTML="&nbsp; &nbsp; &nbsp; Sūtras-s";
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
		
		document.getElementById("i1").innerHTML="Select the first letter of the vārtika. Select the vārtika in the scrolling list in the first window . The examples for this vārtika will appear in the second window.  Select the example and click on OK.";
		//document.getElementById("i2").innerHTML="";
		document.getElementById("cs").innerHTML="&nbsp; &nbsp; &nbsp; Sūtras-s";
		document.getElementById("ce").innerHTML="&nbsp; &nbsp; &nbsp; Examples";
		$("#exbtn1").prop("value", "OK");
	}
});
</script>
</div>
<center>
<p><center>
<label id="i1">अपेक्षितस्य वार्तिकस्य प्रथमाक्षरं चिनोतु। ततः अक्षरमालायां यदक्षरं चितं तदक्षरादीनि कानिचन वार्तिकानि  वार्तिकसंख्यया सह प्रथमपेटिकायाम् आविर्भवन्ति। ततः अपेक्षितं वार्तिकं  चिनोतु। ततः तद्वार्तिकसंबद्धानि उदाहरणानि द्वितीयपेटिकायाम् आविर्भवन्ति। ततः अपेक्षितम् उदाहरणं द्रष्टुम् अस्तु इत्यत्र नोदनं करोतु।
</label></center></p>
<!--
<p><center>
<label id="i2"> </label></center></p>
-->
<br>
<br>
<form name="f1" width="100%" autocomplete="off">
    <input type="radio" value="अ" name="l">अ
    &nbsp; <input type="radio" value="आ" name="l">आ
    &nbsp;<input type="radio" value="इ" name="l">इ
    &nbsp;<input type="radio" value="ई" name="l">ई
    &nbsp;<input type="radio" value="उ" name="l">उ
    &nbsp;<input type="radio" value="ऊ" name="l">ऊ
    &nbsp;<input type="radio" value="ऋ" name="l">ऋ
    &nbsp;<input type="radio" value="ए" name="l">ए
    &nbsp;<input type="radio" value="ऐ" name="l">ऐ
    &nbsp;<input type="radio" value="ओ" name="l">ओ
    &nbsp;<input type="radio" value="औ" name="l">औ
    &nbsp;<input type="radio" value="अं" name="l">अं
    &nbsp;<input type="radio" value="अः" name="l">अः<br>
    &nbsp;<input type="radio" value="क" name="l">क
    &nbsp; <input type="radio" value="ख" name="l">ख 
    &nbsp;<input type="radio" value="ग" name="l">ग
    &nbsp;<input type="radio" value="घ" name="l">घ
    &nbsp;<input type="radio" value="ङ" name="l">ङ
    &nbsp;<input type="radio" value="च" name="l">च
    &nbsp;<input type="radio" value="छ" name="l">छ
    &nbsp;<input type="radio" value="ज" name="l">ज
    &nbsp;<input type="radio" value="झ" name="l">झ
    &nbsp;<input type="radio" value="ञ" name="l">ञ
    &nbsp;<input type="radio" value="ट" name="l">ट
    &nbsp;<input type="radio" value="ठ" name="l">ठ
    &nbsp;<input type="radio" value="ड" name="l">ड
    &nbsp;<input type="radio" value="ढ" name="l">ढ
    &nbsp;<input type="radio" value="ण" name="l">ण 
    &nbsp;<input type="radio" value="त" name="l">त
    &nbsp;<input type="radio" value="थ" name="l">थ
    &nbsp;<input type="radio" value="द" name="l">द
    &nbsp;<input type="radio" value="ध" name="l">ध
    &nbsp;<input type="radio" value="न" name="l">न
    &nbsp;<input type="radio" value="प" name="l">प
    &nbsp;<input type="radio" value="फ" name="l">फ
    &nbsp;<input type="radio" value="ब" name="l">ब
    &nbsp;<input type="radio" value="भ" name="l">भ
    &nbsp;<input type="radio" value="म" name="l">म
    &nbsp;<input type="radio" value="य" name="l">य
    &nbsp;<input type="radio" value="र" name="l">र
    &nbsp;<input type="radio" value="ल" name="l">ल
    &nbsp;<input type="radio" value="व" name="l">व
    &nbsp;<input type="radio" value="श" name="l">श
    &nbsp;<input type="radio" value="ष" name="l">ष
    &nbsp;<input type="radio" value="स" name="l">स
    &nbsp;<input type="radio" value="ह" name="l">ह
    <br>

	<br><br>
	<label id="cs">वार्तिकानि &nbsp; &nbsp;</label>
	<input list="sak1" name="sak1" id="sak" style="width: 50%;" onfocus="this.value=''" onchange="loadexamples();" style="width: 30%;" autocomplete="off" placeholder = "Select Vartika">
	<datalist id="sak1"></datalist>
	<br>
	<!-- <input type=button value="OK" id="exbtn1" name="exbtn1" onClick="exf1();"> -->
	<label id="ce">उदाहरणानि </label>
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

function loadexamples(){
	//alert(document.getElementById('sak1').value);;
	$('#examples').empty();
	var pra1 = document.getElementById("sak").value;
	const list1 = document.getElementById('examples');
	var sas = pra1.split('\t');
			for(j=0;j <= a.length-1;j++)
			{
				var ast1 = a[j].split("$");
				var vartika1 = ast1[1]+"\t"+ast1[0]+"\t"+ast1[2];
				if(vartika1 === pra1)
				{
					var b = ast1[3].split(",");
					for(i=0;i<=b.length-1;i++)
					{
						var option = document.createElement('option');
						option.value = b[i].trim();
						list1.appendChild(option);					
					}
				}
			}
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
    	$(document).on('change', '[name="l"]' , function(){
  	var val1 = $('[name="l"]:checked').val();
	//document.getElementById('cont').innerHTML="";
	$("#cont").empty();
    //alert(val1);
    //alert("in1");
        $.ajax({
            url : "http://localhost/tadditha/VARTIKA.txt",
            dataType: "text",
            success : function (data) {
                //$(".text").html(data);
                //alert("fetching File: "+data);
                a = data.split("\n");
                //alert(a.length);
//var a = ["1", "2", "3", "4", "5"];
				$('#sak1').empty();
                const list = document.getElementById('sak1');
for (const f of a) {
	let ast10 = f.split("$");
	//let vartika = ast1.split(
	let ast1 = ast10[1]+"\t"+ast10[0]+"\t"+ast10[2]
  const option = document.createElement('option');
  option.value = ast1;
  if(ast1.startsWith(val1,0)){
  list.appendChild(option);}
};
            }
			
        });
    	});
    });
</script>