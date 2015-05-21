<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>js</title>
</head>
<script language="javascript">

var str="";
function gettxt()
{
	var obj = document.getElementById("ddl");
	var index = obj.selectedIndex;
	var text =  obj.options[index].text;
	var value = obj.options[index].value;
	return value;
}

function gettype()
{
   str=gettxt();
}
function dss()
{
	str="L2: 123456";
	alert((str.substring(0,4))=="L2: ");
}


function addxie()
{
	str=str.concat("-#-");
	document.getElementById("p1").innerHTML=str;
//$str2="r2:-1-2-#-1-2-#";
//L2:-1-2-#
//L2:-1-2-#3-#

}


function aa(){

	if((str.substring(0,4))=="L2: "||(str.substring(0,4))=="L3: ")
	{
	  
		  var r=document.getElementsByName("r");
				for(var i=0;i<r.length;i++){
					if(r[i].checked){
						str=str.concat(r[i].value);
						str=str.concat("-");
					}
				}
	   
			document.getElementById("p1").innerHTML=str;
		} else{
				 var r=document.getElementsByName("r");
				for(var i=0;i<r.length;i++){
					 if(r[i].checked){
					 str=str.concat(r[i].value);
					  str=str.concat("-");
					}
				} 
		str=str.concat("#")
		document.getElementById("p1").innerHTML=str;
	}
}

function updata()
{
	//将隐藏的内容变成要投注的内容	
	document.getElementById("hid").value=str;
	//alert(document.getElementById("hid").value);
}

</script>
<body>
<select id='ddl'>
 
  <option value ="r2:-">rand2</option>
  <option value="r3:-">rand3</option>
  <option value ="r4:-">rand4</option>
  <option value="r5:-">rand5</option>
  <option value ="r6:-">rand6</option>
  <option value ="r7:-">rand7</option>
  <option value="r8:-">rand8</option>
   <option value ="L1:-">line1</option>
  <option value ="L2:-">line2</option>
  <option value ="L3:-">line3</option>
  <option value="G2:-">gruop2</option>
  <option value="G3:-">gruop3</option>
</select>

<input type="button" onclick="gettype()" value="yes">

<form name="form1" method="post" action="">
<input type="checkbox" name="r" value="1">1
<input type="checkbox" name="r" value="2">2
<input type="checkbox" name="r" value="3">3
<input type="checkbox" name="r" value="4">4
<input type="checkbox" name="r" value="5">5
<input type="checkbox" name="r" value="6">6
<input type="checkbox" name="r" value="7">7
<input type="checkbox" name="r" value="8">8
<input type="checkbox" name="r" value="9">9
<input type="checkbox" name="r" value="10">10
<input type="checkbox" name="r" value="10">11
<br>
<input type="button" onclick="aa()" value="button">
<input type="button" onclick="addxie()" value="add">
</form>
</body>
</html>

<p>the last is </p>
<p id="p1"></p>
<br>
<br>

<form action='http://127.0.0.1/lottery11x5/touzhujieshou.php' method='post'>
<input type='hidden' name='touzhu' value='' id='hid'>
<input type="submit" name='submit' onclick="updata()"  value='submit'>
</form>

<?php
//alert(r[i].value+","+r[i].nextSibling.nodeValue);
//<input type="button" onclick="updata()" value="updata">
//如何表达属性

?>