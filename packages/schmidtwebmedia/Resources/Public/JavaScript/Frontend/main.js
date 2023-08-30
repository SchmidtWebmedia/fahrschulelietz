const header = document.getElementById('header');

document.addEventListener('scroll', function () {
	let currentScrollPosition = window.scrollY;
	if(!header.classList.contains('not-transparent')) {
		if(currentScrollPosition > 10) {
			header.classList.remove('transparent');
		} else {
			header.classList.add('transparent');
		}
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

			let osmUrl='https://maps.geoapify.com/v1/tile/osm-carto/{z}/{x}/{y}.png?apiKey=f22dc93b56ba4dd99263e7612b07050d';
			let osmAttrib='Powered by <a href="https://www.geoapify.com/" target="_blank">Geoapify</a> | © OpenStreetMap <a href="https://www.openstreetmap.org/copyright" target="_blank">contributors</a>';
			let osm = new L.TileLayer(osmUrl, {minZoom: 8, maxZoom: 20, attribution: osmAttrib});

			console.log('MapID >> ' + mapId);

			map = new L.Map(mapId);
			map.setView([lat, lng], 16);
			map.addLayer(osm);
			let marker = L.marker([lat, lng]).addTo(map);
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
