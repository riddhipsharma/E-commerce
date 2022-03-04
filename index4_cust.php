<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="styles.css" rel="stylesheet">
  <link href="index.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&family=Poppins:wght@300&display=swap" rel="stylesheet">
  <title>E-commerce-CustomerRegistration</title>
</head>
<body class="full-height-grow">
  <div class="container full-height-grow">
    <header class="main-header">
      <a href="/" class="brand-logo">
        <img src="images/logo.png">
        <div class="brand-logo-name"></div>
    </header>
    <section class="join-main-section">
      <form class="join-form a" action="index3_cust.php">
        <h1 class="subtitle">Register</h1>
        <div class="input-group">
          <label> First name:</label>
          <input type="text">
        </div>
        <div class="input-group">
          <label>Last name:</label>
          <input type="text">
        </div>
        <div class="input-group">
         <label>Username:</label>
         <input type="text" placeholder="Create your username"required>
       </div>
       <div class="input-group">
         <label>Password:</label>
         <input type="password" placeholder="Create your password with 8 characters"required>
       </div>
       <div class="input-group">
         <label>Email Id:</label>
         <input type="email" required>
       </div>

      <div class="input-group">
        <label>Address:</label>
        <textarea  class="text1" name="Address" rows="6" cols="20" placeholder="Enter your address"required></textarea>
      </div>

      <div class="input-group">
        <label>Country:</label>
        <input type="text" required>
      </div>
        <div class="input-group">
          <button type="submit" class="btn">Dive In</button>
        </div>
      </form>

    </section>
  </div>

  <div class="join-page-circle-1"></div>
  <div class="join-page-circle-2"></div>
    </div>
  </footer>
</body>
</html>
