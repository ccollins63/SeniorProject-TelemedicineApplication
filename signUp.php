<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">

    <title>Sign Up</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
    <link href="patientCSS.css" rel="stylesheet" type="text/css">

  </head>

  <body>
    <div class="container, whiteContainer">
      <div class="container">
        <div class="row">
          <div class="col-4">
            <img src="images/logo.png" width="150">
          </div>
          <div class="col, justifyCenter">
            <h1>Equinox Medicine Health Portal</h1>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <center><h2 class="appTitle">Sign Up</h2></center>
          </div>
        </div>
        <div class="row">
          <div class="col, skinnyForm">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputName">First Name*</label>
                  <input type="text" class="form-control" id="inputName"
                    placeholder="First name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputLastName">Last Name*</label>
                  <input type="text" class="form-control" id="inputLastName"
                    placeholder="Last name" required>
                </div>
              </div>
              <div class="form-group">
                <label for="emailAddress">Email address*</label>
                <input type="email" class="form-control" id="emailAddress"
                  placeholder="name@example.com" required>
              </div>
              <div class="form-group">
                <label for="key">Generated Key*</label>
                <input type="text" class="form-control" id="key"
                  placeholder="Given to you by your doctor or admin" required>
              </div>
              <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress"
                  placeholder="1234 Main St">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2"
                  placeholder="Apartment, studio, or floor">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">City</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">State</label>
                  <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option value="AL">AL</option>
                    <option value="AK">AK</option>
                    <option value="AR">AR</option>
                    <option value="AZ">AZ</option>
                    <option value="CA">CA</option>
                    <option value="CO">CO</option>
                    <option value="CT">CT</option>
                    <option value="DC">DC</option>
                    <option value="DE">DE</option>
                    <option value="FL">FL</option>
                    <option value="GA">GA</option>
                    <option value="HI">HI</option>
                    <option value="IA">IA</option>
                    <option value="ID">ID</option>
                    <option value="IL">IL</option>
                    <option value="IN">IN</option>
                    <option value="KS">KS</option>
                    <option value="KY">KY</option>
                    <option value="LA">LA</option>
                    <option value="MA">MA</option>
                    <option value="MD">MD</option>
                    <option value="ME">ME</option>
                    <option value="MI">MI</option>
                    <option value="MN">MN</option>
                    <option value="MO">MO</option>
                    <option value="MS">MS</option>
                    <option value="MT">MT</option>
                    <option value="NC">NC</option>
                    <option value="NE">NE</option>
                    <option value="NH">NH</option>
                    <option value="NJ">NJ</option>
                    <option value="NM">NM</option>
                    <option value="NV">NV</option>
                    <option value="NY">NY</option>
                    <option value="ND">ND</option>
                    <option value="OH">OH</option>
                    <option value="OK">OK</option>
                    <option value="OR">OR</option>
                    <option value="PA">PA</option>
                    <option value="RI">RI</option>
                    <option value="SC">SC</option>
                    <option value="SD">SD</option>
                    <option value="TN">TN</option>
                    <option value="TX">TX</option>
                    <option value="UT">UT</option>
                    <option value="VT">VT</option>
                    <option value="VA">VA</option>
                    <option value="WA">WA</option>
                    <option value="WI">WI</option>
                    <option value="WV">WV</option>
                    <option value="WY">WY</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Zip</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="termCheck"
                    required>
                  <label class="form-check-label" for="termCheck">
                    <a href="#">I agree to the terms and conditions.</a>*
                  </label>
                  <div class="invalid-feedback">
                    You must agree before submitting.
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Sign in</button><br><br>
              <p>Already have an account? <a href="login.html">Login here.</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>