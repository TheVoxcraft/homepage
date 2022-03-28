cd /var/www/repos/homepage
git fetch --progress --all && git reset --hard origin/main
npm install && npm run build
rsync -r -v dist/* /var/www/html/
rsync -r -v public/* /var/www/html/
