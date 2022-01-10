<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Address Book</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/custom.css">
  </head>
<body>

  <div class="grid-container grid-x align-middle">
    <div class="columns large-6">
      <h1>Ajax Address Book</h1>
    </div>
    <div class="columns large-6 grid-x align-right">
      <button class="button" data-open="addModal" style="margin-bottom: 0px;">Add Contact</button>
      <div class="reveal" id="addModal" data-reveal>
        <h2>Add Contact</h2>
        <form id="addContact" action="#" method="post">
          <div class="grid-x">
            <div class="large-6 columns">
              <label>First Name </label>
              <input name="first_name" type="text" placeholder="Enter First Name" />
            </div>
            <div class="large-6 columns">
              <label>Last Name </label>
              <input name="last_name" type="text" placeholder="Enter Last Name" />
            </div>
          </div>
          <div class="grid-x">
            <div class="large-4 columns">
              <label>Email </label>
              <input name="email" type="email" placeholder="Enter Email address" />
          </div>
            <div class="large-4 columns">
              <label>Phone Number</label>
                <input name="phone" type="text" placeholder="Phone Number" />
            </div>
            <div class="large-4 columns">
              <label>Contact Group</label> 
              <select name="contact_group"><option value="Family">Family</option>
                <option value="Friends">Friends</option>
                <option value="Business">Business</option>
              </select>
          </div>
          </div>
          <div class="grid-x">
            <div class="large-6 columns">
              <label>Address1 </label>
              <input name="address1" type="text" placeholder="Enter Street, House Number, GPO" />
            </div>
            <div class="large-6 columns">
              <label>Address2 </label>
              <input name="address2" type="text" placeholder="Enter Additional Address" />
            </div>
          </div>
          <div class="grid-x">
            <div class="large-4 columns">
              <label>City </label>
              <input name="city" type="text" placeholder="Enter Your City" />
          </div>
            <div class="large-4 columns">
              <label>State </label>
              <select name="state">
                <option>Select State</option>
                <option value="AJK">AJK</option>
                <option value="Balochistan">Balochistan</option>
                <option value="Gilgit Baltistan">Gilgit Baltistan</option>
                <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
                <option value="Punjab">Punjab</option>
                <option value="Sindh">Sindh</option>

              </select>
          </div>
            <div class="large-4 columns">
              <label>Zipcode </label>
                <input name="state" type="text" placeholder="Enter Zone or State" />
            </div>
          </div>
          <div class="grid-x">
            <div class="large-12 columns">
              <label>Notes</label>
                <textarea name="notes" placeholder="Enter Optional Notes"></textarea>
            </div>
          </div>
          <input name="submit" type="submit" data-close aria-label="Close modal" class="add-btn button right small" value="Add Contact" />
        </form>
        <button class="close-button" data-close aria-label="Close modal" type="button">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
  


    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>
