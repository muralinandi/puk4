var itr = "";
var itr1= new Array("a","A","i","I","u","U","e","o","M","H","k","K","g","c","C","j","T","D","N","t","d","n","p","b","B","m","y","r","l","v","w","s","S","h","0","1","2","3","4","5","6","7","8","9"," ","$");
var uni1= new Array("अ","ा","ि","ी","ु", "ू","े","ो","ं","ः","क","ख","ग","च","छ","ज","ट","ड","ण","त","द","न","प","ब","भ","म","य","र","ल","व","व","स","श","ह","०","१","२","३","४","५","६","७","८","९"," ","ऽ");	
var itr2= new Array("~N","~n","अa","िi","इi","ुu","उu","अi","एe","अu","कh","गh","चh","छh","जh","टh","डh","तh","दh","पh","सh","शh","बh",".M",".n",".m",".a","OM")
var uni2= new Array("ङ","ञ","ा", "ी","ई", "ू","ऊ","ै","ऐ","ौ","ख","घ","च","छ","झ","ठ","ढ","थ","ध","फ","श","ष","भ","ँ","ँ","ँ","ऽ","ॐ");	
var h= new Array("ङ","ञ","ख","घ","छ","झ","ठ","ढ","थ","ध","फ","श","ष","भ","क","ख","ग","च","ज","ट","ड","ण","त","द","न","प","ब","भ","म","य","र","ल","व","व","स","श","ह");	
var itr3= new Array("RRi","RRI","LRi","LRI","AUM","RRi","RRI")
var uni3= new Array("ृ","ॄ","ऌ","ॡ","ॐ","ऋ","ॠ")
var ih= new Array("a","A","i","I","u","U","e","o")
var vowel = new Array("aa","A","i","I","ii","u","U","e","ee","o","au","RRi")	
var swar_warn = new Array("आ","आ","इ","ई","ई","उ","ऊ","ए","ऐ","ओ","औ","ऋ")
var matra = new Array("a","ा","ी","ू","ऋ","ृ","ॄ","ए","े","ो","ौ","ॄ","ै")

var ts = "";
var char = "";			
var swar_word = "";
var h_word = "";
var ts_lastchar = "";
var keycode;	
var ts_last2char = "";
var two_vowels ="";
var strr1 ="";
var strr2="";

function keyboard(theValue){
	//alert("Button clicked is: "+theValue);
	//document.forms[0].ex.value += theValue;
	document.getElementById ('ex').value += theValue;
}
	
function BackSpace(){
	var word="";
	//word = document.form1.ex.value;
	word = document.getElementById ('ex').value;
	var back ="";
	back =  word.substring(0,word.length-1);
	document.getElementById ('ex').value = back;
}

function Space(){
	var word_s="";
	//word_s = document.form1.ex.value;
	word_s = document.getElementById ('ex').value;
	var add_space="";
	add_space = word_s+" ";
	//alert(add_space);
	document.getElementById ('ex').value = add_space;
}

function clearAll(){				
	//document.forms[0].ex.value ="";
	document.getElementById ('ex').value = "";
	//document.forms[0].itrans.value= "";	
	document.getElementById ('itrans').value="";
}

function checkKeycode(e) {
	if((keycode = window.event.keyCode==8)||
	(keycode = window.event.keyCode==17)||
	(keycode = window.event.keyCode==18)||
	(keycode = window.event.keyCode==9)||
	(keycode = window.event.keyCode==20)||
	(keycode = window.event.keyCode==9)||
	(keycode = window.event.keyCode==9)||
	(keycode = window.event.keyCode==70)||
	(keycode = window.event.keyCode==37 )||
	(keycode = window.event.keyCode==38)){
	}
}

