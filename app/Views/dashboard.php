<?php include 'header2.php'; ?>

<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">


<style>
  /* Ensure the header/navbar doesn't overlap */
  header {
    /* Add styles as needed for your header/navbar */
    height: 80px; /* Adjust this to match your header's height */
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 9999; /* Ensure it's on top */
    background-color: #fff; /* Match your header background color */
  }

  /* Set the video container to cover the entire viewport */
  .video-wrapper {
    width: 100%;
    height: calc(100vh - 80px); /* Adjust to subtract header height */
    overflow: hidden;
    position: relative; /* Keep content in document flow */
  }

  .video-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    clip-path: polygon(0 0, 100% 0, 100% 80%, 80% 100%, 20% 80%, 0 80%);
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
  }

  /* Centered image */
  .centered-image {
    position: absolute;
    margin-top: 5px;
    transform: translate(150%, 30%);
    max-width: 25%; /* Adjust size as needed */
    max-height: 40%; /* Adjust size as needed */
    z-index: 2; /* Ensure it's above the background image */
  }

  /* Text below the centered image */
  .image-text {
    margin-top: 5px; /* Adjust spacing */
    font-size: 18px; /* Adjust font size */
    font-weight: bold; /* Make text thicker */
    color: white; /* Change text color to white */
    position: absolute;
    top: 37%;
    left: 50%;
    transform: translateX(-50%);
    font-family: 'Orbitron', sans-serif; /* Apply Orbitron font to navbar links */
    z-index: 2; /* Ensure it's above the background image */
  }

  /* Content below the GIF */
  .content-below-gif {
    position: relative; /* Change to relative positioning */
    margin-top: 30px; /* Instead of absolute positioning */
    background-color: #fff; /* Match your desired background color */
    padding-bottom: 60px; /* Adjust this to create space for the footer */
  }

  .content-below-gif .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
    color: black;
    margin-top: 30px;
  }

  .content-below-gif h2 {
    font-size: 2em;
    margin-bottom: 15px;
  }

  .content-below-gif p {
    font-size: 1.2em;
    line-height: 1.6;
  }

  /* Initial opacity for the text */
.changing-text {
  opacity: 1;
  transition: opacity 0.5s ease-in-out; /* Smooth transition effect */
}

#changingText1,
#changingText2 {
  opacity: 1;
  transition: opacity 0.5s ease-in-out;
  font-size: 28px;
  font-family: 'Orbitron', sans-serif;
  text-shadow: 0 0 60px #5F9EA0, 0 0 120px #5F9EA0, 0 0 180px #5F9EA0, 0 0 240px #5F9EA0; /* Larger sky blue shadow */
  color: black;
}


#changingText2 {
  /* Other styles remain unchanged */
  font-size: 15px; /* Smaller font size for changingText2 */
  margin-bottom: 80px;
}

/* Your existing styles */

.content-wrapper {
  text-align: center;
}

.content-details {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 70px; /* Adjust as needed */
}

.image-container {
  width: 75%; /* Adjust the width of the container */
  float: left; /* Align the container to the left */
  margin-right: 20px; /* Add some space between the container and the text */
}

.image-container img {
  width: 100%; /* Make the image fill its container */
  height: auto; /* Maintain aspect ratio */
  display: block; /* Remove extra space under the image */
}

.text-container {
  width: 25%; /* Adjust width as needed */
}

.text-container p {
  margin-bottom: 10px;
}

h2 {
  font-family: 'Exo 2', sans-serif;
  font-weight: 700;
}

h3 {
  font-family: 'Orbitron', sans-serif;
  font-weight: 700;
}

p{
  font-family: 'Exo 2', sans-serif;
}

@media (max-width: 768px) {
  .content-details {
    flex-direction: column;
    align-items: stretch;
  }

  .image-container, .text-container {
    width: 100%;
  }
}

.container {
  max-width: 1200px; /* Adjust the maximum width */
  margin: 0 auto; /* Center the content horizontally */
  padding: 0 20px; /* Add padding to the sides */
}

