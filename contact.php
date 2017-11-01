<!DOCTYPE HTML>
<?php
include("dbconnect.php");
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <title>Jeremy Cochran Cookie Tin Guitars | Cookie Tin Banjos Canton, Ga.</title>
  <meta name="description" content="Jeremy Cochran Cookie Tin Guitars and Cookie Tin Banjos in Canton, Ga.">
  <meta name="keywords" content="Jeremy Cochran, Handmade cookie tin guitars, Canton, Ga.">
  <meta name="author" content="Jeremy Cochran">
<link rel="stylesheet" href="Styles/main.css" />

</head>

<body>
  <header class="header">
    <nav class="navbar navbar-expand-sm navbar-dark
    bg-dark mb-3">
    <div class="container">
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto text-uppercase">
          <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
      </li>

      <?php
    include("catergoryList.php");
    ?>
    <li class="nav-item">
<a class="nav-link" href="contact.php">Contact</a>
</li>
<li class="nav-item">
<a class="nav-link" href="about.php">About</a>
</li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <input type="text" class="form-control mr-sm-2" placeholder="Search">
    <button class="btn btn-outline-info my-2 my-sm-0">Search</button>
    </form>

    </div>
    </div>
    </nav>






  </header>
  <form action="http://www.SnapHost.com/captcha/send.aspx" id="ContactUsCaptchaWebForm" method="post" onsubmit="return ValidateForm(this);">
    <input name="skip_WhereToSend" id="n" type="hidden" value="jeremyicochran@juno.com" />
    <input name="skip_SnapHostID" type="hidden" value="AB7K2G2NUQKH" />
    <input name="skip_WhereToReturn" type="hidden" value="http://www.jeremycochranguitars.com/contact.html" />
    <input name="skip_Subject" type="hidden" value="Contact Us Form" />
    <input name="skip_ShowUsersIp" type="hidden" value="1" />
    <input name="skip_SendCopyToUser" type="hidden" value="1" />
    <script type="text/javascript">
      function ValidateForm(frm) {
        if (frm.Name.value == "") {
          alert('Name is required.');
          frm.Name.focus();
          return false;
        }
        if (frm.FromEmailAddress.value == "") {
          alert('Email address is required.');
          frm.FromEmailAddress.focus();
          return false;
        }
        if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) {
          alert('Please enter a valid email address.');
          frm.FromEmailAddress.focus();
          return false;
        }
        if (frm.Comments.value == "") {
          alert('Please enter comments or questions.');
          frm.Comments.focus();
          return false;
        }
        if (frm.skip_CaptchaCode.value == "") {
          alert('Enter web form code.');
          frm.skip_CaptchaCode.focus();
          return false;
        }
        return true;
      }

      function ReloadCaptchaImage(captchaImageId) {
        var obj = document.getElementById(captchaImageId);
        var src = obj.src;
        var date = new Date();
        var pos = src.indexOf('&rad=');
        if (pos >= 0) {
          src = src.substr(0, pos);
        }
        obj.src = src + '&rad=' + date.getTime();
        return false;
      }

    </script>
    <div class="container">

        <div class="text-center">
        </br>
          <h1>Contact Us!</h1>
          <br/>
          <p id="con">If you would like to purchase an instrument or contact Jeremy, send us a message!</p>
</div>
  <div class="form-group text-center"><label>Name:</label></br>
  <input class="form-control" type="text" name="Name" />
  <br /></div>

  <div class="form-group text-center"><label>Email address:</label></br>
  <input class="form-control" type="text" name="FromEmailAddress" />
  <br /></div>

  <div class="form-group text-center"><label>Comments or questions:</label></br>
  <textarea class="form-control" type="text" name="Comments" rows="5"></textarea>
  <br /></div>
    <div class="form-group text-center">
    <label>Enter web form code*:</label></div>
    <div class="form-group text-center">
    <input class="form-control" name="skip_CaptchaCode" type="text" style="width:80px; margin:auto;" maxlength="6" />
  </div>
  <div class="form-group text-center">
    <a href="http://www.snaphost.com/captcha/ReadyForms/ContactUsForm.aspx"><img id="CaptchaImage" alt="Contact Us form" title="HTML code for Contact Us form" style="margin-left:20px;" src="http://www.SnapHost.com/captcha/CaptchaImage.aspx?id=AB7K2G2NUQKH&ImgType=2" /></a>
    <br/>
    <a href="#" onclick="return ReloadCaptchaImage('CaptchaImage');"><span style="font-size:12px;">reload image</span></a>
    <br/>
    <br/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <br/>
    <button class="btn btn-primary" name="skip_Submit" type="submit" id="submitButton" value="Submit">Submit</button>
  </div>
  </form>


</div>
</div>

  <footer class="text-center">
    <p class="lead">&copy; Jeremy Cochran Guitars</p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
