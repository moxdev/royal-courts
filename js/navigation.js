(function() {
	console.log('Ready');
	var x = 0;
	var btn = document.getElementById('menu-toggle');
	var nav = document.getElementById('mobile-navigation');

	btn.addEventListener('click', function() {
		if(x === 0) {
			nav.classList.add('active');
			nav.setAttribute('aria-expanded', 'true');
			this.setAttribute('aria-expanded', 'true');
			x = 1;
		} else {
			nav.classList.remove('active');
			nav.setAttribute('aria-expanded', 'false');
			this.setAttribute('aria-expanded', 'false');
			x = 0;
		}
	});
})();