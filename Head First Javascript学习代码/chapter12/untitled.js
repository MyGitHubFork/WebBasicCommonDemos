function AjaxRequest () {
	if (window.XMLHttpRequest) {
		try{
			this.request = new XMLHttpRequest();
		}catch(e){
			this.request = nulll
		}
	}else if (window.ActiveXObject){
		try{
			this.request = new ActiveXObject("Msxml2.XMLHTTP");
		}catch(e){
			try {
		        this.request = new ActiveXObject("Microsoft.XMLHTTP");
		    } catch(e) {
		        this.request = null;
		    }
		}
		
	}
	if (this.request == null)
    	alert("Ajax error creating the request.\n" + "Details: " + e);`
}