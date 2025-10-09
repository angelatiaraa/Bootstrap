<?php
include'koneksi.php'
?>


<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GIRLSPIT</title>

    <!-- memanggil css local -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="php.css" rel="stylesheet">

    <!-- memanggil bootstrap local -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>



  <body>
    <!-- header -->
   <nav class="navbar navbar-expand-lg">
    <div class="container-fluid" style="padding-top: 10px;">
      <a class="navbar-brand">
        <img src="img/gpitlogo.png" alt="GIRLSPIT Logo" style="height:60px;">
      </a>

      <!-- Tombol Burger -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon navbar-dark"></span>
      </button>

      <!-- Menu Burger -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#home">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#news">NEWS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#album">ALBUM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">ABOUT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- carousel -->
  <div id="home">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="padding-top: 50px;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/grgang1 (1).jpg" class="d-block w-100" alt="foto1">
            <div class="carousel-caption d-none d-md-block">
              <h3>GRRRL GANG</h3>
            </div>
        </div>
        <div class="carousel-item">
          <img src="img/gahbm1.jpg" class="d-block w-100" alt="foto2">
            <div class="carousel-caption d-none d-md-block">
              <h3>GIRL AND HER BADMOOD</h3>
            </div>
        </div>
        <div class="carousel-item">
          <img src="img/deedare (1).jpg" class="d-block w-100" alt="foto3">
            <div class="carousel-caption d-none d-md-block">
              <h3>THE DARE</h3>
            </div>
        </div>
        <div class="carousel-item">
          <img src="img/litmasc (2) (1).jpg" class="d-block w-100" alt="foto4">
            <div class="carousel-caption d-none d-md-block">
              <h3>LITTLE MASCARA</h3>
            </div>
        </div>
        <div class="carousel-item">
          <img src="img/FZDAZE.jpg" class="d-block w-100" alt="foto5">
            <div class="carousel-caption d-none d-md-block">
              <h3>FAZERDAZE</h3>
            </div>
        </div>
      </div>


      <!-- button kanan kiri -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>



  <!-- Card 1 -->
    <div id="news">
  <div class="bagian2">
    <?php
    // Query ambil data news dari tabel 'news'
    $query = "SELECT * FROM news ORDER BY id ASC";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        while ($news = $result->fetch_assoc()) {
            echo '<div class="card bg-dark text-white mb-3">';
            echo '<img src="img/' . htmlspecialchars($news['image']) . '" class="card-img" alt="photocard">';
            echo '<div class="card-img-overlay">';
            echo '<h3 class="card-title">' . htmlspecialchars($news['title']) . '</h3>';
            echo '<p>' . nl2br(htmlspecialchars($news['deskripsi'])) . '</p>';
            echo '<a href="' . htmlspecialchars($news['link']) . '" class="card-link" target="_blank">' . htmlspecialchars($news['linkname']) . '</a>';
            echo '<p>' . nl2br(htmlspecialchars($news['lastup'])) . '</p>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "<p>Tidak ada berita.</p>";
    }
    ?>
  </div>
</div>



