npm install
npm run build
rsync -r dist/* /var/www/html/
rsync -r public/* /var/www/html/
