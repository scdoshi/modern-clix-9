function twitterCallback2(obj) {
	var twitters = obj;
	var statusHTML = "";
	var username = "";
	for (var i=0; i<twitters.length; i++){
		username = twitters[i].user.screen_name
		statusHTML += ('<p>'+twitters[i].text+' <a href="http://twitter.com/scdoshi">More updates</a>.</p>')
	}
	document.getElementById('twitter_update_list').innerHTML = statusHTML;
}

function relative_time(time_value) {
  var values = time_value.split(" ");
  time_value = values[1] + " " + values[2] + ", " + values[5] + " " + values[3];
  var parsed_date = Date.parse(time_value);
  var relative_to = (arguments.length > 1) ? arguments[1] : new Date();
  var delta = parseInt((relative_to.getTime() - parsed_date) / 1000);
  delta = delta + (relative_to.getTimezoneOffset() * 60);

  if (delta < 60) {
    return 'Less than a minute ago';
  } else if(delta < 120) {
    return 'About a minute ago';
  } else if(delta < (60*60)) {
    return (parseInt(delta / 60)).toString() + ' minutes ago';
  } else if(delta < (120*60)) {
    return 'About an hour ago';
  } else if(delta < (24*60*60)) {
    return 'About ' + (parseInt(delta / 3600)).toString() + ' hours ago';
  } else if(delta < (48*60*60)) {
    return 'One day ago';
  } else {
    return (parseInt(delta / 86400)).toString() + ' days ago';
  }
}