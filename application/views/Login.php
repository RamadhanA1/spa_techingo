<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <title>Log In</title>
  </head>
  <body>
    <!-- image illustration -->
    <div class=" login-image" style="z-index: 2; width: 60vw; height: 100vh; text-align: right; position:fixed; right: 0;">
        <div class=""></div>    
    </div>

    
    <!-- login form -->
    <section class="container-fluid p-5">
      <div class="row">
        <div class="col-4">
          <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/img/logo2.png" alt="" style="width: 16rem"/></a>
          <h2 class="pt-5">Log In</h2>
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"
                >Username or Email</label
              >
              <input
                type="email"
                class="form-control rounded-4 shadow-sm py-2"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Type username or email here"
              />
              <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >Password</label
              >
              <input
                type="password"
                class="form-control rounded-4 shadow-sm py-2"
                id="exampleInputPassword1"
                placeholder="Type password here"
              />
            </div>
            <div class="row">
              <div class="mb-3 col">
                <input
                  type="checkbox"
                  class="form-check-input"
                  id="exampleCheck1"
                />
                <label class="form-check-label" for="exampleCheck1"
                  >Remember Me</label
                >
              </div>
              <div class="col-auto">
                <span><a href="#">Forgot Password?</a></span>
              </div>
            </div>

            <div class="row">
              <div class="col-auto d-flex justify-items-end">
                <button type="submit" class="btn-nav rounded-5 py-2 shadow">
                  Log In
                </button>
              </div>
              <div class="col-auto">
                <button
                  type="submit"
                  class="btn-nav-outline rounded-5 py-2 shadow"
                >
                  Sign Up
                </button>
              </div>
            </div>
          </form>
        </div>
        
      </div>
    </section>

    <!-- credit -->
    <footer
      class="fixed-bottom pt-3 text-white container-fluid"
      style="background-color: #4a6700; z-index: 1;"
    >
      <p class="ps-5">Made with ♥ by Ramadhan Amannu</p>
    </footer>

    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
