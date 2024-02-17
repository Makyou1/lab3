<!DOCTYPE html>
<html>
<head>
<title>Marc Nerez Personal Profile</title>
<link rel="icon" type="image/x-icon" href="favicon.ico">
<meta charset="utf-8">
<meta name="Makki's Profile" content="width=device-width, initial-scale=1.0">
<link rel= "stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<style>
  body {
    background-color: black;
    color: white;
    font-family: Open Sans;
    display: flex;
    flex-direction: column;
	margin: 0;
  }
  .musicians-container {
    display: flex;
    justify-content: center;
    overflow-x: auto;
  }

  .musician {
    text-align: center;
    margin-top: 20px;
    margin-right: 20px;
  }

  .musician img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    display: block;
  }
nav {
	background: #0082e6;
	height: 80px;
	width: 100%;
	position: fixed;
	top: 0;
	z-index: 1000;
	}
nav ul {
	float: right;
	margin-right: 20px;
	}
nav ul li {
	display: inline-block;
	line-height: 80px;
	margin: 0 5px;
	}
nav ul li a {
	color: white;
	font-size: 17px;
	padding: 7px 90px;
	border-radius: 3px;
	text-transform: uppercase;
	}
a.active,a:hover {
	background: #1b9bff;
	transition: .5s;
	}
.checkbtn {
	font-size: 30px;
	color: white;
	float: right;
	line-height: 80px;
	margin-right: 40px;
	curspr: pointer;
	}
#check {
	display: none;
	}
@media (max-width: 9858px) {
	label.logo {
	padding-left: 50px;
	}
	nav ul li a {
	font-size: 16px;
	}
}
@media (max-width: 858px) {
	.checkbtn {
	display: block;
	}
	ul {
	postiion: fixed;
	width: 100%;
	height: 100vh;
	background: #2c3e50;
	top: 80px;
	left: -100%;
	text-align: center;
	transition: all .5s;
	}
	nav ul li {
	display: block;
	margin: 50px 0;
	line-height: 30px;
	}
	nav ul li a {
	font-size: 20px;
	}
	a:hover,a.active {
	background: none;
	color: #0082e6;
	}
	#check: checked ~ ul {
	left:0;
	}
} 
.content {
    padding: 20px;
    margin-top: 100px;
    transition: margin-top 0.5s;

  }
p, li {
    color: white;
  }
h1, h2 {
    text-align: center;
  }
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    color: white;
  }

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

tr:nth-child(even) {
    background-color: #333333;
  }

#profile-intro {
    display: flex;
    align-items: center;
    background-color: blue;
    border: 2px solid white;
    padding: 20px;
}
#profile-intro img{
    width: 250px;
	height: 250px;
    margin-right: 20px;
	margin-left: 180px;
	float: right;
   }
#profile-text{
	flex: 1;
	
	}
#profile-intro p {
	margin: 0;
	float: right;
	}
#hobbies {
	background-color: #074f57;
	background-image: url("paletepall.jpg");
	background-repeat: no-repeat;
	background-position: center;
	color: white:
	padding-top: 200px;
	padding-bottom: 200px;
	}


.center-content {
    text-align: center;
  }

.image-container {
    display: none;
    justify-content: center;
    align-items: center;
  }

.image-container img {
    margin: 0 10px;
  }

.toggle-btn {
    font-size: 24px;
    cursor: pointer;
  }
  * {
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
  }
.places-container {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  }

.place-container {
  margin: 10px;
  text-align: center;
  transition: transform 0.3s;
  }

.place-container:hover {
  transform: scale(1.1);
  }

.place-container img {
   width: 500px;
   height: 400px;
   border-radius: 30px;
   transition: transform 0.3s;
  }

.place-container:hover img {
   transform: scale(1.1);
  }
  
</style>
</head>
<body>


