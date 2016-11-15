var i,len,child = element.firstElementChild;
while(child != element.lastElementChild){
	if (child.nodeType == 1) {
		processChild(child);
		child = child.nextElementSibling;
	}
}