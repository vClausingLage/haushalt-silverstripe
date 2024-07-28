<!DOCTYPE html>
<html lang="$ContentLocale">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$Title</title>
    <% require themedCSS('main') %>

</head>
<body>
    <header>
        <h1>$Title</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <main>
        $Content
    </main>

    <footer>
        <p class="text-red-500">&copy; Footer</p>
    </footer>

    <%-- <script src="script.js"></script> --%>
</body>
</html>
