<?php
if(isset($_POST['contact']))
{
  $name = strip_tags($_POST['name'], '');
  $email = strip_tags($_POST['email'], '');
  $subject = strip_tags($_POST['subject'], '');
  $message = strip_tags($_POST['message'], '');
  
  // You, the recepient
  $to = "Rosie Donohue <rosie@coisfarraige.net>";
  
  // Addtional headers
  $headers  = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  $headers .= "From: $name <$email>\r\n";
  
  mail($to, $subject, $message, $headers);
  
  echo "Thank you for your submission. We will get back to you soon!.. Please click <a href='contact.php'>here</a>
    if your browser doesn't support redirection.";
	
 
  
  exit;
}
?>

<script language="JavaScript" type="text/JavaScript">
function checkForm()
{
  var gname, gemail, gsubject, gmessage;
  with(window.document.contactform)
  {
    gname = name;
	gemail = email;
	gsubject = subject;
	gmessage = message;
  }
  if(gname.value == '')
  {
    alert('Please enter your name!');
	gname.focus;
	return false;
  }
  if(gemail.value == '')
  {
    alert('Please enter your email!');
	gemail.focus;
	return false;
  }
  if(gsubject.value == '')
  {
    alert('Please enter subject!');
	gsubject.focus;
	return false;
  }
  else if(gmessage.value == '')
  {
    alert('Enter your message!');
	gmessage.focus;
	return false;
  }
  else
  {
    return true;
  }
}
</script>
<html><!-- InstanceBegin template="/Templates/Main-white.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Cois Farraige - B &amp; B</title>
<!-- InstanceEndEditable --><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!--Fireworks MX 2004 Dreamweaver MX 2004 target.  Created Thu Apr 21 21:56:43 GMT+0100 (GMT Daylight Time) 2005-->
<script language="JavaScript">
<!--
function MM_preloadImages() { //v3.0
 var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
   var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
   if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<style type="text/css">
<!--
body {
	background-color: #013682;
}
-->
</style>
<link href="styles.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style21 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 12px;
}
.style22 {color: #013682}
-->
</style>
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
.style23 {font-size: 18px}
-->
</style>
<!-- InstanceEndEditable -->
</head>
<body onLoad="MM_preloadImages('images/Main-white_r2_c6_f2.jpg','images/Main-white_r2_c8_f2.jpg','images/Main-white_r2_c11_f2.jpg','images/Main-white_r2_c13_f2.jpg','images/Main-white_r2_c15_f2.jpg','images/Main-white_r2_c17_f2.jpg')">
<br>
<table width="800" border="2" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>      <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><img name="Mainwhite_r1_c1" src="images/Main-white_r1_c1.jpg" width="378" height="147" border="0" alt=""></td>
          <td><img name="Mainwhite_r1_c5" src="images/Main-white_r1_c5.jpg" width="422" height="147" border="0" alt=""></td>
        </tr>
      </table>
      <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="48"><img name="Mainwhite_r2_c1" src="images/Main-white_r2_c1.jpg" width="48" height="18" border="0" alt=""></td>
          <td width="259" rowspan="2" bgcolor="#FFFFFF"><img src="images/spacer.gif" width="259" height="1"></td>
          <td width="71" rowspan="2"><img name="Mainwhite_r2_c4" src="images/Main-white_r2_c4.jpg" width="71" height="61" border="0" alt=""></td>
          <td width="24" rowspan="2"><img name="Mainwhite_r2_c5" src="images/Main-white_r2_c5.jpg" width="24" height="61" border="0" alt=""></td>
          <td width="40" rowspan="2"><a href="index.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Mainwhite_r2_c6','','images/Main-white_r2_c6_f2.jpg',1)"><img name="Mainwhite_r2_c6" src="images/Main-white_r2_c6.jpg" width="40" height="61" border="0" alt=""></a></td>
          <td width="11" rowspan="2"><img name="Mainwhite_r2_c7" src="images/Main-white_r2_c7.jpg" width="11" height="61" border="0" alt=""></td>
          <td width="102" rowspan="2"><a href="localattractions.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Mainwhite_r2_c8','','images/Main-white_r2_c8_f2.jpg',1)"><img name="Mainwhite_r2_c8" src="images/Main-white_r2_c8.jpg" width="102" height="61" border="0" alt=""></a></td>
          <td width="10" rowspan="2"><img name="Mainwhite_r2_c10" src="images/Main-white_r2_c10.jpg" width="10" height="61" border="0" alt=""></td>
          <td width="44" rowspan="2"><a href="pricing.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Mainwhite_r2_c11','','images/Main-white_r2_c11_f2.jpg',1)"><img name="Mainwhite_r2_c11" src="images/Main-white_r2_c11.jpg" width="44" height="61" border="0" alt=""></a></td>
          <td width="9" rowspan="2"><img name="Mainwhite_r2_c12" src="images/Main-white_r2_c12.jpg" width="9" height="61" border="0" alt=""></td>
          <td width="46" rowspan="2"><a href="rooms.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Mainwhite_r2_c13','','images/Main-white_r2_c13_f2.jpg',1)"><img name="Mainwhite_r2_c13" src="images/Main-white_r2_c13.jpg" width="46" height="61" border="0" alt=""></a></td>
          <td width="9" rowspan="2"><img name="Mainwhite_r2_c14" src="images/Main-white_r2_c14.jpg" width="9" height="61" border="0" alt=""></td>
          <td width="61" rowspan="2"><a href="localinfo.htm" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Mainwhite_r2_c15','','images/Main-white_r2_c15_f2.jpg',1)"><img name="Mainwhite_r2_c15" src="images/Main-white_r2_c15.jpg" width="61" height="61" border="0" alt=""></a></td>
          <td width="10" rowspan="2"><img name="Mainwhite_r2_c16" src="images/Main-white_r2_c16.jpg" width="10" height="61" border="0" alt=""></td>
          <td width="51" rowspan="2"><a href="contact.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Mainwhite_r2_c17','','images/Main-white_r2_c17_f2.jpg',1)"><img name="Mainwhite_r2_c17" src="images/Main-white_r2_c17.jpg" width="51" height="61" border="0" alt=""></a></td>
          <td width="35" rowspan="2"><img name="Mainwhite_r2_c18" src="images/Main-white_r2_c18.jpg" width="5" height="61" border="0" alt=""></td>
        </tr>
        <tr>
          <td width="48" height="43" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
      </table>
      <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="507" bgcolor="#FFFFFF"><img src="images/spacer.gif" width="507" height="1"></td>
          <td width="277" valign="top"><img name="Mainwhite_r4_c9" src="images/Main-white_r4_c9.jpg" width="227" height="9" border="0" alt=""></td>
          <td width="16" bgcolor="#FFFFFF"><img src="images/spacer.gif" width="66" height="1"></td>
        </tr>
      </table>
      <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr bgcolor="#FFFFFF">
          <td width="518" valign="top"><br>
            <!-- InstanceBeginEditable name="editme" -->
            <table width="100%"  border="0" cellspacing="3" cellpadding="3">
              <tr>
                <td bgcolor="#136CA8"><span class="style7 style4 style12 style23"><strong>+ Contact Us </strong></span></td>
              </tr>
              <tr>
                <td bgcolor="#013682"><table width="100%"  border="0" cellspacing="4" cellpadding="4">
                  <tr>
                    <td><div align="justify">
                        <form name="form1" method="post" action="contact.php">
                          <table border="0" width="100%" cellpadding="2" cellspacing="2">
                            <tr>
                              <td colspan="2"><strong>You can contact us by phone, post or email: </strong></td>
                            </tr>
                            <tr>
                              <td><div align="right"><strong>Phone:</strong></div></td>
                              <td valign="middle">+353 (0)65 70 815 80 </td>
                            </tr>
                            <tr>
                              <td><div align="right"></div></td>
                              <td valign="middle">&nbsp;</td>
                            </tr>
                            <tr>
                              <td><div align="right"><strong>Post: </strong></div></td>
                              <td valign="middle">Cois Farraige </td>
                            </tr>
                            <tr>
                              <td><div align="right"></div></td>
                              <td valign="middle">Cregg</td>
                            </tr>
                            <tr>
                              <td><div align="right"></div></td>
                              <td valign="middle">Lahinch, Co. Clare </td>
                            </tr>
                            <tr>
                              <td><div align="right"></div></td>
                              <td valign="middle">Ireland</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td valign="middle">&nbsp;</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td valign="middle">&nbsp;</td>
                            </tr>
                            <tr>
                              <td><div align="right"><strong>Email:</strong></div></td>
                              <td valign="middle"><a href="mailto:rosie@coisfarraige.net" class="FestivalLink">rosie@coisfarraige.net</a></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td valign="middle">&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="80">Your Name:</td>
                              <td valign="middle"><input name="name" type="text" class="CobaltInput" size="25" ></td>
                            </tr>
                            <tr>
                              <td valign="middle">Your Email:</td>
                              <td><input name="email" type="text" class="CobaltInput" size="25" ></td>
                            </tr>
                            <tr>
                              <td valign="middle">Subject:</td>
                              <td><input name="subject" type="text" class="CobaltInput" size="25" ></td>
                            </tr>
                            <tr>
                              <td valign="top">Message:</td>
                              <td><textarea name="message" cols="55" rows="14" class="CobaltInput"></textarea></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><input type="submit" name="contact" value="Send Message"></td>
                            </tr>
                          </table>
                        </form>
                    </div></td>
                  </tr>
                </table></td>
              </tr>
            </table>
            <!-- InstanceEndEditable --></td>
          <td width="282" valign="top"><br>
            <table width="240" border="0" align="center" cellpadding="3" cellspacing="3" class="FestivalTable">
              <tr>
                <td><a href="image_1.htm"><img src="images/Photos/thumb_1.jpg" width="71" height="53" border="0"></a></td>
                <td><a href="image_2.htm"><img src="images/Photos/thumb_2.jpg" width="71" height="53" border="0"></a></td>
                <td><a href="image_3.htm"><img src="images/Photos/thumb_3.jpg" width="71" height="53" border="0"></a></td>
              </tr>
              <tr>
                <td><a href="image_4.htm"><img src="images/Photos/thumb_4.jpg" width="71" height="53" border="0"></a></td>
                <td><a href="image_5.htm"><img src="images/Photos/thumb_5.jpg" width="71" height="53" border="0"></a></td>
                <td><a href="image_6.htm"><img src="images/Photos/thumb_6.jpg" width="71" height="53" border="0"></a></td>
              </tr>
              <tr>
                <td><a href="image_7.htm"><img src="images/Photos/thumb_7.jpg" width="71" height="53" border="0"></a></td>
                <td><a href="image_8.htm"><img src="images/Photos/thumb_8.jpg" width="71" height="53" border="0"></a></td>
                <td><a href="image_9.htm"><img src="images/Photos/thumb_9.jpg" width="71" height="53" border="0"></a></td>
              </tr>
              <tr>
                <td height="59"><a href="image_10.htm"><img src="images/Photos/thumb_10.jpg" width="71" height="53" border="0"></a></td>
                <td><a href="image_11.htm"><img src="images/Photos/thumb_11.jpg" width="71" height="53" border="0"></a></td>
                <td><a href="image_12.htm"><img src="images/Photos/thumb_12.jpg" width="71" height="53" border="0"></a></td>
              </tr>
            </table>
                        <br></td></tr>
      </table>
      <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><img name="Mainwhite_r6_c1" src="images/Main-white_r6_c1.jpg" width="82" height="37" border="0" alt=""></td>
          <td><img name="Mainwhite_r6_c3" src="images/Main-white_r6_c3.jpg" width="718" height="37" border="0" alt=""></td>
        </tr>
      </table></td>
  </tr>
</table>
<br>
<br>
</body>
<!-- InstanceEnd --></html>
