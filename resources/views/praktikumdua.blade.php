<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Validation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <style>
      body {
  background-image: url("lowresbg.jpg");
  background-color: #9fcde2;
}
  	.error{
    	color: red;
        font-style: italic;
    }
  </style>
</head>
<body>
	<div class = "container">
    	<div class = "col-md-4 col-md-offset-3">
        	<div class = "panel panel-info">
            	<div class = "panel-heading" style="text-align: center;">
                	REGISTRATION FORM
                </div>
                <div class = "panel-body">
                	<form id = "registration">
                    	<input type = "text" class = "form-control" name = "name" placeholder = "Name"/>
                        <br/>
                        <input class = "form-control" name = "address" placeholder="Address"></input>
                        <br/>
                        <input type = "text" class = "form-control" name = "email" placeholder = "Email"/>
                        <br/>
                        <input type = "password" class = "form-control" name = "password" placeholder = "Password" id = "password" minlength ="8" maxlength ="16"/>
                        <br/>
                        <input type = "text" class = "form-control" name = "telephone" placeholder = "Telephone" minlength="7"/>
                        <br/>
                        <select class = "form-control" name = "course">
                        	<option value="0" selected="" disabled="">Select Course</option>
                            <option>BTECH</option>
                            <option>BBA</option>
                            <option>BCA</option>
                            <option>B.COM</option>
                            <option>GEEKFORGEEKS</option>
                        </select>
                        <br/>
                        <input type = "text" class = "form-control" name = "zip" placeholder = "Zip Code" minlength ="6" maxlength ="6"/>
                        <br/>
                        <button type = "submit" class = "btn btn-success">Send</button>
                        <br/>
                        <button type = "reset" class = "btn btn-warning">Reset</button>
                        <br/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="perlengkapan.js"></script>  
</body>
</html>