function iu(){
	
	var ts= "";
	var ta= "";
	var ts2 ="";
	var ss="";
	
	//ts = document.forms[0].ex.value;
	ts = document.getElementById ('ex').value;
	var ls = document.getElementById ('ex').value;
	//var ls = document.forms[0].ex.value;
	
	itr = itr + ls.charAt(ls.length-1);
	ts_lastchar = ts.charAt(ts.length-1);
	ts_last2char = ts.charAt(ts.length-2);
	
	//document.forms[0].itrans.value= itr;
	//document.forms[0].itrans.value="";
	//document.forms[0].ex.value = "";
	
	document.getElementById ('itrans').value = itr;
	document.getElementById ('itrans').value = "";
	document.getElementById ('ex').value = "";
	
	var lastChar = ts.charAt(ts.length-1);
	//ss=document.forms[0].lastChar.value;
	ss=document.getElementById ('lastChar').value;
	
	var lastSecond = document.getElementById ('lastChar').value + lastChar;

	if(ts_lastchar=="h"){
		h_word = ts_lastchar;
	} 
	
	if((ts_lastchar=="a")||(ts_lastchar=="A")||(ts_lastchar=="e")||(ts_lastchar=="i")||(ts_lastchar=="o")||(ts_lastchar=="u")||(ts_lastchar=="I")){
		swar_word = ts_lastchar;
		//alert("Swar word contains: "+swar_word);
	}
	
	for(var i=0;i<matra.length;i++){
		var matra_word = matra[i];
		for(var t =0;t<vowel.length;t++){
			var swar = vowel[t];
			if(ts.charAt(ts.length-1)==swar){
				//alert("The vowel typed before is: "+swar_word);
				if(((ts.charAt(ts.length-2)==matra_word)||(ts.charAt(ts.length-2)=="+"))&&(swar_word!="")){
					//alert("The vowel typed is: "+swar_word);
					ts =ts.replace(ts.charAt(ts.length-1),swar_warn[t]);
					swar_word="";
				}
			}
		}
	}
		
	if(ts.length>=1){ 
		for(var t =0;t<h.length;t++){
			var vyanjan_word =h[t];
			if((ts_last2char==vyanjan_word)&&((ts_lastchar=="b")||(ts_lastchar=="c")||(ts_lastchar=="d")||(ts_lastchar=="g")||(ts_lastchar=="j")||(ts_lastchar=="k")||(ts_lastchar=="l")||(ts_lastchar=="m")||(ts_lastchar=="n")||(ts_lastchar=="p")||(ts_lastchar=="r")||(ts_lastchar=="s")||(ts_lastchar=="t")||(ts_lastchar=="v")||(ts_lastchar=="w")||(ts_lastchar=="y")||(ts_lastchar=="z")||(ts_lastchar=="K")||(ts_lastchar=="T")||(ts_lastchar=="D")||(ts_lastchar=="N")||(ts_lastchar=="B")||(ts_lastchar=="S")/*||(ts_lastchar=="h")*/)){
				var strr = "";
				var strr2 = "";
				var strr1 = "";
				strr = ts.charAt(ts.length-1);
				strr2 = "\u094D"+strr;
				ts2 = ts.substring(0,ts.length-1);
				ts = ts2+strr2;
				break;
			}
			else if((ts_last2char=="\u091C")&&(ts_lastchar=="~")){
				var strr = "";
				var strr2 = "";
				var strr1 = "";
				strr = ts.charAt(ts.length-1);
				strr2 = "\u094D"+strr;
				ts2 = ts.substring(0,ts.length-1);
				ts = ts2+strr2;
				break;
			}
			else if((swar_word =="a")&&(ts_lastchar==" ")){
				//alert("You typed: "+swar_word);
				ts2 = ts.substring(0,ts.length-1);
				ts =ts2+ts_lastchar;
				break;
			}
			else if((swar_word !="")&&((ts_lastchar=="b")||(ts_lastchar=="c")||(ts_lastchar=="d")||(ts_lastchar=="g")||(ts_lastchar=="j")||(ts_lastchar=="k")||(ts_lastchar=="l")||(ts_lastchar=="m")||(ts_lastchar=="n")||(ts_lastchar=="p")||(ts_lastchar=="r")||(ts_lastchar=="s")||(ts_lastchar=="t")||(ts_lastchar=="v")||(ts_lastchar=="w")||(ts_lastchar=="y")||(ts_lastchar=="z")||(ts_lastchar=="K")||(ts_lastchar=="T")||(ts_lastchar=="D")||(ts_lastchar=="N")||(ts_lastchar=="B")||(ts_lastchar=="S"))){
				var strr3="";
				strr3 = ts_last2char;
				ts = ts.replace(ts_last2char,strr3);
				swar_word="";
				//alert("swar is:  "+swar_word);
				break;
			}
			else if((ts.charAt(ts.length-2)==vyanjan_word)&&(ts_lastchar==" ")){
				ts2 = ts.substring(0,ts.length-1);
				ts = ts2+"\u094D"+ts_lastchar; 
				break;	
			}
			/*
			else if((h_word == "h")&&((ts_lastchar=="b")||(ts_lastchar=="c")||(ts_lastchar=="d")||(ts_lastchar=="g")||(ts_lastchar=="j")||(ts_lastchar=="k")||(ts_lastchar=="l")||(ts_lastchar=="m")||(ts_lastchar=="n")||(ts_lastchar=="p")||(ts_lastchar=="r")||(ts_lastchar=="s")||(ts_lastchar=="t")||(ts_lastchar=="v")||(ts_lastchar=="w")||(ts_lastchar=="y")||(ts_lastchar=="z")||(ts_lastchar=="K")||(ts_lastchar=="T")||(ts_lastchar=="D")||(ts_lastchar=="N")||(ts_lastchar=="B")||(ts_lastchar=="S"))){
				var half = "";
				var half2 ="";
				half = ts.charAt(ts.length-1);
				half2 = "\u094D"+half;
				ts2 = ts.substring(0,ts.length-1);
				ts = ts2+half2;
				h_word = "";
				alert("h word: "+h_word);
				break;
			}
			*/
		}
	}
		

	if(document.getElementById ('lastChar').value=="a"){
		if(lastSecond=="aa"){	
			//alert("lastsecond: "+lastSecond);
			ts = ts.replace(ts.charAt(ts.length-1),"\u093E")			
			document.getElementById ('lastChar').value="";
		}
		else if(lastSecond=="ai"){	
			ts = ts.replace(ts.charAt(ts.length-1), "\u0948")		
			document.getElementById ('lastChar').value="";
		}
		else if(lastSecond=="au"){	
			ts = ts.replace(ts.charAt(ts.length-1), "\u094C")			
			document.getElementById ('lastChar').value="";
		}
		else if(lastSecond="ah"){	
			ts = ts.replace("h", "\u0939") 
			document.getElementById ('lastChar').value="";
		}
	}
	else{	
		document.getElementById ('lastChar').value = "";
	}
	document.getElementById ('lastChar').value="";
	
	
	if((ts.charAt(ts.length-1)=="a")||(ts.charAt(ts.length-1)=="+")){
		two_vowels = two_vowels+1 ;
		//alert("Swar word contains: "+two_vowels);
	}
	
	
	
	/*For three characters*/
	if (ts.length >=3){
		for (var x=0; x<ts.length; x++){				
			if (x<ts.length - 2)
				ss= ts.substring(x, x+3);
			for (var j=0; j<itr3.length; j++){
				 if (itr3[j]==ss) {
					//alert(swar_word);
					if((ss=="RRi")&& ((ts == ss)||(ts.charAt(ts.length-4)==" ")||(two_vowels!=""))){
						ts = ts.replace(ss,"\u090B");
						two_vowels="";
						//alert("Its empty: "+two_vowels);
					}
					else if((ss=="RRI")&& ((ts == ss)||(ts.charAt(ts.length-4)==" ")||(two_vowels!=""))){
						ts = ts.replace(ss,"\u0960");
						two_vowels="";
					}
					else{
						ts = ts.replace(ss, uni3[j]);
						break;
					}
				}
			}     
		}
	}
	
		
	/*For two character*/
	if (ts.length >=2){
		for (var x=0; x<ts.length; x++){				
			if (x<ts.length - 1)
				ss= ts.substring(x, x+2);
			for (var j=0; j<itr2.length; j++){
				if (itr2[j]==ss) {
					
					if((ss=="\u0905a")&&((ts == ss)||(ts.charAt(ts.length-2)==" ")))
						ts = ts.replace(ss,"\u0906");
					else if((ss=="\u0905i")&&((ts.charAt(ts.length-3)==" ")||(ts.charAt(ts.length-2)==" ")))
						ts = ts.replace(ss,"\u0910") 
					else if((ss=="\u0905u")&&(ts.charAt(ts.length-3)==" "))
						ts = ts.replace(ss,"\u0914") 	
					else if((ss=="\u0905u")&&(ts.charAt(ts.length-3)==" "))
						ts = ts.replace(ss,"\u0914") 
					else if((ss=="\u0905a")&&(ts.charAt(ts.length-3)==" "))
						ts = ts.replace(ss,"\u0906") 
					else if((ss=="\u0905a")&&(ts.charAt(ts.length-3)==" "))
						ts = ts.replace(ss,"\u0906") 
					else if((ss=="\u0905i")&&((ts == ss)||(ts.charAt(itr.length-2)==" ")))
						ts = ts.replace(ss, "\u0910") 
					else if((ss=="\u0907i")&&((ts == ss)||(ts.charAt(ts.length-2)==" ")))
						ts = ts.replace(ss,"\u0908")
					else if((ss=="\u0909u")&&((ts == ss)||(ts.charAt(ts.length-2)==" ")))
						ts = ts.replace(ss,"\u090A")
					else if((ss=="\u0905u")&&((ts == ss)||(ts.charAt(ts.length-2)==" ")))
						ts = ts.replace(ss,"\u0914")
					else if((ss=="\u0905u")&&(ts.length>1))
						ts = processSyllable2_au(ts,ss,j);
					else if((ss=="\u0905i")&&(ts.length>1))
						ts = processSyllable2_ai(ts,ss,j);
					else if((ss=="\u0905a")&&(ts.length>1))
						ts = processSyllable2_aa(ts,ss,j);	
					else {		
						ts = ts.replace(ss, uni2[j]);
						break;
					}
				}	
			}    
		}
	}
	
	/*For One character*/
	for (var x=0; x<ts.length; x++){
		ss= ts.substring(x, x+1);
		for (var j=0; j<itr1.length; j++){
			if (itr1[j]==ss) {
				
				if((ss=="a")&&(ts == ss))
					ts = ts.replace(ss,"\u0905");
				else if((ss=="A")&&((ts == ss)||(ts.charAt(ts.length-2)==" ")))
					ts = ts.replace(ss,"\u0906") 
				else if((ss=="i")&&(ts == ss))
					ts = ts.replace(ss,"\u0907")
				else if((ss=="I")&&((ts == ss)||(two_vowels!=""))){
					ts = ts.replace(ss,"\u0908");
					two_vowels="";
				}
				else if((ss=="u")&&(ts == ss))
					ts = ts.replace(ss,"\u0909")
				else if((ss=="U")&&(ts == ss))
					ts = ts.replace(ss,"\u090A")
				else if((ss=="e")&&((ts == ss)||(two_vowels!=""))){
					ts = ts.replace(ss, "\u090F");
					two_vowels="";
				}
				else if((ss=="o")&&(ts == ss))
					ts = ts.replace(ss,"\u0913")
				else if((ss=="a")&&(ts.length>1))
					ts = processSyllable_a(ts,ss,j);
				else if((ss=="i")&&(ts.length>1))
					ts=processSyllable_i(ts,ss,j);
				else if((ss=="I")&&(ts.length>1))
					ts = processSyllable_ii(ts,ss,j);
				else if((ss=="e")&&(ts.length>1))
					ts = processSyllable_e(ts,ss,j);
				else if((ss=="u")&&(ts.length>1))
					ts = processSyllable_u(ts,ss,j);
				else if((ss=="U")&&(ts.length>1))
					ts = processSyllable_uu(ts,ss,j);
				else if((ss=="o")&&(ts.length>1))
					ts = processSyllable_o(ts,ss,j);	
				else {
					ts = ts.replace(ss, uni1[j]);
					break;
				}
				
			}	
		}   
	}
	us=ts;					
	document.getElementById ('ex').value = ts;

	if(window.event.keyCode==16){ 
		var lep=ts.charAt(ts.length-1)
		document.getElementById ('itrans').value = itr.replace(lep, "")
	}
	
	if ((ts.length >=1)&&(document.getElementById ('lastChar').value=="h")){
		for (var x=0; x<ts.length; x++){				
			ssh= ts.substring(x, x+1);
			for (var j=0; j<h.length; j++){
				if (h[j]==ssh) {
					ts = ts.replace(ssh, h[j]);
					break;
				}	
			}   
		}
	}


}// iu function closes

