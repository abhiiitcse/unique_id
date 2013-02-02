<html>
<head>
<title>home page</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<SCRIPT LANGUAGE="JavaScript">

var interval = 2.5; // delay between rotating images (in miliseconds)
var random_display = 1; // 0 = no, 1 = yes
interval *= 1000;//convert milisecond into second

var image_index = 0;
image_list = new Array();
image_list[image_index++] = new imageItem("01.jpg");
image_list[image_index++] = new imageItem("02.jpg");
image_list[image_index++] = new imageItem("03.jpg");
image_list[image_index++] = new imageItem("04.jpg");
image_list[image_index++] = new imageItem("05.jpg");
var number_of_image = image_list.length;
function imageItem(image_location) {
this.image_item = new Image();
this.image_item.src = image_location;
}
function get_ImageItemLocation(imageObj) {
return(imageObj.image_item.src)
}
function generate(x, y) {
var range = y - x + 1;
return Math.floor(Math.random() * range) + x;
}
function getNextImage() {
if (random_display) {
image_index = generate(0, number_of_image-1);
}
else {
image_index = (image_index+1) % number_of_image;
}
var new_image = get_ImageItemLocation(image_list[image_index]);
return(new_image);
}
function rotateImage(place) {
var new_image = getNextImage();
document[place].src = new_image;
var recur_call = "rotateImage('"+place+"')";
setTimeout(recur_call, interval);
}

</script>
</head>
<BODY OnLoad="rotateImage('rImage')">
<body>


<h2 id="para1">INDIAN INSTITUTE OF TECHNOLOGY, MANDI</h2><hr width="1000"/>
<h3>Welcome to unique id project</h3>
<p>Do you not have UniqueID : <a href="a.avi">Click Here to get your UniqueID</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Search For a full information : <a href="north_zone.php">Search for information</a></p>
<br/>
<img name="rImage" src="01.jpg" width=150 height=120 align="right">

<br/>

<i>member of this project : </i>
<i style="color:red"> Abhimanyu kumar , Vaibhav agrawal , Shekhar agrawal , Basava raju</i>
<br/><br/>

<i style="color:#F4A467">Abstract:</i>
<p>1. This is the mini project assigned in the database subject.</p>
<p>2. The main aim of this project is to design a scalable database.</p>
<p>3. There will be four server to store the data of every person.</p>
<p>4. The query processed by the server will go to the nearest server.</p>
<p>5. If the data the client searching for will not be present in the server then the server will redirect the query to the desired server.</p>
<p>6. Ultimately our goal is to design a scalable database.</p>





</body>






</html>
