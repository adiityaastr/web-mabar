<?php
$player = isset($_GET['player']) ? htmlspecialchars($_GET['player']) : 'Unknown Player';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamer Community - Invite to Play</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <i class="fas fa-gamepad"></i>
            <span>GamerHub</span>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="anggota.php">Profile Pemain</a></li>
            <li><a href="jadwal.php">Jadwal</a></li>
        </ul>
    </nav>

    <main class="container">
        <div class="form-container">
            <h1 class="page-title">Invite to Play</h1>
            <form action="jadwal.php" method="POST" class="mabar-form">
                <div class="form-group">
                    <label for="name">Nama Kamu:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="game">Game yang akan dimainkan:</label>
                    <select id="game" name="game" required>
                        <option value="">Pilih Game</option>
                        <option value="Mobile Legends">Mobile Legends</option>
                        <option value="PUBG Mobile">PUBG Mobile</option>
                        <option value="Valorant">Valorant</option>
                        <option value="Genshin Impact">Genshin Impact</option>
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
                    <label for="notes">Catatan:</label>
                    <textarea id="notes" name="notes" rows="4" placeholder="Tambahkan catatan atau instruksi khusus..."></textarea>
                </div>

                <div class="form-group">
                    <label for="player">Pemain yang diajak:</label>
                    <input type="text" id="player" name="player" value="<?php echo $player; ?>" readonly>
                </div>

                <button type="submit" class="btn-submit">Kirim Ajakan</button>
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
</body>
</html> 