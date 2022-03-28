cd /var/www/repos/homepage
git fetch --all && git reset --hard origin/main &&
npm install &&
npm run build &&
rsync -r dist/* /var/www/html/
rsync -r public/* /var/www/html/
