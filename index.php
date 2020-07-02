<html>

    <head>
        <title>Test GIF request</title>
        <script type="text/javascript">
            /**
             * A <script> element is created and enabled for asynchronous loading (loading in the background)
             * The tracking.js code is fetched
             * Loads the script element to the DOM
             * After the tracking code collects data, the GIF request is sent to the Analytics database for logging and post-processing
             */

            // create a new script element
            var script = document.createElement('script');
            script.async = 1;
            script.src = 'js/tracking.js';

            // insert the script element into the document
            var firstScript = document.getElementsByTagName('script')[0];
            firstScript.parentNode.insertBefore(script, firstScript)
        </script>
    </head>

    <body>
        <h1>Test GIF request</h1>
    </body>

</html>