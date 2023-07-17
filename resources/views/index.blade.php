<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website Title</title>
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <section class="slider">
    <img src="path_to_your_image_1.jpg" alt="Slider Image 1" class="slider-image">
    <img src="path_to_your_image_2.jpg" alt="Slider Image 2" class="slider-image">
    <img src="path_to_your_image_3.jpg" alt="Slider Image 3" class="slider-image">
    <div class="slider-layer">
      <h2>Welcome to our Website</h2>
      <p>Discover the power of comprehensive digital marketing</p>
    </div>
  </section>

  <section class="content">
    <div class="container">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam gravida maximus turpis, at commodo purus vehicula
        a. Phasellus id ex vel orci tempor varius sed sed sapien. Mauris ac fermentum lorem, at tempor orci. Nulla facilisi.
        Curabitur tristique semper nunc, sed faucibus justo rutrum et. Donec vitae est vel velit facilisis bibendum. Sed
        congue risus turpis, sit amet suscipit nisl dictum nec. Cras tempor tortor a ligula feugiat, id euismod mauris
        consectetur. Aenean rutrum convallis mi vitae mattis. Vestibulum vitae congue nisl.
      </p>

      <!-- Your 800-word paragraph about the importance of a comprehensive digital marketing plan goes here -->
      <p>
        (800-word paragraph goes here)
      </p>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
      <p>&copy; 2023 Your Website. All rights reserved.</p>
    </div>
  </footer>

  <script src="{{ asset('slider.js') }}"></script>
</body>

</html>
