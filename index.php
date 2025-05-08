<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamer Community - Home</title>
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
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="anggota.php">Profile Pemain</a></li>
            <li><a href="jadwal.php">Jadwal</a></li>
            <li><a href="tournament_registrations.php">Daftar Turnamen</a></li>
        </ul>
    </nav>
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <div class="swiper video-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <video autoplay muted loop>
                    <source src="videos/valorant.mp4" type="video/mp4">
                </video>
                <div class="slide-content">
                    <h2>Valorant</h2>
                    <p>Strategic 5v5 Tactical Shooter</p>
                </div>
            </div>
            <div class="swiper-slide">
                <video autoplay muted loop>
                    <source src="videos/overwatch2.mp4" type="video/mp4">
                </video>
                <div class="slide-content">
                    <h2>Overwatch 2</h2>
                    <p>Team-Based Hero Shooter</p>
                </div>
            </div>
            <div class="swiper-slide">
                <video autoplay muted loop>
                    <source src="videos/marvelrivals.mp4" type="video/mp4">
                </video>
                <div class="slide-content">
                    <h2>Marvel Rivals</h2>
                    <p>Superhero Team Battle</p>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="slider-cta">
            <a href="anggota.php" class="cta-button">Join Now</a>
        </div>
    </div>

    <main class="container">
        <?php if (isset($_SESSION['registration_success'])): ?>
        <div class="success-message">
            <i class="fas fa-check-circle"></i>
            <p>Registrasi turnamen berhasil! Tim Anda telah terdaftar.</p>
        </div>
        <?php unset($_SESSION['registration_success']); endif; ?>

        <section class="about-section">
            <h2>About Our Community</h2>
            <p>GamerHub is a vibrant community of passionate gamers who love to play together. Whether you're into MOBA, FPS, or RPG games, you'll find your perfect match here!</p>
        </section>

        <section class="features">
            <div class="feature-card">
                <i class="fas fa-users"></i>
                <h3>Find Players</h3>
                <p>Connect with other gamers and build your dream team</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-calendar-alt"></i>
                <h3>Schedule Games</h3>
                <p>Plan your gaming sessions with ease</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-trophy"></i>
                <h3>Compete Together</h3>
                <p>Join tournaments and climb the ranks</p>
            </div>
        </section>

        <section class="games-showcase">
            <h2 class="section-title">Featured Games</h2>
            <div class="games-grid">
                <div class="game-card">
                    <div class="game-image">
                        <img src="images/valorant.png" alt="Valorant">
                    </div>
                    <div class="game-info">
                        <h3>Valorant</h3>
                        <p>5v5 Tactical Shooter</p>
                        <div class="game-stats">
                            <span><i class="fas fa-users"></i> 100+ Players</span>
                            <span><i class="fas fa-clock"></i> Daily Events</span>
                        </div>
                    </div>
                </div>
                <div class="game-card">
                    <div class="game-image">
                        <img src="images/overwatch2.png" alt="Overwatch 2">
                    </div>
                    <div class="game-info">
                        <h3>Overwatch 2</h3>
                        <p>Team-Based Hero Shooter</p>
                        <div class="game-stats">
                            <span><i class="fas fa-users"></i> 80+ Players</span>
                            <span><i class="fas fa-clock"></i> Weekly Tournaments</span>
                        </div>
                    </div>
                </div>
                <div class="game-card">
                    <div class="game-image">
                        <img src="images/marvelrivals.png" alt="Marvel Rivals">
                    </div>
                    <div class="game-info">
                        <h3>Marvel Rivals</h3>
                        <p>Superhero Team Battle</p>
                        <div class="game-stats">
                            <span><i class="fas fa-users"></i> 50+ Players</span>
                            <span><i class="fas fa-clock"></i> Coming Soon</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="community-stats">
            <div class="stat-card">
                <i class="fas fa-users"></i>
                <h3>500+</h3>
                <p>Active Members</p>
            </div>
            <div class="stat-card">
                <i class="fas fa-gamepad"></i>
                <h3>3</h3>
                <p>Featured Games</p>
            </div>
            <div class="stat-card">
                <i class="fas fa-trophy"></i>
                <h3>20+</h3>
                <p>Tournaments Won</p>
            </div>
            <div class="stat-card">
                <i class="fas fa-calendar-check"></i>
                <h3>100+</h3>
                <p>Events Monthly</p>
            </div>
        </section>

        <section class="upcoming-events">
            <h2 class="section-title">Upcoming Events</h2>
            <div class="events-grid">
                <div class="event-card">
                    <div class="event-date">
                        <span class="day">15</span>
                        <span class="month">Mar</span>
                    </div>
                    <div class="event-details">
                        <h3>Valorant Tournament</h3>
                        <p><i class="fas fa-clock"></i> 19:00 WIB</p>
                        <p><i class="fas fa-users"></i> 16 Teams</p>
                        <a href="register_tournament.php?id=valorant" class="btn-register">Register Now</a>
                    </div>
                </div>
                <div class="event-card">
                    <div class="event-date">
                        <span class="day">20</span>
                        <span class="month">Mar</span>
                    </div>
                    <div class="event-details">
                        <h3>Overwatch 2 Scrims</h3>
                        <p><i class="fas fa-clock"></i> 20:00 WIB</p>
                        <p><i class="fas fa-users"></i> 8 Teams</p>
                        <a href="register_tournament.php?id=overwatch" class="btn-register">Register Now</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials">
            <h2 class="section-title">What Our Members Say</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"GamerHub has helped me find amazing teammates and improve my gameplay significantly!"</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=John" alt="User Avatar">
                        <div class="author-info">
                            <h4>John Doe</h4>
                            <p>Valorant Player</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"The community is incredibly supportive and the tournaments are well-organized!"</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Sarah" alt="User Avatar">
                        <div class="author-info">
                            <h4>Sarah Smith</h4>
                            <p>Overwatch 2 Player</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 GamerHub Community. Created by [Your Name]</p>
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