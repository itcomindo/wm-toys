<?php

/**
 *
 * Silence is golden
 *@package bbb
 */
define('INCLUDE_ALLOWED', true);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../app.css">
</head>

<body>

    <?php
    // call header.php from /templates/header.php
    require_once '../templates/header.php';
    require_once '../menu.php';
    ?>







    <section class="section section-medium">
        <div class="container">
            <div id="form-wr">
                <!-- Judul input-->
                <div class="form-item">
                    <label for="judul">Judul</label>
                    <input type="text" id="judul" name="judul">
                </div>
                <!-- Summary Artikel textarea -->
                <div class="form-item">
                    <label for="summary">Summary</label>
                    <textarea id="summary" name="summary" rows="4"></textarea>
                </div>

                <!-- sub topik textarea -->
                <div class="form-item">
                    <label for="sub-topik">Sub Topik</label>
                    <textarea id="sub-topik" name="sub-topik" rows="4"></textarea>
                </div>


                <!-- audience textarea -->
                <div class="form-item">
                    <label for="audience">Audience</label>
                    <textarea id="audience" name="audience" rows="4"></textarea>
                </div>

            </div>

            <!-- Form Preview -->
            <div id="prev-wr">
                <!-- instruksi -->
                <span class="label">
                    Buat artikel menggunakan Bahasa Indonesia yang baik dan bear. Artikel harus sesuai dengan instruksi
                    berikut ini:
                </span>

                <!-- judul -->
                <div class="prev-item block">
                    <span class="prev-label">Judul:</span><span class="prev-value" id="value-judul"></span>
                </div>

                <!-- summary -->
                <div class="prev-item">
                    <span class="prev-label">Summary:</span>
                    <span class="prev-value" id="value-summary">
                    </span>
                </div>

                <!-- sub topik -->
                <div class="prev-item">
                    <span class="prev-label">Poin-poin yang Harus Dibahas:</span>
                    <span class="prev-value" id="value-sub-topik">
                    </span>
                </div>

                <!-- audience -->
                <div class="prev-item">
                    <span class="prev-label">Audience:</span>
                    <span class="prev-value" id="value-audience"></span>
                </div>

                <span><b>Jumlah Kata:</b> 1000-1500 kata.</span>
                <span><b>Gaya penulisan:</b> Formal.</span>

                <!-- sub topik -->
                <div class="prev-item">
                    <span class="prev-label">Struktur Artikel (Sub Topik):</span>
                    <span class="prev-value" id="value-struktur-artikel"></span>
                </div>

                <hr>


                <div class="prev-item">
                    <span class="prev-label">Instuksi SEO:</span>
                    <span>Optimasi keyword fokus di judul, paragraf pertama, dan subheading.</span>
                    <span>Gunakan internal linking dan external linking yang relevan.</span>
                    <span>Buat meta description yang mengandung keyword fokus.</span>
                    <span>Pastikan densitas keyword fokus antara 0,5% - 2,5%.</span>
                    <span>Gunakan heading mulai dari tag (H2, H3) dengan benar.</span>
                </div>


            </div>

            <!-- copy and reset -->
            <div class="form-copy-reset">
                <div id="copy">Copy</div>
                <div id="reset">Reset</div>
            </div>



        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../scripts.js"></script>
</body>

</html>