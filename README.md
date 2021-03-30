# Home Book Server  

- uses apache docker image  

- serves epub and pdf files from local drive, http://host:port/Books/directory/structure

- epub viewer, /viewers/epub_viewer/index.html, copied from  https://github.com/futurepress/epubjs-reader/  

- pdf viewer, /viewers/pdf_viewer/web/viewer.html, copied from https://github.com/mozilla/pdf.js/  

- php file returns json of local book files directory structure  

- run 'docker-compose up -d'  

