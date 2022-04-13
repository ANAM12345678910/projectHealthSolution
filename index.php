<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hospital</title>
  <link rel="stylesheet" href="styles-news.css">
  <link rel="stylesheet" href="styles.css">
</head>

<body id="body">
  <div id="header">
    <div id="logosection">
      <div>
        <img src="img/logoi.png" alt="">
        <p>Multispeciality Hospital</p><br>
      </div>
      <div id="submenu">
        <p><a href="login">LOGIN</a></p>
      </div>
    </div>
    <div id="newsbar">
      <div class="updates">LATEST UPDATES</div>
      <div class="scroll">
        <div id="mg-a">
          <span>Scientists discover the structure of cancer molecule</span>
          <span>Physical fitness linked to better brain function</span>
          <span>Way to prevent chemotherapy hair loss in sight</span>
          <span>New flu vaccine skin patch could do away with needles</span>
          <span>Alzheimer's: Head device reduces memory loss in 7 out of 8 people</span>
          <span>Common antidepressant may ease anxiety more quickly than depression</span>
          <span>E-cigarette vapors, even without nicotine, may harm lungs </span>
          <span>Cancer is now the leading cause of death in wealthy countries </span>
        </div>
      </div>
    </div>
  </div>
  <div id="main">
    <div id="docmenu">
      <div id="doclist">
        <div id="general" class="active" name="gen" onclick="response0()">
          <img src="img/gen.png" alt="">
          <p>General Physician</p>
        </div>
        <div id="gyno" onclick="response1()">
          <img src="img/gyn.png" alt="">
          <p>Gynocologist</p>
        </div>
        <div id="physicio" onclick="response2()">
          <img src="img/phy.png" alt="">
          <p>Physiciotherepist</p>
        </div>
        <div id="dentist" onclick="response3()">
          <img src="img/dent.png" alt="">
          <p>Dentist</p>
        </div>
      </div>
    </div>
    <div id="docdetails">
      <div id="rw1">
        <div id="rw12">
          <img id="propic" src="img/gen.png" alt="">
          <div id="rw121">
            <p id="drname">Dr. Shalad Jadhav</p>
            <span id="occupation" class="fs145rem">General Physician</span>
          </div>
        </div>
        <div id="rw13">
          <p id="fees">&#8377; 500 at Clinic</p>
          <div>
            <span id="avail" class="fs145rem">Check Availbility</span>
            <img src="img/downarrow.png" alt="" onclick="downlist()">
          </div>
        </div>
      </div>
      <div id="availbility">
        <div id="timedetails">
          <p id="day">Mon-Thu, Sun</p>
          <span id="time" class="fs145rem">9:00am - 03:00pm</span>
        </div>
      </div>
      <button id="myBtn" type="button" name="button" onclick="abc()">Book Appointment</button>
    </div>
    <!-- <div id="btn">
      <button type="button" class="myButton" onclick="abc()">Book Appointment</button>
    </div> -->
  </div>
  <!-- <div id="footer">
    <p class="footer-data">© 2019-20 Multispeciality Hospital. | All Rights Reserved.</p>
  </div> -->



  <div id="mainwrapper">
    <div id="main-section">
      <img class="" src="img/logo.png" alt="mics-logo" width="60px">
      <h3>Multispeciality Hospital</h3>
      <h4>Request an Appointment</h4>
      <div class="infobox">
        <form method="post" action="func.php">
          <div class="perfectinput ">
            <img class="down-arrow" src="img/down.png" alt="">
            <select class="correction" id="" name="firsttimevisit" onChange="forselect()" required>
              <option value="" style="display: none;"></option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
            <div class="label top-7" aria-hidden="true">First Time Visit?</div>
          </div>
          <div class="perfectinput">
            <input class="sm-input" type="text" name="fname" value="" autocomplete="off" onChange="forinput()" required>
            <div class="label" aria-hidden="true">First name</div>
          </div>
          <div class="perfectinput">
            <input class="sm-input" type="text" name="lname" value="" autocomplete="off" onChange="forinput()" required>
            <div class="label" aria-hidden="true">Last name</div>
          </div>
          <div class="perfectinput">
            <input class="sm-input" type="text" name="fathername" value="" autocomplete="off" onChange="forinput()"
              required>
            <div class="label" aria-hidden="true">Father name</div>
          </div>
          <div class="perfectinput">
            <input class="sm-input" type="email" name="email" value="" autocomplete="off" onChange="forinput()"
              required>
            <div class="label" aria-hidden="true">Email ID</div>
          </div>
          <br>
          <div class="ph">
            <div class="boxforflag-arrow">
              <img src="img/india-flag.png" alt="">
            </div>

            <div class="perfectinput">
              <input class="sm-input" type="text" name="phno" value="" autocomplete="off" onChange="forinput()"
                required>
              <div class="label" aria-hidden="true">Phone no.</div>
            </div>
          </div>


          <fieldset>
            <legend>Your birthday</legend>
            <div class="perfectinput" style="margin-top: 6px;">
              <img class="down-arrow" src="img/down.png" alt="">
              <select class="mid" id="" name="month" onChange="forselect()" required>
                <option value="" style="display: none;"></option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="Number">November</option>
                <option value="December">December</option>
              </select>
              <div class="label top-7" aria-hidden="true">Month</div>
            </div>
            <div class="perfectinput">
              <input class="sm-input xsm-input" type="text" name="day" value="" autocomplete="off" onChange="forinput()"
                required>
              <div class="label" aria-hidden="true">Day</div>
            </div>
            <div class="perfectinput">
              <input class="sm-input xsm-input" type="text" name="year" value="" autocomplete="off"
                onChange="forinput()" required>
              <div class="label" aria-hidden="true">Year</div>
            </div>
          </fieldset>

          <div class="perfectinput">
            <img class="down-arrow" src="img/down.png" alt="">
            <select class="N9rVke" id="gender" name="gender" onChange="forselect()" required>
              <option value="" style="display: none;"></option>
              <option value="Female">Female</option>
              <option value="Male">Male</option>
              <option value="Other">Rather not say</option>
            </select>
            <div class="label top-7" aria-hidden="true">Gender</div>
            <input type="hidden" id="docid" name="docid" value="General Physician">
          </div>
          <input class="lbl-nxt" type="submit" name="booking_data" value="Book" required>
        </form>
      </div>
    </div>
  </div>
  <div id="footer">
    <p class="footer-data">© 2019-20 XYZ Health Solutions. | All Rights Reserved.</p>
  </div>
  <script src="master.js" charset="utf-8"></script>
</body>

</html>