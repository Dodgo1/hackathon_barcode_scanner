# mini_hackathon
Project fot the Mini_hackathon  /theme=recycling

Project is a site prototype, it uses one python script for decoding barcode images. Then it searches DataBase specified in inc/db.inc.php for match, if the DB has no info, it asks user for info about the package and in which recycle bin type it belongs. Saves to DB.

Currently using xamp as a database but it's hostable on AWS or other cloud service. (of course you can host it locally but the security measures have to be tighten)

Dependencies: 
- pip install opencv-python
- pip install pyzbar
- Visual C++ Redistributable Packages for Visual Studio 2013
- mysqli ext - safer i think

TODO:
- adminPage for authentification of new info 
- home page fot scrolling thru informations ?
- 

Problems:

1. You can;t upload an image if the name is already taken, you have to either remove image, change image name or delete the old one. Shouldn't be an issue when user connects thru mobile phone. It's mainly an issue when testing - solvable
FOR MORE ctrl+f in functions.inc.py : // FILE NAME HANDLING PROBLEM

2. Security issues e.g: (for example) 
- no ht.ascess
- visible file names
- is db secure?

3. inform user about cookies?

4. Tweak main.py so it decodes recognizes barcodes better,

5. Polish signs when uploading to db? (input.php)

6. Front-end needs to be finished, dispaly css for every page, include footer and header for every page, simple stuff but time consuming.

7.  ssl certificate when setting up on a server

8. errors while inputing - barcode isn't uploaded to db, no info from form
