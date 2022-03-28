cd /var/www/repos/homepage
echo 'Start git fetch'
git fetch --progress --all && git reset --hard origin/main
echo 'Start npm'
npm install && npm run build
echo 'Start rsync'
rsync -r -v dist/* /var/www/html/
rsync -r -v public/* /var/www/html/
