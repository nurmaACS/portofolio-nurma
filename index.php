<?php
$status = isset($_GET['status']) ? $_GET['status'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Personal Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      background-color: #ffe6f0;
      margin: 0;
      padding: 0;
      text-align: center;
    }

    .container {
      padding: 40px;
    }

    .profile-img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      border: 4px solid white;
      margin-bottom: 20px;
    }

    h1 {
      color: #e60073;
    }

    h2 {
      color: #6600cc;
      font-weight: normal;
    }

    .cards {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 30px;
    }

    .card {
      background: white;
      border-radius: 15px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      padding: 20px;
      margin: 10px;
      width: 180px;
      transition: 0.3s ease;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card p {
      font-weight: bold;
    }

    .card a {
      color: #e60073;
      text-decoration: none;
    }

    .highlight {
      margin-top: 30px;
      font-size: 16px;
    }

    .btn {
      margin-top: 20px;
      padding: 12px 30px;
      border: 2px solid #e60073;
      background: none;
      color: #e60073;
      font-weight: bold;
      border-radius: 10px;
      text-decoration: none;
      cursor: pointer;
    }

    .message-form {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-color: rgba(0,0,0,0.5);
      justify-content: center;
      align-items: center;
    }

    .form-box {
      background: white;
      padding: 30px;
      border-radius: 10px;
      width: 300px;
      text-align: left;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      padding: 10px 20px;
      background-color: #e60073;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .close-btn {
      background-color: #aaa;
      margin-left: 10px;
    }

    footer {
      background-color: #fcd6e6;
      padding: 20px;
      margin-top: 40px;
    }

    footer a {
      color: #cc0066;
      text-decoration: none;
    }

    .alert {
      margin-top: 20px;
      color: green;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <div class="container">
    <img src="profile.png" alt="Profile Picture" class="profile-img">
    <h1>My name is Nurma<br>Web Developer</h1>
    <h2>HEAD OF DESIGN STUDIO</h2>

    <div class="cards">
      <div class="card">
        <p>GRAPHIC DESIGN</p>
        <a href="#">MORE</a>
      </div>
      <div class="card">
        <p>WEB DESIGN</p>
        <a href="#">MORE</a>
      </div>
      <div class="card">
        <p>SOFTWARE</p>
        <a href="#">MORE</a>
      </div>
      <div class="card">
        <p>APPLICATION</p>
        <a href="#">MORE</a>
      </div>
    </div>

    <div class="highlight">
      I am happy to know you that 300+ projects done successfully!
    </div>

    <a href="#" class="btn" onclick="showForm()">SEND A MESSAGE</a>

    <?php if ($status == 'berhasil') : ?>
      <div class="alert">Pesan berhasil dikirim!</div>
    <?php endif; ?>
  </div>

  <div class="message-form" id="messageForm">
    <div class="form-box">
      <h3>Send a Message</h3>
      <form action="kirim_pesan.php" method="post">
        <input type="text" name="nama" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="pesan" placeholder="Your Message" rows="4" required></textarea>
        <button type="submit">SEND</button>
        <button type="button" onclick="hideForm()" class="close-btn">CLOSE</button>
      </form>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Nat Norton. All rights reserved.</p>
    <p>
      <a href="#">LinkedIn</a> | 
      <a href="#">Instagram</a> | 
      <a href="#">Email</a>
    </p>
  </footer>

  <script>
    function showForm() {
      document.getElementById('messageForm').style.display = 'flex';
    }

    function hideForm() {
      document.getElementById('messageForm').style.display = 'none';
    }
  </script>

</body>
</html>
