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
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="brand-container">
            <div class="brand-title">Laporan BPS</div>
            <span class="brand-pill">Dashboard</span>
        </div>
        <div class="actions">
            <!-- Optional: Refresh/Open External -->
            <!--<a href="https://lookerstudio.google.com/embed/reporting/027b3e94-15d3-4e6a-9822-4960c1753a57/page/SeYmF" 
               target="_blank" 
               class="btn btn-outline"
               title="Buka di tab baru">
                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" style="margin-right:0.3rem">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                </svg>
                <span class="btn-text">Open Original</span>
            </a>-->
        </div>
    </header>

    <main class="canvas-wrapper">
        <div class="report-container">
            <!-- Added /embed/ path segment for cleaner integration -->
            <iframe 
                src="https://lookerstudio.google.com/embed/reporting/027b3e94-15d3-4e6a-9822-4960c1753a57/page/SeYmF" 
                frameborder="0" 
                style="border:0" 
                allowfullscreen 
                sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox">
            </iframe>
        </div>
    </main>
</body>
</html>