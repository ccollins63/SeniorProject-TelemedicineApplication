<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">

    <title>Insert Data to Prescript</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
    <link href="patientCSS.css" rel="stylesheet" type="text/css">

  </head>

  <body>
    <div class="container, whiteContainer">
      <div class="container">
        <div class="row">
          <div class="col-4">
            <a href="login.php"><img src="images/logo.png" width="150"></a>
          </div>
          <div class="col, justifyCenter">
            <h1>Equinox Medicine Health Portal</h1>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <center><h2 class="appTitle">Insert Data to Presciption (All fields are required)</h2></center>
          </div>
        </div>
        <div class="row">
          <div class="col, skinnyForm">
            <form action="inputTempDataSubmit.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="patientID">Patient ID</label>
                  <input type="text" class="form-control" id="patientID" name="patientID"
                    placeholder="Patient ID" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="doctorID">Doctor ID</label>
                  <input type="text" class="form-control" id="doctorID" name="doctorID"
                    placeholder="Doctor ID" required>
                </div>
              </div>
              <div class="form-group">
                <label for="scriptName">Prescription Name</label>
                <input type="text" class="form-control" id="scriptName" name="scriptName"
                  placeholder="Name" required>
              </div>
                <div class="form-group">
                <label for="scriptDate">Prescription Date</label>
                <input type="date" class="form-control" id="scriptDate" name="scriptDate"
                  placeholder="Date" required>
              </div>
              <div class="form-group">
                <label for="scriptNotes">Prescription Notes</label>
                <input type="text" class="form-control" id="scriptNotes" name="scriptNotes"
                  placeholder="Notes" required>
              </div>
              <div class="form-group">
                <label for="scriptQuantity">Prescription Quantity</label>
                <input type="text" class="form-control" id="scriptQuantity" name="scriptQuantity"
                  placeholder="Quantity" required>
              </div>
              
              <button type="submit" class="btn btn-primary">Submit Data</button><br><br>
            </form>
          </div>
        </div>
      </div>
    </div>

  </body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</html>