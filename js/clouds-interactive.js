var t = $('#twitter')[0];
var limit = 1200;

t.style.backgroundPosition = '0px 0px';

var getWidth = function()
{
	if(window.innerWidth != null)
		return window.innerWidth;
	else if (document.documentElement && document.documentElement.clientWidth)
			return document.documentElement.clientWidth;
	else if (document.body != null) 
		return document.body.clientWidth 
};

var moveClouds = function(e) {
  t.style.backgroundPosition = '-' + Math.floor((limit*e.clientX)/getWidth()) + 'px 0px';
};

window.onmousemove = moveClouds;