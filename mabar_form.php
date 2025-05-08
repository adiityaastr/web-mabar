<?php
$player = isset($_GET['player']) ? htmlspecialchars($_GET['player']) : 'Pilih Pemain';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamerHub - Formulir Ajakan Mabar</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="favicon.png">
    <style>
        .form-container {
            background: linear-gradient(145deg, #fff, #f5f6fa);
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.07);
            padding: 2.5rem 2rem;
            max-width: 500px;
            margin: 2rem auto;
            animation: fadeIn 0.7s;
        }
        .form-container h1 {
            text-align: center;
            color: var(--primary-color);
            margin-bottom: 2rem;
            font-size: 2rem;
            letter-spacing: 1px;
        }
        .mabar-form .form-group label {
            font-weight: 600;
            color: var(--primary-color);
        }
        .mabar-form input, .mabar-form select, .mabar-form textarea {
            border-radius: 8px;
            border: 1.5px solid #ddd;
            padding: 0.9rem 1rem;
            font-size: 1rem;
            margin-top: 0.3rem;
            margin-bottom: 1.2rem;
            transition: border-color 0.3s;
        }
        .mabar-form input:focus, .mabar-form select:focus, .mabar-form textarea:focus {
            border-color: var(--primary-color);
            outline: none;
        }
        .btn-submit {
            width: 100%;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            color: #fff;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            padding: 1rem;
            font-size: 1.1rem;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(108,92,231,0.08);
            transition: background 0.3s, transform 0.2s;
        }
        .btn-submit:hover {
            background: linear-gradient(90deg, var(--secondary-color), var(--primary-color));
            transform: translateY(-2px) scale(1.01);
        }
        .form-icon {
            color: var(--primary-color);
            margin-right: 0.5rem;
        }
        @media (max-width: 600px) {
            .form-container { padding: 1.2rem 0.5rem; }
        }
    </style>
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
            <li><a href="index.php">Beranda</a></li>
            <li><a href="anggota.php">Profil Pemain</a></li>
            <li><a href="jadwal.php">Jadwal</a></li>
            <li><a href="tournament_registrations.php">Daftar Turnamen</a></li>
        </ul>
    </nav>
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <main class="container">
        <div class="form-container">
            <h1 class="page-title"><i class="fas fa-user-plus form-icon"></i>Formulir Ajakan Mabar</h1>
            <form action="jadwal.php" method="POST" class="mabar-form">
                <div class="form-group">
                    <label for="name">Nama Pengundang:</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan nama kamu" required>
                </div>

                <div class="form-group">
                    <label for="game">Pilih Game:</label>
                    <select id="game" name="game" required>
                        <option value="">-- Pilih Game --</option>
                        <option value="Mobile Legends">Mobile Legends</option>
                        <option value="PUBG Mobile">PUBG Mobile</option>
                        <option value="Valorant">Valorant</option>
                        <option value="Genshin Impact">Genshin Impact</option>
                        <option value="Overwatch 2">Overwatch 2</option>
                        <option value="Marvel Rivals">Marvel Rivals</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="date">Tanggal Mabar:</label>
                    <input type="date" id="date" name="date" required>
                </div>

                <div class="form-group">
                    <label for="time">Waktu Mabar:</label>
                    <input type="time" id="time" name="time" required>
                </div>

                <div class="form-group">
                    <label for="notes">Catatan (opsional):</label>
                    <textarea id="notes" name="notes" rows="3" placeholder="Tambahkan catatan atau instruksi khusus..."></textarea>
                </div>

                <div class="form-group">
                    <label for="player">Pemain yang Diundang:</label>
                    <input type="text" id="player" name="player" value="<?php echo $player; ?>" readonly>
                </div>

                <button type="submit" class="btn-submit"><i class="fas fa-paper-plane"></i> Kirim Ajakan</button>
            </form>
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
        });
    </script>
</body>
</html> 