function processSyllable_a(ts,ss,j){
	if(	(ts.charAt(ts.length-2)=="अ")||
		(ts.charAt(ts.length-2)==" ")||
		(ts.charAt(ts.length-2)=="उ")||
		(ts.charAt(ts.length-2)=="इ")||
		(ts.charAt(ts.length-2)=="ई")||
		(ts.charAt(ts.length-2)=="ऊ")||
		(ts.charAt(ts.length-2)=="ऋ")||
		(ts.charAt(ts.length-2)=="ऌ")||
		(ts.charAt(ts.length-2)=="ॡ")||
		(ts.charAt(ts.length-2)=="ए")||
		(ts.charAt(ts.length-2)=="ऐ")||
		(ts.charAt(ts.length-2)=="ओ")||
		(ts.charAt(ts.length-2)=="औ")||
		(ts.charAt(ts.length-2)=="ॠ"))
		
		ts = ts.replace(ts.charAt(ts.length-1),"अ")

	else if (((ss)=="I")||((ss)=="A")||((ss)=="U")||((ss)=="e")||((ss)=="E")||((ss)=="o"))
		ts = ts.replace(ss,"")
	else {
		ts = ts.replace("a", "")
		document.getElementById ('lastChar').value= ss;
	}
	return ts
	/*
	for(var u=0;u<swar_warn.length;u++){
		var word =  swar_warn[u];
		if((ts.charAt(ts.length-2)==word)||(ts.charAt(ts.length-2)==" ")){
			ts = ts.replace(ts.charAt(ts.length-1),"\u0905");
			break;
		}
	}
	if(((ss) == "I" )||((ss) == "A" )||((ss) == "U")||((ss) == "e")||((ss) == "E")||((ss) == "o" )){
		alert("ss: "+ss);
		ts= ts.replace(ss,"")
	}
	else{
		ts = ts.replace("a","");
		document.forms[0].lastChar.value= ss;
	}
	return ts;
	*/
}

