<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>EcoTreasure Admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
    :root {
      --green-dark: #003c1c;
      --green-light: #164b2f;
      --yellow-soft: #f9fbe7;
      --yellow: #ffeb3b;
      --white: #ffffff;
      --black: #1f1f1f;
      --grey-border: #ccc;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      
    }

    body {
      display: flex;
      min-height: 100vh;
      font-family: 'Poppins', sans-serif;
      position: relative;
    }

    /* Sidebar kiri */
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 250px; /* sesuaikan lebar sidebar */
        height: 100vh;
        background-color: var(--green-dark);
        font-family: 'Poppins', sans-serif;
        color: var(--white);
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* supaya footer di bawah */
        padding: 20px;
        box-sizing: border-box;
    }

    .logo {
      padding: 1.5rem;
      font-size: 1.5rem;
      font-weight: bold;
      text-align: center;
    }

    .profile {
      text-align: center;
      padding: 1.5rem 1rem 0.5rem;
    }

    .profile img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      border: 3px solid var(--yellow);
    }

    .profile-name {
      margin-top: 0.5rem;
      font-size: 1rem;
    }

    .profile-name a {
      color: var(--white);
      text-decoration: none;
    }

    .profile-name a:hover {
      color: var(--yellow);
    }

    nav {
      padding: 1rem;
    }

    nav ul {
      list-style: none;
    }

    nav li {
      margin: 1rem 0;
    }

    nav a {
      color: var(--white);
      text-decoration: none;
      font-weight: bold;
    }

    nav a:hover {
      color: var(--yellow);
    }

    footer {
      text-align: center;
      padding: 1rem;
      font-size: 0.9rem;
    }

    /* Konten utama */
    .main-content {
        margin-left: 250px; /* geser ke kanan sidebar fixed */
        padding: 2rem;
        min-height: 100vh;
        background-color: var(--white);
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;      
    }
  </style>

</head>
<body>

  <!-- Sidebar kiri -->
  <div class="sidebar">
    <div>
      <div class="logo">ECO.TREASURE</div>

      <div class="profile">
        <img src="../image/admin.jpg" alt="Foto Admin">
        <div class="profile-name">
          <a href="../pages/profile.php">Profile Admin</a>
        </div>
      </div>

      <nav>
        <ul>
          <li><a href="../pages/dashboard.php">Dashboard</a></li>
          <li><a href="../pages/pengguna.php">Data Pengguna</a></li>
          <li><a href="../pages/sampah.php">Data Sampah</a></li>
          <li><a href="../pages/poin.php">Data Poin</a></li>
          <!-- <li><a href="../pages/penukaran_poin.php">Penukaran Poin</a></li> -->
          <li><a href="../pages/pusat_admin.php">Pusat Admin</a></li>
          <li><a href="../login.php">LOGOUT</a></li>
        </ul>
      </nav>
    </div>

    <footer>
      &copy; 2025 EcoTreasure
    </footer>
  </div>

</body>
</html>