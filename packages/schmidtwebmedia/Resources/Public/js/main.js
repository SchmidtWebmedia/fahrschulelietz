const header = document.getElementById('header');

document.addEventListener('scroll', function () {
	let currentScrollPosition = window.scrollY;
	if(currentScrollPosition > 10) {
		header.classList.remove('transparent');
	} else {
		header.classList.add('transparent');
	}
});

const mobileNavigation = document.getElementById('mobile-navigation');
document.querySelector('header').insertAdjacentElement('beforebegin', mobileNavigation);

[].forEach.call(document.querySelectorAll('.button-responsive-menu, .button-menu-close'), function(element) {
	element.addEventListener('click', function() {
		document.querySelector('body').classList.toggle('menu-open');
	});
}, false);
