<?php /* Smarty version 2.6.28, created on 2014-05-15 23:14:03
         compiled from unos.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../res/a.ico" />
<link rel="stylesheet" type="text/css" href="../style.css" />
<title>Udruga Goli otok "Ante Zemljar"</title>

<?php echo '
<style type="text/css">
div { font-family:Trebuchet MS; font-size:13px}
span { display:inline-block; width:200px; margin-left:10px}
input[type="text"], textarea{ width:600px; border:1px silver solid}
</style>
'; ?>


</head>
<body>

<input style="position:fixed; margin:10px" type="button" onclick="window.open('../index.php','_blank')" value="Pogledaj na javnom dijelu" />

<form enctype="multipart/form-data" method="post" action="unos.php">
<div style="margin-left:auto; margin-right:auto; width:900px; margin-top:15px">
<input type="hidden" id="id" name="id" value="" />
<div style="padding:10px; border:2px #999999 solid; background-color:#E9E9E9;">
<fieldset>
<legend>Unos nove vijesti</legend>
<?php echo '
<a href="#" onclick="var e=document.getElementById(\'help\');if(e.style.display==\'none\'){e.style.display=\'block\'}else{e.style.display=\'none\'}">[Pregled uputa]</a>
'; ?>

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

<?php unset($this->_sections['mysec']);
$this->_sections['mysec']['name'] = 'mysec';
$this->_sections['mysec']['loop'] = is_array($_loop=$this->_tpl_vars['newsList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mysec']['show'] = true;
$this->_sections['mysec']['max'] = $this->_sections['mysec']['loop'];
$this->_sections['mysec']['step'] = 1;
$this->_sections['mysec']['start'] = $this->_sections['mysec']['step'] > 0 ? 0 : $this->_sections['mysec']['loop']-1;
if ($this->_sections['mysec']['show']) {
    $this->_sections['mysec']['total'] = $this->_sections['mysec']['loop'];
    if ($this->_sections['mysec']['total'] == 0)
        $this->_sections['mysec']['show'] = false;
} else
    $this->_sections['mysec']['total'] = 0;
if ($this->_sections['mysec']['show']):

            for ($this->_sections['mysec']['index'] = $this->_sections['mysec']['start'], $this->_sections['mysec']['iteration'] = 1;
                 $this->_sections['mysec']['iteration'] <= $this->_sections['mysec']['total'];
                 $this->_sections['mysec']['index'] += $this->_sections['mysec']['step'], $this->_sections['mysec']['iteration']++):
$this->_sections['mysec']['rownum'] = $this->_sections['mysec']['iteration'];
$this->_sections['mysec']['index_prev'] = $this->_sections['mysec']['index'] - $this->_sections['mysec']['step'];
$this->_sections['mysec']['index_next'] = $this->_sections['mysec']['index'] + $this->_sections['mysec']['step'];
$this->_sections['mysec']['first']      = ($this->_sections['mysec']['iteration'] == 1);
$this->_sections['mysec']['last']       = ($this->_sections['mysec']['iteration'] == $this->_sections['mysec']['total']);
?>

<div style='padding:10px; border:2px #999999 solid; background-color:white'>
    <p>
        <span>Naslov:</span><input name="title<?php echo $this->_tpl_vars['newsList'][$this->_sections['mysec']['index']]['id']; ?>
" type="text" value="<?php echo $this->_tpl_vars['newsList'][$this->_sections['mysec']['index']]['title']; ?>
" />
    </p>
    <p>
        <span>Tekst:</span><br/>
        <span>&nbsp;</span><textarea name="text<?php echo $this->_tpl_vars['newsList'][$this->_sections['mysec']['index']]['id']; ?>
" style="height:200px"><?php echo $this->_tpl_vars['newsList'][$this->_sections['mysec']['index']]['text']; ?>
</textarea>
    </p>
    <p>
        <span>Datum (gggg-mm-dd):</span><input name="dt<?php echo $this->_tpl_vars['newsList'][$this->_sections['mysec']['index']]['id']; ?>
" type="text" value="<?php echo $this->_tpl_vars['newsList'][$this->_sections['mysec']['index']]['dt']; ?>
" />
    </p>
    <p>
        <span>Slika uz tekst:</span>
        <input type="hidden" name="oldImgPath<?php echo $this->_tpl_vars['newsList'][$this->_sections['mysec']['index']]['id']; ?>
" value="<?php echo $this->_tpl_vars['newsList'][$this->_sections['mysec']['index']]['imgPath']; ?>
" />
        <input name="ifImg<?php echo $this->_tpl_vars['newsList'][$this->_sections['mysec']['index']]['id']; ?>
" type="file" />
    </p>
    <p style="text-align:center">
    	<img alt="" style="max-width:500px" src="../news/<?php echo $this->_tpl_vars['newsList'][$this->_sections['mysec']['index']]['imgPath']; ?>
" />
        <?php if ($this->_tpl_vars['newsList'][$this->_sections['mysec']['index']]['imgPath'] != "../res/pixel.gif"): ?>
        	<p>
        		<input type="submit" name="deleteImg" onclick="document.getElementById('id').value=<?php echo $this->_tpl_vars['newsList'][$this->_sections['mysec']['index']]['id']; ?>
;" value="Ukloni sliku" /> 
    		</p>
        <?php endif; ?>
    </p>
    <p>
        <input type="submit" name="updateNews" onclick="document.getElementById('id').value=<?php echo $this->_tpl_vars['newsList'][$this->_sections['mysec']['index']]['id']; ?>
;" value="Spremi promjene" />
        &nbsp;
        <input type="submit" name="deleteNews" onclick="document.getElementById('id').value=<?php echo $this->_tpl_vars['newsList'][$this->_sections['mysec']['index']]['id']; ?>
;" value="Izbriši vijest" />
    </p>
</div>
<br /><br />
<?php endfor; endif; ?>

</div>
</form>

</body>
</html>