<!-- Bagian ALBUM -->
<div id="album">
  <div class="head-released">
    <h3>Listen ON</h3>
  </div>

    <div class="container-fluid py-4">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3">
        <?php
        // Query ambil data album dari tabel 'album'
        $query = "SELECT * FROM album ORDER BY id ASC";
        $result = $conn->query($query);

        if ($result && $result->num_rows > 0) {
            while ($album = $result->fetch_assoc()) {
                echo '<div class="col">';
                echo '<div class="card h-100">';
                echo '<img src="img/' . htmlspecialchars($album['albumpic']) . '" class="card-img-top" alt="photoalbum">';
                echo '<div class="card-body p-2">';
                echo '<h5 class="card-title2 mb-1">' . htmlspecialchars($album['albums']) . '</h5>';
                echo '<a href="' . htmlspecialchars($album['linkspotify']) . '" class="card-link2" target="_blank">Spotify</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "<p>Tidak ada album.</p>";
        }
        ?>
      </div>
    </div>

    <!-- Grafik Pendengar -->
      <div class="container my-5">
        <h4 class="mb-4" style="color: whitesmoke;">Top Listeners (Spotify)</h4>
        <canvas id="listenerChart" width="400" height="200"></canvas>
      </div>
 </div>




<!-- bagian contact -->
  <div id="contact">

    <!-- about -->
    <div class="about">
      <h4>ABOUT</h4>
      <p class="about-description"> Girlspit community is a safe place for everyone who loves to come to a concert, gigs, or any music show, 
      especially for girls who wants to feel the joy and comfort while attend
      the music show. This community also a place to introduce girl band or whatever it is so that u don't have
      to dive in to the spotify to search for the music you like. Also we give update about concert or gigs around
      so you can choose the event you like. We offers some service to make your experience to go to concert become
      more easy and fast. You can also join the community and come to a concert with girls in this community. Let's 
      enjoy and have fun #sekitarkuaman. 
      </p>
    </div>

    <!-- Form Pendaftaran -->
      <div id="register" class="container my-4">
  <h4 class="container-form mb-3">Join the GIRLSPIT Community</h4>
  <form id="registerForm">
    <div class="container-menu mb-3">
      <label for="name" class="form-label">Full Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Your full name" required>
    </div>

    <div class="container-menu mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
    </div>

    <div class="container-menu mb-3">
      <label for="number" class="form-label">Phone number</label>
      <input type="text" class="form-control" id="number" name="phone" placeholder="+628xxxxxxxx" required>
    </div>

    <div class="container-menu mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="agree" name="agree" required>
      <label class="form-check-label" for="agree">I agree to get invited to the community</label>
    </div>

    <button type="submit" class="btn btn-dark">Join Now</button>
  </form>

  <!-- Tempat tampil pesan -->
  <div id="message" style="margin-top:20px;"></div>
</div>



      <div class="add-band">
        <h4>Calling New Band</h4>
        <p class="add-band-description"> If any of u have a girl band or anything, feel free to contact us through link bellow and
          we will post your band in our website #freeforeveryone. 
        </p>
      </div>

      <!-- Contact -->
      <!-- Untuk simbol instagram twitter dan bola dunia -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

      <footer class="container-Contact py-3">
    
      <!-- Teks Footer -->
      <div>
        &copy; 2025 GIRLSPIT
      </div>

      <!-- Ikon dan sosmed -->
      <div>
        <a href="https://www.instagram.com/gahbm_____/" class="text-white me-3" target="https://www.instagram.com/gahbm_____/">
          <i class="fab fa-instagram fa-lg"></i>@gahbm_____
        </a>
        <a href="https://x.com/gahbm_____" class="text-white me-3" target="https://x.com/gahbm_____">
          <i class="fab fa-twitter fa-lg"></i>@gahbm_____
        </a>
        <a href="file:///D:/MHS-3A1/bootstrap1/bootstrap.html#" class="text-white" target="file:///D:/MHS-3A1/bootstrap1/bootstrap.html#">
          <i class="fas fa-globe fa-lg"></i>GIRLSPIT
        </a>
      </div>
    </footer>
  </div>


<script>
document.addEventListener("DOMContentLoaded", function () {
  const sections = document.querySelectorAll("div[id]");
  const navLinks = document.querySelectorAll(".nav-link");

  function onScroll() {
    let scrollPos = window.scrollY + 100;

    sections.forEach(section => {
      if (!section.id) return;

      const top = section.offsetTop;
      const height = section.offsetHeight;

      if (scrollPos >= top && scrollPos < top + height) {
        navLinks.forEach(link => {
          link.classList.remove("active");
          if (link.getAttribute("href") === `#${section.id}`) {
            link.classList.add("active");
          }
        });
      }
    });
  }

  window.addEventListener("scroll", onScroll);
  onScroll(); // jalankan sekali saat load supaya yang pertama juga aktif
});

</script>


<!-- Konfigurasi Chart -->
<!-- Script untuk Chart.js dinamis -->
<script>
  let listenerChart;  // variabel global untuk chart

  function createChart(initialData) {
    const ctx = document.getElementById('listenerChart').getContext('2d');
    listenerChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: initialData.labels || [],
        datasets: [{
          label: 'Monthly Listeners (Spotify)',
          data: initialData.data || [],
          backgroundColor: initialData.chartcolors || [],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { display: false },
          title: {
            display: true,
            text: 'Spotify Monthly Listeners',
            color: 'whitesmoke'
          }
        },
        scales: {
          y: {
            beginAtZero: true,
            ticks: {
              stepSize: 1000
            }
          }
        }
      }
    });
  }

  function updateChart() {
    fetch('chart.php?t=' + new Date().getTime()) // cache buster supaya data selalu fresh
      .then(response => response.json())
      .then(chartData => {
        if (!listenerChart) {
          // buat chart jika belum dibuat
          createChart(chartData);
        } else {
          // update data chart yang sudah dibuat
          listenerChart.data.labels = chartData.labels;
          listenerChart.data.datasets[0].data = chartData.data;
          listenerChart.data.datasets[0].backgroundColor = chartData.chartcolors;
          listenerChart.update();
        }
      })
      .catch(err => {
        console.error("Gagal memuat data chart:", err);
      });
  }

  // Panggil update pertama kali untuk inisialisasi chart
  updateChart();

  // Update chart setiap 1 detik
  setInterval(updateChart, 1000);
</script>

<script>
  document.getElementById('registerForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const form = this;
    const formData = new FormData(form);
    const messageEl = document.getElementById('message');

    fetch('member.php', {
      method: 'POST',
      body: formData
    })
    .then(res => res.text())
    .then(data => {
      if (data.toLowerCase().includes('data has been saved!')) {
        messageEl.className = 'success';
        messageEl.style.color = '#02fc17ff';
        messageEl.style.opacity = '1';
        messageEl.style.visibility = 'visible';
        form.reset();
      } else {
        messageEl.className = 'error';
        messageEl.style.color = '#fc0202';
        messageEl.style.opacity = '1';
        messageEl.style.visibility = 'visible';
      }
      messageEl.innerText = data;
    })
    .catch(() => {
      messageEl.className = 'error';
      messageEl.innerText = 'Terjadi kesalahan saat mengirim data.';
    });
  });
</script>


</body>
</html>