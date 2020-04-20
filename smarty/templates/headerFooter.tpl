<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" href="style.css" type="text/css" />
		<link rel="stylesheet" href="gallery.css" type="text/css" />
		<link rel="stylesheet" href="menu.css" type="text/css" />
		<link rel="shortcut icon" href="res/a.ico" />
		<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
		<script src="js/browser.js" type="text/javascript"></script>
		<script src="js/menu.js" type="text/javascript"></script>
		<script src="js/gallery.js" type="text/javascript"></script>
		<script type="text/javascript" src="highslide/highslide.js"></script>
		<script type="text/javascript" src="highslide/highslide-conf.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Službene stranice Udruge Goli otok 'Ante Zemljar'" />
		<meta name="keywords" content="goli otok,ante zemljar,informbiro,zatvor,logor,politički zatvorenik,ljudska prava" />
		<title>Udruga Goli otok "Ante Zemljar"</title>
		<meta name="author" content="www.ivan-golovic.from.hr" />
	</head>
	<body>
		<div id="gMsg" style="left:50%; top:50%; display:none"></div>
		<div id="gMsgText" style="left:50%; top:50%; display:none">Za zatvaranje kliknite na sliku</div>
		<div id="gShade"></div>
		<script type="text/javascript">
		{literal}
		m = new Menu(Array("liAbout","","liAz","liInformbureau","liGallery","","liAnniversary"),Array("mAbout","","mAz","mInformbureau","mGallery","","mAnniversary"));
		window.onload = function()
		{
		m = new Menu(Array("liAbout","","liAz","liInformbureau","liGallery","","liAnniversary"),Array("mAbout","","mAz","mInformbureau","mGallery","","mAnniversary"));
		
		if(window.location.href.match("gallery"))
		{
		if(window.location.href.match("act=1")) { g = new Gallery(Array("img11", "img1","img2","img3","img4","img5","img6","img10","g1","g2")); }
		if(window.location.href.match("act=2")) { g = new Gallery(Array("PPs05","img7","img8","img9","img10","img1s05","img3s05","img4s05","img5s05")); }
		if(window.location.href.match("act=3")) { g = new Gallery(Array("img1")); }
		}
		}
		{/literal}
		</script>
		<div id="mAbout" class="m" onmouseout="m.hide(event,0)" style="display:none; left:0px; top:0px; height:112px; width:250px">
		<a class="mi" style="width:240px" href="index.php?task=about&amp;act=founding">Osnivanje, planovi</a>
		<a class="mi" style="width:240px" href="index.php?task=about&amp;act=memorial">Inicijativa za Spomen područje Goli otok</a>
		<a class="mi" style="width:240px" href="index.php?task=about&amp;act=jk">Reagiranja: Pitanja Jovi Kapičiću</a>
		<a class="mi" style="width:240px" href="index.php?task=about&amp;act=arch">Arhiva</a>
		</div>
		<div id="mAz" class="m" onmouseout="m.hide(event,2)" style="display:none; left:0px; top:0px; height:28px">
		<a class="mi" href="index.php?task=az&amp;act=cv">Biografska bilješka</a>
		</div>
		<div id="mInformbureau" class="m" onmouseout="m.hide(event,3)" style="display:none; left:0px; top:0px; height:28px; width:270px">
		<a class="mi" style="width:260px" href="index.php?task=informbureau&amp;act=ik">Ivan Kosić: Goli otok, najveći Titov konclogor</a>
		</div>
		<div id="mGallery" class="m" onmouseout="m.hide(event,4)" style="display:none; left:0px; top:0px; height:84px; width:340px">
		<a class="mi" style="width:330px" href="index.php?task=gallery&amp;act=1">Goli otok</a>
		<a class="mi" style="width:330px" href="index.php?task=gallery&amp;act=2">Posjet Udruge Golom otoku, 2005. svibanj</a>
		<a class="mi" style="width:330px" href="index.php?task=gallery&amp;act=3">Posjet Udruge Golom otoku, 2009. srpanj - 60. obljetnica</a>
		</div>
		<div id="mAnniversary" class="m" onmouseout="m.hide(event,6)" style="display:none; left:0px; top:0px; height:112px; width:375px">
		<a class="mi" style="width:365px" href="index.php?task=anniversary&amp;act=book">II. izdanje knjige Ivana Kosića: Goli otok, najveći Titov konclogor</a>
        <a class="mi" style="width:365px" href="index.php?task=anniversary&amp;act=report">Program obilježavanja 60. godišnjice</a>
		<a class="mi" style="width:365px" href="index.php?task=anniversary&amp;act=film">Film: Strahota (ORF, Salzburg, Austija)</a>
		<a class="mi" style="width:365px" href="#" onclick="javascript:window.open('http://www.kulturpunkt.hr/i/najave/2914/','_blank'); return false;">Izložbe: Alfred Pal</a>
		</div>
		<a href="#" name="top" style="display:none"></a>
		<!--[if lte IE 7]>
		<img alt="" src="pixel.gif" style="width:100%; height:5px; float:left" />
		<![endif]-->
		<div id="container1">
			<div id="hPlaceholder">
		   
			<div id="hLinks">
			    <img class="arrow" style="margin-left:30px" alt="" src="res/arrow2.gif" />
			    <a style="font-size:12px" href="index.php">Naslovna strana</a>
			    <!---<img class="arrow" style="margin-left:5px" alt="" src="res/arrow2.gif" />
			    <a style="font-size:12px" href="index.php?task=sitemap">Mapa sajta</a>
			--></div>
		
		    </div>
		
			<div id="lCol">
			<ul id="leftMenu">
				<li id="liAbout" onmouseover="m.show(0)" onmouseout="m.hide(event,0)" class="{$about|default:"lmItem"}"><a class="lm" href="index.php?task=about"><img class="arrow" alt="" src="res/arrow.gif" />O udruzi</a></li>
                <li class="{$facts|default:"lmItem"}"><a class="lmNoSubMenu" href="index.php?task=facts"><img class="arrow" alt="" src="res/arrow.gif" />Facts about Goli otok</a></li>
                <li id="liAz" onmouseover="m.show(2)" onmouseout="m.hide(event,2)" class="{$az|default:"lmItem"}"><a class="lm" href="index.php?task=az"><img class="arrow" alt="" src="res/arrow.gif" />Ante Zemljar</a></li>
				<li id="liInformbureau" onmouseover="m.show(3)" onmouseout="m.hide(event,3)" class="{$informbureau|default:"lmItem"}"><a class="lm" href="index.php?task=informbureau"><img class="arrow" alt="" src="res/arrow.gif" />Informbiro i Goli otok</a></li>                      
			    <li id="liGallery" onmouseover="m.show(4)" onmouseout="m.hide(event,4)" class="{$gallery|default:"lmItem"}"><a class="lm" href="index.php?task=gallery"><img class="arrow" alt="" src="res/arrow.gif" />Galerija</a></li>     
				<li class="{$guide|default:"lmItem"}"><a class="lmNoSubMenu" href="index.php?task=guide"><img class="arrow" alt="" src="res/arrow.gif" />Vodič po Golom otoku</a></li> 
				<li id="liAnniversary" onmouseover="m.show(6)" onmouseout="m.hide(event,6)" class="{$anniversary|default:"lmItem"}"><a class="lm" href="index.php?task=anniversary"><img class="arrow" alt="" src="res/arrow.gif" />60. godišnjica Golog otoka</a></li>
				<li class="{$literature|default:"lmItem"}"><a class="lmNoSubMenu" href="index.php?task=literature"><img class="arrow" alt="" src="res/arrow.gif" />Literatura</a></li>	
			    <li class="{$links|default:"lmItem"}"><a class="lmNoSubMenu" href="index.php?task=links"><img class="arrow" alt="" src="res/arrow.gif" />Linkovi</a></li>
				<li class="{$contact|default:"lmItem"}"><a class="lmNoSubMenu" href="index.php?task=contact"><img class="arrow" alt="" src="res/arrow.gif" />Kontakt</a></li>                                   
			</ul>
			
		{literal}
		<div style="margin-top:15px">
		Pretraga web stranice:
		<form action="http://www.goli-otok.hr/search.html" target="_blank" id="cse-search-box">
		  <div style="margin-top:3px">
		    <input type="hidden" name="cx" value="010151411213995601307:whjplt_mmjm" />
		    <input type="hidden" name="cof" value="FORID:10" />
		    <input type="hidden" name="ie" value="UTF-8" />
		    <input type="text" name="q" size="25" />
		    <input type="submit" name="sa" style="margin-top:4px; border:1px #001E4B solid; color:white; background-color:#8795a8; cursor:pointer" value="Traži" />
		  </div>
		</form>
		<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&amp;lang=hr"></script>
		</div>
		        
		<div id="cse-search-results"></div>
		<script type="text/javascript">
		  var googleSearchIframeName = "cse-search-results";
		  var googleSearchFormName = "cse-search-box";
		  var googleSearchFrameWidth = 600;
		  var googleSearchDomain = "www.google.com";
		  var googleSearchPath = "/cse";
		</script>
		<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>
		
		{/literal}          
		

        <div style="margin-top:15px">
        	Zadnje ažuriranje: {$lastUpdated}
        </div>        
        	
		    </div>    
			<div id="mCol">
			<div id="mColBckgTop"></div>
			<div id="mColBckgMiddle">
			    <div class="notification" style="display:{$mailMsgVisible|default:"none"}">
				{$mailMessage}
			    </div>
			    {if $isNewsList eq '1'}
				<div class="tplContainer">
				    <div class="title">Naslovna strana</div>
				    <div class="title"><span>Dobrodošli na web stranice Udruge Goli Otok 'Ante Zemljar'</span></div>
				    {section name=mySec loop=$newsList}
					<div style="margin-bottom:0px; border-bottom:1px #001E4B dotted">
						<div style="font-size:15px; font-weight:bold; margin-top:15px">
						<div style="float:left">
						{if $newsList[mySec].isOverLimit eq "1"}
							<a class="n" href="index.php?task=about&amp;act=news&amp;id={$newsList[mySec].id}">
								{$newsList[mySec].title}
							</a>
						{else}
							{$newsList[mySec].title}
						{/if}
						</div>
						<div style="float:right; font-weight:normal; font-size:13px">{$newsList[mySec].dt}</div>
						</div>
						<br />
						<br />
						<div style="margin-top:5px; margin-bottom:15px; padding-bottom:10px; display:inline-block;">
						    {if $newsList[mySec].imgPath neq "pixel.gif"}
							{if $newsList[mySec].isOverLimit eq "1"}
							<a href="index.php?task=about&amp;act=news&amp;id={$newsList[mySec].id}">		
								<img alt="" align="left" style="margin-right:10px; border:1px #001E4B solid;  margin-bottom:5px; max-height:100px; max-width:100px" src="news/{$newsList[mySec].imgPath}" />
							</a>
							{else}
								<img alt="" align="left" style="margin-right:10px; border:1px #001E4B solid;  margin-bottom:5px; max-height:100px; max-width:100px" src="news/{$newsList[mySec].imgPath}" />
							{/if}
						    {/if}
						    {$newsList[mySec].text}
						    {if $newsList[mySec].isOverLimit eq "1"}
							    <a class="n" href="index.php?task=about&amp;act=news&amp;id={$newsList[mySec].id}">opširnije</a>
						    {/if}                                
						</div>
					</div>
				    {/section}
				</div>
			    {elseif $isNews eq '1'}
				<div class="tplContainer">
				    <div class="title" style="overflow:auto">
					<span>
					    <a style="border-bottom:1px #001E4B dotted; text-decoration:none; float:right; margin-right:5px" class="n" href="index.php">Povratak na listu vijesti</a>
					</span>
				    </div>                 
				    <div class="title">{$news.title}</div>
				    <div class="title">
					<span>
					    <em>Datum:&nbsp;&nbsp;{$news.dt}</em>
					</span>
				    </div>
				    <div style="overflow:auto; height:100%;">    
					{if $news.imgPath neq "../pixel.gif"}		
						<a href="news/{$news.imgPath}" class="highslide" onclick="return hs.expand(this)">
							<img alt="" align="left" style="margin-right:10px; border:1px #001E4B solid; margin-bottom:5px; max-width:300px" src="news/{$news.imgPath}" />
						</a>                
					{/if}
					{$news.text}
				     </div>
				</div>
			    {else}
					{$mCol}
			    {/if}
			</div>
			<div id="mColBckgBottom">
				<div id="mColBckgBotomMask0"></div>
			    <div id="mColBckgBottomMask"></div>
			</div>
		    </div>
		</div>
		<div id="footer">
			<img alt="" src="pixel.gif" style="height:50px; width:100%" />
		    <div>
			<a href="#" onclick="window.print(); return false;">Ispis stranice na pisač</a><br />
			<strong>&copy; Udruga Goli otok "Ante Zemljar" 2009.</strong><br />
		    </div>
		</div>
        <script type="text/javascript">
		{literal}
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-22936957-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		{/literal}
		</script>        
	</body>
</html>