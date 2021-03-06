<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>H2I</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">
  <!-- Bootstrap core CSS -->
  <link href="static/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="static/css/carousel.css" rel="stylesheet">
<link href="static/main.css" rel="stylesheet">
<!--<link href="contact/CONTACT.css" rel="stylesheet"> -->
<link href="contact/contactstyle.css" rel="stylesheet">
<link href="static/css/blog.css" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-KC9YGYVFF5"></script>
  <!-- /.container -->
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-KC9YGYVFF5');
  </script>
</head>

<body>
<!-- Container head -->
<div class="container-head">
    <header class="blog-header py-3">
      <div class="row flex-nowrap header-wrapper">
        <div class="header-img-wrapper">
          <img class="logo" href="#myPage" src="images/Logo.jpg" alt="Logo" >
        </div>
      </div>
    </header>
    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between" id="bar">
        <a class="p-2 link-secondary" href="index.html#">Home</a>
        <a class="p-2 link-secondary" href="kids.html#">Kids</a>
        <a class="p-2 link-secondary" href="resource.html#">Resources</a>
        <a class="p-2 link-secondary" href="contest.html#">Contest</a>
        <a class="p-2 link-secondary" href="contact.php#">Contact</a>
		<a class="p-2 link-secondary" href="survey.html#">Survey</a>
      </nav>
    </div>
</div>

<!-- Container for contact form--> 
<div class="container">
    <div style="text-align:center">
        <h2>Contact Us</h2>
        <h3>Questions, comments or concerns? Feel free to reach out!</h3>
    <div class="main">
    <form action="handle_register.php" method="post" id="form_sample">
    <label>First Name: * </label>
        <input id="firstname" name="firstname" placeHolder="Bob" type="text" required>
    <label>Last Name: * </label>
    <input id="lastname" name="lastname" placeHolder="Fuller" type="text" required>
        <label>Email: * </label>
    <input id="email" name="email" placeHolder="bobfuller@email.com" type="text" required>
        <label>Message:</label>
    <textarea cols="30" rows="7" name="message">
    </textarea>
    <input type="submit" value="Send">
</div>
</div>
<!-- Bootstrap--> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
    crossorigin="anonymous"></script>
  <script src="bootstrap.min.js"></script>
</body>
</html>
