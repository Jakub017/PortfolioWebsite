<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content=" initial-scale=1.0" />

        @vite(['resources/js/app.js', 'resources/sass/style.scss']) @inertiaHead
        <!-- Google tag (gtag.js) -->
        <script
            defer
            src="https://www.googletagmanager.com/gtag/js?id=G-TMV4ZWS4R0"
        ></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());

            gtag("config", "G-TMV4ZWS4R0");
        </script>
    </head>
    <body>
        @inertia
    </body>
</html>
