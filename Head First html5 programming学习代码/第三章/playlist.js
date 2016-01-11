window.onload = init;

function init () {
	var button = document.getElementById("addButton");
	button.onclick = handleButtonClick;
	loadPlaylist();
}

function handleButtonClick(e) {
	var textInput = document.getElementById("songTextInput");
	var songName = textInput.value;

	if (songName == "") {
		alert("Please enter a song");
	}else{
		var li = document.createElement("li");
		li.innerHTML = songName;
		var ul = document.getElementById("playlist");
		ul.appendChild(li);
	}

	//调用另一个文件里面的方法保存
	save(songName);
}