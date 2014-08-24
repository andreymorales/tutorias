function Trim(str)	//Elimina espacios a la derecha e izquierda de una cadena
 {
	 var resultStr = "";
	 resultStr = TrimLeft(str);
	 resultStr = TrimRight(resultStr);
	 return resultStr;
 }

function TrimLeft(str)	//Elimina espacios a la izquierda de una cadena
 {
	 var resultStr = "";
	 var i = len = 0;
	 
	 if (str+"" == "undefined" || str == null) 
		return "";
		str += "";
	
	 if (str.length == 0) 
		resultStr = "";
	 else
	  { 
		len = str.length;
		while ((i <= len) && (str.charAt(i) == " "))
			i++;
			resultStr = str.substring(i, len);
	  }
	 return resultStr;
 }

function TrimRight(str)	//Elimina espacios a la derecha de una cadena
 {
	 var resultStr = "";
	 var i = 0;
	 if (str+"" == "undefined" || str == null) 
		return "";
		str += "";
	 if (str.length == 0) 
		resultStr = "";
	 else 
	  {
		i = str.length - 1;
		while ((i >= 0) && (str.charAt(i) == " "))
			i--;
			resultStr = str.substring(0, i + 1);
	  }
	 return resultStr; 
 }

function IsDate(dateStr)	//Verifica fecha válida
 {
	var datePat = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
	var matchArray = dateStr.match(datePat); 
	var datestatus=true;
	
	datemsg="";
	
	if (matchArray == null || matchArray[1]==null || matchArray[2]==null || matchArray[3]==null)
	 {
		datemsg="----- Please enter date as mm/dd/yyyy " + "\n";
		return false;
	 }
	
	month = matchArray[1];
	day = matchArray[3];
	year = matchArray[5];
	
	if (month < 1 || month > 12) 
	 { 
		datemsg=datemsg + "----- Month must be between 1 and 12." + "\n";
		return false;
	 }
	if (day < 1 || day > 31) 
	 {
		datemsg=datemsg + "----- Day must be between 1 and 31." + "\n";
		return false;
	 }
	
	if ((month==4 || month==6 || month==9 || month==11) && day==31) 
	 {
		datemsg=datemsg + "----- Month " + month + " doesn`t have 31 days!" + "\n";
		return false;
	 }
	
	if (month == 2) 
	 {
		var isleap = (year % 4 == 0 && (year % 100 != 0 || year % 400 == 0));
		if (day > 29 || (day==29 && !isleap)) 
		 {
			datemsg=datemsg + "----- February " + year + " doesn`t have " + day + " days!" + "\n";
			return false;
		 }
	 }
	return true;
 }

function IsInteger (s)	//Verifica entero válido
 {
	var i;

	if (IsEmpty(s))
	if (IsInteger.arguments.length == 1) return 0;
	else return (IsInteger.arguments[1] == true);

	for (i = 0; i < s.length; i++)
	 {
		var c = s.charAt(i);
		if (!IsDigit(c)) return false;
	 }
	return true;
 }

function IsEmpty(s)	//Verifica vacio
 {
	return ((s == null) || (s.length == 0))
 }

function IsDigit (c)	//Verifica digito
 {
	return ((c >= "0") && (c <= "9"))
 }

function setEntriesType(vgetKeyCode, vtype) //It sets defined entries type
 {
    var vkey = (document.all) ? vgetKeyCode.keyCode : vgetKeyCode.which;
	var vregularExpression;
	
	switch(vtype)
	 {
		case "digit":			if (vkey==0 || vkey==8) return true;
								vregularExpression =/\d/;
								break;
		case "integer":			if (vkey==0 || vkey==8) return true;
								vregularExpression =/^(\d|-)?(\d|,)*$/;
								break;
		case "float":			if (vkey==0 || vkey==8) return true;
								vregularExpression = /^(\d|-)?(\d|,)*\.?\d*$/;
								break;
		case "date":			if (vkey==0 || vkey==8) return true;
								vregularExpression = /^(\d)?(\d|\/|-)*$/;
								break;
		case "letter":			if (vkey==0 || vkey==8 || vkey==13 || vkey==32 || isValidChar(vkey)) return true;
								vregularExpression = /[A-Za-z]/;
								break;
		case "letter-numeric":	if (vkey==0 || vkey==8 || vkey==13 || vkey==32 ) return true;
								vregularExpression = /[A-Za-z0-9]/;
								break;
		case "alfanumeric":		if (vkey==0 || vkey==8 || vkey==13 || vkey==32 ) return true;
								vregularExpression = /\w/;
								break;
	 }
	
	//alert("");
	vkeyChar = String.fromCharCode(vkey);
	return vregularExpression.test(vkeyChar);
 }
 
function isValidChar(vkey) //It verifies if a char is valid (letter)
 {
	var vkeyChar= String.fromCharCode(vkey);
	vkeyChar= vkeyChar.toLowerCase();
	var vkeyCode= vkeyChar.charCodeAt(0);//String.charCodeAt(0);
	
	switch(vkeyCode)
	 {
		case 225: return true;	//á	
				  break;
		case 233: return true;	//é
				  break;
		case 237: return true;	//í
				  break;
		case 241: return true;	//ñ
				  break;
		case 243: return true;	//ó
				  break;
		case 250: return true;	//ú
				  break;
		case 252: return true;	//ü
				  break;
		default: return false;
	 }
 }

function isEmail(vstring) //It verifies a valid email 
 {
	var vregularExpression=/[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
	
	return vstring.match(vregularExpression);
 }