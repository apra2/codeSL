<!DOCTYPE html>
        <html lang="en">
          <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Register Form</title>
            <style>
    h1 {
        text-align: center;
    }

    .field_group label
    {
      display: inline;
         }
    </style>
          </head>
          <body>
            <h1>Registration Form</h1>
            <fieldset>
              <legend>Registration form</legend>
            <form action="connect.php" method="post" name="Register_form">

              <div class="field_group">
                <label for="fname">First Name:</label>
                <input
                  type="text"
                  id="fname"
                  name="fname"
                  value=""
                  placeholder="Your First Name"
                /> 
              </div>

              <div class="field_group">
                <label for="Mname">Middle Name:</label>
                <input
                  type="text"
                  id="Mname"
                  name="Mname"
                  value=""
                  placeholder="Your Middle Name"
                />
              </div>

              <div class="field_group">
                <label for="lname">Last Name:</label>
                <input
                  type="text"
                  id="lname"
                  name="lname"
                  value=""
                  placeholder="Your Last Name"
                />
              </div>

              <div class="field_group">
                <label for="Course">Course:</label>
                <select name="faculty" id="faculty">
                  <option value="Course">Courses</option>
                  <option value="BCA">BCA</option>
                  <option value="BIT">BIT</option>
                  <option value="MIT">MIT</option>
                </select>
              </div>

              <div class="field_group">
                <label for="Gender">Gender:</label>
                <input type="radio" name="gender"> Male
                <input type="radio" name="gender"> Female
                <input type="radio" name="gender"> Other
              </div>

              <div class="field_group">
                <label for="Country">Country:</label>
                <select name="Country" id="Country">
                  <option value="Country"> Select Country</option>
                  <option value="London">London</option>
                  <option value="France">France</option>
                  <option value="Dubai">Dubai</option>
                </select>
              </div>

              <div class="field_group">
                <label for="Address">Address:</label>
                <input
                  type="text"
                  id="Address"
                  name="Address"
                  value=""
                  placeholder="Your Address "
                />
              </div>

              <div class="field_group">
                <label for="email">Email Address:</label>
                <input
                  type="text"
                  id="email"
                  name="email"
                  value=""
                  placeholder="Your Email Address"
                />
              </div>

              <div class="field_group">
                <label for="Password">Password:</label>
                <input
                  type="text"
                  id="Password"
                  name="user_password"
                  value=""
                  placeholder="Your Password"
                />
              </div>

              

              <div class="field_group">
                <label for="Re-type Password">Re-type Password:</label>
                <input
                  type="text"
                  id="Re-type Password"
                  name="Re-type Password"
                  value=""
                  placeholder=" Re-Type your Password"
                />
              </div>

              <form
              action="#"
              method="post"
              name="file_form"
              encytype="multipart/form-data"
            >
            <div class="field_group">
              <label for="Image">Image</label>
              <input type="file" name="Image" value="" />
              
              </form>

              <div class="field-group">
                <input type="checkbox" id="remember" name="remember" value="1" />
                <label for="remember">I accept Term &amp Condition</label>
              </div>
              <button type="submit">Register</button>
              <button type="submit">Clear</button>
              </fieldset>
            </form>
          </body>
        </html>



        <!--- react.dev

/*sql injection
 real escape 
 prepare string

Session_start()
Session Destroy()
Unset()
Setcookie()