 <!DOCTYPE html>
<html lang="en-CA">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Computer Information Systems</title>
    <meta name="description" content="A website project for the Computer Information Systems (CIS) program at Holland College.">

    <!-- Browsers won't use a cached version of style.css if the value on ?v= doesn't match -->
    <link rel="stylesheet" href="/style.css?v=<?= filemtime($PUBLIC_DIR . "/style.css") ?>">

    <meta name="robots" content="<?= $include_args['robot_indexing'] ?? "index, follow" ?>">
</head>
<body>
    <header>
        <a href="/"><h1>Computer Information Systems</h1></a>
    </header>
    <main>
        <div id="wrapper">
            <?php echo $include_args['content'] ?>
        </div>
    </main>
    <footer>
        <div id="working-directory">
            <p>C:\<?= substr(str_replace("/", "\\", $URL_PATH), 1) ?><blink-182 data-blink-time="1000">_</blink-182></p>
        </div>
        <div id="web-badges">
            <!-- Dr. Pepper is based -->
            <img src="/img/web-badges/drp.gif" alt="web badge proclaiming the site is Powered by Dr. Pepper" width="88" height="31">
            <!-- Mike's Movie Reviews -->
            <img src="/img/web-badges/geo-cities.gif" alt="Geo Cities web badge" width="88" height="31">
            <!-- Isaac liked this one for some reason -->
            <img src="/img/web-badges/vanilla-and-debbie.gif" alt="Vanilla and Debbie web badge" width="88" height="31">
            <!-- Web 1.0 -->
            <img src="/img/web-badges/valid-xhtml-1.0.gif" alt="Valid XHTML 1.0 web badge" width="88" height="31">
        </div>
        <p>Report any issues to Chandler on discord</p>
    </footer>
</body>
</html>