<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Video Background Example</title>
  <style>
    /* Background video ko full screen me lane ke liye */
    .background-video {
      position: fixed;
      right: 0;
      bottom: 0;
      min-width: 100%;
      min-height: 100%;
      z-index: -1; /* content ke peeche rahe */
      object-fit: cover; /* video ko stretch ya cut karke poore background me fit karta hai */
    }

    /* Page content */
    .content {
      position: relative;
      z-index: 1;
      color: white;
      text-align: center;
      padding-top: 20%;
      font-family: Arial, sans-serif;
    }
  </style>
</head>
<body>

  <!-- Background video -->
  <video autoplay muted loop class="background-video">
    <source src="your-video.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>

  <!-- Foreground content -->
  <div class="content">
    <h1>Welcome to My Website</h1>
    <p>Background me video chal raha hai ✨</p>
  </div>

</body>
</html>
