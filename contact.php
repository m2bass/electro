<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content=" Electrothermal-Network works with a wide range of businesses to help ensure office air conditioning systems works efficiently. We are highly dedicated to providing air conditioning solutions for homes and businesses."
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Electro-Thermal Network</title>
  </head>
  <body>
    <!-- HEADER -->
    <header id="home-head">
      <div class="container">
        <div class="row">
          <div class="col-md-4 pt-3 text-center">
            <a href="index.html" class="navbar-brand">
              <img
                src="img/logo_new.gif"
                weight="304"
                height="97"
                alt="Logo Electrothermal-Network"
                class="img-fluid"
              />
            </a>
          </div>
          <div class="col-md-5 pt-5 d-none d-lg-block">
            <h5 class="text-center font-weight-bold">
              Air Conditioning Service At Its Best
            </h5>
            <h6 class="text-center text-success font-weight-bold">
              Servicing, Troubleshooting and Training
            </h6>
          </div>
          <div class="col-md-3 pt-5 d-none d-lg-block text-center">
            <div class="lead">Call The Specialists</div>
            <h5 class="font-weight-bold">0805 546 5636</h5>
          </div>
        </div>
      </div>
    </header>

    <!-- NAV SECTION -->
    <nav class="navbar navbar-expand-sm navbar-light bg-success mt-4 p-0">
      <div class="container">
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav m-auto font-weight-bold">
            <li class="nav-item px-2">
              <a href="index.html" class="nav-link">HOME</a>
            </li>
            <li class="nav-item px-2">
              <a href="whatwedo.html" class="nav-link">WHAT WE DO</a>
            </li>
            <li class="nav-item px-2">
              <a href="whoweare.html" class="nav-link">WHO WE ARE</a>
            </li>
            <li class="nav-item px-2">
              <a href="contact.php" class="nav-link active">CONTACT US</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- QUOTE-->
    <section id="quote" class="py-3 text-white">
      <div class="container">
        <div class="row"></div>
      </div>
    </section>

    <!-- PAGE HEADER-->
    <header id="page-header">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1>Contact Us</h1>
            <p>We would love to hear from you</p>
          </div>
        </div>
      </div>
    </header>

    <!-- CONTACT SECTION -->
    <section id="contact" class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card p-4">
              <div class="card-body">
                <h4>Get In Touch</h4>
                <p>
                  We are always happy to hear from you. If you have any
                  questions or comments feel free to contact us by using our
                  contact details or the form.
                </p>
                <h4>Address</h4>
                <p>22, Olubiyi Street, Iba, Lagos, Nigeria.</p>
                <h4>Email</h4>
                <p>info@electro-thermalnetwork.com</p>
                <h4>Phone</h4>
                <p>0805 546 5536</p>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card p-4">
              <div class="card-body">
                <h3 class="text-center">
                  Please fill out this form to contact us
                </h3>
                <hr />

                <form
                  id="contact-form"
                  name="contact-form"
                  action="mail.php"
                  method="POST"
                  onsubmit="return validateForm()"
                >
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input
                          type="text"
                          id="firstname"
                          name="firstname"
                          class="form-control"
                          placeholder="First Name"
                          minlength="3"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input
                          type="text"
                          id="lastname"
                          name="lastname"
                          class="form-control"
                          placeholder="Last Name"
                          minlength="3"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input
                          type="email"
                          id="email"
                          class="form-control"
                          name="email"
                          placeholder="Email"
                        />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input
                          type="text"
                          name="phone"
                          id="phone"
                          class="form-control"
                          placeholder="Phone Number"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea
                          minlength="10"
                          cols="50"
                          class="form-control"
                          placeholder="Message"
                          name="message"
                          id="message"
                          rows="5"
                          required
                        ></textarea>
                      </div>
                    </div>

                   
                  </div>
                </form>

                <div class="col-md-12">
                      <a
                        class="btn btn-outline-success btn-block"
                        onclick="validateForm()"
                        >Submit</a
                      >
                      <div class="status" id="status"></div>
                    </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr />

    <!-- FOOTER -->
    <footer id="main-footer" class="bg-success p-4 mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-9 d-flex self-align-start text-white small">
            <span>
              Copyright &copy; <span id="year"></span> Electrothermal-Network
            </span>
          </div>

          <div class="col-md-3 d-flex self-align-end text-dark small">
            <!--MODAL TRIGGER-->

            <span
              class="btn-success"
              data-toggle="modal"
              data-target="#footerModal"
              title="Phone: +2348038029555 | Email: m2bass1@yahoo.com"
              href=""
              >Website designed by M2BASS</span
            >

            <!--MODAL-->
            <div class="modal" id="footerModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Website designed by M2BASS</h5>
                    <button class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    Contact us for your professional looking responsive
                    website:<br />
                    EMAIL: m2bass1@yahoo.com<br />
                    PHONE: +2348038029555
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">
                      Close
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script
      src="http://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>

    <script>
      //Get the current year for the copyright
      $('#year').text(new Date().getFullYear());

      //Form

      function validateForm() {
        // var x =  document.getElementById('name').value;
        // if (x == "") {
        //     document.getElementById('status').innerHTML = "Name cannot be empty";
        //     return false;
        // }
        // x =  document.getElementById('email').value;
        // if (x == "") {
        //     document.getElementById('status').innerHTML = "Email cannot be empty";
        //     return false;
        // } else {
        //     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        //     if(!re.test(x)){
        //         document.getElementById('status').innerHTML = "Email format invalid";
        //         return false;
        //     }
        // }
        // x =  document.getElementById('subject').value;
        // if (x == "") {
        //     document.getElementById('status').innerHTML = "Subject cannot be empty";
        //     return false;
        // }
        // x =  document.getElementById('message').value;
        // if (x == "") {
        //     document.getElementById('status').innerHTML = "Message cannot be empty";
        //     return false;
        // }
        //get input field values data to be sent to server
        document.getElementById('status').innerHTML = 'Sending...';
        formData = {
          'firstname' : $('input[name=firstname]').val(),
          'lastname'  : $('input[name=lastname]').val(),
          'email'     : $('input[name=email]').val(),
          'phone'     : $('input[name=phone]').val(),
          'message'   : $('textarea[name=message]').val()
        };

        $.ajax({
          url: "mail.php",
          type: 'POST',
          data: formData,
          success: function (data, textStatus, jqXHR) {
            $('#status').text(data.message);
            if (data.code)
              //If mail was sent successfully, reset the form.
              $('#contact-form')
                .closest('form')
                .find('input[type=text], textarea')
                .val('');
          },
          error: function (jqXHR, textStatus, errorThrown) {
            $('#status').text(jqXHR);
          },
        });
      }
    </script>
  </body>
</html>
