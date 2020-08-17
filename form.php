

<!DOCTYPE html>
<html>
<head>
    <title>Register for Graduation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <style type="text/css">
          .bg-primary {
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("usiu2.jpg");
            height: 100vh;
            background-size: cover;
            background-position: center;
        }
        .logo img{
    float: left;
    width: 170px;
    height: 140px;
}
        h1{
          margin-left: 370px;
          color: hsl(48, 97%, 58%);
          font-size: 35px;
}
h2{
          margin-left: 380px;
          color: hsl(48, 97%, 58%);
}
        .lab {
            color: black;
        }   

        .title h2{
        color: #fcd12a;

        }
      </style>

        <div class="logo">
    <img src="logo.jpg">
    </div>
</head>


<body class="bg-primary">

    <h1>APPLICATION FOR DEGREE</h1>
    <h2>School of Science and Technology</h2>

    <div class="row" style="margin-top: 60px;margin-left: 100px;">
        <div class="col-md-2"></div>
        <div class="col-md-6">
            <div class = "well">
            <form class="form-horizontal" method="post" action="register.php">

              <div class="form-group">
                <label class="control-label lab col-sm-3" for="fullname">Full Name:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Full Name"
                  oninvalid="this.setCustomValidity('Please Enter Full Name')" oninput="setCustomValidity('')" required>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label lab col-sm-3" for="email">Student ID:</label>
                <div class="col-sm-6">
                  <input type="id" class="form-control" id="id" name="id" placeholder="Enter ID" oninvalid="this.setCustomValidity('Please Enter valid school ID')" oninput="setCustomValidity('')"required>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label lab col-sm-3" for="email">Email:</label>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" oninvalid="this.setCustomValidity('Please Enter valid email')" oninput="setCustomValidity('')"required>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label lab col-sm-3" for="phone">Phone Number:</label>
                <div class="col-sm-6">
                  <input type="text"  maxlength="10" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number" oninvalid="this.setCustomValidity('Please Enter Phone Number')" oninput="setCustomValidity('')" required>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label lab col-sm-3" for="semester">Degree requirement will be completed by:(Check one)</label>
                <div class="col-sm-3">
                    <select class="form-control" name="semester" required>
                        <option value="spring">Spring</option>
                        <option value="summer">Summer</option> 
                        <option value="fall">Fall</option>
  
                    </select>   
                </div>
              </div>


              <div class="form-group">
                <label class="control-label lab col-sm-3" for="degree">Degree:(Check one)</label>
                <div class="col-sm-7">
                    <select class="form-control" name="degree" required>
                        <option value="IT"> BSc. in Information Systems & Technology </option>
                        <option value="journalism"> BA in Journalism</option> 
                        <option value="pharmacy">BSc. in Pharmacy</option>
  
                    </select>   
                </div>
              </div>

              <div class="form-group">
                <label class="control-label lab col-sm-3" for="concentration">Concentration:</label>
                <div class="col-sm-6">
                  <input type="text"  maxlength="10" class="form-control" id="concentration" name="concentration" placeholder="concentration" oninvalid="this.setCustomValidity('Please Enter your Concentration')" oninput="setCustomValidity('')" required>
                </div>
              </div>


              <div class="form-group">
                <label class="control-label lab col-sm-3" for="dor">Date Of Registration:</label>
                <div class="col-sm-3">
                  <input type="date" name="dor" style="color: black;">
                </div>
              </div>
           
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-10">
                <input class="btn btn-primary" type="submit" name="submit" value="SUBMIT">
                </div>
           
              
            </form>
            </div>
        

</body>
</html>
