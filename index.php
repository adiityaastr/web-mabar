<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komunitas Gamer - Beranda</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href="index.php">
                <i class="fas fa-gamepad"></i>
                <span>GamerHub</span>
            </a>
        </div>
        <button class="menu-toggle" id="menuToggle">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-links" id="navLinks">
            <li><a href="index.php" class="active">Beranda</a></li>
            <li><a href="anggota.php">Profil Pemain</a></li>
            <li><a href="jadwal.php">Jadwal</a></li>
            <li><a href="tournament_registrations.php">Daftar Turnamen</a></li>
        </ul>
    </nav>
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <div class="swiper video-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <video autoplay muted loop>
                    <source src="videos/valorant.mp4?v=<?php echo time(); ?>" type="video/mp4">
                </video>
                <div class="slide-content">
                    <a href="anggota.php" class="cta-button">Gabung Sekarang</a>
                    <h2>Valorant</h2>
                    <p>Shooter Taktikal 5v5 yang Menantang</p>
                    <div class="slide-features">
                        <span><i class="fas fa-users"></i> 5v5 Team Tactics</span>
                        <span><i class="fas fa-crosshairs"></i> Precise Gunplay</span>
                        <span><i class="fas fa-magic"></i> Unique Abilities</span>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <video autoplay muted loop>
                    <source src="videos/overwatch2.mp4?v=<?php echo time(); ?>" type="video/mp4">
                </video>
                <div class="slide-content">
                    <a href="anggota.php" class="cta-button">Gabung Sekarang</a>
                    <h2>Overwatch 2</h2>
                    <p>Hero Shooter Berbasis Tim yang Dinamis</p>
                    <div class="slide-features">
                        <span><i class="fas fa-users"></i> 5v5 Team Combat</span>
                        <span><i class="fas fa-user-ninja"></i> Unique Heroes</span>
                        <span><i class="fas fa-sync"></i> Dynamic Roles</span>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <video autoplay muted loop>
                    <source src="videos/marvelrivals.mp4?v=<?php echo time(); ?>" type="video/mp4">
                </video>
                <div class="slide-content">
                    <a href="anggota.php" class="cta-button">Gabung Sekarang</a>
                    <h2>Marvel Rivals</h2>
                    <p>Pertarungan Tim Superhero yang Epik</p>
                    <div class="slide-features">
                        <span><i class="fas fa-mask"></i> Marvel Heroes</span>
                        <span><i class="fas fa-bolt"></i> Super Powers</span>
                        <span><i class="fas fa-handshake"></i> Team Synergy</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <main class="container">
        <?php if (isset($_SESSION['registration_success'])): ?>
        <div class="success-message">
            <i class="fas fa-check-circle"></i>
            <p>Registrasi turnamen berhasil! Tim Anda telah terdaftar.</p>
        </div>
        <?php unset($_SESSION['registration_success']); endif; ?>

        <section class="about-section">
            <h2>Tentang Komunitas Kami</h2>
            <p>GamerHub adalah komunitas penuh semangat bagi para gamer yang suka bermain bersama. Apapun genre favoritmu, MOBA, FPS, atau RPG, kamu pasti akan menemukan teman mabar yang cocok di sini!</p>
        </section>

        <section class="features">
            <div class="feature-card">
                <i class="fas fa-users"></i>
                <h3>Cari Pemain</h3>
                <p>Terhubung dengan gamer lain dan bentuk tim impianmu</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-calendar-alt"></i>
                <h3>Atur Jadwal Main</h3>
                <p>Rencanakan sesi mabar dengan mudah</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-trophy"></i>
                <h3>Kompetisi Bareng</h3>
                <p>Ikuti turnamen dan raih peringkat terbaik</p>
            </div>
        </section>

        <section class="games-showcase">
            <h2 class="section-title">Game Unggulan</h2>
            <div class="games-grid">
                <a href="https://playvalorant.com/id-id/" class="game-card-link">
                    <div class="game-card">
                        <div class="game-image">
                            <img src="images/valorant.jpg" alt="Valorant">
                        </div>
                        <div class="game-info">
                            <h3>Valorant</h3>
                            <p>Shooter Taktikal 5v5</p>
                            <div class="game-stats">
                                <span><i class="fas fa-users"></i> 100+ Pemain</span>
                                <span><i class="fas fa-clock"></i> Event Harian</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://overwatch.blizzard.com/en-us/" class="game-card-link">
                    <div class="game-card">
                        <div class="game-image">
                            <img src="images/overwatch2.jpg" alt="Overwatch 2">
                        </div>
                        <div class="game-info">
                            <h3>Overwatch 2</h3>
                            <p>Hero Shooter Tim</p>
                            <div class="game-stats">
                                <span><i class="fas fa-users"></i> 80+ Pemain</span>
                                <span><i class="fas fa-clock"></i> Turnamen Mingguan</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://www.marvelrivals.com/" class="game-card-link">
                    <div class="game-card">
                        <div class="game-image">
                            <img src="images/marvelrivals.jpg" alt="Marvel Rivals">
                        </div>
                        <div class="game-info">
                            <h3>Marvel Rivals</h3>
                            <p>Pertarungan Tim Superhero</p>
                            <div class="game-stats">
                                <span><i class="fas fa-users"></i> 50+ Pemain</span>
                                <span><i class="fas fa-clock"></i> Segera Hadir</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <section class="community-stats">
            <div class="stat-card">
                <i class="fas fa-users"></i>
                <h3>500+</h3>
                <p>Member Aktif</p>
            </div>
            <div class="stat-card">
                <i class="fas fa-gamepad"></i>
                <h3>3</h3>
                <p>Game Unggulan</p>
            </div>
            <div class="stat-card">
                <i class="fas fa-trophy"></i>
                <h3>20+</h3>
                <p>Turnamen Dimenangkan</p>
            </div>
            <div class="stat-card">
                <i class="fas fa-calendar-check"></i>
                <h3>100+</h3>
                <p>Event Bulanan</p>
            </div>
        </section>

        <section class="upcoming-events">
            <h2 class="section-title">Event Mendatang</h2>
            <div class="events-grid">
                <div class="event-card">
                    <div class="event-date">
                        <span class="day">15</span>
                        <span class="month">Mar</span>
                    </div>
                    <div class="event-details">
                        <h3>Turnamen Valorant</h3>
                        <p><i class="fas fa-clock"></i> 19:00 WIB</p>
                        <p><i class="fas fa-users"></i> 16 Tim</p>
                        <a href="register_tournament.php?id=valorant" class="btn-register">Daftar Sekarang</a>
                    </div>
                </div>
                <div class="event-card">
                    <div class="event-date">
                        <span class="day">20</span>
                        <span class="month">Mar</span>
                    </div>
                    <div class="event-details">
                        <h3>Scrim Overwatch 2</h3>
                        <p><i class="fas fa-clock"></i> 20:00 WIB</p>
                        <p><i class="fas fa-users"></i> 8 Tim</p>
                        <a href="register_tournament.php?id=overwatch" class="btn-register">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials">
            <h2 class="section-title">Apa Kata Member Kami</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"GamerHub membantu saya menemukan teman mabar yang seru dan meningkatkan skill bermain saya!"</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=John" alt="User Avatar">
                        <div class="author-info">
                            <h4>John Doe</h4>
                            <p>Pemain Valorant</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"Komunitasnya sangat suportif dan turnamennya selalu terorganisir dengan baik!"</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Sarah" alt="User Avatar">
                        <div class="author-info">
                            <h4>Sarah Smith</h4>
                            <p>Pemain Overwatch 2</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 GamerHub Community. Dibuat oleh Muhamad Aditya Saoutra | 411231139</p>
            <div class="social-links">
                <a href="#"><i class="fab fa-discord"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.video-slider', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        // Mobile Navigation
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menuToggle');
            const navLinks = document.getElementById('navLinks');
            const sidebarOverlay = document.getElementById('sidebarOverlay');

            function toggleSidebar() {
                navLinks.classList.toggle('active');
                sidebarOverlay.classList.toggle('active');
                document.body.style.overflow = navLinks.classList.contains('active') ? 'hidden' : '';
            }

            if (menuToggle) {
                menuToggle.addEventListener('click', toggleSidebar);
            }
            
            if (sidebarOverlay) {
                sidebarOverlay.addEventListener('click', toggleSidebar);
            }

            // Close sidebar when clicking a link
            document.querySelectorAll('.nav-links a').forEach(link => {
                link.addEventListener('click', () => {
                    if (navLinks.classList.contains('active')) {
                        toggleSidebar();
                    }
                });
            });
        });
    </script>
</body>
</html> 