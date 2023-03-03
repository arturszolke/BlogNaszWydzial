function validate_login() {
	if (document.myForm.Email.value == '') {
		alert('Wpisz adres e-mail');
		document.myForm.Email.focus();
		return false;
	}

	if (document.myForm.Pass.value == '') {
		alert('Wpisz hasło');
		document.myForm.Pass.focus();
		return false;
	}

	return true;
}

function validate_register() {
	if (document.myForm.Name.value == '') {
		alert('Wpisz imię');
		document.myForm.Name.focus();
		return false;
	}

	if (document.myForm.Surname.value == '') {
		alert('Wpisz nazwisko');
		document.myForm.Surname.focus();
		return false;
	}

	if (document.myForm.Email.value == '') {
		alert('Wpisz adres e-mail');
		document.myForm.Email.focus();
		return false;
	}

	if (document.myForm.EmailRe.value == '' || document.myForm.EmailRe.value != document.myForm.Email.value) {
		alert('Potwierdź adres e-mail');
		document.myForm.EmailRe.focus();
		return false;
	}

	if (document.myForm.Pass.value == '') {
		alert('Wpisz hasło');
		document.myForm.Pass.focus();
		return false;
	}

	if (document.myForm.PassRe.value == '' || document.myForm.PassRe.value != document.myForm.Pass.value) {
		alert('Potwierdź hasło');
		document.myForm.PassRe.focus();
		return false;
	}

	return true;
}

function validate_newpost() {
	if (document.myForm.title.value == '') {
		alert('Wpisz tytuł');
		document.myForm.title.focus();
		return false;
	}

	var editorContent = tinyMCE.activeEditor.getContent();
	if (editorContent == '') {
		alert('Wpisz treść');
		tinyMCE.activeEditor.focus();
		return false;
	}

	return true;
}

function validate_contact() {
	if (document.myForm.Name.value == '') {
		alert('Wpisz imię');
		document.myForm.Name.focus();
		return false;
	}

	if (document.myForm.Surname.value == '') {
		alert('Wpisz nazwisko');
		document.myForm.Surname.focus();
		return false;
	}

	if (document.myForm.Email.value == '') {
		alert('Wpisz adres e-mail');
		document.myForm.Email.focus();
		return false;
	}

	if (document.myForm.Content.value == '') {
		alert('Wpisz treść wiadomości');
		document.myForm.Content.focus();
		return false;
	}

	return true;
}