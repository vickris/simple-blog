## Installation instructions
1. Clone the repo via this url `git@github.com:vickris/simple-blog.git`
2. Create a `.env` file by running the following command `cp .env.example .env`
3. Install various packages and dependencies: `composer install`
4. Run migrations then seed the database:
    ```bash
    php artisan migrate
    php artisan db:seed
    ```
5. Generate an encryption key for the app: `php artisan key:generate`.
