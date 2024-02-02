# WebApp Suzuki Purwakarta

## Prerequisites

- GIT v2.43^ [download](https://git-scm.com/downloads)
- PHP v8.2^ [download](https://windows.php.net/download#php-8.1).
- Node JS v.21^ [download](https://nodejs.org/en).
- MYSQL v.8.3^ or other [download](https://dev.mysql.com/downloads/mysql/).
- Composer 2 [download](https://getcomposer.org).

## How to Install WebApp Suzuki Purwakarta

1. **Clone Project:**
    ```bash
    git clone https://github.com/maulanayusup701/laravel-suzuki.git
    ```

2. **Open Project Folder:**
    ```bash
    cd laravel-suzuki
    ```

3. **Install Dependencies (PHP and Node):**
    ```bash
    composer install
    npm install
    ```

4. **Copy .env File:**
    ```bash
    cp .env.example .env
    ```

5. **Edit .env File:**
    - Set `DB_DATABASE=`
    - Set `DB_USERNAME=`
    - Set `DB_PASSWORD=`
    - Set `FILESYSTEM_DISK=public`

6. **Generate Key:**
    ```bash
    php artisan key:generate
    ```

7. **Link Access Public Folder:**
   ```bash
    php artisan storage:link
    ```

8. **Migrate Database:**
    ```bash
    php artisan migrate
    ```

9.  **Run Server:**
    ```bash
    php artisan serve
    ```

10. **Run Node.js:**
    ```bash
    npm run dev
    ```

11. **Open in Browser:**
    ```bash
    http://127.0.0.1:8000
    ```