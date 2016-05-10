<?
session_start();
$captchaValidierungOk = false;

if (ereg('^[a-z]{4}$', $_POST['captcha_code']) &&       
   !empty($_SESSION['captcha_code']) &&               
     ($_SESSION['captcha_code']==$_POST['captcha_code'])) { 

  $captchaValidierungOk = true;
}

$code = '';
for ($i = 0; $i < 4; $i++) {
  $code .= chr(rand(97, 122));
}
$_SESSION['captcha_code'] = $code;
?>
<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="ext/powermail/js/mandatoryjs/lib/prototype.js" type="text/javascript"></script>
	<script src="ext/powermail/js/mandatoryjs/src/effects.js" type="text/javascript"></script>
	<script src="ext/powermail/js/mandatoryjs/fabtabulous.js" type="text/javascript"></script>
	<script src="ext/powermail/js/checkbox/checkbox.js" type="text/javascript"></script>
	<link href="fileadmin/styles/01_layouts_basics/css/layout_3col_standard.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="fileadmin/welpe/css/style.css" />
	<link rel="stylesheet" type="text/css" href="fileadmin/welpe/css/typography.css" />
	<!--[if lte IE 7]><link href="fileadmin/styles/patches/../01_layouts_basics/css/patches/patch_3col_standard.css" rel="stylesheet" type="text/css" /><![endif]-->
	<meta name="description" content="Prof. Dr. Ingelore Welpe ist Psychologin und Anthropologin, HRM-Expertin, Consultant und Trainerin" />
	<meta name="keywords" content="Human Resources, Coaching, Wilderness Experience, Organisation, Personal, Berater" />
	<meta name="robots" content="index,follow" />
	<meta name="copyright" content="&copy; 2009 Ingelore Welpe" />
	<meta http-equiv="content-language" content="de" />
	<meta name="author" content="Rainer Halbmann" />
	<meta name="revisit-after" content="7 days" />
	<script src="index2e34.php?id=245&amp;type=3131" type="text/javascript"></script>
	<title>Ingelore Welpe :: Kontakt</title>
</head>
<body id="pageUID-245">
<div id="page_margins">
	<div id="page">
		<div id="header"><h1>Prof. Dr. Ingelore Welpe</h1>
		<h2>HRM-Expertin - Consultant -Trainerin</h2></div>
		<div id="main">
			<div id="col1">
				<div id="col1_content" class="clearfix">
					<div class="submenu">
					<ul id="submenu">
						<li id="Home"><a href="index.html">Home</a>
						<div class="corner">&nbsp;</div></li>
						<li id="Expertise"><a href="expertise.html">Expertise</a>
						<div class="corner">&nbsp;</div></li>
						<li id="Referenzen"><a href="referenzen.html">Referenzen</a>
						<div class="corner">&nbsp;</div></li>
						<li id="Vorträge"><a href="vortraege.html">Vorträge</a>
						<div class="corner">&nbsp;</div></li>
						<li id="Kontakt"><a href="kontakt.html">Kontakt</a>
						<div class="corner">&nbsp;</div></li>
					</ul>
					</div>					
					<div class="textBelowMenu"></div>
				</div>
			</div>
			<div id="col2">
				<div id="col2_content" class="clearfix"><div id="c445"><div class="csc-textpic csc-textpic-center csc-textpic-above"><div class="csc-textpic-imagewrap" style="width:172px;"><dl class="csc-textpic-image csc-textpic-firstcol csc-textpic-lastcol" style="width:172px;"><dt><img src="WelpeVortrag.jpg" width="172" height="284" alt="Prof. Dr. Ingelore Welpe bei einem Vortrag" /></dt></dl></div></div><div class="csc-textpic-clear"><!-- --></div></div></div>
			</div>
			<div id="col3">
				<div id="col3_content" class="clearfix">
					<div class="floatbox"><div id="c468">
	<div class="flexi">
		<div class="left" style="width:44%"><div id="c443"><h1>Kontakt</h1><p>Prof. Dr. Ingelore Welpe<br />	Barstenkamp 48<br />24 113 Molfsee
