<div class="tplContainer">
	<div class="title">Kontakt</div>
    <div>
Udruga Goli otok "Ante Zemljar"<br />
10000 Zagreb<br />
Avenija Marina Držića 79/I<br />
<br /><br /> 
Ukoliko ste zainteresirani za organizirani posjet Golom otoku i Sv. Grguru, javite nam se elektroničkom poštom na adresu Udruge.
<br/>
Za Vaše upite ili narudžbu knjige Ivana Kosića "Goli otok, najveći Titov konclogor"<br />
javite se na donju adresu
<p>
email: <a href="mailto://dummy@dummy.dummy">dummy@dummy.dummy</a>
</p>
<p>
ili putem kontakt obrasca:
</p>
<form method="post" action="index.php?task=contact" style="margin-bottom:0px">

	<fieldset>
    <legend style="color:#001E4B">Kontakt obrazac</legend>
    
    <div style="margin:10px">
	<p>
		<span class="msg">Ime i prezime:</span>
        <input maxlength="50" id="name" name="name" type="text" class="msg" />
    </p>

	<p>
		<span class="msg">E- mail adresa:</span>
        <input maxlength="50" id="email" name="email" type="text" class="msg" />
    </p>
    
	<p>
		<span class="msg">Poruka:</span>
        <textarea id="message" name="message" rows="50" cols="30" class="msg" ></textarea>
    </p>     
       
    <p>
		<input type="submit" name="send_msg" 
        	onclick="if(document.getElementById('message').value.length > 5000){alert('Maksimalna dužina kontakt poruke je 5000 znakova.'); return false;}"
        	value="Pošalji" />
    </p>
    </div>
    
    </fieldset>

</form>
    </div>
</div>
