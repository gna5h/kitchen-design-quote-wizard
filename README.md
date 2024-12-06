<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Setup Instructions

## 1. Install PHP

### On Windows

#### - Download PHP:

-   Visit the [official PHP website](https://www.php.net/).
-   Download the latest thread-safe version of PHP.

#### - Extract PHP:

-   Extract the downloaded ZIP file to a directory, e.g., `C:\php`.

#### - Add PHP to System Path:

-   Open **Control Panel** > **System** > **Advanced System Settings** > **Environment Variables**.
-   Under **System variables**, find the `Path` variable, select it, and click **Edit**.
-   Add the path to the PHP folder (e.g., `C:\php`).

#### - Verify Installation:

-   Open **Command Prompt** or **PowerShell** and run:
    ```bash
    php -v
    ```

### On Mac

#### - Install Homebrew (if not already installed):

-   Open the Terminal and run:
    ```bash
    /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
    ```

#### - Install PHP:

-   Run the following command:
    ```bash
    brew install php
    ```

#### - Verify installation:

-   Check the installed PHP version:
    ```bash
    php -v
    ```
-   If PHP is not linked correctly, run:
    ```bash
    brew link php
    ```

## 2. Install Composer

### On Windows

#### - Download Composer Installer:

-   Visit the [Composer download page](https://getcomposer.org/download/).
-   Click on **Composer-Setup.exe** to download the installer.

#### - Run the Installer:

-   Launch the downloaded `Composer-Setup.exe`.
-   During the installation:
    -   Select the path to `php.exe` (e.g., `C:\php\php.exe`).
    -   Ensure the option **Add Composer to PATH** is selected.

#### - Verify Installation:

-   Open **Command Prompt** or **PowerShell** and run:
    ```bash
    composer -v
    ```

### On Mac

### - Install Composer Globally::

-   Open the Terminal and run the following commands:
    -   Step 1: Download the Composer installer:
        ```bash
        composer -v
        ```
    -   Step 2: Move the Composer binary to a global location:
        ```bash
        sudo mv composer.phar /usr/local/bin/composer
        ```

### - Verify Installation:

-   Open **Command Prompt** or **PowerShell** and run:
    ```bash
    composer -v
    ```

## 3. Install Node.js

### On Windows

#### - Download Node.js:

-   Visit the Node.js official website.
-   Download and install the LTS version.

#### - Verify Installation:

-   Open **Command Prompt** or **PowerShell** and run:
    ```bash
    node -v
    npm -v
    ```

### On Mac

#### - Install PHP:

-   Install Node.js with Homebrew:
    ```bash
    brew install node
    ```

#### - Verify installation:

-   Check the installed version:
    ```bash
    node -v
    npm -v
    ```
