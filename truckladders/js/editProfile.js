(function(){
	
	var info = document.querySelector('#info');
	var edit = document.querySelector('#edit');
	var editB = document.querySelector('#editButton');

	edit.style.display = "none";

	function editInfo(){
		info.style.display = "none";
		edit.style.display = "block";
	}

	editB.addEventListener('click', editInfo, false);

})();