<?php
// Dummy data for weekly schedule
$weeklySchedule = [
    [
        'day' => 'Senin',
        'sessions' => [
            ['time' => '19:00', 'game' => 'Valorant', 'host' => 'ProGamer123', 'guest' => 'MLBBMaster'],
            ['time' => '21:00', 'game' => 'Overwatch 2', 'host' => 'NinjaWarrior', 'guest' => 'ValorantPro']
        ]
    ],
    [
        'day' => 'Selasa',
        'sessions' => [
            ['time' => '20:00', 'game' => 'Marvel Rivals', 'host' => 'ValorantPro', 'guest' => 'GenshinQueen'],
            ['time' => '22:00', 'game' => 'Valorant', 'host' => 'GenshinQueen', 'guest' => 'MLBBMaster']
        ]
    ],
    [
        'day' => 'Rabu',
        'sessions' => [
            ['time' => '18:00', 'game' => 'Overwatch 2', 'host' => 'ProGamer123', 'guest' => 'NinjaWarrior'],
            ['time' => '20:00', 'game' => 'Marvel Rivals', 'host' => 'NinjaWarrior', 'guest' => 'ValorantPro']
        ]
    ],
    [
        'day' => 'Kamis',
        'sessions' => [
            ['time' => '19:00', 'game' => 'Valorant', 'host' => 'ValorantPro', 'guest' => 'MLBBMaster'],
            ['time' => '21:00', 'game' => 'Overwatch 2', 'host' => 'GenshinQueen', 'guest' => 'ProGamer123']
        ]
    ],
    [
        'day' => 'Jumat',
        'sessions' => [
            ['time' => '20:00', 'game' => 'Marvel Rivals', 'host' => 'MLBBMaster', 'guest' => 'NinjaWarrior'],
            ['time' => '22:00', 'game' => 'Valorant', 'host' => 'NinjaWarrior', 'guest' => 'GenshinQueen']
        ]
    ]
];

// Get unique games for filter
$games = array_unique(array_merge(...array_map(function($day) {
    return array_column($day['sessions'], 'game');
}, $weeklySchedule)));

