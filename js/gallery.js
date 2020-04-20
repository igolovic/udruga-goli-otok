function Gallery(imgIdArray)
{
	var animInProgress = false;
	this.selectedNumber = 0;
	this.imgArray = Array();
	this.linkArray = Array();
	this.browserName;
	
	this._gallery = function()
	{
		b = new _browser();
		this.browserName = b.browser;
		
		for(var i=0; i<imgIdArray.length; i++)
		{
			this.imgArray[i] = document.getElementById(imgIdArray[i]);
			
			if(this.browserName == "ie")
			{
				this.imgArray[i].style.filter = 'alpha(opacity=100)';
			}
			else
			{
				this.imgArray[i].style.opacity = 1;
			}
			this.linkArray[i] = document.getElementById(imgIdArray[i] + "Link");
		}
		this.imgArray[0].style.display = "block";
		this.linkArray[0].style.background = "url(res/imgNo.png)";		
	}
	
	this.set = function(_selectedNumber)
	{
		if(animInProgress || _selectedNumber == this.selectedNumber){  return; }
		animInProgress = true;
		this.linkArray[this.selectedNumber].style.background = "none"	
		var oldSelImg = document.getElementById(this.imgArray[this.selectedNumber].id);
		var newSelImg = document.getElementById(this.imgArray[_selectedNumber].id);
		
		if(this.browserName == "ie")
		{
			var i = window.setInterval(function(){
												
					if(oldSelImg.filters.alpha.opacity > 20 && oldSelImg.style.display == "block")
					{
						oldSelImg.filters.alpha.opacity-=10;
						return;
					}
					if(oldSelImg.filters.alpha.opacity == 20)
					{
						oldSelImg.filters.alpha.opacity = 100;
						oldSelImg.style.display="none";
						newSelImg.filters.alpha.opacity = 20;
						newSelImg.style.display="block";
						return;
					}
					if(newSelImg.filters.alpha.opacity < 100)
					{
						newSelImg.filters.alpha.opacity = Number(newSelImg.filters.alpha.opacity) + 10;
						return;
					}
					if(newSelImg.filters.alpha.opacity == 100){window.clearInterval(i);animInProgress=false;}
				},40);
			this.selectedNumber = _selectedNumber;
			this.linkArray[this.selectedNumber].style.background = "url(res/imgNo.png)"
		}
		else
		{
			var i = window.setInterval(function(){							
					if(oldSelImg.style.opacity > 0.2 && oldSelImg.style.display == "block")
					{
						var o=oldSelImg.style.opacity - 0.1;
						oldSelImg.style.opacity=o.toFixed(1);
						return;
					}
					if(oldSelImg.style.opacity == 0.2)
					{
							
						oldSelImg.style.opacity = 1;
						oldSelImg.style.display="none";
						newSelImg.style.opacity = 0.2;
						newSelImg.style.display="block";
						return;
					}
					if(newSelImg.style.opacity < 1)
					{
						var o2=Number(newSelImg.style.opacity) + 0.1;
						newSelImg.style.opacity=o2.toFixed(1);
						return;
					}
					if(newSelImg.style.opacity == 1){window.clearInterval(i);animInProgress=false;}
				},40);
			this.selectedNumber = _selectedNumber;
			this.linkArray[this.selectedNumber].style.background = "url(res/imgNo.png)"
		}
		return false;
	}
	
	this.left = function()
	{
		if(this.selectedNumber > 0)
		{
			this.set(this.selectedNumber - 1);
		}
		return false;
	}
	
	this.right = function()
	{
		if(this.selectedNumber < this.imgArray.length - 1)
		{
			this.set(this.selectedNumber + 1);
		}
		return false;
	}	
	
	this.closeImg = function()
	{
		document.getElementById("gShade").style.display = "none";
		document.getElementById("gMsg").style.display = "none";
		document.getElementById("gMsgText").style.display = "none";	
		document.getElementById("_" + this.imgArray[this.selectedNumber].id).style.visibility = "hidden";
	}

	this.openImg = function()
	{
		var el = document.getElementById("gShade");
		var bo = document.body;
		var iMsg = document.getElementById("gMsg");
		var iMsgText = document.getElementById("gMsgText");
	
		var i = document.getElementById("_" + g.imgArray[g.selectedNumber].id);
		i.style.visibility = "visible";
		i.style.left = bo.offsetWidth/2 - i.offsetWidth/2 + "px";
		
		if(this.browserName == "ie"){
			var scrollTop = document.documentElement.scrollTop;
		}
		else if(this.browserName == "mf"){
			var scrollTop = document.documentElement.scrollTop;
		}
		else if(this.browserName == "gc"){
			var scrollTop = document.body.scrollTop;
		}
		el.style.display = "block";
		el.style.height = bo.offsetHeight + scrollTop + "px";	
		i.style.top = bo.offsetHeight/2 + scrollTop - i.offsetHeight/2 - 75 + "px";	
		
		iMsg.style.display = "block";
		iMsg.style.width = i.offsetWidth + "px";
		iMsg.style.top = bo.offsetHeight/2 + scrollTop + i.offsetHeight/2 - 30 - 75 + "px";
		iMsg.style.left = bo.offsetWidth/2 - i.offsetWidth/2 + "px";
		
		iMsgText.style.display = "block";
		iMsgText.style.width = i.offsetWidth + "px";
		iMsgText.style.top = bo.offsetHeight/2 + scrollTop + i.offsetHeight/2 - 25 - 75 + "px";
		iMsgText.style.left = bo.offsetWidth/2 - i.offsetWidth/2 + "px";
	}
	this.auto = function()
	{
		
	}
	this._gallery();	
}