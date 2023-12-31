<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <title>Location</title>
    <style>
      .navbar {
        display:flex;
        justify-content:right;
        background-color: #89cff0;
        color: white;
        position: fixed;
        width: 100%;
        top: 0;
        padding: 10px;
      }

      .navbar ul {
      
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
      }

      .navbar li {
        display: inline;
        margin-right: 20px;
        float: left;
      }

      .navbar li a {
        display: block;
        color: white;
        text-align: center;
        padding: 4px 16px;
        text-decoration: none;
        border-radius: 8px;
      }

      .navbar li a:hover {
        background-color: steelblue;
      }
    </style>
  </head>
  <body>
    <nav class="navbar">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="license_application.php">License Forms</a></li>
        <li><a href="login.php">Log In</a></li>
        <li><a href="map.html">Location</a></li>
      </ul>
    </nav>
    <br /><br />
    <br /><br />
    <br /><br />
    <center><h1>
        BRTA Location In Google Map
    </h1></center>
    <br><br>

    <center>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d116773.46071855072!2d90.33637615896573!3d23.84807337069579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3755c25a71cf5873%3A0xd64e6f32619e3132!2sAshulia!3m2!1d23.9003712!2d90.3272255!4m5!1s0x3755c75ee859f471%3A0x9ec933908d265de7!2zUTlQWCs1V0MgQmFuZ2xhZGVzaCBSb2FkIFRyYW5zcG9ydCBBdXRob3JpdHkgKEJSVEEpLCDgpqzgpr_gpobgprDgpp_gpr_gpo8g4Kat4Kas4KaoLCDgpprgp4fgp5_gpr7gprDgpq7gp43gpq_gpr7gpqjgpqzgpr7gp5zgp4AsIOCmqOCmpOCngeCmqCDgpqzgpr_gpq7gpr7gpqjgpqzgpqjgp43gpqbgprAg4Ka44Kec4KaVLCBEaGFrYSAxMjEy!3m2!1d23.7854319!2d90.3997591!5e0!3m2!1sen!2sbd!4v1701185343705!5m2!1sen!2sbd"
        width="600"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </center>
  </body>
</html>
