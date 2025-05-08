<?php
// Dummy data for weekly schedule
$weeklySchedule = [
    [
        'day' => 'Senin',
        'sessions' => [
            ['time' => '19:00', 'game' => 'Valorant', 'players' => 'ProGamer123, MLBBMaster'],
            ['time' => '21:00', 'game' => 'Overwatch 2', 'players' => 'NinjaWarrior, ValorantPro']
        ]
    ],
    [
        'day' => 'Selasa',
        'sessions' => [
            ['time' => '20:00', 'game' => 'Marvel Rivals', 'players' => 'ValorantPro, GenshinQueen'],
            ['time' => '22:00', 'game' => 'Valorant', 'players' => 'GenshinQueen, MLBBMaster']
        ]
    ],
    [
        'day' => 'Rabu',
        'sessions' => [
            ['time' => '18:00', 'game' => 'Overwatch 2', 'players' => 'ProGamer123, NinjaWarrior'],
            ['time' => '20:00', 'game' => 'Marvel Rivals', 'players' => 'NinjaWarrior, ValorantPro']
        ]
    ],
    [
        'day' => 'Kamis',
        'sessions' => [
            ['time' => '19:00', 'game' => 'Valorant', 'players' => 'ValorantPro, MLBBMaster'],
            ['time' => '21:00', 'game' => 'Overwatch 2', 'players' => 'GenshinQueen, ProGamer123']
        ]
    ],
    [
        'day' => 'Jumat',
        'sessions' => [
            ['time' => '20:00', 'game' => 'Marvel Rivals', 'players' => 'MLBBMaster, NinjaWarrior'],
            ['time' => '22:00', 'game' => 'Valorant', 'players' => 'NinjaWarrior, GenshinQueen']
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamer Community - Schedule</title>
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
            <li><a href="jadwal.php" class="active">Jadwal</a></li>
            <li><a href="tournament_registrations.php">Daftar Turnamen</a></li>
        </ul>
    </nav>
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <main class="container">
        <h1 class="page-title">Jadwal Mabar Mingguan</h1>
        
        <div class="schedule-table-container">
            <table class="schedule-table">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Game</th>
                        <th>Pemain</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($weeklySchedule as $day): ?>
                        <?php foreach ($day['sessions'] as $session): ?>
                        <tr>
                            <td><?php echo $day['day']; ?></td>
                            <td><i class="far fa-clock"></i> <?php echo $session['time']; ?></td>
                            <td><i class="fas fa-gamepad"></i> <?php echo $session['game']; ?></td>
                            <td><i class="fas fa-users"></i> <?php echo $session['players']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
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