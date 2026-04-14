<?php
include 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us — MiniStore</title>

  <style>
    :root {
      --bg:black;
      --card:#ffffff;
      --text:#333333;
      --muted:#555555;
      --accent:#4a5568; /* dark gray for accents */
      --radius:12px;
      --max-width:900px;
      --shadow:0 4px 20px rgba(0,0,0,0.08);
      font-family: "Segoe UI", Roboto, Arial, sans-serif;
    }

    body {
      margin:0;
      background:var(--bg);
      color:var(--text);
    }

    .wrap {
      max-width:var(--max-width);
      margin:30px auto;
      padding:20px;
    }

    header {
      text-align:center;
      margin-bottom:30px;
    }
    header h1 {
      margin:0;
      font-size:28px;
      color:var(--accent);
    }
    header p {
      margin:8px 0 0 0;
      color:var(--muted);
      font-size:15px;
    }

    .card {
      background:var(--card);
      border-radius:var(--radius);
      padding:24px;
      box-shadow:var(--shadow);
      margin-bottom:24px;
    }

    h2 {
      font-size:18px;
      margin-top:0;
      margin-bottom:10px;
      color:var(--accent);
    }
    p, li {
      line-height:1.6;
      font-size:15px;
    }

    ul { margin:0 0 0 20px; padding:0 }

    /* Contact form */
    form {
      display:grid;
      gap:16px;
      margin-top:12px;
    }
    input, textarea {
      width:100%;
      padding:10px 12px;
      border:1px solid #ccc;
      border-radius:8px;
      font-size:14px;
      font-family:inherit;
    }
    textarea {
      min-height:100px;
      resize:vertical;
    }
    button {
      background:var(--accent);
      color:#fff;
      padding:12px 16px;
      border:none;
      border-radius:8px;
      font-weight:600;
      cursor:pointer;
      transition:background 0.3s ease;
    }
    button:hover {
      background:#2d3748; /* darker gray */
    }

    .social-links a {
      display:inline-block;
      margin-right:12px;
      color:var(--accent);
      text-decoration:none;
      font-weight:500;
    }
    .social-links a:hover {
      text-decoration:underline;
    }

    /* Responsive */
    @media (max-width:640px){
      .wrap { padding:12px }
    }
  </style>
</head>
<body>
  <div class="wrap">
    <header>
      <h1>Contact Us</h1>
      <p>We’d love to hear from you! Whether you have a question about our products, need support, or just want to share feedback.</p>
    </header>

    <div class="card">
      <h2>📍 Our Office</h2>
      <p><strong>MiniStore</strong><br/>
      Park Way, Cupertino, <br/>
      California, 95014,<br/>
      United States</p>
    </div>

    <div class="card">
      <h2>📞 Call Us</h2>
      <ul>
        <li>Customer Support : 000 800 100 9009</li>
        <li>Business Inquiries : 000 800 040 1977 </li>
      </ul>
    </div>

    <div class="card">
      <h2>📧 Email Us</h2>
      <ul>
        <li>General Inquiries: <a href="mailto:MiniStore@gmail.com">ministore@gmail.com</a></li>
      </ul>
    </div>

    <div class="card">
      <h2>🕒 Working Hours</h2>
      <p>
        Monday – Friday: 9:00 AM – 6:00 PM<br/>
        Saturday: 10:00 AM – 4:00 PM<br/>
        Sunday & Holidays: Closed
      </p>
    </div>

    <div class="card">
      <h2>📩 Get in Touch Online</h2>
      <form action="#" method="post">
        <input type="text" name="name" placeholder="Name" required/>
        <input type="email" name="email" placeholder="Email" required/>
        <input type="text" name="subject" placeholder="Subject"/>
        <textarea name="message" placeholder="Message" required></textarea>
        <button type="submit">Submit</button>
      </form>
    </div>

    <div class="card">
      <h2>🌐 Stay Connected</h2>
      <div class="social-links">
        <a href="https://www.facebook.com/apple/" target="_blank">Facebook</a>
        <a href="https://www.instagram.com/apple/" target="_blank">Instagram</a>
        <a href="https://x.com/apple/" target="_blank">Twitter/X</a>
        <a href="https://www.linkedin.com/company/apple/" target="_blank">LinkedIn</a>
      </div>
    </div>
  </div>
  <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>