<nav>
<div class="navbar">
<input type="checkbox" id="check">
<label for="check" class="checkbtn"> 
<i class="fas fa-bars"></i>
</label>
<label class="logo">
<img src="paletpal_logo.jpg" style="width: 70px; height: 80px; margin-left: 5px; margin-top: 0px;" alt="Logo of Website">
<ul>
<li><a class="active" href="#profile-intro">Introduction</a></li>
<li><a href="#personal-info">Personal Information</a></li>
<li><a href="#hobbies">Hobbies</a></li>
<li><a href="#travel-log">Travel log</a></li>
<li><a href="#art">Art that I'm into</a></li>

</div>
</nav>

<div class="content">
<h1 style="color:#00bfff;"id="demo"></h1>
<br>
<p style="text-align: center;" id="currentdate"></p>
<br>
<h1 style="color:#00bfff;">Marc Nerez Personal Profile</h1>
<h2 style="color:#00bfff;"><strong>Introduction</strong></h2>
<div id="profile-intro">
	<img src="ART AND THE ARTIST.jpg" alt="art vs artist picture">
<?php  
$x = '<p>This is the very first time I\'m attempting to do a website. I hope it works out! <br>';
$x .= 'My name is <strong>Marc Angelo A. Nerez</strong>, as stated above, I am <strong>34 years old</strong>. This is my 2nd course, and I\'m eager to learn more about developing programs.<br>';
$x .= 'I have two kids and I\'m currently working as a <em>Customer Relations Manager</em> for a security agency. My work includes traveling locally if needed.<br>';
$x .= 'Previously, I was a <em>Sales Professional</em> for <em>Makati Ford</em>, and before that, I was a <em>Citiphone Officer</em> for <em>Citibank BGC</em>.<br>';
$x .= 'I\'m from <em>Baguio City</em>!</p>';

function myfunction() {
  echo $GLOBALS['x'];
}

myfunction();
?>
	</div>
	
<h1 id="personal-info" style="color:#00bfff;"><strong>Personal Information</strong></h1> <br>
    
    <ul>
        <li style="background-color: powderblue; color: black;"><strong>Full Name:</strong> Marc Angelo A. Nerez</li>
        <li><strong>Nickname:</strong> Makki</li>
        <li><strong>Age:</strong> 33</li>
        <li><strong>Senior High School Graduated From:</strong> Our Lady of Mt. Carmel Montessori, Baguio City</li>
        <li><strong>City the High School is located at:</strong> Baguio City</li>
        <li><strong>Course:</strong> BSIT-MI, Bachelor of Science in Information Technology with specialization in Mobile and Internet Technology</li>
        <li><strong>Scholarship:</strong> No</li>
        <li><strong>Transferee / Second Course:</strong> Second Course</li>
        <li><strong>Did you choose this course?</strong> Yes</li>
        <li><strong>Why Yes?</strong> I always wanted to learn how to code and make my own application or website</li>
        <li><strong>If No, what course would you choose?</strong> N/A</li>
        <li><strong>Experience: Programming / Gaming / Others</strong></li>
        <li>All of my experiences regarding the following are the subjects that I have finished in APC. Other than that, none.</li>
        <li><strong>Expectations from Web Programming Course:</strong> Learn how to make a website</li>
        <li><strong>Learning Goals for Chosen Major:</strong> Learning how to make a website is an important aspect in my course goals in life.</li>
        <li><strong>Goals in Life:</strong> To live a comfortable life</li>
        <li><strong>Dream to Fulfill:</strong> I’m still figuring that out as of now. Having kids makes your dream change constantly.</li>
        <li><strong>Other Interesting Aspects:</strong> I have two kids, I’m currently working at a security agency, and the last time I attended college was way back in 2014 after I finished my course in Business.</li>
    </ul><br>

<h1 id="hobbies" style="color:#00bfff;"><strong>Hobbies</strong></h1>

