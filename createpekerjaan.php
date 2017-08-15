<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create Pekerjaan</title>
	<link href="style.css" rel="stylesheet" type="text/css">


<script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCIwd6kAjFRWjrYTi71a85Q5DRYaJGTpCc",
    authDomain: "admin-431f8.firebaseapp.com",
    databaseURL: "https://admin-431f8.firebaseio.com",
    projectId: "admin-431f8",
    storageBucket: "admin-431f8.appspot.com",
    messagingSenderId: "92588852870"
  };
  firebase.initializeApp(config);
</script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.js"></script>
		<script type="text/javascript" src="app.js"></script>
</head>
<body>
	<div id="content">
		<center>
		<h2>Buat Pekerjaan</h2><hr /><br />
			<h1 id="pekerjaan"></h1>
			Masukan Perkerjaan : 
			<textarea name="pekerjaan" rows="2" COLS="30"></textarea>
			<!--<input type="button" value="KIRIM" id="btn" onClick="tesclick()">-->

		    <br>
		    Upload Foto  Pekerjaan : <input type="file" id="images">
			<input type="button" value="KIRIM" id="btn" onClick="tesclick()">			

		</center>
	</div>
</body>