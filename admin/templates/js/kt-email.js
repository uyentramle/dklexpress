function isEmail(s){
	//Empty Email
	if(s == " ")
		return false;
	//Email has space
	if(s.indexOf(" ") > 0)
		return false;
	//Email not '@'
	if(s.indexOf("@") == -1)
		return false;
	var i = 1;
	var sLength = s.length;
	//Email not '.'
	if(s.indexOf(".") == -1)
		return false;
	//Email has '..'
	if(s.indexOf("..") != -1)
		return false;
	//Email has '@@'
	if(s.indexOf("@") != s.lastIndexOf("@"))
		return false;
	//Email has '.' in the end
	if(s.lastIndexOf(".") == s.length - 1)
		return false;
	//Email has special characters
	var str = "abcdefghijklmnopqrstuvwxyz1234567890-@._";
	for(var j = 0; j < s.length; j++)
		if(str.indexOf(s.charAt(j)) == -1)
			return false;
	//Other
	return true;
}

function isEmpty(s){
	return ((s == null) || (s.length == 0))	
}

function isWhilespace(s){
	var whilespace = "\t\n\r";
	var i;
	if(isEmpty(s)) return true;
	for(i = 0; i < s.length; i++){
		var c = s.charAt(i);
		if(whilespace.indexOf(c) == -1) return false;
	}
	return true;
}