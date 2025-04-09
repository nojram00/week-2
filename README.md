### How to Run this Website/Page?

1. Using git clone this repository by running:

```bash
    git clone
```

2. Run The following commands:

```bash
    npm install # to install frontend dependencies 
    npm run build # to build css and js assets

    composer install # to install backend dependencies (laravel)
    php artisan serve # to run laravel server

```

3. To migrate data and add data:

```bash
    php artisan migrate
    php artisan db:seed
```

4. For environment variables, click <a href="https://file-downloader-vxq2.onrender.com/download?file=week-2.env">here</a>
   <b>Note: </b> Rename the file name into '.env'