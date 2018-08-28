### Steps to install ###
1. Run composer install
2. Run php artisan migrate
3. Run php artisan key:generate
4. Run php artisan serve --port=8000

### Configure the Database (optional) 

If you want to use `mysql` for the example, change settings in `.env` file. The default settings are:

    DB_HOST=localhost
    DB_DATABASE=homestead
    DB_USERNAME=homestead
    DB_PASSWORD=secret

After the database is configured, apply the migrations:

    php artisan migrate

Please see the `app/Providers/AppServiceProvider.php` file for information on how to configure the application to store users in the database along with Auth0 authentication. Just running the configuration operations above does not enable this functionality. 

### Configuration

1. Rename the `.env.example` file to `.env` and add the required credentials from the settings page for the Application created previously.
    * **Domain** as `AUTH0_DOMAIN`
    * **Client ID** as `AUTH0_CLIENT_ID`
    * **Client Secret** as `AUTH0_CLIENT_SECRET`
1. Enter `php artisan key:generate` in the console to create an `APP_KEY` automatically in the `.env` file.
1. Go to your [Auth0 dashboard](https://manage.auth0.com) and add the following:
    * `http://localhost:8000/auth0/callback` to the **Allowed Callback URLs** field
    * `http://localhost:8000` to the **Allowed Web Origins** field
    * `http://localhost:8000` to the **Allowed Logout URLs** field
1. Serve the application by running:
    * Run `php artisan serve --port=8000`; open [http://localhost:8000](http://localhost:8000) in your browser
    
