function _browser()
{
	this.browser = "";
	this.version = "";
	
	if(navigator.userAgent.match("MSIE")){ 
		try{
			this.browser = "ie"; 
			var start = navigator.userAgent.indexOf("MSIE ") + 5;
			var _stop = start + 1;
			this.version = navigator.userAgent.substring(start,_stop);
		}catch(e){}
	}
	else if(navigator.userAgent.match("Firefox")){ 
		try{
			this.browser = "mf"; 
			var start = navigator.userAgent.indexOf("Firefox/") + 8;
			var _stop = start + 3;
			this.version = navigator.userAgent.substring(start,_stop);
		}catch(e){}	
	}
	else if(navigator.userAgent.match("Chrome")){ 
		try{
			this.browser = "gc"; 
			var start = navigator.userAgent.indexOf("Chrome/") + 7;
			var _stop = start + 3;
			this.version = navigator.userAgent.substring(start,_stop);
		}catch(e){}	
	}
	else if(navigator.userAgent.match("Opera")){ 
		try{
			this.browser = "mf";
			var start = navigator.userAgent.indexOf("Opera/") + 6;
			var _stop = start + 3;
			this.version = navigator.userAgent.substring(start,_stop);
		}catch(e){}	
	}
}