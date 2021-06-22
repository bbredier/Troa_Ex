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
	h3{
		font-family:Druk Cond Super;
		font-size:4em;
		font-weight:bold;
		margin-left:12%;
		margin-top:5%;
	}
	h4{
	  font-family: "Helvetica Neue";
	  font-weight:bold;
		font-size:auto;
		margin-left:12%;
		text-align:left;
	}
	p{
	  font-family: "Helvetica Neue";
		margin-left:12%;
		margin-top:7%;
		text-align:left;
		font-size:1em;
	}
	h6{
	  font-family: "Helvetica Neue";
	  font-weight:bold;
	  color:rgba(0,0,0,.4);
		margin-left:12%;
		text-align:left;
		font-size:1.5em;
	}
	#photo{
		width:230px;height:894px;
		margin-left:30%;
		margin-top:10%;
		margin-botton:10%;
	}
	.specification{
		height: 22px;
		width: 240px;
		color: #000000;
		font-family: 'Helvetica Neue';
		font-size: 14px;
		font-weight: bold;
		letter-spacing: 0;
		line-height: 22px;
	}
	</style>
    </head>

    <body>
	<header> 
		<div class="container-fluid">
		  <div class="row">
			<div class="col-sm-1" ></div>
			<div class="col-sm-2" ><span style="font-family:Druk Cond Super; font-size:4.7em;">B</span></div><!-- Lettre menu -->
			<div class="col-sm-3" ></div>
			<div class="col-sm-3" ></div>
			<div class="col-sm-3" ><img src="assets/images/biere.png" width="19%" style="margin-top:10%;" ></div> <!-- Image Menu Biere -->
			<hr width="90%" >
		  </div>
		</div>
	</header>
		<div class="container-fluid">
		  <div class="row">
			<div class="col-sm-6" style="border-right: solid;border-color:rgba(0,0,0,.1);">
				<img src="" id="photo" >
			</div> <!-- Image Biere -->
			<div class="col-sm-6" >
				<h3 id="titre"> </h3> <!-- Titre Biere -->
				<h4 id="tagline"> </h4>  <!-- TagLine Biere -->
				<p id="description"></p> <!-- Description Biere -->
				<br>
				<br> 
				<h6> SPECIFICATION </h6>
				<hr width="80%" style="color:rgba(0,0,0,.1);" >
				  <div class="row">
					<div class="col-sm-1" ></div>
					<div class="col-sm-2" ><span class="specification" >First brewed</span></div> <!-- Titre First brewed -->
					<div class="col-sm-6" ></div>
					<div class="col-sm-1" id="first_brewed"></div> <!-- Texte First brewed -->
					<div class="col-sm-2" ></div>
					<hr width="80%" style="color:rgba(0,0,0,.1);">
				  </div>
		  		  <div class="row">
					<div class="col-sm-1" ></div>
					<div class="col-sm-2" ><span class="specification">ABV</span></div> <!-- Titre ABV -->
					<div class="col-sm-6" ></div>
					<div class="col-sm-1" id="abv"></div> <!-- Titre ABV -->
					<div class="col-sm-2" ></div>
					<hr width="80%" style="color:rgba(0,0,0,.1);">
				  </div>
				  <div class="row">
					<div class="col-sm-1" ></div>
					<div class="col-sm-2" ><span class="specification">IBU</span></div> <!-- Titre IBU -->
					<div class="col-sm-6" ></div>
					<div class="col-sm-1" id="ibu"></div> <!-- Titre IBU -->
					<div class="col-sm-2" ></div>
					<hr width="80%" style="color:rgba(0,0,0,.1);">
				  </div>
		  		  <div class="row">
					<div class="col-sm-1" ></div>
					<div class="col-sm-2" ><span class="specification">EBC/SRM</span></div> <!-- Titre EBC/SRM -->
					<div class="col-sm-6" ></div>
					<div class="col-sm-1" id="ebc/srm"></div> <!-- Titre EBC/SRM -->
					<div class="col-sm-2" ></div>
					<hr width="80%" style="color:rgba(0,0,0,.1);">
				  </div>
			<h6>INGREDIENTS</h6><hr width="80%" style="color:rgba(0,0,0,.1);" >
					<div class="row">
						<div class="col-sm-1" ></div>
						<div class="col-sm-2" ><span class="specification">MALT</span></div> <!-- Titre MALT -->
						<div class="col-sm-6" ></div>
						<div class="col-sm-1" id="malt"></div> <!-- Titre MALT -->
						<div class="col-sm-2" ></div>
						<hr width="80%" style="color:rgba(0,0,0,.1);">
					</div>		  		  
					<div class="row">
						<div class="col-sm-1" ></div>
						<div class="col-sm-2" ><span class="specification">YEAST</span></div> <!-- Titre YEAST -->
						<div class="col-sm-6" ></div>
						<div class="col-sm-1" id="yeast"></div> <!-- Titre YEAST -->
						<div class="col-sm-2" ></div>
						<hr width="80%" style="color:rgba(0,0,0,.1);">
					</div>
		  
			</div>
			<hr width="90%" style="color:rgba(0,0,0,.1);" >
		  </div>
		</div>
		
		<script>
    window.onload = (function(e){
		var id = <?php echo $_GET['id']; ?>; 
        $.ajax ({
            url : 'endpoint.php?id='+ id, // Demande données biere
            type : 'GET',
            dataType : 'html',
            success : function(code_html, statut){ // Execution à la réception des données biere
				var doc = document.getElementById('destination');

				var requestURL = 'donnees.json';
				var request = new XMLHttpRequest();
				request.open('GET', requestURL);
				request.responseType = 'json';
				request.send();

				request.onload = function() {
				const biere = request.response;
				console.log(biere);
				document.getElementById('titre').innerHTML = biere[0]['name']; // Affichage des données dans les ID correspondant
				document.getElementById('tagline').innerHTML = biere[0]['tagline'];
				document.getElementById('description').innerHTML = biere[0]['description'];
				document.getElementById('first_brewed').innerHTML = biere[0]['first_brewed'];
				document.getElementById('abv').innerHTML = biere[0]['abv'];
				document.getElementById('ibu').innerHTML = biere[0]['ibu'];
				document.getElementById('ebc/srm').innerHTML = biere[0]['ebc'] + "/" + biere[0]['srm'] ;
				document.getElementById('malt').innerHTML = biere[0]['ingredients']['malt'][0]['name'];
				document.getElementById('yeast').innerHTML = biere[0]['ingredients']['yeast'];
				document.getElementById('photo').src = biere[0]['image_url'];
			} 
			},
            error : function(resultat, statut, erreur){
                
			}
	});
});




</script>