function processSyllable_i(ts,ss,j){
	for(var u=0;u<swar_warn.length;u++){
		var word =  swar_warn[u];
		if(( ts.charAt(ts.length-2)==word)||(ts.charAt(ts.length-2)==" ")){
			ts = ts.replace(ts.charAt(ts.length-1), "\u0907")
		}
		else {
			ts = ts.replace(ss,uni1[j]);
		}
	}
	return ts;
}

function processSyllable_u(ts,ss,j){
	for(var u=0;u<swar_warn.length;u++){
		var word =  swar_warn[u];
		if(( ts.charAt(ts.length-2)==word)||(ts.charAt(ts.length-2)==" ")){
			ts = ts.replace(ts.charAt(ts.length-1), "\u0909")
		}
		else if( ts.charAt(ts.length-2)=="\u0909"){
			ts = ts.replace(ss,"\u090A")
		}
		else {
			ts = ts.replace(ss,uni1[j]);
		}
	}
	return ts;
}

function processSyllable_ii(ts,ss,j){
	for(var u=0;u<swar_warn.length;u++){
		var word =  swar_warn[u];
		if(( ts.charAt(ts.length-1) == "\u0905" )||( ts.charAt(ts.length-1) == "\u0906" )||( ts.charAt(ts.length-2)==word)||(ts.charAt(ts.length-2)==" ")){
			ts = ts.replace(ts.charAt(ts.length-1), "\u0908")
		}
		else {
			ts = ts.replace(ss,uni1[j]);
		}
	}
	return ts;
}

