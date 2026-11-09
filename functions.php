<?php
declare(strict_types=1);

function e(string $teks): string
{
    return htmlspecialchars(
        $teks,
        ENT_QUOTES,
        'UTF-8'
    );
}

function formatRupiah(int $harga): string
{
    return 'Rp ' . number_format(
        $harga,
        0,
        ',',
        '.'
    );
}