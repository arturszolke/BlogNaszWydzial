function ajaxInit() {
	var XMLHttpRequestAJAX = null;
	XMLHttpRequestAJAX = new XMLHttpRequest();
	return XMLHttpRequestAJAX;
}

function getData(id, URL) {
	//changeVisibility();
	setTimeout(() => {
		XMLHttpRequestAJAX = ajaxInit();

		if (XMLHttpRequestAJAX != null) {
			XMLHttpRequestAJAX.open('GET', URL, true);
			XMLHttpRequestAJAX.onreadystatechange = function() {
				if (XMLHttpRequestAJAX.readyState === 4) {
					id = document.getElementById(id);
					id.innerHTML = XMLHttpRequestAJAX.responseText;
					tinymce.remove('textarea#editor');
					tinymce.init({
						selector: 'textarea#editor',
						plugins: 'lists',
						toolbar: 'undo redo | bold italic underline | numlist bullist',
						branding: false,
						menubar: false,
						statusbar: false
					});
					document.addEventListener('focusin', (e) => {
						if (e.target.closest('.tox-tinymce-aux, .moxman-window, .tam-assetmanager-root') !== null) {
							e.stopImmediatePropagation();
						}
					});
				}
			};
			XMLHttpRequestAJAX.send(null);
		}
	}, 0);
}

function changeVisibility() {
	document.getElementById('content').className = 'd-none';
	document.getElementById('loader').className = 'spinner-border m-5';
	setTimeout(() => {
		document.getElementById('loader').className = 'spinner-border m-5 d-none';
	}, 400);
	setTimeout(() => {
		document.getElementById('content').className = '';
	}, 401);
}
