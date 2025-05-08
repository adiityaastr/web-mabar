<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamer Community - Player Profiles</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
            <li><a href="index.php">Home</a></li>
            <li><a href="anggota.php" class="active">Profile Pemain</a></li>
            <li><a href="jadwal.php">Jadwal</a></li>
            <li><a href="tournament_registrations.php">Daftar Turnamen</a></li>
        </ul>
    </nav>
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <main class="container">
        <h1 class="page-title">Player Profiles</h1>
        
        <div class="player-grid">
            <!-- Player 1 -->
            <div class="player-card">
                <div class="player-avatar">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=John" alt="Player Avatar">
                </div>
                <div class="player-info">
                    <h3>ProGamer123</h3>
                    <p><i class="fas fa-gamepad"></i> Game: Valorant</p>
                    <p><i class="fas fa-user-tag"></i> Role: Duelist</p>
                    <a href="mabar_form.php?player=ProGamer123" class="btn-mabar">Ajak Mabar</a>
                </div>
            </div>

            <!-- Player 2 -->
            <div class="player-card">
                <div class="player-avatar">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Sarah" alt="Player Avatar">
                </div>
                <div class="player-info">
                    <h3>NinjaWarrior</h3>
                    <p><i class="fas fa-gamepad"></i> Game: Overwatch 2</p>
                    <p><i class="fas fa-user-tag"></i> Role: Tank</p>
                    <a href="mabar_form.php?player=NinjaWarrior" class="btn-mabar">Ajak Mabar</a>
                </div>
            </div>

            <!-- Player 3 -->
            <div class="player-card">
                <div class="player-avatar">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Mike" alt="Player Avatar">
                </div>
                <div class="player-info">
                    <h3>ValorantPro</h3>
                    <p><i class="fas fa-gamepad"></i> Game: Valorant</p>
                    <p><i class="fas fa-user-tag"></i> Role: Initiator</p>
                    <a href="mabar_form.php?player=ValorantPro" class="btn-mabar">Ajak Mabar</a>
                </div>
            </div>

            <!-- Player 4 -->
            <div class="player-card">
                <div class="player-avatar">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Emma" alt="Player Avatar">
                </div>
                <div class="player-info">
                    <h3>MarvelHero</h3>
                    <p><i class="fas fa-gamepad"></i> Game: Marvel Rivals</p>
                    <p><i class="fas fa-user-tag"></i> Role: Support</p>
                    <a href="mabar_form.php?player=MarvelHero" class="btn-mabar">Ajak Mabar</a>
                </div>
            </div>

            <!-- Player 5 -->
            <div class="player-card">
                <div class="player-avatar">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Alex" alt="Player Avatar">
                </div>
                <div class="player-info">
                    <h3>OverwatchAce</h3>
                    <p><i class="fas fa-gamepad"></i> Game: Overwatch 2</p>
                    <p><i class="fas fa-user-tag"></i> Role: DPS</p>
                    <a href="mabar_form.php?player=OverwatchAce" class="btn-mabar">Ajak Mabar</a>
                </div>
            </div>
        </div>
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
    <script>
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