.content-below-gif .container {
    /* Adjust the properties specific to the .container class */
    /* For instance, you can change the max-width or padding */
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }


  .image-container {
    width: 60%; /* Adjust the width to position the image further to the left */
    float: left;
    margin-right: 20px;
  }

  .image-container img {
    width: 100%; /* Make the image fill its container */
    height: auto;
    display: block;
  }

  /* Other styles for text containers */
  .text-container {
    width: 50%; /* Adjust the width for text */
  }

  /* Media query for responsive layout */
  @media (max-width: 768px) {
    .image-container,
    .text-container {
      width: 100%; /* Full width on smaller screens */
      float: none;
      margin-right: 0;
    }
  }

  .developers-section {
  margin: 0 auto;
  padding: 0 20px;
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.developer {
  flex: 0 0 25%; /* Each developer takes up 25% of the container */
  max-width: 25%; /* Limiting the width to 25% */
  margin-bottom: 20px;
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 40px;
}

.developer img {
  width: 200px;
  height: auto;
  display: block;
  margin-bottom: 10px;
  align-self: center; /* Center align the images */
}

.developer-group {
  display: flex;
  flex-wrap: nowrap; /* Prevent wrapping */
  justify-content: space-between;
  margin-bottom: 20px; /* Adjust margin between groups */
}


@media (max-width: 768px) {
  .developer-group {
    flex-direction: column;
    align-items: center; /* Align items (developers) in the center */
  }
}


.divider {
  background-color: #ccc;
  height: 1px;
  width: 100%;
  margin: 20px 0;
}

</style>


<!-- Hero Section -->
<div class="video-wrapper">
  <img src="<?= base_url('images/gif2.gif') ?>" alt="Gameplay Trailer">
  <img class="centered-image" src="<?= base_url('images/logo1.png') ?>" alt="Centered Image">
  <p class="image-text">Coming 2024</p>
</div>
<section class="content-below-gif" id = "comments">
  <div class="container">
  <div>
  <div id="changingText1">MY KIND OF COMFORT.</div>
  <br>
  <div id="changingText2">-RXL</div>
</div>
    <h2>&nbsp&nbsp&nbsp&nbspSTOP THE CELLS AT ALL COST</h2>
    <div class="content-details">
        <div class="image-container">
          <img src="<?= base_url('images/gun.png') ?>" alt="Game Image">
        </div>
        <div class="text-container">
        <p style="text-align: left; font-family: 'Exo 2', sans-serif; ">
        The game is a 3D Hack-and-Slash game where the goal is to eliminate the viruses or bacteria that are inside the human body. As Leuk, the player needs to eliminate all the bacteria that are inside the body by using the gun and the ammo is made of medicine capsule that can harm the viruses. As time progresses, the Viruses and Bacteria’s will become larger and powerful. You need to eliminate them and survive in the game in order for you to go to the next stage. If Leuk or Eryth dies, the game is over. The player can keep retrying the stages until you beat the game, finding tablet like in the medicine tablet will give you power ups for strength, defenses and infinite ammo for a short period amount of time.
</p>

        </div>
      </div>
  </div>
</section>

<div class="divider"></div>


<section class="developers-section" id="developers">
  <div class="container">
    <h2>The Developers</h2>
    <div class="developer-group">
      <div class="developer">
        <img src="<?= base_url('images/dev2.jpg') ?>" alt="Developer 1">
        <h3>Project Manager</h3>
        <p>Gulapa, Mark D.</p>
      </div>
      <div class="developer">
        <img src="<?= base_url('images/james2.png') ?>" alt="Developer 3">
        <h3>Programmer</h3>
        <p>Ganitano, James Errol M.</p>
      </div>
      <div class="developer">
        <img src="<?= base_url('images/developer1.png') ?>" alt="Developer 2">
        <h3>2D Artist</h3>
        <p>Tag-at, Roswell E.</p>
      </div>
    </div>
  </div>
</section>




<script>
const texts1 = ["FUN PLAYSTYLE.", "A UNIQUE EXPERIENCE.", "MUST TRY.", "ADDICTIVE.", "CAN'T STOP WONT STOP.", "HUH?", "WHAT A GAMEPLAY.", "INTERESTING CONCEPT."];
const texts2 = ["-ZEI", "-HAJI", "-SHINIPU", "-XAXA", "-LANCELOT", "-GABO", "-SUKUNA", "-RAWRIE"];
let index1 = 0;
let index2 = 0;

function changeTexts() {
  const text1 = document.getElementById("changingText1");
  const text2 = document.getElementById("changingText2");

  text1.classList.add("changing-text"); // Apply class for text style
  text2.classList.add("changing-text"); // Apply class for text style
  text1.classList.add("fade-out"); // Apply fade-out effect
  text2.classList.add("fade-out"); // Apply fade-out effect

  setTimeout(() => {
    text1.textContent = texts1[index1];
    text2.textContent = texts2[index2];

    text1.classList.remove("fade-out"); // Remove fade-out class to reveal the new text
    text2.classList.remove("fade-out"); // Remove fade-out class to reveal the new text

    index1 = (index1 + 1) % texts1.length;
    index2 = (index2 + 1) % texts2.length;

    changeTexts(); // Call the function recursively after 3 seconds
  }, 3000); // Change text every 3 seconds (3000ms)
}

changeTexts(); // Call the function to start the text change initially
</script>

<?php include 'footer.php'; ?>

