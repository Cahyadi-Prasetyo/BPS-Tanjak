<?php
// 1. Header Keamanan: Mencegah Clickjacking dan MIME sniffing
header("X-Frame-Options: SAMEORIGIN");
header("X-Content-Type-Options: nosniff");
header("X-XSS-Protection: 1; mode=block");

// Define pages (Gunakan Base64 agar URL tidak langsung 'mentah' di memori PHP)
$pages = [
    1 => base64_encode('https://lookerstudio.google.com/embed/reporting/cef06dd3-8183-4a5f-9662-756e193e2286/page/tTVnF'),
    2 => base64_encode('https://lookerstudio.google.com/embed/reporting/cef06dd3-8183-4a5f-9662-756e193e2286/page/p_ba5vbbom0d'),
    3 => base64_encode('https://lookerstudio.google.com/embed/reporting/cef06dd3-8183-4a5f-9662-756e193e2286/page/p_pkn0ugrs0d')
];

// Get current page from URL
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Validate page number
if (!array_key_exists($currentPage, $pages)) {
    $currentPage = 1;
}

// Ambil URL yang ter-encode
$encodedUrl = $pages[$currentPage];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard BPS - Looker Studio</title>

    <meta http-equiv="Content-Security-Policy" content="
        default-src 'self'; 
        script-src 'self' 'unsafe-inline' https://ssl.gstatic.com https://www.gstatic.com; 
        style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; 
        font-src https://fonts.gstatic.com; 
        frame-src https://lookerstudio.google.com; 
        img-src 'self' data: https://ssl.gstatic.com https://www.gstatic.com;
        connect-src 'self' https://lookerstudio.google.com;
    ">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css?v=7">
</head>
<body>

    <main class="canvas-wrapper">
        <div class="report-wrapper-outer">
            <div class="report-container">
                <iframe 
                    id="reportFrame"
                    src="about:blank" 
                    frameborder="0" 
                    style="border:0" 
                    allowfullscreen 
                    sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox">
                </iframe>
            </div>
            <div class="footer-cover"></div>
        </div>

        <div class="custom-footer">
            <?php foreach ($pages as $num => $url): ?>
                <a href="?page=<?php echo $num; ?>" class="page-btn <?php echo ($num === $currentPage) ? 'active' : ''; ?>">
                    <?php echo $num; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </main>

    <script>
        /**
         * 3. Penyamaran URL di Sisi Client
         * Mendecode URL Base64 dan memasukkannya ke iframe setelah halaman siap.
         * Ini mencegah bot sederhana mengambil URL langsung dari atribut src di HTML static.
         */
        document.addEventListener("DOMContentLoaded", function() {
            const frame = document.getElementById('reportFrame');
            const encoded = "<?php echo $encodedUrl; ?>";
            
            // Decode base64 dan set ke src iframe
            if (frame && encoded) {
                frame.src = atob(encoded);
            }
        });
    </script>
</body>
</html>