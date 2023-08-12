<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cybersecurity Career Portfolio</title>
  <link rel="stylesheet" href="css/style.css">
  <?php include 'functions.php'; ?>
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.csss">

</head>

<body>
  <div class="header">
    <canvas id="canv"></canvas>
  </div>

  <header id="navbar">

    <div id="logo">
      <div class="image-container">
        <img src="img/logonew.png" alt="Cover Image">
      </div>

    </div>
    <div class="hamburger-menu"></div>

    <nav id="navbar">
      <ul class="side-menu">


        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#reviews">Reviews</a></li>
      </ul>
    </nav>
  </header>

  <main>



    <section id="home">
      <div class="info">


        <h1>Guardian of Digital Frontiers</h1>
        <h3>Protect | Detect | Defend</h3>
        <button class="get-in-touch-btn" onclick="redirectToLogin()">Login</button>




      </div>
    </section>
    <section id="slide-show">
      <div class="container-background" style="background-image: url(img/slide.jpg);">
        <div class="slideshow-container">

          <h2 class="slide-title">Networks products integrate to elevate your cybersecurity</h2>
          <div class="mySlides fade">
            <div class="container-slide">
              <div class="container-img-info" style="background-image: url(img/banner3.jpg);">

                <div class="container-info">
                  <p class="title">Best in Class Capabilities</p>
                  <p class="tagline">To prevent, detect and effectively respond to all threats across every
                    vector—network, cloud.</p>
                  <a href=""><button>Read more</button></a>
                </div>
              </div>
            </div>
          </div>

          <div class="mySlides fade">
            <div class="container-slide">
              <div class="container-img-info" style="background-image: url(img/banner2.jpg);">
                <div class="container-img"></div>
                <div class="container-info">
                  <p class="title">Comprehensive Zero Trust</p>
                  <p class="tagline">To protect all users, applications and infrastructure in every environment—enabling
                    the Zero Trust Enterprise.</p>
                  <a href=""><button>Download now</button></a>
                </div>
              </div>
            </div>
          </div>
          <div class="mySlides fade">
            <div class="container-slide">
              <div class="container-img-info" style="background-image: url(img/banner01.jpg);">
                <div class="container-img"></div>
                <div class="container-info">
                  <p class="title">The Network Effect</p>
                  <p class="tagline">Crowdsourced from the industry’s largest footprint of network, endpoint & cloud
                    intelligence sources.</p>
                  <a href=""><button>Read more</button></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <!-- The dots/circles -->
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
      </div>
    </section>
    <section id="about">
      <canvas id="canv"> </canvas>
      <div class="container-about" style="background-image: url(img/about.jpg);">
        <div class="banner">
          <h1>....About....</h1>
        </div>
        <div class="mission">
          <div class="container">
            <h2>Our Mission</h2>
            <p>We are committed to protecting digital frontiers and ensuring the security of online systems.<br>
              Our goal is to safeguard against cyber threats, detect vulnerabilities, and defend against malicious
              attacks.
              With expertise in ethical hacking and a passion for cybersecurity, we strive to make the digital world a
              safer
              place for everyone.</p>
            <ul class="mm">
              <li>Protecting digital assets</li>
              <li>Detecting and mitigating cyber threats</li>
              <li>Providing secure solutions and strategies</li>
            </ul>
          </div>
        </div>
        <div class="team">
          <div class="container">
            <h2>Meet Me</h2>
            <div class="team-members">

              <div class="team-member">
                <img src="img/ss.png" alt="Team Member 2" />
                <h3>Charitha</h3>
                <p>Security Architect</p>
              </div>

            </div>
          </div>
        </div>
      </div>

    </section>

    <section id="projects">
      <div class="projects">
        <h2>My Projects</h2>
        <table>
          <thead>
            <tr>
              <th>Project Name</th>

              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="projects-table-body">
            <?php
            // Include database connection
            $conn = connectDatabase();

            // Fetch projects from the database
            $query = "SELECT id, title, description FROM project";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
              echo '<tr>' .
                '<form action="update_project.php" method="post">' .

                '<td class="project-label"> <input class="input-project" style="width: 100%; padding: 5px; background-color: transparent; border: none; border-bottom: 1px solid #ccc;" type="text" name="new-title" value="' . $row['title'] . '"> </td>' .
                '<td class="project-label"> <input class="input-project" style="width: 100%; padding: 5px; background-color: transparent; border: none; border-bottom: 1px solid #ccc;" type="text" name="new-description" value="' . $row['description'] . '"> </td>' .
                '<td>' .
                '<input type="hidden" name="id" value="' . $row['id'] . '">' .
                '<button type="submit" style="background-color: transparent; color: Green; border: none; font-size:17px; padding: 5px 10px; border-radius: 4px; cursor: pointer;">Update</button>' .

                '<a href="delete_project.php?id=' . $row['id'] . '">Delete</a>' .
                '</form>' .
                '</td>' .
                '</tr>';
            }
            ?>
          </tbody>
        </table>
      </div>
    </section>




    <section id="skills">
      <section class="skills">
        <div class="container">
          <h2>....Skills....</h2>
          <div class="skills-wrapper">
            <div class="wrapper">

              <ul class="carousel">
                <li class="card">

                  <div class="skill">
                    <h3>Cyber Security Tools</h3>
                  </div>
                </li>
                <li class="card">
                  <div class="skill">
                    <h3>Vulnerability Assessments</h3>
                  </div>
                </li>
                <li class="card">

                  <div class="skill">
                    <h3>Incident Response</h3>
                  </div>
                </li>
                <li class="card">
                  <div class="skill">
                    <h3>Security Audits</h3>
                  </div>
                </li>
                <li class="card">

                  <div class="skill">
                    <h3>Security Training</h3>
                  </div>
                </li>
                <li class="card">
                  <div class="skill">
                    <h3>Penetration Testing</h3>
                  </div>

                </li>
              </ul>

            </div>
          </div>

          <h2>....Tools....</h2>
          <div class="tools-wrapper">
            <div class="wrapper">

              <ul class="carousel">
                <li class="card">

                  <div class="skill">
                    <h3>Nessus</h3>
                  </div>
                </li>
                <li class="card">
                  <div class="skill">
                    <h3>Wireshark</h3>
                  </div>
                </li>
                <li class="card">

                  <div class="skill">
                    <h3>Metasploit Framework</h3>

                  </div>
                </li>
                <li class="card">
                  <div class="skill">
                    <h3>Snort</h3>

                  </div>
                </li>
                <li class="card">

                  <div class="skill">
                    <h3>Burp Suite</h3>

                  </div>
                </li>
                <li class="card">
                  <div class="skill">
                    <h3>Splunk</h3>

                  </div>

                </li>

                <li class="card">
                  <div class="skill">
                    <h3>OpenVAS</h3>

                  </div>

                </li>
                <li class="card">
                  <div class="skill">
                    <h3>McAfee Endpoint Security</h3>

                  </div>

                </li>
                <li class="card">
                  <div class="skill">
                    <h3>Cisco Firepower</h3>

                  </div>

                </li>


                <li class="card">
                  <div class="skill">
                    <h3>QualysGuard</h3>
                  </div>
                </li>
                <li class="card">
                  <div class="skill">
                    <h3>Acunetix</h3>
                  </div>
                </li>
                <li class="card">
                  <div class="skill">
                    <h3>Security Onion</h3>
                  </div>
                </li>
                <li class="card">
                  <div class="skill">
                    <h3>Core Impact</h3>
                  </div>
                </li>
                <li class="card">
                  <div class="skill">
                    <h3>Sn1per</h3>
                  </div>
                </li>
              </ul>

            </div>
          </div>

      </section>
    </section>






    <section id="contact">
      <div class="contact">
        <h2>Meet with us</h2>
        <p>Contact us today. We want to meet with you to help start securing your organization for a safer tomorrow.</p>
        <form id="contact-form" action="" method="post">
          <input type="text" id="fname" name="fname" placeholder="First name" required>
          <span id="fname-error" class="error"></span>

          <input type="text" id="lname" name="lname" placeholder="Last name" required>
          <span id="lname-error" class="error"></span>

          <input type="email" id="email" name="email" placeholder="Business email" required>
          <span id="email-error" class="error"></span>

          <input type="text" id="cname" name="cname" placeholder="Company name" required>
          <span id="cname-error" class="error"></span>

          <input type="tel" id="phone" name="phone" placeholder="Phone" required>
          <span id="phone-error" class="error"></span>

          <input type="text" id="country" name="country" placeholder="Country" required>
          <span id="country-error" class="error"></span>

          <textarea id="message" name="message" placeholder="Message" required></textarea>
          <span id="message-error" class="error"></span>

          <button type="submit" name="submit" value="submit">Send Message</button>
        </form>
        <?php
        session_start();
        contactprocessForm();
        session_destroy(); ?>
      </div>
    </section>

    <section id="reviews">

      <div class="container-reviews">



        <h2>
          <center>Add a Review</center>
        </h2>

        <form method="post" action="">
          <div class="review-stars">
            <div class="review-stars">
              <input type="radio" name="rating" id="star5" value="5" />
              <label for="star5"></label>
              <input type="radio" name="rating" id="star4" value="4" />
              <label for="star4"></label>
              <input type="radio" name="rating" id="star3" value="3" />
              <label for="star3"></label>
              <input type="radio" name="rating" id="star2" value="2" />
              <label for="star2"></label>
              <input type="radio" name="rating" id="star1" value="1" />
              <label for="star1"></label>
            </div>
          </div>
          <label for="name">Your Name:</label>
          <input type="text" name="name" required>
          <label for="review">Your Review:</label>
          <textarea name="review" required></textarea>
          <input type="submit" value="Submit Review">
        </form>

        <?php


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $conn = connectDatabase();
          $rating = $_POST["rating"];
          $name = $_POST["name"];
          $review = $_POST["review"];

          // Insert the data into the database
          $sql = "INSERT INTO reviews (name, review, rating) VALUES ('$name', '$review', '$rating')";

          if ($conn->query($sql) === TRUE) {

          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
        }
        ?>


        <h2>Reviews</h2>
        <div id="reviews-container"></div>
        <div id="review-container">
          <?php
          // Assuming you have already established a database connection
          $conn = connectDatabase();
          $sql = "SELECT name, review, rating, created_at FROM reviews";
          $result = $conn->query($sql);


          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $name = $row["name"];
              $review = $row["review"];
              $rating = $row["rating"];
              $created_at = $row["created_at"];

              // Display review and star rating
              echo "<div class='review'>";
              echo "<h3>$name</h3>";

              // Display star rating using Font Awesome icons
              echo "<div class='rating' style='margin-left: 70%;'>Rating: ";
              for ($i = 1; $i <= 5; $i++) {
                if ($i <= $rating) {
                  echo "<ion-icon name='star'></ion-icon> ";
                } else {
                  echo "<ion-icon name='star-outline'></ion-icon>";
                }
              }
              echo "</div>";

              echo "<p>Review: $review</p>";
              echo "<br>";
              echo "<p>Posted on: $created_at</p>";
              echo "</div>";
            }
          } else {
            echo "No reviews found.";
          }
          ?>
        </div>
      </div>
    </section>

  </main>

  <footer>
    <!-- Social media icons and contact information -->
    <div class="social-media">
      <a href="#"><img src="img/facebook.png" alt="Facebook"></a>
      <a href="#"><img src="img/twitter.png" alt="Twitter"></a>
      <a href="#"><img src="img/instagram.png" alt="Instagram"></a>
    </div>
    <p>Contact information: charitha@cyber.com</p>
  </footer>
  <script src="js/script.js"></script>

  <script>
    // Optional: Display the selected rating
    const stars = document.querySelectorAll('.review-stars input[type="radio"]');
    stars.forEach(star => {
      star.addEventListener('change', () => {
        const selectedRating = star.value;
        console.log(`User selected rating: ${selectedRating}`);
      });
    });

  </script>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>