var start = function(config) {
	config.lastPos = 0;
	config.step    = config.speed/(1000/config.fps);
	self.config    = config;
	
	config.target.style.backgroundImage    = "url('" + config.image + "')";
	config.target.style.backgroundPosition = '0px 0px';

    config._intval = setInterval(move, 1000/config.fps);
};

var move = function() {
    config.target.style.backgroundPosition = '-' + (((config.lastPos = config.lastPos + config.step) <= config.limit)? Math.floor(config.lastPos).toString() : (config.lastPos = 0).toString()) + 'px 0px';
};

start({
	'target' : $('#twitter')[0], 
	'image'  : 'img/clouds.jpg', 
	'limit'  : 1200, 
	'speed'  : 5, 
	'fps'    : 60
});