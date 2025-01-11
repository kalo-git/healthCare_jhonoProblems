<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Translate Test</title>
</head>
<body>
    <h1>Welcome to My Website</h1>

    <!-- Google Translate -->
    <div id="google_translate_element"></div>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en', includedLanguages: 'en,hi,pa', layout: google.translate.TranslateElement.InlineLayout.SIMPLE},
                'google_translate_element'
            );
        }
    </script>

<a href="https://translate.google.com/translate?hl=hi&sl=auto&tl=hi&u=http://yourwebsite.com" target="_blank">Translate to Hindi</a>
<a href="https://translate.google.com/translate?hl=pa&sl=auto&tl=pa&u=http://yourwebsite.com" target="_blank">Translate to Punjabi</a>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
