<?php
session_start();

// Fungsi untuk membaca data registrasi
function getRegistrations() {
    if (file_exists('tournament_registrations.json')) {
        return json_decode(file_get_contents('tournament_registrations.json'), true);
    }
    return [];
}

$registrations = getRegistrations();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Registrasi Turnamen - GamerHub</title>
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
            <li><a href="anggota.php">Profile Pemain</a></li>
            <li><a href="jadwal.php">Jadwal</a></li>
            <li><a href="tournament_registrations.php" class="active">Daftar Turnamen</a></li>
        </ul>
    </nav>
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <main class="container">
        <div class="registrations-container">
            <h1 class="page-title">Daftar Registrasi Turnamen</h1>

            <?php if (empty($registrations)): ?>
            <div class="no-data">
                <i class="fas fa-info-circle"></i>
                <p>Belum ada tim yang mendaftar turnamen.</p>
            </div>
            <?php else: ?>
            <div class="registrations-grid">
                <?php foreach ($registrations as $registration): ?>
                <div class="registration-card">
                    <div class="registration-header">
                        <h3><?php echo htmlspecialchars($registration['tournament_name']); ?></h3>
                        <span class="registration-date">
                            <i class="fas fa-calendar"></i>
                            <?php echo date('d M Y H:i', strtotime($registration['registration_date'])); ?>
                        </span>
                    </div>
                    
                    <div class="team-info">
                        <h4><i class="fas fa-users"></i> <?php echo htmlspecialchars($registration['team_name']); ?></h4>
                        <p><i class="fas fa-user"></i> Kapten: <?php echo htmlspecialchars($registration['captain_name']); ?></p>
                        <p><i class="fas fa-envelope"></i> <?php echo htmlspecialchars($registration['email']); ?></p>
                        <p><i class="fas fa-phone"></i> <?php echo htmlspecialchars($registration['phone']); ?></p>
                    </div>

                    <div class="players-list">
                        <h4><i class="fas fa-gamepad"></i> Daftar Pemain:</h4>
                        <ul>
                            <?php foreach ($registration['players'] as $index => $player): ?>
                            <li>
                                <i class="fas fa-user"></i>
                                <?php echo htmlspecialchars($player); ?>
                                <?php if ($index === 0): ?>
                                <span class="captain-badge">Kapten</span>
                                <?php endif; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
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