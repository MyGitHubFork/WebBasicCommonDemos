var area = function(diameter) {
	var radius = diameter/2,
	area = Math.PI * radius * radius;
	return Math.round(area*100)/100;
};