function processSyllable_uu(ts,ss,j){
	for(var u=0;u<swar_warn.length;u++){
		var word =  swar_warn[u];
		if(( ts.charAt(ts.length-2)==word)||(ts.charAt(ts.length-2)==" ")){
			ts = ts.replace(ts.charAt(ts.length-1), "\u090A")
		}
		else {
			ts = ts.replace(ss,uni1[j]);
		}
	}
	return ts;
}

function processSyllable_e(ts,ss,j){
	for(var u=0;u<swar_warn.length;u++){
		var word =  swar_warn[u];
		if(( ts.charAt(ts.length-1) == "\u0905" )||( ts.charAt(ts.length-1) == "\u0906" )||( ts.charAt(ts.length-2)==word)||(ts.charAt(ts.length-2)==" ")){
			ts = ts.replace(ts.charAt(ts.length-1), "\u090F")
		}
		else {
			ts = ts.replace(ss,uni1[j]);
		}
	}
	return ts;
}


function processSyllable_o(ts,ss,j){
	for(var u=0;u<swar_warn.length;u++){
		var word =  swar_warn[u];
		if(( ts.charAt(ts.length-2)==word)||(ts.charAt(ts.length-2)==" ")){
			ts = ts.replace(ts.charAt(ts.length-1), "\u0913")
		}
		else {
			ts = ts.replace(ss,uni1[j]);
		}
	}
	return ts;
}