// Get unique players for filter
$players = array_unique(array_merge(...array_map(function($day) {
    return array_merge(
        array_column($day['sessions'], 'host'),
        array_column($day['sessions'], 'guest')
    );
}, $weeklySchedule)));
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
    <link rel="icon" type="image/png" href="favicon.png">
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
        <h1 class="page-title section-title">Jadwal Mabar Mingguan</h1>
        
        <div class="filter-container" style="display:flex;flex-wrap:wrap;gap:1.5rem;align-items:flex-end;margin-bottom:2rem;background:linear-gradient(145deg,#fff,#f5f6fa);border-radius:15px;box-shadow:0 10px 20px rgba(0,0,0,0.05);padding:2rem;">
            <div class="filter-group" style="flex:1;min-width:200px;">
                <label for="gameFilter" style="font-weight:600;font-size:0.95rem;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:0.8rem;display:block;">Filter Game:</label>
                <select id="gameFilter" class="filter-select" style="width:100%;padding:1rem 1.2rem;border:2px solid #e0e0e0;border-radius:10px;font-size:1rem;background-color:white;cursor:pointer;transition:all 0.3s;appearance:none;background-image:url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'24\' height=\'24\' viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'#6c5ce7\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-linejoin=\'round\'%3E%3Cpolyline points=\'6 9 12 15 18 9\'%3E%3C/polyline%3E%3C/svg%3E');background-repeat:no-repeat;background-position:right 1rem center;background-size:1.2rem;padding-right:3rem;">
                    <option value="">Semua Game</option>
                    <?php foreach ($games as $game): ?>
                        <option value="<?php echo htmlspecialchars($game); ?>"><?php echo htmlspecialchars($game); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="filter-group" style="flex:1;min-width:200px;">
                <label for="playerFilter" style="font-weight:600;font-size:0.95rem;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:0.8rem;display:block;">Filter Pemain:</label>
                <select id="playerFilter" class="filter-select" style="width:100%;padding:1rem 1.2rem;border:2px solid #e0e0e0;border-radius:10px;font-size:1rem;background-color:white;cursor:pointer;transition:all 0.3s;appearance:none;background-image:url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'24\' height=\'24\' viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'#6c5ce7\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-linejoin=\'round\'%3E%3Cpolyline points=\'6 9 12 15 18 9\'%3E%3C/polyline%3E%3C/svg%3E');background-repeat:no-repeat;background-position:right 1rem center;background-size:1.2rem;padding-right:3rem;">
                    <option value="">Semua Pemain</option>
                    <?php foreach ($players as $player): ?>
                        <option value="<?php echo htmlspecialchars($player); ?>"><?php echo htmlspecialchars($player); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="filter-group" style="flex:1;min-width:200px;">
                <label for="dayFilter" style="font-weight:600;font-size:0.95rem;text-transform:uppercase;letter-spacing:0.5px;margin-bottom:0.8rem;display:block;">Filter Hari:</label>
                <select id="dayFilter" class="filter-select" style="width:100%;padding:1rem 1.2rem;border:2px solid #e0e0e0;border-radius:10px;font-size:1rem;background-color:white;cursor:pointer;transition:all 0.3s;appearance:none;background-image:url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'24\' height=\'24\' viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'#6c5ce7\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-linejoin=\'round\'%3E%3Cpolyline points=\'6 9 12 15 18 9\'%3E%3C/polyline%3E%3C/svg%3E');background-repeat:no-repeat;background-position:right 1rem center;background-size:1.2rem;padding-right:3rem;">
                    <option value="">Semua Hari</option>
                    <?php foreach ($weeklySchedule as $day): ?>
                        <option value="<?php echo htmlspecialchars($day['day']); ?>"><?php echo htmlspecialchars($day['day']); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="filter-group" style="min-width:150px;max-width:200px;display:flex;align-items:center;">
                <button id="resetFilter" class="btn-reset" style="background:linear-gradient(145deg,#f8f9fa,#e9ecef);color:#222;border:none;padding:1rem 2rem;border-radius:10px;cursor:pointer;font-size:1rem;font-weight:600;display:flex;align-items:center;gap:0.8rem;transition:all 0.3s;box-shadow:0 4px 6px rgba(0,0,0,0.05);min-width:150px;justify-content:center;">
                    <i class="fas fa-redo"></i> Reset Filter
                </button>
            </div>
        </div>

        <div class="schedule-table-container">
            <table class="schedule-table">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Game</th>
                        <th>Host</th>
                        <th>Guest</th>
                    </tr>
                </thead>
                <tbody id="scheduleBody">
                    <?php foreach ($weeklySchedule as $day): ?>
                        <?php foreach ($day['sessions'] as $session): ?>
                        <tr data-game="<?php echo htmlspecialchars($session['game']); ?>"
                            data-host="<?php echo htmlspecialchars($session['host']); ?>"
                            data-guest="<?php echo htmlspecialchars($session['guest']); ?>"
                            data-day="<?php echo htmlspecialchars($day['day']); ?>">
                            <td><?php echo htmlspecialchars($day['day']); ?></td>
                            <td><i class="far fa-clock"></i> <?php echo htmlspecialchars($session['time']); ?></td>
                            <td><i class="fas fa-gamepad"></i> <?php echo htmlspecialchars($session['game']); ?></td>
                            <td><i class="fas fa-user"></i> <?php echo htmlspecialchars($session['host']); ?></td>
                            <td><i class="fas fa-user-plus"></i> <?php echo htmlspecialchars($session['guest']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div id="noResults" class="no-results" style="display: none;">
            <i class="fas fa-search"></i>
            <p>Tidak ada jadwal yang sesuai dengan filter</p>
        </div>
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

            // Filter functionality
            const gameFilter = document.getElementById('gameFilter');
            const playerFilter = document.getElementById('playerFilter');
            const dayFilter = document.getElementById('dayFilter');
            const resetFilter = document.getElementById('resetFilter');
            const scheduleBody = document.getElementById('scheduleBody');
            const noResults = document.getElementById('noResults');
            const rows = scheduleBody.getElementsByTagName('tr');

            function applyFilters() {
                const selectedGame = gameFilter.value;
                const selectedPlayer = playerFilter.value;
                const selectedDay = dayFilter.value;
                let visibleCount = 0;

                Array.from(rows).forEach(row => {
                    const game = row.dataset.game;
                    const host = row.dataset.host;
                    const guest = row.dataset.guest;
                    const day = row.dataset.day;

                    const gameMatch = !selectedGame || game === selectedGame;
                    const playerMatch = !selectedPlayer || host === selectedPlayer || guest === selectedPlayer;
                    const dayMatch = !selectedDay || day === selectedDay;

                    if (gameMatch && playerMatch && dayMatch) {
                        row.style.display = '';
                        visibleCount++;
                    } else {
                        row.style.display = 'none';
                    }
                });

                noResults.style.display = visibleCount === 0 ? 'flex' : 'none';
            }

            // Add event listeners for filters
            gameFilter.addEventListener('change', applyFilters);
            playerFilter.addEventListener('change', applyFilters);
            dayFilter.addEventListener('change', applyFilters);

            // Reset filters
            resetFilter.addEventListener('click', () => {
                gameFilter.value = '';
                playerFilter.value = '';
                dayFilter.value = '';
                applyFilters();
            });

            // Add animation to table rows
            Array.from(rows).forEach((row, index) => {
                row.style.animationDelay = `${index * 0.1}s`;
                row.classList.add('fade-in');
            });
        });
    </script>
</body>
</html> 