<table>
  <tr>
    <th>Hobby</th> <br>
    <th>Best things about it</th>
    <th>Worst things about it</th>
  </tr>
  <tr>
    <td>Painting Miniatures</td>
    <td>
	<ul>
	<li>Exercises my creativity</li>
	<li>very relaxing</li>
	</ul>
	</td>
    <td>
	<ul>
	<li>Addicting</li>
	<li>Costly</li>
	</ul>
	</td>
  </tr>
  <tr>
    <td>Working out/ Weight lifting</td>
      <td>
	<ul>
	<li>It increases my endurance</li>
	<li>Beneficial to overall health</li>
	</ul>
	</td>
    <td>
	<ul>
	<li>May lead to injury if not done right</li>
	<li>Consistency is crucial, skipping may lead to weight gain</li>
	</ul>
	</td>
  </tr>
  <tr>
    <td>Reading Comic books</td>
      <td>
	<ul>
	<li>Entertaining</li>
	<li>Gives you some insight to understanding different perspectives</li>
	<li>Cheaper hobby compared to painting miniatures</li>
	<li>Enhances your vocabulary</li>
	</ul>
	</td>
    <td>
	<ul>
	<li>Hard to find time to read a graphic novel</li>
	<li>The stigma other people have that comics are for kids</li>

	</ul>
	</td>
  </tr>
  <tr>
    <td>Playing Video Games</td>
      <td>
	<ul>
	<li>Entertaining</li>
	<li>Highly enjoyable</li>
	<li>Improves cognitive functions</li>
	<li>Improves Social skills</li>
	</ul>
	</td>
    <td>
	<ul>
	<li>Time consuming</li>
	<li>May be a major distraction if you don't have self-control</li>
	</ul>
	</td>
  </tr>
 <tr>
    <td>Travelling</td>
      <td>
	<ul>
	<li>broadens your horizons</li>
	<li>Priceless memories</li>
	<li>Meet a lot of people</li>
	<li>Improves Social skills</li>
	<li>Allows you to discover new things about yourself</li>
	</ul>
	</td>
    <td>
	<ul>
	<li>Very Expensive</li>
	</ul>
	</td>
  </tr>
</table>
<br>
<div id="travel-log">
  <h1 id="demo" style="color:#00bfff;"></h1>
  <br>
  <p style="text-align: center;" id="currentdate"></p>
  <br>
  <h1 style="color:#00bfff;">Unforgettable Places I've Visited</h1> <br>
<div class="places-container">
<?php
$places = array(
  "Los Angeles, California" => "Losangeles.jpg",
  "Melbourne, Australia" => "Melbourne.JPG",
  "Niagara, New York" => "Niagara.jpg",
  "New York, New York" => "Newyork.jpg",
  "Las Vegas, Nevada" => "Lasvegas.jpg",
  "Atlantic City, New Jersey" => "Newjersey.jpg"
);

    foreach ($places as $place => $image) {
      echo '<div class="place-container">';
      echo '<img src="' . $image . '" alt="' . $place . '">';
      echo '<p>' . $place . '</p>';
      echo '</div>';
    }
    ?>
</div>
</div>
<h1 id="art" style="color:#00bfff;"><strong>Art that I'm into (click the name to reveal their art)</strong></h1> <br>
<h2 style="color:white;">Visual Arts</h2> <br>
<div class="center-content">
  <p style="font-size: 30px; cursor: pointer;" onclick="toggleImages('jorgeJimenez')"><strong>Jorge Jimenez</strong></p> <br>
  <div class="image-container" id="jorgeJimenez">
    <img src="Jorge jimenez.jpg" width="600" height="400" alt="Batman comics Characters">
    <img src="jorge jimenez2.jpg" width="600" height="400" alt="Justice league charging">
    <img src="jorge jimenez3.jpeg" width="600" height="400" alt="Current Justice league vs future justice league">
  </div> <br>
  <p><cite>DC 2 page spread illustrations by </cite>Jorge Jimenez.</p> <br>
</div>

<div class="center-content">
  <p style="font-size: 30px; cursor: pointer;" onclick="toggleImages('scottWalter')"><strong>Scott Walter AKA Miniac</strong></p> <br>
  <div class="image-container" id="scottWalter">
    <img src="miniac1.jpg" width="600" height="700" alt="Eldar Miniature">
    <img src="miniac2.jpg" width="600" height="700" alt="Skeleton Warrior Miniature">
    <img src="miniac3.jpg" width="600" height="700" alt="Human Priestess Miniature">
  </div> <br>
  <p><cite>Miniatures painted by Scott Walter posted on his Instagram (<a href="https://www.instagram.com/miniacal_/" target="_blank">link</a>)</cite></p> <br>
