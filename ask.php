<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="Assets/Css/main.css">
</head>
<body>

	<div class="logo">
<a href="index.html">	<img src="Assets/IMG/logo.jpg" width="50"></a>
</div>

<div class="banner">
	<img src="Assets/IMG/sher.png" width="50%"
	style="margin-left: 20px; " 
	>
</div>

	<div class="regis">
			<h2>Ask Sheridan!</h2>


    <p>Have a question? Ask sheridan for an answer<br>"OR"
    	<a href="FAQ.php">Visit FAQ</a></p>

			<form class="contact-form" action="contactsender.php" method="post" required>
			<h5>Last Name <input type="text" name="Name" placeholder="LastName"required></h5>
			<h5>First Name <input type="text" name="Name" placeholder="FirstName"required></h5>
			<h5>Student ID <input type="text" name="Name" placeholder="Student ID"required></h5>
			<h5>E-mail <input type="text" name="Name" placeholder="E-mail"required></h5>
			<h5>Query for Concern</h5><textarea name="message" placeholder="message" required style=" width: 100%; height: 100px"required></textarea>
            <button type="submit" name="submit"> Submit</button>
        </form>
			</form>


	</div>

</body>
</html>