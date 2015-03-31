<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/captcha.js"></script>
  <script src="js/valid.js"></script> 

<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">
<link rel="stylesheet" type="text/css" href="css/mail.css" media="screen">
</head>
<body>
<div class="col-lg-3">
<form role="form" name="rightform" id="rightform" method="post" class="contactform1">
<div class="form-group">
        <label class="center-block"><h1>Be in Touch</h1></label>
  </div>
<div class="form-group">
      <input type="text" class="form-control" id="name" placeholder="Enter your name" required="required" name="name">
  </div>
 <div class="form-group">
        <input type="email" class="form-control" id="email" placeholder="Enter your mail-id" required="required" name="email">
  </div>
  <div class="form-group">
        <input name="contact" type="text" class="form-control" id="contact" maxlength="10" placeholder="Enter your mobile number" required="required">
  </div>
  <div class="form-group">
        <input type="text" class="form-control" id="cap2"  required="required" name="cap2">
        <p> <a href='javascript: Draw();'>Click here for refresh</a></p>
      <script type="text/javascript">Draw()</script>
  </div>
  <div class="form-group">
        <input type="text" class="form-control" id="cap1" placeholder="Enter above code" required="required" name="cap1">
  </div>
  <button type="button" class="btn btn-default" id="Register"  name="Register" onclick="validate();">Submit</button>
</form>
					   
					</div>
			
</body>
</html>

