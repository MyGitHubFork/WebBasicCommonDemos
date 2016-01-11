//保存一条数据到本地
function save (item) {
	var playlistArray = getStoreArray("playlist");
	playlistArray.push(item);
	localStorage.setItem("playlist",JSON.stringify(playlistArray));
}

function loadPlaylist () {
	var playlistArray = getSavedSongs();
	var ul = document.getElementById("playlist");
	if (playlistArray != null) {
		for (var i = 0; i < playlistArray.length; i++) {
			var li = document.createElement("li");
			li.innrtHTML = playlistArray[i];
			ul.appendChild(li);
		};
	};
}

function getSavedSongs () {
	return getStoreArray("playlist");
}

//得到存在本地的数据
function getStoreArray (key) {
	var playlistArray = localStorage.getItem(key);
	if (playlistArray == null || playlistArray == "") {
		playlistArray = new Array();
	}else{
		playlistArray = JSON.parse(playlistArray);
	}
	return playlistArray;
}