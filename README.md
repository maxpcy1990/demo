# Demo

assessment project

**Project prerequisite**
 1. Composer - https://getcomposer.org/download/
 2. Node.js - https://nodejs.org/en/download
 3. xampp - https://www.apachefriends.org/download.html

**Installation steps**
 1. cd installed xampp path
 2. git clone - https://github.com/maxpcy1990/demo.git
 3. cd demo
 4. npm install
 5. composer i
 6. create .env file with content below or copy from .env_dev:

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:FLJZbxNA7RhjzZobYgXb2G0LGdiqon4sWmovL+sFS2k=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

 7. xampp start apache, mysql
 8. Visit - http://localhost/phpmyadmin/
 9. Create database name > laravel
 10. Import database file - backup-2023-05-14.sql

**Running localhost**
1. php artisan serve
2. Open another terminal > cd to demo project path > npm run dev