<!DOCTYPE html>
<html>
<head>
    <title>Open Multiple Links in New Tabs</title>
</head>
<body>
    <button onclick="openMultipleTabs()">Open Multiple Tabs</button>

    <script>
        function openMultipleTabs() {
            for (let index = 0; index < 10; index++) {
                var urlToOpen = 'https://paid2play.co/share/tescodepro9815t';
                setTimeout(() => {
                    window.open(urlToOpen, '_blank');
                }, index * 500);
            }
        }
    </script>
</body>
</html>
