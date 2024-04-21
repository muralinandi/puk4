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
<!-- <center><h2  style="color: red;">पाणिनीयव्याकरणोदाहरणकोशः - तद्धितप्रकरणम् - उपोद्घातः </h2></center> -->
<div style="width: 100%;">
    <div style="width: auto; text-align: right; height: 25px;">
	
		<fieldset style="padding: 5px; margin-right: 5px; border: 1px solid rgb(128,128,128) width: 200px; float: right">
		<legend style="color: rgb(11,63,113); font-weight: bold; font-size: 11pt;">For translation of instructions</legend>
			<input type="radio" name="lang" id="lang" value="d"><label>संस्कृतम्</label>
			<input type="radio" name="lang" id="lang" value="f"><label>Français</label>
			<input type="radio" name="lang" id="lang" value="e"><label>English</label><br>
		</fieldset>
	</div>
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
		document.getElementById("a43").innerHTML='प्रत्ययार्थः'; */
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
		//document.getElementById("a8").style.color="white";
		
		document.getElementById("i1").innerHTML='<p align="justify">पाणिनीयव्याकरणोदाहरणकोशस्य अयं चतुर्थः भागः तद्धितप्रत्ययान्तान्‌ शब्दान्‌ प्रतिपादयति।</p><p align="justify">पूर्वभागेष्विव अत्रापि भट्टोजिदीक्षितस्य सिद्धान्तकौमुद्यां विद्यमानानाम्‌ उदाहरणानामेव अत्र प्रबन्धाः रचिताः। </p><p align="justify">अष्टाध्याय्यां तत्र तत्र विभिन्नेषु अध्यायेषु विद्यमानानां तद्धितप्रकरणसंबद्धानां १०६७ सूत्राणाम्‌, सिद्धान्तकौमुद्यां भट्टोजिदीक्षितेन तद्धितप्रकरणे १०७२ प्रभृति २१३८ पर्यन्तं विद्यमानसूत्रक्रमसंख्यया क्रोडीकृतानां सूत्राणाम्‌ उदाहरणानि अत्र व्याकृतानि। शब्दनिष्पत्तिप्रकाशनाय अष्टाध्यायीसूत्रक्रममुल्लङ्घ्य प्रवृत्तेषु प्रक्रियाग्रन्थेषु भट्टोजिदीक्षितस्य सिद्धान्तकौमुदी श्रेष्ठतमा।  सिद्धान्तकौमुदीसूत्र-क्रमसंख्यानुसारिणी अष्टाध्यायीसूत्रसंख्याप्रदर्शिका पट्टिका भूमिकायाः अन्ते निवेशिता। </p><p align="justify"><h4><b>प्रबन्धरचनाप्रकारः</b></h4></p><p align="justify">अस्मिन्‌ भागे ३०२२ उदाहरणानि व्याकृतानि।  तेषां प्रबन्धानां रचना तावत्‌ पूर्वेषु भागेष्विव षडि्‌भः प्रकारैः संभवति। प्रथमतः प्रबन्धस्य शीर्षकम्‌, तच्च तद्धितान्तम्‌ उदाहरणमेव भवति। ततः उदाहरणस्य स्थाननिर्देशः। प्रथमम्‌ अष्टाध्यायीसूत्रपाठमनुसृत्य अध्यायपादसूत्रसंख्या, ततः सिद्धान्तकौमुद्यां विद्यमाना सूत्रसंख्या, सिद्धान्तकौमुद्याः भागपृष्ठनिर्देशः, ततः आवश्यकं चेत्‌ अष्टाध्याय्याः व्याख्यानग्रन्थानां महाभाष्य-काशिकावृत्ति-भाषावृत्तीनां भागपृष्ठनिर्देशः सूचितः।  </p><p align="justify">ततः भागपृष्ठसंख्यानन्तरं कोष्ठे विद्यमाना (१) संख्या सूत्रस्य उदाहरणम्‌, (२) संख्या सूत्रस्य प्रत्युदाहरणम्‌, (३) संख्या प्रासङ्गिकम्‌ उदाहरणमिति सूचयति। प्रासङ्गिकानि उदाहरणानि सर्वाण्यपि तद्धितान्तान्येव भवन्ति। अस्मिन्‌ प्रकरणे विद्यमानेषु १०६७ सूत्रेषु प्रकृतसूत्रस्य व्याख्याने दत्तं पदं तस्य सूत्रस्य उदाहरणं वा प्रत्युदाहरणं वा न भवति चेत्‌, तत्‌ पदं तस्य सूत्रस्य प्रासङ्गिकम्‌ उदाहरणमिति परिगणितम्‌। तत्‌ पदम्‌ अन्यस्य सूत्रस्य वार्तिकस्य वा उदाहरणं वा प्रत्युदाहरणं वा स्यात्‌। यथा - "सात्पदाद्योः" ८.३.१११/२१२३ इति सूत्रव्याख्याने सिद्धान्तकौमुद्यां दत्तं शुक्लीभवति इति प्रासङ्गिकम्‌ उदाहरणम्‌, "विभाषा साति कार्‌त्स्न्ये" ५. ४.०५२/२१२२ इति सूत्रस्य प्रत्युदाहरणम्‌। </p><p align="justify">उदाहरणभूतेन पदेन पदान्तरं समभिव्याहृतं चेत्‌ तद्वाक्यं ग्रन्थनिर्देशपुरस्सरं दत्तम्‌। यथा - अंशको दायादः, SK, K, BhV, अंशकः पुत्रः K. </p><p align="justify">ततः उदाहृतानां तद्धितान्तानां पदानां सूत्रव्याख्यानानुसारेण विग्रहः प्रदर्शितः। </p><p align="justify">ततः उदाहरणस्यार्थः पूर्ववदेव फ्रान्सीयभाषायाम्‌ आङ्गलभाषायां च प्रतिपादितः। अत्रोदाहृतानां केषाञ्चन तद्धितान्तानाम्‌ अर्थः नात्यन्तं स्पष्टः न चासन्दिग्धः। तथाऽपि अयं शब्दसमाहारः यत्र विविधाः तद्धितान्ताः शब्दाः सङ्गृहीताः येषु च बहवः अत्यन्तं प्राचीनाः नूनम्‌ अध्ययनस्य विषयो भवेत् ।   पाणिनीयानां सूत्राणां तुरीयांशभूतस्य तद्धितभागस्य शब्दशास्त्राधिष्ठितं मूल्यममूल्यमेव। अस्य भागस्य विशकलनार्थं १९८९ तमे वर्षे पुणे विश्वविद्यालयतः श्रीमत्या सरोजा भाटे महाभागया प्रकाशितः Pāṇini’s taddhita rules इति ग्रन्थः अस्माभिः परामृश्यते। </p><p align="justify">तदनन्तरं सम्पूर्णः प्रक्रियाभागः अत्र प्रकृतेः तद्धितप्रत्यययोजनात्‌ प्रभृति परिनिष्ठितरूपसिद्धिपर्यन्तम्‌ आवश्यकानि शास्त्राणि (सूत्रं वार्तिकं वा) तत्प्रयुक्तकार्याणि च क्रमेण प्रदर्श्यन्ते। एकैकस्य कार्यस्य प्रदर्शनार्थम्‌ एकैका पङ्क्तिरुपयुक्ता यस्यां त्रयो भागाः वर्तन्ते। तत्कार्यविधायकं सम्पूर्णं संक्षिप्तं वा सूत्रं वार्तिकं वा मध्ये स्थापितम्‌। अष्टाध्यायीस्थसूत्रसंख्या कौमुदीगतक्रमसंख्या च सूत्रमनुवर्तते। वार्तिकानां तु केवलं क्रमसंख्या निर्दिष्टा। सूत्रैः जातः उदाहरणस्य रूपपरिणामः वामभागे दर्शितः। तत्र प्रकृतिप्रत्ययागमादेशाः निरनुबन्धाः पृथग्‌ दर्शिताः। दक्षिणभागे शास्त्रकृतो विशेषः संक्षेपेण वर्णितः। अत्र टिप्पण्यां च प्रत्ययादयः तेषामभिज्ञानार्थं सानुबन्धाः निर्दिष्टाः। यस्य प्रक्रिया भूयसा दर्शितपूर्णप्रक्रियस्य अन्यस्य प्रक्रियया तुल्या तत्र भदेकं प्रक्रियाभागं परं</p><p align="justify">निर्दिश्य अन्यत्‌ सर्वं तद्वदिति निर्दिष्टम्‌। यथा उदरकः इत्यत्र प्रत्ययविधायकं सूत्रं निर्दिश्य अवशिष्टप्रक्रिया अंशकवदिति सूचितम्‌।  प्रबन्धस्य अन्तिमः षष्ठश्च भागः टिप्पणी। तत्र विशेषज्ञानार्थम्‌ आवश्यकाः विषयाः विशदीकृताः। यथा - चाक्षुषमित्यत्र। यथासम्भवं पाक्षिकाणि रूपाणि दर्शितानि, यथा द्विपात्रिकी, द्विपात्री, द्विपात्रीणा इति। </p>';
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
		
		document.getElementById("i1").innerHTML='<p align="justify">Le présent volume du Dictionnaire des exemples de la grammaire paninéenne est consacré aux dérivés secondaires (taddhitānta ou, brièvement, taddhita).</p><p align="justify">Comme dans les précédents volumes, ce sont les seuls exemples fournis par Bhaṭṭoji Dīkṣita dans sa Siddhāntakaumudī qui constituent les entrées des articles.</p><p align="justify">Ces exemples sont ici ceux qui illustrent 1067 sūtra de l’Aṣṭādhyāyī tels qu’ils ont été rassemblés et numérotés en continu de 1072 à 2138 par Bhaṭṭoji dans saSiddhāntakaumudī La réorganisation des sūtra de l’Aṣṭādhyāyī étant une caractéristique majeure des prakriyāgrantha (ouvrages qui expliquent l’Aṣṭādhyāyī en mettant en avant la dérivation des mots), dont laSiddhāntakaumudī est un éminent représentant, nous donnons à la fin de cet avant-propos, pour un aperçu de cette réorganisation, un tableau des correspondances entre les références de ces 1067 sūtra dans laSiddhāntakaumudī et celles des mêmes sūtra dans l’Aṣṭādhyāyī.</p><h4><b>Structure des articles</b></h4><p align="justify">Les articles sont au nombre de 3022. Leur structure, en six parties, est la même que dans les volumes précédents : entrée (constituée de l’exemple) ; référence, dans l’Aṣṭādhyāyī puis dans laSiddhāntakaumudī, du sūtra qu’illustre l’exemple ; référence de l’exemple dans laSiddhāntakaumudī et, le cas échéant, dans les autres commentaires de l’Aṣṭādhyāyī : Mahābhāṣya (M.), Kāśikāvṛtti (K.), Bhāṣāvṛtti (BhV.). À la suite de ces références, le chiffre (1) indique que l’exemple est un exemple proprement dit, le chiffre (2), qu’il est un contre-exemple, le chiffre (3), qu’il est un exemple incident. Par « exemple incident » nous entendons un exemple – ici toujours de dérivé secondaire –, qui n’est pas directement un exemple, ou un contre-exemple, pour l’un de ces 1067 sūtra regroupés par Bhaṭṭoji, mais qui est donné au cours de l’explication de l’un de ces sūtra principaux pour illustrer un autre sūtra ou un vārtika requis par cette explication. Il importe de préciser qu’un exemple incident peut être lui-même un contre-exemple pour ce dernier sūtra ou pour ce vārtika : ainsi, śuklībhavati, exemple incident dans laSiddhāntakaumudī pour le sūtra 2123/8.3.111, est un contre-exemple pour 2122/5.4.052.</p><p align="justify">Si, dans un commentaire, un exemple est accompagné d’un ou de plusieurs mots, donc d’un contexte, cet ensemble est reproduit en gras, suivi, si nécessaire, de la mention du commentaire où il se rencontre.</p><p align="justify">Vient ensuite l’analyse en sanskrit (vigraha) de l’exemple, qui fait ressortir le sens de l’exemple d’après son étymologie telle que la définit le sūtra.</p><p align="justify">Les traductions françaises et anglaises suivantes répondent aux mêmes exigences. Mais il faut savoir que le sens de bien de ces dérivés secondaires n’est ni clair ni certain. Ce vocabulaire, qui concerne des domaines très divers, qui est pour une grande part très ancien, doit encore faire</p><p align="justify">l’objet d’études. L’intérêt lexicologique de cette grande part – presque un quart des sūtra – de l’Aṣṭādhyāyī est donc évident. D’une manière générale, pour une analyse de cette section, on se reportera d’abord à l’étude de Mme Saroja Bhate, Pāṇini’s taddhita rules, Pune : University of Poona, 1989.</p><p align="justify">L’avant-dernière partie des articles est une prakriyā (dérivation) complète. Rappelons qu’une prakriyā consiste en la séquence de toutes les opérations à effectuer, prescrites par des sūtra ou des vārtika, pour indiquer les étapes de la formation du dérivé secondaire jusqu’à sa forme finale. Une ligne est consacrée à chaque opération. Cette ligne se compose elle-même de trois parties. Au centre figure le texte, entier ou en abrégé, du sūtra ou du vārtika qui prescrit l’opération. Suit la référence du sūtra dans l’Aṣṭādhyāyī et dans laSiddhāntakaumudī, ou un numéro d’ordre dans le cas d’un vārtika. A gauche, l’opération est présentée sous forme schématique ; les différents éléments constitutifs du mot sont ici nettement séparés, dépourvus de leurs indices grammaticaux (anubandha) éventuels ; les transformations prescrites par chaque règle sont de ce fait clairement visibles. A droite, l’opération est décrite très brièvement et les indices grammaticaux y figurent, comme ils apparaissent aussi dans les notes. Pour un mot de formation presque identique à celle d’un mot pour lequel une prakriyā complète a été donnée, une prakriyā réduite aux seuls éléments différents est donnée avec renvoi au mot pourvu de la prakriyā complète (voir, par ex., la prakriyā de udarakaḥ pour laquelle il est renvoyé à celle d’aṃśakaḥ).</p><p align="justify">Des notes (ṭippaṇī) constituent la sixième et dernière partie d’un article. Ces notes fournissent d’abord, si nécessaire, des explications complémentaires pour comprendre plus en profondeur les prakriyā (voir cākṣuṣam, etc.). Les formes optionnelles sont citées et expliquées en note sous chacune des formes concernées (voir dvipātrikī, dvipātrī, dvipātrīṇā, etc.). Les notes explicitent, le cas échéant, le sens de certains exemples.</p>';
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
		document.getElementById("a43").innerHTML='Meaning of the suffixes';*/
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
		
		document.getElementById("i1").innerHTML='<p align="justify">The present volume of the Pāṇinīyavyākaraṇodāharaṇakośa deals with secondary derivatives (taddhitānta-s or, briefly, taddhita-s).</p><p align="justify">The only examples provided by Bhaṭṭoji Dīkṣita in his Siddhāntakaumudī constitute the entries of the articles.</p><p align="justify">The examples illustrate 1067 sūtra-s of the Aṣṭādhyāyī, which have been brought together and numbered following on from 1072 to 2138 by Bhaṭṭoji in his Siddhāntakaumudī. The reorganisation of the sūtra-s of the Aṣṭādhyāyī, being a primary characteristic of the prakriyāgrantha-s (works which explain the Aṣṭādhyāyī bringing to the fore the derivation of words), of which the Siddhāntakaumudī is a notable representative, we give at the end of this introduction for a view of the reorganisation, a chart of the correspondences between the references to these 1067 sūtra-s in the Siddhāntakaumudī and to those of the same sūtra-s in the Aṣṭādhyāyī</p><h4><b>Structure of the articles</b></h4><p align="justify">There are 3022 of these articles. Their structure, in six parts, entry (the example); reference, in the Aṣṭādhyāyī and then in the Siddhāntakaumudī, to the sūtra which illustrates the example; reference to the example in the Siddhāntakaumudī and, if necessary, in the other commentaries on the Aṣṭādhyāyī: Mahābhāṣya (M.), Kāśikāvṛtti (K.), Bhāṣāvṛtti (BhV.). Following these references, the figure (1) indicates a direct example, (2) a counter-example and (3) an incidental example. By “incidental example” we mean an example — here always a secondary derivative —, which is neither a direct nor a counter-example, of one of these 1067 sūtra-s reorganised by Bhaṭṭoji, but which is given in the explanation of one of these principal sūtra-s to illustrate either another sūtra or a vārtika required by the explanation. We must make it clear that an incidental example may itself be a counter-example for the latter sūtra or for the vārtika: thus śuklībhavati, incidental example in the Siddhāntakaumudī for sūtra 2123/8.3.111, is a counter-example for 2122/5.4.052.</p><p align="justify">If in a commentary the example is accompanied by one or several words, and thus has a context, we have reproduced the whole, followed where necessary by the mention of the commentary where it is found.</p>  <p align="justify">Next comes the analysis in Sanskrit (vigraha) of the example, which gives the meaning of the example according to its etymology as defined in the sūtra.</p><p align="justify">Then come the French and English translations following the same pattern. But it must be understood that the meaning of many of these secondary derivatives is neither clear nor certain. This vocabulary, which concerns very diverse domains and a great part of which is very old, must still be the subject of studies. The lexicological interest of this almost one quarter of the sūtra-s is evident. For an analysis of this section, we refer first of all to the study by Mrs. Saroja Bhate, Pāṇini’s taddhita rules, Pune: University of Poona, 1989.</p> <p align="justify">The penultimate part of the articles is a complete prakriyā (derivation). We note that a prakriyā consists of the sequence of all the operations which are to be carried out, prescribed by the sūtra-s or vārtika-s, to indicate the stages of the formation of the secondary derivative up to its final form. One line is given to each operation and this line is made up of three parts. The entire or abridged text of the sūtra or vārtika that prescribes the operation is in the centre. There follows the reference to the sūtra in the Aṣṭādhyāyī and in the Siddhāntakaumudī, or a serial number in the case of a vārtika. The operation in schematic form is shown on the left. The different constitutive elements of the word are precisely separated here, without their markers (anubandha). The transformations prescribed by each rule are thus clearly shown. The operation is very briefly described on the right, the markers appearing here as they also appear in the notes. For a word whose formation is almost identical to that of a word for which a complete prakriyā is given, a prakriyā limited to its different elements is provided with cross-reference to the word with the complete prakriyā (e.g. the prakriyā of udarakaḥ, for which there is a cross-reference to that of aṃśakaḥ).</p><p align="justify">Notes (ṭippaṇī-s) constitute the sixth and last part of an article. These notes provide first, if necessary, complementary explanations for the deeper understanding of the prakriyā-s (e.g. cākṣuṣam). Optional forms are cited and explained in notes under each of the forms concerned (e.g. dvipātrikī, dvipātrī, dvipātrīṇā). The notes explain, when possible, the meaning of some examples.</p>';
	}
});
</script>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}
.column {
  float: left;
  width: 50%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}

