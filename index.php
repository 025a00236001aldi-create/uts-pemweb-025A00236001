<?php
declare(strict_types=1);

require_once __DIR__ . '/data.php';
require_once __DIR__ . '/functions.php';


$namaSitus = 'House of Kebab';
$whatsappNum = '62895805160503';
$waLink = 'https://wa.me/' . $whatsappNum;
$igLink = 'https://www.instagram.com/houseofkebab.soc';
$tiktokLink = 'https://www.tiktok.com/@houseofkebabsoc';
$linktreeLink = 'https://linktr.ee/houseofkebabsoc';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($namaSitus) ?> - Profil Usaha</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header dan Navigasi -->
    <header class="header">
        <div class="wadah navbar">
            <a href="index.php" class="logo">
                HOUSE OF<span> KEBAB.</span>
            </a>
            <nav>
                <a href="index.php" class="aktif">Beranda</a>
                <a href="katalog.php">Katalog</a>
                <a href="#kontak">Kontak</a>
            </nav>
        </div>
    </header>

    <!-- Konten Utama -->
    <main>
        <!-- Bagian Hero -->
        <section class="hero">
            <div class="wadah hero-content">
                <div class="hero-text">
                    <p class="label">FRESH • DELICIOUS • SPECIAL</p>
                    <h1>
                        Nikmati Kebab
                        <span>Favoritmu!</span>
                    </h1>
                    <p>
                        Selamat datang di House of Kebab.
                        Kami menyediakan pilihan kebab dengan
                        cita rasa lezat, menu beragam, dan
                        harga yang ramah di kantong.
                    </p>
                    <a href="katalog.php" class="tombol">
                        Lihat Menu →
                    </a>
                </div>
                <div class="hero-image">
                    <img
                        src="assets/logo.jepg.png"
                        alt="Hidangan kebab House of Kebab">
                </div>
            </div>
        </section>

        <!-- Tentang Kami -->
        <section class="tentang wadah">
            <p class="label">TENTANG KAMI</p>
            <h2>Rasa Lezat, Harga Bersahabat</h2>
            <p>
                House of Kebab merupakan usaha kuliner
                yang menyediakan berbagai pilihan kebab
                untuk menemani waktu santai, berkumpul
                bersama teman, maupun makan sehari-hari.
            </p>
            <div class="fitur">
                <article class="fitur-card">
                    <span>🌯</span>
                    <h3>Menu Beragam</h3>
                    <p>Tersedia berbagai pilihan menu sesuai selera pelanggan.</p>
                </article>
                <article class="fitur-card">
                    <span>💰</span>
                    <h3>Harga Terjangkau</h3>
                    <p>Pilihan menu dengan harga yang ramah di kantong.</p>
                </article>
                <article class="fitur-card">
                    <span>🔥</span>
                    <h3>Menu Spesial</h3>
                    <p>Pilihan kebab untuk menemani waktu santai dan berkumpul.</p>
                </article>
            </div>
        </section>

        <!-- Kontak dan Media Sosial -->
        <section class="kontak" id="kontak">
            <div class="wadah">
                <p class="label">HUBUNGI KAMI</p>
                <h2>Ingin Memesan Kebab?</h2>
                <p>
                    Hubungi House of Kebab atau kunjungi
                    media sosial kami untuk informasi menu.
                </p>
                <div class="kontak-links">
                    <a
                        class="tombol"
                        href="<?= e($waLink) ?>"
                        target="_blank"
                        rel="noopener noreferrer">
                        WhatsApp
                    </a>
                    <a
                        class="tombol"
                        href="<?= e($tiktokLink) ?>"
                        target="_blank"
                        rel="noopener noreferrer">
                        TikTok
                    </a>
                    <a
                        class="tombol"
                        href="<?= e($linktreeLink) ?>"
                        target="_blank"
                        rel="noopener noreferrer">
                        Linktree
                    </a>
                    <a
                        class="tombol tombol-garis"
                        href="<?= e($igLink) ?>"
                        target="_blank"
                        rel="noopener noreferrer">
                        Instagram
                    </a>
                </div>
                <p class="catatan">
                    📍 Pusat Oleh-Oleh Pasar Jongke, Jl. Dr. Rajiman, Sondakan, Laweyan, Surakarta
                </p>
                <p class="catatan">
                    House of Kebab — Kebab Asli Kota Surakarta.
                </p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="wadah">
            <p>
                &copy; <?= date('Y') ?>
                <?= e($namaSitus) ?>.
                Dibuat untuk proyek UTS Pemrograman Web.
            </p>
        </div>
    </footer>
</body>
</html>