function processSyllable2_aa(ts,ss,j){
	for(var u=0;u<swar_warn.length;u++){
		var word =  swar_warn[u];
		if(( ts.charAt(ts.length-2)==word)||(ts.charAt(ts.length-3)==" ")){
			ts = ts.replace(ts.charAt(ts.length-1), "\u0905")
		}
		
		else if( ts.charAt(ts.length-2) == "\u0905"){
			//alert("i m here ss: "+ss);
			ts = ts.replace(ts.charAt(ts.length-2),"\u0906");
		}
		else {
			ts = ts.replace(ss,uni1[j]);
		}
	}
	return ts;
}

function processSyllable2_ii(ts,ss,j){
	for(var u=0;u<swar_warn.length;u++){
		var word =  swar_warn[u];
		//alert(word);
		if(( ts.charAt(ts.length-1) == "\u0905" )||( ts.charAt(ts.length-1) == "\u0906" )||( ts.charAt(ts.length-2)==word)||(ts.charAt(ts.length-2)==" ")){
			ts = ts.replace(ts.charAt(ts.length-1), "\u0908")
		}
		else {
			ts = ts.replace(ss,uni1[j]);
		}
	}
	return ts;
}	

function processSyllable2_ai(ts,ss,j){
	for(var u=0;u<swar_warn.length;u++){
		var word =  swar_warn[u];
		if(( ts.charAt(ts.length-2)==word)||(ts.charAt(ts.length-2)==" ")){
			ts = ts.replace(ts.charAt(ts.length-1), "\u0910")
		}
		else {
			ts = ts.replace(ss,uni1[j]);
		}
	}
	return ts;
}
function processSyllable2_au(ts,ss,j){
	for(var u=0;u<swar_warn.length;u++){
		var word =  swar_warn[u];
		if(( ts.charAt(ts.length-2)==word)||(ts.charAt(ts.length-2)==" ")){
			
			ts = ts.replace(ts.charAt(ts.length-1), "\u0914")
		}
		else {
			ts = ts.replace(ss,uni1[j]);
		}
	}
	return ts;
}

function processSyllable2_uu(ts,ss,j){
	for(var u=0;u<swar_warn.length;u++){
		var word =  swar_warn[u];
		if(( ts.charAt(ts.length-1) == "\u0905" )||( ts.charAt(ts.length-1) == "\u0906" )||( ts.charAt(ts.length-2)==word)||(ts.charAt(ts.length-2)==" ")){
			ts = ts.replace(ts.charAt(ts.length-1), "\u0907")
		}
		else {
			ts = ts.replace(ts.charAt(ts.length-2), "")
		}
	}
	return ts;
}