</p>
</div></div>
		<div class="right" style="width:53%"><div id="c469"><p><b>Email</b>: <a href="mailto:&#109;&#97;&#105;&#108;&#64;&#105;&#110;&#103;&#101;&#108;&#111;&#114;&#101;&#45;&#119;&#101;&#108;&#112;&#101;&#46;&#100;&#101;">&#109;&#97;&#105;&#108;&#64;&#105;&#110;&#103;&#101;&#108;&#111;&#114;&#101;&#45;&#119;&#101;&#108;&#112;&#101;&#46;&#100;&#101;</a> <br /><b>Tel</b>.: 0171 306 88 18<br /><b>Fax</b>: 0431 658 658</p></div></div>
		<div class="clearfix"></div>
	</div>
</div><div id="c444">
<!-- .......................................................................... -->
<!--                              Anfang Formular                               -->
<!--                              ...............                               -->
<!--                                                                            -->
<!--    Autor:               Michael Peuss                                      -->
<!--    WebSeite:            http://www.formular-generator.de                   -->
<!--    Nutzungsbedingungen: Dieses Formular darf auf privaten und gewerblichen -->
<!--                         Webseiten eingebunden werden. Sie sind dadurch zu  -->
<!--                         keiner Gegenleistung verpflichtet. Wenn Sie mit    -->
<!--                         dem Formular zufrieden sind, wuerde ich mich ueber -->
<!--                         einen Link von Ihrer Seite sehr freuen.            -->
<!--                         Danke!                                             -->
<!-- .......................................................................... -->
<script language=JavaScript>
<!--
 function isValid() { 

   var msg = "";
   
   if (kontaktFormular.eMail.value.indexOf("@") < 1 ||
       kontaktFormular.eMail.value.indexOf(".") < 1) {
     msg += "- Die E-Mail-Adresse ist syntaktisch nicht korrekt.\n";
   }
   
   if(kontaktFormular.vorName.value == "") {
     msg += "- Leeres Feld: Vorname:\n";
   }

//   if(kontaktFormular.nachName.value == "") {
//     msg += "- Leeres Feld: Nachname:\n";
//   }

//   if(kontaktFormular.betreff1.value == "") {
//     msg += "- Leeres Feld: Betreff:\n";
//   }

   if(kontaktFormular.nachricht.value == "") {
     msg += "- Leeres Feld: Nachricht:\n";
   }
   
   if(msg == "") {
     return true;   
   }
   alert(msg);
   return false;
 }
