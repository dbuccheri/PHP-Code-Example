Hi,

This is an example of a web page written in PHP that parses an RSSFeed
I parsed the feed using a PHP page with simpleXML, and handled the timeout with the context property of fopen().

The page handles the following errors:

- Feed Empty. I assumed a feed is empty when the XML exist, but doesn't have any Main, or Item child node.
- Timeout Connection after 5 sec. You can simulate just disconnecting the ethernet cable, or pointing the $URL variable to a non responding feed.
- Feed not found, when the page is not found. You can simulate putting a wrong feed name in the $URL
- Wrong HTTP address. You can simulate putting a wrong domain address in the $URL variable.
