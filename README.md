This contains all the necessary components to get the basic webpage that we
built during the PayPal Opportunity Hack. We used MAMP to create an easily
testable local server on multiple platforms.

Instructions (keeping it simple):

1. Copy everything in this folder to the folder that your server points to.
2. Create a table called "wordpress" (without quotes). If you are using MAMP,
you can just use the included PHPMyAdmin (URL is "localhost/phpMyAdmin"). 
3. Import the SQL file into that table.
4. Now, when you start the server and go to the URL "localhost" in your browser,
it should go to homepage. If this works, go to the URL "localhost/wp-admin"
5. Username: localhost Password: D@nsNfgR&hJjQow3EQuf(4JM
6. Next go to settings, permalinks, and just hit
save changes (no need to actually make any changes). This will reset the
permalink structure, allowing all the other pages besides just the homepage
to work!

also, you may eventually need to make the URLs relative instead of absolute. Meaning, the URLs for the additional pages right now are like, "http://localhost/donate" and instead they should just be /donate or something like that.

This isn't the actual process for live deployment and doesn't take any security
issues into account. It is just a rough way to view the progress of this
webpage.
