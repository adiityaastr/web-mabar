<?php
session_start();

// Fungsi untuk menyimpan data registrasi
function saveRegistration($data) {
    $registrations = [];
    if (file_exists('tournament_registrations.json')) {
        $registrations = json_decode(file_get_contents('tournament_registrations.json'), true);
    }
    $registrations[] = $data;
    file_put_contents('tournament_registrations.json', json_encode($registrations, JSON_PRETTY_PRINT));
}

// Proses form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $registration = [
        'tournament_name' => $_POST['tournament_name'],
        'team_name' => $_POST['team_name'],
        'captain_name' => $_POST['captain_name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'players' => [
            $_POST['player1'],
            $_POST['player2'],
            $_POST['player3'],
            $_POST['player4'],
            $_POST['player5']
        ],
        'registration_date' => date('Y-m-d H:i:s')
    ];

    saveRegistration($registration);
    $_SESSION['registration_success'] = true;
    header('Location: index.php');
    exit;
}

// Data turnamen yang tersedia
$tournaments = [
    'valorant' => [
        'name' => 'Valorant Tournament',
        'date' => '15 Mar 2024',
        'time' => '19:00 WIB',
        'teams' => '16 Teams',
        'game' => 'Valorant'
    ],
    'overwatch' => [
        'name' => 'Overwatch 2 Scrims',
        'date' => '20 Mar 2024',
        'time' => '20:00 WIB',
        'teams' => '8 Teams',
        'game' => 'Overwatch 2'
    ]
];

// Ambil ID turnamen dari URL
$tournament_id = isset($_GET['id']) ? $_GET['id'] : '';
$tournament = isset($tournaments[$tournament_id]) ? $tournaments[$tournament_id] : null;

if (!$tournament) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Tournament - GamerHub</title>
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
            <li><a href="tournament_registrations.php">Daftar Turnamen</a></li>
        </ul>
    </nav>
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <main class="container">
        <div class="registration-container">
            <h1 class="page-title">Register for <?php echo htmlspecialchars($tournament['name']); ?></h1>
            
            <div class="tournament-info">
                <p><i class="fas fa-calendar"></i> Date: <?php echo htmlspecialchars($tournament['date']); ?></p>
                <p><i class="fas fa-clock"></i> Time: <?php echo htmlspecialchars($tournament['time']); ?></p>
                <p><i class="fas fa-users"></i> <?php echo htmlspecialchars($tournament['teams']); ?></p>
            </div>

            <form action="register_tournament.php" method="POST" class="registration-form">
                <input type="hidden" name="tournament_name" value="<?php echo htmlspecialchars($tournament['name']); ?>">
                
                <div class="form-group">
                    <label for="team_name">Nama Tim:</label>
                    <input type="text" id="team_name" name="team_name" required>
                </div>

                <div class="form-group">
                    <label for="captain_name">Nama Kapten:</label>
                    <input type="text" id="captain_name" name="captain_name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Nomor Telepon:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <h3>Data Pemain</h3>
                
                <div class="form-group">
                    <label for="player1">Pemain 1 (Kapten):</label>
                    <input type="text" id="player1" name="player1" required>
                </div>

                <div class="form-group">
                    <label for="player2">Pemain 2:</label>
                    <input type="text" id="player2" name="player2" required>
                </div>

                <div class="form-group">
                    <label for="player3">Pemain 3:</label>
                    <input type="text" id="player3" name="player3" required>
                </div>

                <div class="form-group">
                    <label for="player4">Pemain 4:</label>
                    <input type="text" id="player4" name="player4" required>
                </div>

                <div class="form-group">
                    <label for="player5">Pemain 5:</label>
                    <input type="text" id="player5" name="player5" required>
                </div>

                <button type="submit" class="btn-submit">Daftar Turnamen</button>
            </form>
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