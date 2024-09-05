<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie Website</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  </head>
  <body>
    <header>
      <div class="logo">
        <img src='img/logo.jpg' alt="" />
      </div>
      <nav>
        <ul>
          <li class="dropdown">
            <a href="#" class="dropbtn">Ganere</a>
            <div class="dropdown-content">
              <a href="#">Horor</a>
              <a href="#">Romance</a>
              <a href="#">Comedy</a>
            </div>
          </li>
        </ul>
        <div class="hover">
          <input type="text" placeholder="Search" />
          <button type="button">Search</button>
          <a href="#">Watchlist</a>
          <a href="/singin">Sing in</a>
          <a href="/login">Login</a>
        </div>
      </nav>
    </header>

    <section class="hero">
      <div class="hero-content">
        <img src='img/Project Silence2.png' alt="Project Silence Poster" />
        <div class="hero-info">
          <h1>Project Silence</h1>
          <p>Genre : Action, Disaster <br>
            Casts : LEE Sun Kyun, JU Ji Hoon, KIM Hie Won, MOON Sung Geun, YE Su Jeong <br>
            Karena kondisi cuaca yang tiba-tiba memburuk, jarak pandang di Jembatan Bandara menjadi sangat terganggu, menyebabkan orang-orang terdampar dan berisiko jembatan runtuh akibat serangkaian tabrakan beruntun dan ledakan. Di tengah kekacauan tersebut, anjing "Echo", eksperimen militer "Project Silence"</p>
            <a href="/showmore"><button type="button" >Read More...</button></a>
        </div>
      </div>
    </section>

    <section class="favorites-Seleb">
      <h2>Most Favorite Indonesia Celebrity</h2>
      <div class="favorites-seleb-list">
        <div class="Seleb">
          <img src="img/iko.png" alt="Seleb 1" />
          <p>Iko Uwais</p>
        </div>
        <div class="Seleb">
          <img src="img/joeTasim.png" alt="Seleb 2" />
          <p>Joe Tasim</p>
        </div>
        <div class="Seleb">
          <img src="img/ario-bayu.png" alt="Seleb 3" />
          <p>Ario Bayu</p>
        </div>
        <div class="Seleb">
          <img src="img/yayan ruihan.png" alt="Seleb 4" />
          <p>Yayan Ruihan</p>
        </div>
      </div>
    </section>

    <section class="favorites">
      <h2>Most Favorites</h2>
      <div class="favorites-list">
        <div class="movie">
          <img src="img/deadpool.png" alt="Movie 1" />
          <p>Deadpool</p>
        </div>
        <div class="movie">
          <img src="img/Heartbreak Motel.png" alt="Movie 2" />
          <p>Heartbreak Motel</p>
        </div>
        <div class="movie">
          <img src="img/Sakaratul Maut.png" alt="Movie 3" />
          <p>Sakaratul Maut</p>
        </div>
        <div class="movie">
          <img src="img/Project Silence2.png" alt="movie 4" />
          <p>Project Silence</p>
        </div>
      </div>
    </section>
  </body>
</html>
