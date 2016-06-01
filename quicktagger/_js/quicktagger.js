// InMotion Quick Tagger - JavaScript

var utm_source, utm_medium, utm_campaign, result, url;

function get(s){return document.getElementById(s);}

function validate() {

	if (utm_source.value == 0) {

		alert("Required Source Missing!");
		
		utm_source.focus();

		utm_source.className = 'error';

		utm_source.onblur = function(){ this.className = ''; }

		return false;

	}

	if (utm_medium.value == "") {

		alert("Required Medium Missing!");

		utm_medium.focus();

		utm_medium.className = 'error';

		utm_medium.onblur = function(){ this.className = ''; }

		return false;

	}

	if (utm_campaign.value == "") {

		alert("Required Campaign Missing!");

		utm_campaign.focus();

		utm_campaign.className = 'error';

		utm_campaign.onblur = function(){ this.className = ''; }

		return false;

	}

	var myurl = '';

	myurl = url + (url.lastIndexOf("/")<9?'/':'');

	myurl += (url.indexOf('?')==-1?'?':'&')+'utm_source='+encodeURIComponent(utm_source.value.replace(/[\s\t]/g, ''));

	myurl += '&utm_medium='+encodeURIComponent(utm_medium.value.replace(/[\s\t]/g, ''));

	myurl += '&utm_campaign='+encodeURIComponent(utm_campaign.value.replace(/[\s\t]/g, ''));

	result.value = myurl;

	return true;

}
/*
(function(l){

	url = l;

	utm_source = get('utm_source');

	utm_medium = get('utm_medium');

	utm_campaign = get('utm_campaign');

	result = get('result');

})(siteurl);*/

