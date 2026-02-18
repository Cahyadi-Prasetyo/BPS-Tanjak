<?php
// Define pages on the server side (not visible in View Source)
$pages = [
    1 => 'https://lookerstudio.google.com/embed/reporting/cef06dd3-8183-4a5f-9662-756e193e2286/page/tTVnF',
    2 => 'https://lookerstudio.google.com/embed/reporting/cef06dd3-8183-4a5f-9662-756e193e2286/page/p_ba5vbbom0d',
    3 => 'https://lookerstudio.google.com/embed/reporting/cef06dd3-8183-4a5f-9662-756e193e2286/page/p_pkn0ugrs0d'
];

// Get current page from URL, default to 1
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Validate page number
if (!array_key_exists($currentPage, $pages)) {
    $currentPage = 1;
}

$currentUrl = $pages[$currentPage];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard BPS - Looker Studio</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <main class="canvas-wrapper">
        <div class="report-wrapper-outer">
            <!-- Loading Spinner Overlay -->
            <div id="loadingOverlay" class="loading-overlay">
                <div class="spinner"></div>
            </div>

            <div class="report-container">
                <iframe 
                    id="reportFrame"
                    src="<?php echo $currentUrl; ?>" 
                    frameborder="0" 
                    style="border:0" 
                    allowfullscreen 
                    sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox">
                </iframe>
            </div>
            <!-- Cover to ensure default footer is hidden -->
            <div class="footer-cover"></div>
        </div>

        <!-- Custom Numbered Footer -->
        <div class="custom-footer">
            <?php foreach ($pages as $num => $url): ?>
                <a href="?page=<?php echo $num; ?>" class="page-btn <?php echo ($num === $currentPage) ? 'active' : ''; ?>">
                    <?php echo $num; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </main>

    <script>
        const iframe = document.getElementById('reportFrame');
        const overlay = document.getElementById('loadingOverlay');

        // Function to hide loader
        function hideLoader() {
            overlay.classList.add('hidden');
            iframe.classList.add('loaded');
        }

        // Event listener for load
        iframe.addEventListener('load', hideLoader);

        // Fallback: forcefully hide after 10 seconds in case load event doesn't fire nicely
        setTimeout(hideLoader, 10000);
    </script>
</body>
</html>