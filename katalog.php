<?php
declare(strict_types=1);

require_once __DIR__ . '/data.php';
require_once __DIR__ . '/functions.php';

$totalProduk = count($daftarItem);
$totalStok = array_sum(array_column($daftarItem, 'stok'));
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Katalog - <?= e($namaSitus) ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <div class="wadah navbar">
        <a href="index.php" class="logo">
            HOUSE OF<span> KEBAB.</span>
        </a>

        <nav>
            <a href="index.php">Beranda</a>
            <a href="katalog.php" class="aktif">Katalog</a>
            <a href="index.php#kontak">Kontak</a>
        </nav>
    </div>
</header>

<main>
    <section class="judul-katalog">
        <div class="wadah">
            <p class="label">OUR MENU</p>
            <h1>Katalog Menu <span>HOUSE OF KEBAB</span></h1>
            <p>Pilih menu favoritmu dengan harga bersahabat.</p>

            <div class="statistik">
                <div>
                    <strong><?= $totalProduk ?></strong>
                    <span>Jenis Menu</span>
                </div>
                <div>
                    <strong><?= $totalStok ?></strong>
                    <span>Total Stok</span>
                </div>
            </div>
        </div>
    </section>

    <section class="wadah daftar-menu">
        <h2>Pilihan Menu Kami</h2>

        <div class="grid-produk">
            <?php foreach ($daftarItem as $item): ?>
                <article class="produk-card">
                    <div class="produk-gambar">
                        <img
                            src="https://images.unsplash.com/photo-1529006557810-274b9b2fc783?auto=format&fit=crop&w=600&q=80"
                            alt="Ilustrasi menu <?= e($item['nama']) ?>">

                        <span class="kategori">
                            <?= e($item['kategori']) ?>
                        </span>
                    </div>

                    <div class="produk-info">
                        <h3><?= e($item['nama']) ?></h3>

                        <p><?= e($item['deskripsi']) ?></p>

                        <div class="produk-bawah">
                            <strong class="harga">
                                <?= e(formatRupiah($item['harga'])) ?>
                            </strong>

                            <?php if ($item['stok'] > 0): ?>
                                <span class="status tersedia">
                                    Tersedia
                                </span>
                            <?php else: ?>
                                <span class="status habis">
                                    Habis
                                </span>
                            <?php endif; ?>
                        </div>

                        <?php if ($item['stok'] > 0): ?>
                            <a
                                class="tombol tombol-pesan"
                                href="https://wa.me/6281234567890?text=Halo%2C%20saya%20ingin%20memesan%20<?= rawurlencode($item['nama']) ?>"
                                target="_blank"
                                rel="noopener noreferrer">
                                Pesan Sekarang
                            </a>
                        <?php else: ?>
                            <button class="tombol tombol-nonaktif"
                                    disabled>
                                Stok Habis
                            </button>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="kontak">
        <div class="wadah">
            <h2>Temukan Kami di Media Sosial</h2>
            <p>Ikuti media sosial kami untuk informasi menu terbaru.</p>

            <div class="kontak-links">
                <a class="tombol"
                   href="https://wa.me/6281234567890"
                   target="_blank"
                   rel="noopener noreferrer">
                    WhatsApp
                </a>
                <a class="tombol"
                     href="https://vt.tiktok.com/https://www.tiktok.com/@houseofkebabsoc?_r=1&_t=ZS-9B7gAGEwPjx"
                    target="_blank"
                     rel="noopener noreferrer">
                     TikTok
                </a>
                <a class="tombol"
                     href="https://linktr.ee/houseofkebabsoc?utm_source=linktree_profile_share&ltsid=cb7a156d-355c-42fa-a2f2-244dadc68491/"
                    target="_blank"
                     rel="noopener noreferrer">
                     Linktree
                </a>
                <a class="tombol tombol-garis"
                   href="https://www.instagram.com/"
                   target="_blank"
                   rel="noopener noreferrer">
                    Instagram
                </a>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="wadah">
        <p>&copy; <?= date('Y') ?> <?= e($namaSitus) ?>.
            Semua hak dilindungi.</p>
        <a href="index.php">Kembali ke Beranda</a>
    </div>
</footer>

</body>
</html>