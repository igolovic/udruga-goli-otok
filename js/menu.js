function Menu(bindToArrayIds, itemArrayIds)
{
	this.bindTo = Array();
	this.items = Array();
	this.browserName;
	
	this._menu = function(itemArray)
	{
		for(var i=0; i<bindToArrayIds.length; i++)
		{
			if(bindToArrayIds[i] != "")
			{
				this.bindTo[i] = document.getElementById(bindToArrayIds[i]);
				this.items[i] = document.getElementById(itemArrayIds[i]);
			}
		}
		b = new _browser();
		this.browserName = b.browser;
	}
	
	this.show = function(ordinal)
	{	
		try{
		b = new _browser();
		if(b.browser == "ie" && b.version < 8)
		{
			var l = document.getElementById("lCol").offsetParent.offsetLeft;		
			this.items[ordinal].style.left = l + this.bindTo[ordinal].offsetWidth + 4 + "px";
			this.items[ordinal].style.top = 142 + ordinal * 33 + "px";
			this.items[ordinal].style.display = "block";
			return;
		}
		
		this.items[ordinal].style.left = this.bindTo[ordinal].offsetLeft + this.bindTo[ordinal].offsetWidth + "px";
		this.items[ordinal].style.top = this.bindTo[ordinal].offsetTop + "px";
		this.items[ordinal].style.display = "block";
		if(this.bindTo[ordinal].getAttribute("class") != "lmItem2")
		{
			this.bindTo[ordinal].setAttribute("class","lmItemHover");
		}
		
		}catch(e){}
	}
	
	this.hide = function(_event, ordinal)
	{
		try{
		if(this.browserName == "ie")
		{
			var el = _event.toElement;
			if(el != null && el.className != "m" && el.className != "mi")
			{
				this.items[ordinal].style.left = this.bindTo[ordinal].offsetLeft + this.bindTo[ordinal].offsetWidth + "px";
				this.items[ordinal].style.top = this.bindTo[ordinal].offsetTop + "px";
				this.items[ordinal].style.display = "none";
				if(this.bindTo[ordinal].getAttribute("class") == "lmItemHover")
				{
					this.bindTo[ordinal].setAttribute("class","lmItem");
				}
			}
		}
		else
		{
			var el = _event.relatedTarget;
			if(el != null && el.className != "m" && el.className != "mi")
			{
				this.items[ordinal].style.left = this.bindTo[ordinal].offsetLeft + this.bindTo[ordinal].offsetWidth + "px";
				this.items[ordinal].style.top = this.bindTo[ordinal].offsetTop + "px";
				this.items[ordinal].style.display = "none";
				if(this.bindTo[ordinal].getAttribute("class") == "lmItemHover")
				{
					this.bindTo[ordinal].setAttribute("class","lmItem");
				}				
			}	
		}
		}catch(e){}
	}
	this._menu();
}