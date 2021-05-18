(function (d, w) {
	function whenAvailable(name, callback) {
	let interval = 50; // ms

	window.setTimeout(function () {
		if (window[name]) {
		callback(window[name]);
		} else {
		whenAvailable(name, callback);
		}
	}, interval);
}

whenAvailable('Glide', () => {
	const carousels = d.querySelectorAll('.imageSlider');
		carousels.forEach(carousel => {
			let glide = new Glide(carousel, {
			type: 'carousel',
			perView: 1,
			focusAt: 'center',
			autoplay: 3500,
			});
			glide.mount();
		});
	});
})(document, window);