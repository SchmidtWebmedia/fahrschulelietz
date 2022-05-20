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

let Map = function() {
	this.initMap = function() {
		document.querySelectorAll('.interactive-map')
		if(document.querySelectorAll('.interactive-map').length > 0) {
			createMap();
		}
	};
	let createMap = function() {
		const interactiveMaps = document.querySelectorAll('.interactive-map');

		interactiveMaps.forEach(function(interactiveMap) {
			let mapId = interactiveMap.getAttribute('id');
			let lat = interactiveMap.getAttribute('data-lat');
			let lng = interactiveMap.getAttribute('data-lng');
			let title = interactiveMap.getAttribute('data-title');

			let routeURL = 'https://maps.google.com/?q=' + lat + ',' + lng;

			var osmUrl='https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
			var osmAttrib='Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors';
			var osm = new L.TileLayer(osmUrl, {minZoom: 8, maxZoom: 20, attribution: osmAttrib});

			console.log('MapID >> ' + mapId);

			map = new L.Map(mapId);
			map.setView([lat, lng], 16);
			map.addLayer(osm);
			var marker = L.marker([lat, lng]).addTo(map);
			marker.bindPopup(title + '<br><br><a href="' + routeURL + '" target="_blank">Routenplaner</a>').openPopup();
		});
	}
};

let LightBox = function() {
	this.initLightBox = function() {
		if(document.getElementsByClassName('gallery-container').length > 0) {
			baguetteBox.run('.gallery-container', {preventContextMenu: true});
		}
		baguetteBox.run('.lightbox', {preventContextMenu: true});
	}
}

map = new Map();
map.initMap();

let lb = new LightBox();
lb.initLightBox();

const animatedIcon = document.querySelector('.icon-overlay');
animatedIcon.addEventListener('animationend', function() {
	animatedIcon.classList.add('d-none');
});
