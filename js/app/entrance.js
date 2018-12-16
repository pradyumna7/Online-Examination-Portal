document.getElementsByTagName('html')[0].style.overflow = 'hidden';

var loader = Stashy.Loader('#entrance--window');
loader.on("absolute", "200px", "#000", "prepend");

var accordion,
	entranceInterval = setInterval(function () {
	    if (typeof accordion === 'undefined' || !accordion) {
	        accordion = document.getElementById('ui-accordion-accordion-panel-0');
	        return;
	    }

	    if (hasScrollBar()) {
	        document.getElementsByTagName('html')[0].style.overflow = 'visible';
	        document.getElementById('entrance--window').removeAttribute('id');
	        clearInterval(entranceInterval);
	        loader.off();
	    }

	}, 20);

function hasScrollBar() {
    return accordion.scrollHeight > accordion.clientHeight;
};