#test p {
    opacity: 0;
    margin-top: 25px;
    /*font-size: 21px;*/
    /*text-align: center;*/
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
  .column {
    width: 100%;
  }
}
</style>
<!--
<div id="test" class="row">
-->
<br><br><br>
<div>
	<p align=center> <img src="img/PUK4_1.jpg" style="width: 50%; height: 50%; " /> </p>
</div>
<!--
<div class="column">
<label id="i1" name="i1" style="margin: 10pt;">
<p align="justify">पाणिनीयव्याकरणोदाहरणकोशस्य अयं चतुर्थः भागः तद्धितप्रत्ययान्तान्‌ शब्दान्‌ प्रतिपादयति।</p><p align="justify">पूर्वभागेष्विव अत्रापि भट्टोजिदीक्षितस्य सिद्धान्तकौमुद्यां विद्यमानानाम्‌ उदाहरणानामेव अत्र प्रबन्धाः रचिताः। </p><p align="justify">अष्टाध्याय्यां तत्र तत्र विभिन्नेषु अध्यायेषु विद्यमानानां तद्धितप्रकरणसंबद्धानां १०६७ सूत्राणाम्‌, सिद्धान्तकौमुद्यां भट्टोजिदीक्षितेन तद्धितप्रकरणे १०७२ प्रभृति २१३८ पर्यन्तं विद्यमानसूत्रक्रमसंख्यया क्रोडीकृतानां सूत्राणाम्‌ उदाहरणानि अत्र व्याकृतानि। शब्दनिष्पत्तिप्रकाशनाय अष्टाध्यायीसूत्रक्रममुल्लङ्घ्य प्रवृत्तेषु प्रक्रियाग्रन्थेषु भट्टोजिदीक्षितस्य सिद्धान्तकौमुदी श्रेष्ठतमा।  सिद्धान्तकौमुदीसूत्र-क्रमसंख्यानुसारिणी अष्टाध्यायीसूत्रसंख्याप्रदर्शिका पट्टिका भूमिकायाः अन्ते निवेशिता। </p><p align="justify"><h4><b>प्रबन्धरचनाप्रकारः</b></h4></p><p align="justify">अस्मिन्‌ भागे ३०२२ उदाहरणानि व्याकृतानि।  तेषां प्रबन्धानां रचना तावत्‌ पूर्वेषु भागेष्विव षडि्‌भः प्रकारैः संभवति। प्रथमतः प्रबन्धस्य शीर्षकम्‌, तच्च तद्धितान्तम्‌ उदाहरणमेव भवति। ततः उदाहरणस्य स्थाननिर्देशः। प्रथमम्‌ अष्टाध्यायीसूत्रपाठमनुसृत्य अध्यायपादसूत्रसंख्या, ततः सिद्धान्तकौमुद्यां विद्यमाना सूत्रसंख्या, सिद्धान्तकौमुद्याः भागपृष्ठनिर्देशः, ततः आवश्यकं चेत्‌ अष्टाध्याय्याः व्याख्यानग्रन्थानां महाभाष्य-काशिकावृत्ति-भाषावृत्तीनां भागपृष्ठनिर्देशः सूचितः।  </p><p align="justify">ततः भागपृष्ठसंख्यानन्तरं कोष्ठे विद्यमाना (१) संख्या सूत्रस्य उदाहरणम्‌, (२) संख्या सूत्रस्य प्रत्युदाहरणम्‌, (३) संख्या प्रासङ्गिकम्‌ उदाहरणमिति सूचयति। प्रासङ्गिकानि उदाहरणानि सर्वाण्यपि तद्धितान्तान्येव भवन्ति। अस्मिन्‌ प्रकरणे विद्यमानेषु १०६७ सूत्रेषु प्रकृतसूत्रस्य व्याख्याने दत्तं पदं तस्य सूत्रस्य उदाहरणं वा प्रत्युदाहरणं वा न भवति चेत्‌, तत्‌ पदं तस्य सूत्रस्य प्रासङ्गिकम्‌ उदाहरणमिति परिगणितम्‌। तत्‌ पदम्‌ अन्यस्य सूत्रस्य वार्तिकस्य वा उदाहरणं वा प्रत्युदाहरणं वा स्यात्‌। यथा - "सात्पदाद्योः" ८.३.१११/२१२३ इति सूत्रव्याख्याने सिद्धान्तकौमुद्यां दत्तं शुक्लीभवति इति प्रासङ्गिकम्‌ उदाहरणम्‌, "विभाषा साति कार्‌त्स्न्ये" ५. ४.०५२/२१२२ इति सूत्रस्य प्रत्युदाहरणम्‌। </p><p align="justify">उदाहरणभूतेन पदेन पदान्तरं समभिव्याहृतं चेत्‌ तद्वाक्यं ग्रन्थनिर्देशपुरस्सरं दत्तम्‌। यथा - अंशको दायादः, SK, K, BhV, अंशकः पुत्रः K. </p><p align="justify">ततः उदाहृतानां तद्धितान्तानां पदानां सूत्रव्याख्यानानुसारेण विग्रहः प्रदर्शितः। </p><p align="justify">ततः उदाहरणस्यार्थः पूर्ववदेव फ्रान्सीयभाषायाम्‌ आङ्गलभाषायां च प्रतिपादितः। अत्रोदाहृतानां केषाञ्चन तद्धितान्तानाम्‌ अर्थः नात्यन्तं स्पष्टः न चासन्दिग्धः। तथाऽपि अयं शब्दसमाहारः यत्र विविधाः तद्धितान्ताः शब्दाः सङ्गृहीताः येषु च बहवः अत्यन्तं प्राचीनाः नूनम्‌ अध्ययनस्य विषयो भवेत् ।   पाणिनीयानां सूत्राणां तुरीयांशभूतस्य तद्धितभागस्य शब्दशास्त्राधिष्ठितं मूल्यममूल्यमेव। अस्य भागस्य विशकलनार्थं १९८९ तमे वर्षे पुणे विश्वविद्यालयतः श्रीमत्या सरोजा भाटे महाभागया प्रकाशितः Pāṇini’s taddhita rules इति ग्रन्थः अस्माभिः परामृश्यते। </p><p align="justify">तदनन्तरं सम्पूर्णः प्रक्रियाभागः अत्र प्रकृतेः तद्धितप्रत्यययोजनात्‌ प्रभृति परिनिष्ठितरूपसिद्धिपर्यन्तम्‌ आवश्यकानि शास्त्राणि (सूत्रं वार्तिकं वा) तत्प्रयुक्तकार्याणि च क्रमेण प्रदर्श्यन्ते। एकैकस्य कार्यस्य प्रदर्शनार्थम्‌ एकैका पङ्क्तिरुपयुक्ता यस्यां त्रयो भागाः वर्तन्ते। तत्कार्यविधायकं सम्पूर्णं संक्षिप्तं वा सूत्रं वार्तिकं वा मध्ये स्थापितम्‌। अष्टाध्यायीस्थसूत्रसंख्या कौमुदीगतक्रमसंख्या च सूत्रमनुवर्तते। वार्तिकानां तु केवलं क्रमसंख्या निर्दिष्टा। सूत्रैः जातः उदाहरणस्य रूपपरिणामः वामभागे दर्शितः। तत्र प्रकृतिप्रत्ययागमादेशाः निरनुबन्धाः पृथग्‌ दर्शिताः। दक्षिणभागे शास्त्रकृतो विशेषः संक्षेपेण वर्णितः। अत्र टिप्पण्यां च प्रत्ययादयः तेषामभिज्ञानार्थं सानुबन्धाः निर्दिष्टाः। यस्य प्रक्रिया भूयसा दर्शितपूर्णप्रक्रियस्य अन्यस्य प्रक्रियया तुल्या तत्र भदेकं प्रक्रियाभागं परं</p><p align="justify">निर्दिश्य अन्यत्‌ सर्वं तद्वदिति निर्दिष्टम्‌। यथा उदरकः इत्यत्र प्रत्ययविधायकं सूत्रं निर्दिश्य अवशिष्टप्रक्रिया अंशकवदिति सूचितम्‌।  प्रबन्धस्य अन्तिमः षष्ठश्च भागः टिप्पणी। तत्र विशेषज्ञानार्थम्‌ आवश्यकाः विषयाः विशदीकृताः। यथा - चाक्षुषमित्यत्र। यथासम्भवं पाक्षिकाणि रूपाणि दर्शितानि, यथा द्विपात्रिकी, द्विपात्री, द्विपात्रीणा इति। </p>
</label>
<script>
$("#test p").delay(1000).animate({"opacity": "1"}, 700);
</script>
</div>
</div>
-->
<div>
</div>
<style>

