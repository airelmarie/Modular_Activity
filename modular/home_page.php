<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Explore the World</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: "Poppins", sans-serif;
      background-color: #f4f9fc;
      color: #333;
    }

    header {
      background-color: #0077b6;
      color: white;
      text-align: center;
      padding: 60px 20px;
    }

    header h1 {
      font-size: 55px;
      letter-spacing: 1px;
      margin-bottom: 10px;
    }

    header p {
      font-size: 20px;
      color: #e0f7fa;
    }

    nav {
      float: left;
      width: 25%;
      background-color: #ffffff;
      padding: 30px;
      box-shadow: 2px 0 8px rgba(0, 0, 0, 0.1);
      min-height: 500px;
    }

    nav ul {
      list-style-type: none;
    }

    nav ul li {
      margin: 15px 0;
    }

    nav ul li a {
      display: block;
      text-decoration: none;
      color: #0077b6;
      font-size: 18px;
      font-weight: 500;
      padding: 10px 14px;
      border-radius: 6px;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    nav ul li a:hover {
      background-color: #0077b6;
      color: white;
    }

    article {
      float: left;
      width: 75%;
      padding: 40px;
      background-color: #e9f3f9;
      min-height: 500px;
    }

    article h2 {
      color: #023e8a;
      font-size: 28px;
      margin-bottom: 15px;
    }

    article h1 {
      color: #02070eff;
      font-size: 40px;
      margin-bottom: 15px;
    }

    article p {
      font-size: 20px;
      line-height: 2.0;
      color: #ffffff;
      margin-top: 15px;
      text-shadow: 
                  2px 2px 12px rgba(0, 0, 0, 0.9),
                  0 0 20px rgba(0, 0, 0, 0.8);
}



    footer {
      clear: both;
      background-color: #023e8a;
      color: white;
      text-align: center;
      padding: 15px;
      font-size: 16px;
      margin-top: 30px;
    }
  </style>
</head>
<body>

  <header>
    <h1>Explore the World</h1>
    <p>Discover new cities, adventures, and experiences</p>
  </header>

  <section>
    <nav>
      <ul>
        <li><a href="home_page.php?page=london">London</a></li>
        <li><a href="home_page.php?page=paris">Paris</a></li>
        <li><a href="home_page.php?page=tokyo">Tokyo</a></li>
      </ul>
    </nav>

    <article>
      <?php
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
        switch ($page) {
          case 'london':
            include 'modules/london.php';
            break;
          case 'paris':
            include 'modules/paris.php';
            break;
          case 'tokyo':
            include 'modules/tokyo.php';
            break;
        }
      } else {
        echo "<h2>Welcome Traveler!</h2>";
        echo "<p>Select a city on the left to start exploring your next destination. Adventure awaits!</p>";
      }
      ?>
    </article>
  </section>

  <footer>
    <p>© 2025 TravelNow | Designed for your next adventure ✈️</p>
  </footer>

</body>
</html>
