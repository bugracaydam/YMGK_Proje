<!DOCTYPE html>
<html lang="en">
  <html>
    <head>
      <title>Sign Up</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta charset="utf-8" />
      <link rel="stylesheet" type="text/css" href="signup_style.css" />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      />
      <link
        href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600"
        rel="stylesheet"
        type="text/css"
      />
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
        crossorigin="anonymous"
      />
    </head>

    <body class="body">
      <div class="login-page">
        <div class="form">
          <form action="islem.php" method="POST">
            <lottie-player
              src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"
              background="transparent"
              speed="1"
              style="justify-content: center"
              loop
              autoplay
            ></lottie-player>
            <input type="text" name="kullanici_adsoyad" placeholder="Ad Soyad" />
            <input type="text" name="kullanici_mail" placeholder="E-Mail" />
            <input type="password" name="kullanici_passwordone" id="password" placeholder="Şifre" />
            <input type="password" name="kullanici_passwordtwo" id="password2" placeholder="Şifre Tekrar" />
            <i class="fas fa-eye" onclick="show()"></i>
            <br />
            <br />
            <button type="submit" name="kullanicikaydet">
              KAYIT OL
            </button>
          </form>

          <form class="login-form">
            
          </form>
        </div>
      </div>
    </body>
    <script>
      function show() {
        var password = document.getElementById("password");
        var password2 = document.getElementById("password2");
        var icon = document.querySelector(".fas");

        // ========== Checking type of password ===========
        if (password.type === "password") {
          password.type = "text";
        } else {
          password.type = "password";
        }
        if (password2.type === "password") {
          password2.type = "text";
        } else {
          password2.type = "password";
        }
      }
    </script>
  </html>
</html>
