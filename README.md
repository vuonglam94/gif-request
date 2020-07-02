# gif-request

A demo of GIF request (like Google Analytics)

Google's javascript has to transmit the details of your page view to their servers some how. Ajax cannot be used across domains, so the only way to submit the information is to request a file from a Google server, passing the necessary information in the query string. To facilitate this, some form of content must be requested using a standard HTML tag. The easiest way to do this without impacting the page itself is to load a 1x1 transparent gif. Note that in the case of the Google script (and others), this image isn't actually added to the page.