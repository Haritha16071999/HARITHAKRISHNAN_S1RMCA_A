<!DOCTYPE html>

<html lang="">

<head>
<title>Tourism management system</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="main_manu">

  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left"> 
     
        <h1><a href="index.html">Tourism management system</a></h1>
      
      </div>
      <nav id="mainav" class="fl_right"> 
            <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
           </li>
          <li class="active"><a href="logout.php">LOGOUT</a></li>
               </nav>
    </header>
  </div>

  <div id="pageintro" class="hoc clear"> 
  

    <article>
      <h3 class="heading">Traveling makes a man wiser, but less happy</h3>
      <p>He who is only a traveler learns things at second-hand and by the halves, and is poor authority. We are most interested when science reports what those men already know practically or instinctively, for that alone is a true humanity, or account of human experience.</p>
      
</article>
  
  </div>
 
</div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <section id="introblocks">
      <ul class="nospace group btmspace-80">
        <li class="one_third first">
          <figure><a class="imgover" ><img src="images/1.jfif" alt=""></a>
            <figcaption>
              <h6 class="heading">Eravikulam national park</h6>
              <p>Views and wild goats in a lush setting.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="images/2.jfif" alt=""></a>
            <figcaption>
              <h6 class="heading">Varkala Beach</h6>
              <p>Cliffside beach known for holy waters.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="images/download.jfif" alt=""></a>
            <figcaption>
              <h6 class="heading">Cherai Beach</h6>
              <p>Swimming, dolphins & shell collecting.</p>
            </figcaption>
          </figure>
        </li>
      </ul>
      <br>
      <ul class="nospace group btmspace-80">
        <li class="one_third first">
          <figure><a class="imgover" ><img src="images/1.jfif" alt=""></a>
            <figcaption>
              <h6 class="heading">Eravikulam national park</h6>
              <p>Views and wild goats in a lush setting.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="images/2.jfif" alt=""></a>
            <figcaption>
              <h6 class="heading">Varkala Beach</h6>
              <p>Cliffside beach known for holy waters.</p>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="images/download.jfif" alt=""></a>
            <figcaption>
              <h6 class="heading">Cherai Beach</h6>
              <p>Swimming, dolphins & shell collecting.</p>
            </figcaption>
          </figure>
        </li>
      </ul>
    </section>
<center><h1> To book Package fillup below form</h1></center>

<form action="sendEmail.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="phno" class="form-label">Your Mobile No</label>
                <input type="text" class="form-control" id="phno" name="phno" placeholder="789542651" tabindex="2" required>
            </div>
               <div class="form-group">
                <label for="package" class="form-label">Your package</label>
                <textarea class="form-control" rows="5" cols="50" id="package" name="pack" placeholder="Enter your package" tabindex="4"></textarea>
            </div>
                        <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Send Message!</button>
            </div>
        </form>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
    <hr class="btmspace-80">
   
    <div class="clear"></div>
  </main>
</div>


<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
   
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved </a></p>
    <p class="fl_right">Template by <a target="_blank">Haritha</a></p>
    
  </div>
</div>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>