-->
</script>
<?php
  
  $formularAnzeigen = false;
  if (!empty($_POST["senden"]) && (
      empty($_POST["vorName"]) ||
//      empty($_POST["nachName"]) ||
      empty($_POST["eMail"]) ||
      !$captchaValidierungOk ||
      empty($_POST["nachricht"]))) {
    $formularAnzeigen = true;
    echo '<span style="color: #FF0000; font-size: x-large;">Bitte alle Pflichtfelder ausfuellen.</span>';
  } else if (!empty($_POST["senden"]) &&
             !isEmail($_POST["eMail"])) {
    $formularAnzeigen = true;  
    echo '<span style="color: #FF0000; font-size: x-large;">Die E-Mail-Adresse ist nicht korrekt.</span>';
  } else if (empty($_POST["senden"])) {
    $formularAnzeigen = true;  
  }
  if ($formularAnzeigen) {
?>
<form name="kontaktFormular" method="post" action="<?=$_SERVER[PHP_SELF]; ?>" onSubmit="return isValid()">
  <table width="100%" border="0">
<!--anfang vorName-->  
    <tr>
      <td><div align="center">*</div></td>
      <td><strong>
        Name:
      </strong></td>
      <td>
      <input name="vorName" type="text" value="<?=$_POST['vorName']; ?>" /></td>

      <td>
        &nbsp;
      </td>          
    </tr>
<!--ende vorName-->
<!--anfang nachName   
    <tr>
      <td><div align="center">*</div></td>
      <td><strong>
        Nachname:
      </strong></td>
      <td><input name="nachName" type="text" value="<?=$_POST['nachName']; ?>" /></td>
      <td>
        &nbsp;
      </td>          
    </tr>
ende nachName-->
<!--anfang eMail-->        
    <tr>
      <td><div align="center">*</div></td>
      <td><strong>
        E-Mail:
      </strong></td>
      <td><input name="eMail" type="text" id="eMail" value="<?=$_POST['eMail']; ?>" /></td>
      <td>
        &nbsp;
      </td>      
    </tr>
<!--ende eMail-->
<!--anfang betreff1-->
    <tr>
      <td><div align="center"></div></td>
      <td><strong>
        Betreff:
      </strong></td>
      <td><input name="betreff1" type="text" id="betreff1" value="<?=$_POST['betreff1']; ?>" size="37" /></td>
      <td>
        &nbsp;
      </td>          
    </tr>
<!--ende betreff1-->
<!--anfang nachricht-->      
    <tr>
      <td><div align="center">*</div></td>
      <td><strong>
        Nachricht:
      </strong></td>
      <td><textarea name="nachricht" cols="35" rows="10"><?=$_POST['nachricht']; ?></textarea></td>
      <td>
        &nbsp;
      </td>          
    </tr>
<!--ende nachricht-->
<!--anfang kopie-->        
    <tr>
      <td>&nbsp;</td>
      <td><strong>
        Kopie der Nachricht:
      </strong></td>
      <td><input name="kopie" type="checkbox" value="checked" <?=$_POST['kopie']; ?>></td>
      <td>
        &nbsp;
      </td>          
    </tr>
<!--ende kopie-->
<!--anfang Captcha -->        
    <tr>
      <td><div align="center">*</div></td>
      <td>
<?
  if(!@include "http://www.formular-generator.de/captcha/formular.php?captcha_code=$code&v=ksb") {
?>
      <p>Code: <?=$code?></p>
<?
  }
?>
            </td>
      <td><input type="text" name="captcha_code" size="4" /><p>Bitte geben Sie die Buchstaben aus dem grünen Feld in das graue ein (Spamschutz).</p></td>
      <td>&nbsp;</td>          
    </tr>
<!--ende Captcha -->    
    <tr>
      <td colspan="3">
        <div align="right">
          <input name="senden" type="submit" value="Senden" />
        </div>
      </td>          
      <td>&nbsp;</td>          
    </tr>
  </table>
</form>

<?php
  echo'*Bitte alle Felder ausfüllen.';
  } else {
    $eMail = '
        
Name:
'.$_POST['vorName'].'        
        
E-Mail:
'.$_POST['eMail'].'
        
Betreff:
'.$_POST['betreff1'].'
        
Nachricht:
'.$_POST['nachricht'].'
        
Kopie der Nachricht:
'.$_POST['kopie'].'
        

'.$_POST['captcha'].'';
    
    if (@mail("mail@ingelore-welpe.de",
         "Neue Nachricht vom Kontaktformular ingelore-welpe.de",
         $eMail)) {
      echo "Ihre Nachricht wurde an mich verschickt, vielen Dank!<br />"; 
    } else {
      echo "E-Mail-Verkehr funktioniert zur Zeit nicht<br />";
    }
    if ($_POST['kopie']) {
      if (@mail($_POST['eMail'],
           "Hier die Kopie Ihrer Nachricht an Prof. Dr. Ingleore Welpe",
           $eMail)) {
        echo "Sie haben eine Kopie der Nachricht zugeschickt bekommen.<br />";
      }
    }
  }
  
  function isEmail($email) {
    $nonascii      = "\x80-\xff"; 
    $nqtext        = "[^\\$nonascii\015\012\"]";
    $qchar         = "\\[^$nonascii]";
    $protocol      = "(?:mailto:)";
    $normuser      = "[a-zA-Z0-9][a-zA-Z0-9_.-]*";
    $quotedstring  = "\"(?:$nqtext|$qchar)+\"";
    $user_part     = "(?:$normuser|$quotedstring)";
    $dom_mainpart  = "[a-zA-Z0-9][a-zA-Z0-9._-]*\.";
    $dom_subpart   = "(?:[a-zA-Z0-9][a-zA-Z0-9._-]*\.)*";
    $dom_tldpart   = "[a-zA-Z]{2,5}";
    $domain_part   = "$dom_subpart$dom_mainpart$dom_tldpart";
    $regex         = "$protocol?$user_part\@$domain_part";
    if (preg_match("/^$regex$/",$email)) {
      return true;
    }
    return false;
  }
?>

<!-- ............................................................... --> 
<!--                      Ende KontaktFormular                       -->
<!-- ............................................................... -->

	</div>
	</div></div>
				</div>
				<div id="ie_clearing">&nbsp;</div>
			</div>
		</div>
		
	</div>
</div>
<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://inglist.de/piwik/" : "http://inglist.de/piwik/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 11);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://inglist.de/piwik/piwik.php?idsite=11" style="border:0" alt=""/></p></noscript>
<!-- End Piwik Tag -->
</body>
</html>
