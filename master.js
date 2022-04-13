let gen = document.getElementById("general");
let gyno = document.getElementById("gyno");
let physio = document.getElementById("physicio");
let denti = document.getElementById("dentist");

function response0() {
  gen.classList.add("active");
  gyno.classList.remove("active");
  physio.classList.remove("active");
  denti.classList.remove("active");
  let propic = document.getElementById("propic");
  propic.src = "img/gen.png";
  let drname = document.getElementById("drname");
  drname.innerText = "Dr. Shalad Jadhav";
  let occupation = document.getElementById("occupation");
  occupation.innerText = "General Physician";
  let fees = document.getElementById("fees");
  fees.innerText = "500 at Clinic";
  let avail = document.getElementById("avail");
  avail.innerText = "Available Today";
  let day = document.getElementById("day");
  day.innerText = "Mon-Thu, Sun";
  let time = document.getElementById("time");
  time.innerText = "9:00am - 03:00pm";
  let docid = document.getElementById("docid");
  docid.value = "General Physician";
}

function response1() {
  gen.classList.remove("active");
  gyno.classList.add("active");
  physio.classList.remove("active");
  denti.classList.remove("active");
  let propic = document.getElementById("propic");
  propic.src = "img/gyn.png";
  let drname = document.getElementById("drname");
  drname.innerText = "Dr. Amrita Patil";
  let occupation = document.getElementById("occupation");
  occupation.innerText = "Gynocologist";
  let fees = document.getElementById("fees");
  fees.innerText = "700 at Clinic";
  let avail = document.getElementById("avail");
  avail.innerText = "Available Today";
  let day = document.getElementById("day");
  day.innerText = "Mon-Fri";
  let time = document.getElementById("time");
  time.innerText = "10:00am - 04:00pm";
  let docid = document.getElementById("docid");
  docid.value = "Gynocologist";
}

function response2() {
  gen.classList.remove("active");
  gyno.classList.remove("active");
  physio.classList.add("active");
  denti.classList.remove("active");
  let propic = document.getElementById("propic");
  propic.src = "img/phy.png";
  var drname = document.getElementById("drname");
  drname.innerText = "Dr. Akshay Kumar";
  let occupation = document.getElementById("occupation");
  occupation.innerText = "Physiciotherepist";
  let fees = document.getElementById("fees");
  fees.innerText = "600 at Clinic";
  let avail = document.getElementById("avail");
  avail.innerText = "Available Today";
  let day = document.getElementById("day");
  day.innerText = "Mon-Sat";
  let time = document.getElementById("time");
  time.innerText = "7:00am - 04:00pm";
  let docid = document.getElementById("docid");
  docid.value = "Physiciotherepist";
}

function response3() {
  gen.classList.remove("active");
  gyno.classList.remove("active");
  physio.classList.remove("active");
  denti.classList.add("active");
  let propic = document.getElementById("propic");
  propic.src = "img/dent.png";
  let drname = document.getElementById("drname");
  drname.innerText = "Dr. Tejaswini Sawant"
  let occupation = document.getElementById("occupation");
  occupation.innerText = "Dentist";
  let fees = document.getElementById("fees");
  fees.innerText = "400 at Clinic";
  let avail = document.getElementById("avail");
  avail.innerText = "Available Today";
  let day = document.getElementById("day");
  day.innerText = "Mon-Thu";
  let time = document.getElementById("time");
  time.innerText = "10:00am - 05:00pm";
  let docid = document.getElementById("docid");
  docid.value = "Dentist";
}

function downlist() {
  var x = document.getElementById("availbility");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}





function forinput() {
  document.querySelectorAll('input').forEach(function(currentvalue, index) {
    var ccv = currentvalue.value;
    if (ccv != "") {
      currentvalue.nextElementSibling.classList.add("mkup");
    } else {
      console.log("else case.");
    }
  });
}

function forselect() {
  document.querySelectorAll('select').forEach(function(currentvalue, index) {
    var ccv = currentvalue.value;
    if (ccv != "") {
      currentvalue.nextElementSibling.classList.add("mkup");
    } else {
      console.log("else case.");
    }
  });
}


// function abc() {
//   let abc = document.getElementById("mainwrapper");
//   document.getElementById("body").style.overflow = "hidden";
//   document.getElementById("body").style.margin = "0";
//   abc.style.display = "block";
// }



window.onload = function() {
  var popup = document.getElementById('main-section');
  var overlay = document.getElementById('mainwrapper');
  var openButton = document.getElementById('myBtn');
  document.onclick = function(e) {
    if (e.target.id == 'mainwrapper') {
      popup.style.display = 'none';
      overlay.style.display = 'none';
    }
    if (e.target === openButton) {
      popup.style.display = 'block';
      overlay.style.display = 'block';
    }
  };
};
