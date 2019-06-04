<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Tijolo Criativo </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Consultoria e Marketing Digital" />
<meta name="keywords" content="marketing digital consultoria coloborativo">
<meta name="autor" content="Lidiane Mara">
<link rel="shortcut icon" type="imagens/x-icon" href="favicon.ico" />
<link rel="stylesheet" href="../css/folha_all.css">
<link rel="stylesheet" href="../css/home.css">
</head>

<body>
	
<header>
<a href="http://lidianephp.000webhostapp.com"><img src="../imagens/topocurso.jpg" alt=""> </a>

	
	<nav>
        <?php
            include "menu.php";
        ?>
        
	</nav>
	</header>
	<main>
		
			<h1>Contato</h1>
            <fieldset>
            <legend> Entre em Contato </legend>
            
            <form name="contactform" method="post" action="send_form_email.php">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top"">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">  
 </td>
</tr>
</table>
</form>
</fieldset>
	
	</main>
	<footer>
		<p>Site desenvolvido por Lidiane Mara</p>
	</footer>
</body>
</html>
