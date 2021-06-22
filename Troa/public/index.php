<!doctype html>
<html lang="en">

    <head>
        
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
	@font-face {
        font-family: Druk Cond Super;
        src: url("../src/fonts/Druk Cond Super.otf");
	}
	@font-face {
        font-family: Druk Wide Super;
        src: url("../src/fonts/Druk Wide Super.otf");
	}
	body{
		background-color:white;
	}
	.h3_droite{
		font-family:Druk Cond Super;
		margin-top:180%;
		font-size:4em;
		font-weight:bold;
		margin-left:28%;
	}
	.h3_gauche{
		font-family:Druk Cond Super;
		margin-top:50%;
		font-size:4em;
		margin-left:28%;
		font-weight:bold;
		text-align:left;
	}
	.h4_gauche{
		font-family:Druk Cond Super;
		font-size:auto;
		position: absolute;
		margin-left:26%;
		text-align:left;
	}
	.h4_droite{
		font-family:Druk Cond Super;
		font-size:auto;
		position: absolute;
		margin-left:26%;
	}
	button {
	  height: 49px;
	  width: 180px;
	  background-color: #000000;
	  border-color: #000000;
	  margin-top:18%;
	  margin-left:28%;
	  
	}
	a {
	  height: 17px;
	  width: 74px;
	  color: #FFFFFF;
	  font-family: "Helvetica Neue";
	  font-size: 17px;
	  font-weight: bold;
	  letter-spacing: 0;
	  line-height: 17px;
	  text-decoration : none;
	}
	a:hover {
	  height: 17px;
	  width: 74px;
	  color: #FFFFFF;
	  font-family: "Helvetica Neue";
	  font-size: 17px;
	  font-weight: bold;
	  letter-spacing: 0;
	  line-height: 17px;
	  text-decoration : none;
	}
	#droite {
	margin-top:140%;
	}
	.img-gauche{
		margin-top:10%;width:180px;height:700px;
	}
	.img-droite{
		margin-top:180%;width:180px;height:700px;
	}
	.img-droite{
		margin-top:180%;width:180px;height:700px;
	}
	#destination {
  background-image:url(assets/images/fond.png);
}
	</style>
    </head>

    <body>
	<header> 
		<div class="container-fluid">
		  <div class="row">
			<div class="col-sm-1" ></div>
			<div class="col-sm-2" ><span style="font-family:Druk Cond Super; font-size:4.7em;">B</span></div>
			<div class="col-sm-3" ></div>
			<div class="col-sm-3" ></div>
			<div class="col-sm-3" ><img src="assets/images/biere.png" width="19%" style="margin-top:10%;" ></div>
			<hr width="90%" >
		  </div>
		</div>
	</header>
		<div>
		<div class="container-fluid" id="destination">
		
		</div>
		</div>
	
<script>
    $(document).ready(function(e){
        $.ajax ({
            url : 'endpoint.php',
            type : 'GET',
            dataType : 'html',
            success : function(code_html, statut){
                
            },
            error : function(resultat, statut, erreur){
                
            }
        });
    });

var doc = document.getElementById('destination');

var requestURL = 'produit.json';
var request = new XMLHttpRequest();
request.open('GET', requestURL);
request.responseType = 'json';
request.send();

request.onload = function() {
  const bieres = request.response;
  var nbbieres = bieres.length;
  var i = 0;
  
  while ( nbbieres > i )
  {
	  
	const  row1 = document.createElement("div");   
	   row1.className="row";
	const  row2 = document.createElement("div");   
		   row2.className="col-sm-1 col-md-1 col-lg-1";
	const  row3 = document.createElement("div");   
		   row3.className="col-sm-3 col-md-3 col-lg-3";
	const  row4 = document.createElement("div");   
		   row4.className="col-sm-2 col-md-2 col-lg-2";
	const  row5 = document.createElement("div");   
		   row5.className="col-sm-2 col-md-2 col-lg-2";
	const  row6 = document.createElement("div");   
		   row6.className="col-sm-3 col-md-3 col-lg-3";
	const  row7 = document.createElement("div");   
		   row7.className="col-sm-1 col-md-1 col-lg-1";
	const  h3 = document.createElement('h3');
	h3.className = 'h3_gauche';	
	const  h4 = document.createElement('h4');
	h4.className = 'h4_gauche';	
	const  button = document.createElement('button');
	const  button_2 = document.createElement('button');

	var  lien = '';
	var  lien_2 = '';


	const  img = document.createElement('img');
	img.className = 'img-gauche';
	const  h3_2 = document.createElement('h3');
	h3_2.className = 'h3_droite';
	const  h4_2 = document.createElement('h4');
	h4_2.className = 'h4_droite';	
	const  img_2 = document.createElement('img');
	img_2.className = 'img-droite';  
	console.log(i);
	console.log(bieres);
	h3.innerHTML = bieres[i]['name'];
	h4.innerHTML = bieres[i]['tagline'];
	img.src = bieres[i]['image_url']; 
	lien.aherf = bieres[i]['id'];
	lien = '<a href="vue.php?id='+ bieres[i]['id'] + '"> See More </a>';
	button.innerHTML = lien;
	i = i + 1;
	h3_2.innerHTML = bieres[i]['name'];
	h4_2.innerHTML = bieres[i]['tagline'];
	img_2.src = bieres[i]['image_url'];
	img_2.src = bieres[i]['image_url']; 	
	lien_2 = '<a href="endpoint.php?id='+ bieres[i]['id'] + '"> See More </a>';
	button_2.innerHTML = lien_2;
	doc.appendChild(row1);
	row3.appendChild(h3);
	row3.appendChild(h4);
	row3.appendChild(button);
	row4.appendChild(img);
	row5.appendChild(img_2);
	row6.appendChild(h3_2);
	row6.appendChild(h4_2);
	row6.appendChild(button_2);
	row1.appendChild(row2);
	row1.appendChild(row3);
	row1.appendChild(row4);
	row1.appendChild(row5);
	row1.appendChild(row6);
	row1.appendChild(row7);
	i = i + 1;
  }
}


</script>