</div>

<div class="center-content">
  <p style="font-size: 30px; cursor: pointer;" onclick="toggleImages('emilNystrom')"><strong>Emil Nyström AKA Squidmar miniatures</strong></p> <br>
  <div class="image-container" id="emilNystrom">
    <img src="squidmar1.jpg" width="600" height="700" alt="Orc Miniature">
    <img src="squidmar2.jpg" width="600" height="700" alt="Skeleton Warrior Miniature">
    <img src="squidmar3.jpg" width="600" height="700" alt="Human Priestess Miniature">
  </div> <br>
  <p><cite>Miniatures painted by Emil Nyström posted on his Instagram (<a href="https://www.instagram.com/squidmarminiatures/" target="_blank">link</a>)</cite></p>
</div> <br>

<div class="center-content">
  <p style="font-size: 30px; cursor: pointer;" onclick="this.innerHTML='Coming soon-ish'"><strong>Marc Angelo A. Nerez</strong></p> <br>
</div> <br>

<h1 id="music" style="color:#00bfff;"><strong>Music</strong></h1> <br>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Leave a comment on what you think of my website so far!!</h2> <br>
<div style="text-align: center;">
  <p><span class="error">* required field</span></p> <br>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Website: <input type="text" name="website" value="<?php echo $website;?>">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">  
  </form>
</div>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
<script>
  const musicians = [
    { name: 'Mayer Hawthorne', image: 'Mayerhawthorne.jpg' },
    { name: 'Bruno Mars', image: 'bruno.jpg' },
    { name: 'Mac Miller', image: 'macmiller.jpg' },
    { name: 'Tuxedo', image: 'tuxedo.jpg' },
    { name: '2pac', image: 'tupac.jpg' },
	{ name: 'Joyner Lucas', image: 'Joynerlucas.jpg' }
  ];

  function createMusicians() {
    const container = document.createElement('div');
    container.className = 'musicians-container';

    musicians.forEach(musician => {
      const musicianElement = document.createElement('div');
      musicianElement.className = 'musician';

      const imageElement = document.createElement('img');
      imageElement.src = musician.image;
      imageElement.alt = musician.name;

      const nameElement = document.createElement('p');
      nameElement.textContent = musician.name;

      musicianElement.appendChild(imageElement);
      musicianElement.appendChild(nameElement);
      container.appendChild(musicianElement);
    });

    document.body.appendChild(container);
  }

  document.addEventListener("DOMContentLoaded", function () {
    createMusicians();

    const navbar = document.querySelector('.navbar');
    const checkBtn = document.getElementById('check');

    checkBtn.addEventListener('change', function () {
      navbar.style.display = checkBtn.checked ? 'flex' : 'none';
    });

    document.querySelectorAll('nav ul li a').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
          if (targetId === 'profile-intro') {
            delayedAlert();
          }

          window.scrollTo({
            top: targetElement.offsetTop - navbar.offsetHeight,
            behavior: 'smooth'
          });
        }
      });
    });

    const d = new Date();
    document.getElementById("currentdate").innerHTML = d;

    let answer1 = "You";
    let answer2 = " are viewing my Website";
    let answer3 = ' at this specific date and time';

    document.getElementById("demo").innerHTML +=
      "<br>" + answer1 + answer2 + answer3;

  });

  function toggleImages(artistId) {
    var imageContainer = document.getElementById(artistId);
    if (imageContainer.style.display === 'none') {
      imageContainer.style.display = 'block';
    } else {
      imageContainer.style.display = 'none';
    }
  }

  var buttonPressed = false;

  function delayedAlert() {
    if (!buttonPressed) {
      setTimeout(function () {
        alert('Hello');
        buttonPressed = true;
      }, 3000);
    } else {
      alert('Hello again');
    }
  }
</script>
</body>
</html>