/* Float four columns side by side */
.column1 {
  float: left;
  width: 33.33%;
  padding: 0 6px;
}

.row1::after {
  content: "";
  clear: both;
  display: table;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column1 {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  
  text-align: center;
  background-color: #f1f1f1;
}
</style>
<h4><b>Credits</b></h4>
<div class="row1" style="margin-left: 30pt;">
  <div class="column1">
    <div>
      <h4>Dr. Hugo David</h4>
	  <h6>Head, Dept. of Indology</h6>
	  <h6>French Institute of Pondicherry</h6>
    </div>
  </div> 
  
  <div class="column1">
    <div>
      <h4>Prof. K.V.R.K. Acharyulu</h4>
	  <h6>Advisor</h6>
    </div>
  </div>

  <div class="column1">
    <div>
      <h4>Dr. Murali Nandi</h4>
	  <h6>Developer</h6>
    </div>
  </div> 
</div>

<!--
<div id="sfc66g887myp8za6z99xwqk9qqpxbjzlrwk"></div>
<script type="text/javascript" src="https://counter4.stat.ovh/private/counter.js?c=66g887myp8za6z99xwqk9qqpxbjzlrwk&down=async" async></script>
<noscript><a href="https://www.freecounterstat.com" title="hit counter html"><img src="https://counter4.stat.ovh/private/freecounterstat.php?c=66g887myp8za6z99xwqk9qqpxbjzlrwk" border="0" title="hit counter html" alt="hit counter html"></a></noscript>
-->
<p align="center">
<a href="https://www.freecounterstat.com" title="hit counter html"><img src="https://counter4.stat.ovh/private/freecounterstat.php?c=66g887myp8za6z99xwqk9qqpxbjzlrwk" border="0" title="hit counter html" alt="hit counter html"></a>
</p>

<?php
	#echo "murali";
	include("footer.php");
?>