<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../res/a.ico" />
<link rel="stylesheet" type="text/css" href="../style.css" />
<title>Udruga Goli otok "Ante Zemljar"</title>

{literal}
<style type="text/css">
div { font-family:Trebuchet MS; font-size:13px}
span { display:inline-block; width:200px; margin-left:10px}
input[type="text"], textarea{ width:600px; border:1px silver solid}
</style>
{/literal}

</head>
<body>

<input style="position:fixed; margin:10px" type="button" onclick="window.open('../index.php','_blank')" value="Pogledaj na javnom dijelu" />

<form enctype="multipart/form-data" method="post" action="unos.php">
<div style="margin-left:auto; margin-right:auto; width:900px; margin-top:15px">
<input type="hidden" id="id" name="id" value="" />
<div style="padding:10px; border:2px #999999 solid; background-color:#E9E9E9;">
<fieldset>
<legend>Unos nove vijesti</legend>
{literal}
<a href="#" onclick="var e=document.getElementById('help');if(e.style.display=='none'){e.style.display='block'}else{e.style.display='none'}">[Pregled uputa]</a>
{/literal}
<div id="help" style="display:none; background-color:#FFFFFF">
    <fieldset>
    <legend>Primjer unosa linka s proizvoljnim tekstom</legend>
        <ul>
            <li>
                žuto je označena adresa na koju link vodi
            </li>
            <li>
                zeleno je označen tekst pod kojim se link nalazi
            </li>
        </ul>
        Primjer:<br /><br />
        Ovaj komadić HTML koda (sa stvarnom adresom i stvarnim tekstom) ubacite unutar teksta na mjesto gdje želite link:<br /><br />
        &lt;a target="_blank" class="n" href="<font style="background-color:#FFFF00">http://www.adresa.hr/index.aspx?id_clanak=127&akcija=8</font>"&gt;<font style="background-color:#00FF00">O knjizi</font>&lt;/a&gt;
    </fieldset>
    <br />
    <fieldset>
    <legend>Primjer određivanja sažetka vijesti (sažeci vijesti nalaze se na popisu vijesti)</legend>
        <ul>
            <li>
                žuto je označen uzorak ## (odnosno dva uzastopna znaka #) - ovaj uzorak slova označava kraj sažetka koji se prikazuje na popisu vijesti
            </li>
        </ul>
        Primjer:<br /><br />
        Uzorak ## postavljen na dolje prikazani način proizvesti će sažetak "U organizaciji Kulturnog društva Miroslav Šalom Freiberger...":<br /><br />
        U organizaciji Kulturnog društva Miroslav Šalom Freiberger<font style="background-color:#FFFF00">##</font> u prostorijama Židovske općine Zagreb održana je 01.12.2009. komemorativna večer posvećena Ženi Lebl        
    </fieldset>
    <br />
    <fieldset>
    <legend>Primjer unosa PDF datoteke</legend>
	<span style="border:1px navy solid; padding:3px; width:350px">Prvo uploadajte datoteku a onda unesite HTML link na nju.</span>
        <ul>
            <li>
                žuto je označen naziv datoteke koju uploadate
            </li>
            <li>
                zeleno je označen tekst pod kojim se link na PDF datoteku nalazi
            </li>
        </ul>
        Primjer:<br /><br />
        Ovaj komadić HTML koda (sa stvarnim nazivom datoteke i stvarnim tekstom) ubacite unutar teksta na mjesto gdje želite link:<br /><br />
        &lt;a class="n" href="http://www.goli-otok.hr/news/<font style="background-color:#FFFF00">Članak.pdf</font>"&gt;<font style="background-color:#00FF00">cijeli članak</font>&lt;/a&gt;
    </fieldset>
</div>
<p>
	<span>Naslov:</span><input name="title" type="text" />
</p>
<p>
	<span>Tekst:</span><br/>
    <span>&nbsp;</span><textarea style="height:200px" name="text"></textarea>
</p>
<p>
	<span>Datum (gggg-mm-dd):</span><input name="dt" type="text" />
</p>
<p>
	<span>Slika uz tekst:</span>
    <input type="hidden" name="MAX_FILE_SIZE" value="104857600" />
    <input type="file" name="ifImg" />
</p>
<p>
	<input type="submit" name="insertNews" value="Unos nove vijesti" />
</p>

</fieldset>
</div>
<br /><br />

<div style="padding:10px; border:2px #999999 solid; background-color:#E9E9E9;">
<fieldset>
<legend>Upload PDF ili .doc datoteke</legend>
<p>
	<span style="border:1px navy solid; padding:3px; width:350px">Prvo uploadajte datoteku a onda unesite HTML link na nju.</span>
</p>
<p>
	<input type="file" name="ifFile" />
</p>
<p>
	<input type="submit" name="uploadFile" value="Upload datoteke" />
</p>
</fieldset>
</div>
<br /><br />

{section name=mysec loop=$newsList}

<div style='padding:10px; border:2px #999999 solid; background-color:white'>
    <p>
        <span>Naslov:</span><input name="title{$newsList[mysec].id}" type="text" value="{$newsList[mysec].title}" />
    </p>
    <p>
        <span>Tekst:</span><br/>
        <span>&nbsp;</span><textarea name="text{$newsList[mysec].id}" style="height:200px">{$newsList[mysec].text}</textarea>
    </p>
    <p>
        <span>Datum (gggg-mm-dd):</span><input name="dt{$newsList[mysec].id}" type="text" value="{$newsList[mysec].dt}" />
    </p>
    <p>
        <span>Slika uz tekst:</span>
        <input type="hidden" name="oldImgPath{$newsList[mysec].id}" value="{$newsList[mysec].imgPath}" />
        <input name="ifImg{$newsList[mysec].id}" type="file" />
    </p>
    <p style="text-align:center">
    	<img alt="" style="max-width:500px" src="../news/{$newsList[mysec].imgPath}" />
        {if $newsList[mysec].imgPath neq "../res/pixel.gif"}
        	<p>
        		<input type="submit" name="deleteImg" onclick="document.getElementById('id').value={$newsList[mysec].id};" value="Ukloni sliku" /> 
    		</p>
        {/if}
    </p>
    <p>
        <input type="submit" name="updateNews" onclick="document.getElementById('id').value={$newsList[mysec].id};" value="Spremi promjene" />
        &nbsp;
        <input type="submit" name="deleteNews" onclick="document.getElementById('id').value={$newsList[mysec].id};" value="Izbriši vijest" />
    </p>
</div>
<br /><br />
{/section}

</div>
</form>

</body>
</html>
