<html>
<head>
<title>Back Button LP</title>
<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
<style type="text/css">
div {
	padding:8px;
}
</style>
</head>
<body>
<h1>Back Button LP</h1>
<script type="text/javascript">

var scr2="var parameters = location.href.split('?')[1];";
var scr4="window.addEventListener('popstate', function(e){";
var scr6="document.location.href = document.location;";
var scr7="location.reload(true);}});";
 
$(document).ready(function(){
 
    var counter = 2;
 
    $("#addButton").click(function () { 
	 
	var newTextBoxDiv = $(document.createElement('div'))
	     .attr("id", 'TextBoxDiv' + counter);
 
	newTextBoxDiv.after().html('<label>LP #'+ counter + ' : </label>' +
	      '<input type="text" size="30" name="textbox' + counter + 
	      '" id="textbox' + counter + '" value="" >'); 
	newTextBoxDiv.appendTo("#TextBoxesGroup"); 
	counter++;
     });
 
 
 
 
     $("#removeButton").click(function () {
	if(counter==1){
          alert("No more textbox to remove");
          return false;
       }   
 
	counter--;
 
        $("#TextBoxDiv" + counter).remove();
		$("#TextAreaBoxDiv" + counter).remove();
	
 
     });
 
 
 
 
     $("#getButtonValue").click(function () {
	 
	for(i=1; i<counter; i++){	
	 $("#TextAreaBoxDiv" + i).remove();	
	 }
	
	 
	for(i=1; i<counter; i++){	
   	 var newTextAreaBoxDiv = $(document.createElement('div'))
	     .attr("id", 'TextAreaBoxDiv' + i); 
		 
	var j = counter-1;
	 
if(i<j)
{
	newTextAreaBoxDiv.after().html('<label>Script For LP #'+ i + ' : </label>' +
	      '<textarea readonly="readonly" rows="20" cols="100" name="LP' + i + '" id="LP' + i + '">'+
		   "<"+"script type='text/javascript'>\n"+scr2+"<"+"/script>"+ "\n" +
		  "<"+"script type='text/javascript'>\n"+"window.history.pushState('"+$('#textbox' + (i-1)).val()+"', 'Other Page', '"+$('#textbox' + (i+1)).val()+"?' + parameters);"+ 
		   "\n" + "window.history.pushState('"+$('#textbox' + (i+1)).val()+"', 'Initial Page', '"+$('#textbox' + i).val()+"?' + parameters);"+
		  "<"+"/script>"+ "\n" +
		  "<"+"script type='text/javascript'>\n" + scr4 + "\n" + 
		  "if(document.URL.indexOf('"+$('#textbox' + (i+1)).val()+"') >= 0){" + "\n" + scr6 + "\n" + scr7 + "\n" +
		  "<"+"/script> " + '</textarea>'); 
		  

}



    if(i == 1)	
	{	 
	
	newTextAreaBoxDiv.after().html('<label>Script For LP #'+ i + ' : </label>' +
	      '<textarea readonly="readonly" rows="20" cols="100" name="LP' + i + '" id="LP' + i + '">'+
		   "<"+"script type='text/javascript'>\n"+scr2+"<"+"/script>"+ "\n" +
		  "<"+"script type='text/javascript'>\n"+"window.history.pushState('"+$('#textbox' + (i+1)).val()+"', 'Other Page', '"+$('#textbox' + (i+1)).val()+"?' + parameters);"+ 
		   "\n" + "window.history.pushState('"+$('#textbox' + i).val()+"', 'Initial Page', '"+$('#textbox' + i).val()+"?' + parameters);"+
		  "<"+"/script>"+ "\n" +
		  "<"+"script type='text/javascript'>\n" + scr4 + "\n" + 
		  "if(document.URL.indexOf('"+$('#textbox' + (i+1)).val()+"') >= 0){" + "\n" + scr6 + "\n" + scr7 + "\n" +
		  "<"+"/script> " + '</textarea>'); 
		  
	} 


if(i==j)
{
	
	newTextAreaBoxDiv.after().html('<label>Script For LP #'+ i + ' : </label>' +
	      '<textarea readonly="readonly" rows="20" cols="100" name="LP' + i + '" id="LP' + i + '">'+
		  
		  
		  
		   "<"+"script type='text/javascript'>\n" +  
		   "(function() {\n" + 
		   "setTimeout(function() { \n" + 
		   "var __redirect_to = " +  "'<"+"?"+"="+"$szLinkURL"+"?>';\n" + 
		   " var _tags = ['button', 'input', 'a'], _els, _i, _i2; \n" + "for(_i in _tags) {\n" + 
		  "_els = document.getElementsByTagName(_tags[_i]); \n" +
		  "for(_i2 in _els) { \n" + 
		  "if((_tags[_i] == 'input' && _els[_i2].type != 'button' && _els[_i2].type != 'submit' && _els[_i2].type != 'image') || _els[_i2].target == '_blank') continue; \n" + 
		  " _els[_i2].onclick = function() {window.onbeforeunload = function(){};} \n" + 
		  "}} \n" + "window.onbeforeunload = function() { \n" +
		  "setTimeout(function() { \n" + " window.onbeforeunload = function() {}; \n" + 
		  "setTimeout(function() { \n" + 
		  "document.location.href = __redirect_to; \n" + 
		  "}, 500); \n" + "}, 5); \n" + 
		  "return '" + "Are you sure want to quit? Click "+ '"' +"STAY ON THIS PAGE"+'"'+" to update you Android.'\n" +   
		  "} \n" + " }, 500); \n" + "})();" + 
		  "<"+"/script>"+ "\n" + 
		  
		  
		  
		  
		  "<"+"script type='text/javascript'>\n"+scr2+"<"+"/script>"+ "\n" +
		  "<"+"script type='text/javascript'>\n"+"window.history.pushState('"+$('#textbox' + i).val()+"', 'Other Page', '"+$('#textbox' + i).val()+"?' + parameters);"+
		  "<"+"/script>"+ "\n" + "<"+"script type='text/javascript'>\n" + scr4 + "\n" + 
		  "if(document.URL.indexOf('"+$('#textbox' + i).val()+"') >= 0){" + "\n" + scr6 + "\n" + scr7 + "\n" +
		  "<"+"/script> " +  '</textarea>');

	
	}  		  
		  
		  
	newTextAreaBoxDiv.appendTo("#DivBoxesGroup");
    
	}
    	 
     });
  });
</script>
</head>
<body>

<div id='TextBoxesGroup'>
  <div id="TextBoxDiv1">
    <label>LP #1 : </label>
    <input type='textbox' id='textbox1' size="30">
  </div>
</div>



<input type='button' value='Add LP' id='addButton'>
<input type='button' value='Remove LP' id='removeButton'>
<input type='button' value='Submit' id='getButtonValue'>


<div id='DivBoxesGroup'></div>
</body>
</html>



















