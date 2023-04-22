'use strict';

function sendRequest(urlBase) {
	var xhttp = new XMLHttpRequest();

	xhttp.onload = (response) => {
		document.getElementById('spanResult').innerText = JSON.parse(response.currentTarget.response).result;
	}

	var txtNumber = document.getElementById('txtNumber').value;

	var jsonObject = {
		txtNumber: txtNumber
	};

	xhttp.open('POST', urlBase + '/index/index', true);
	xhttp.setRequestHeader('content-type', 'application/json');

	xhttp.send(JSON.stringify(jsonObject));
}