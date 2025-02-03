# hang

This project provides a single API endpoint that returns basic details, including the current time in ISO-8601 format (UTC timezone), the authenticated user's email address, and the URL of this GitHub repository.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [API Endpoint](#api-endpoint)
- [Contributing](#contributing)
- [Backlink](#backlink)

## Introduction

This project is a public API that returns information such as a registered email, the current datetime in ISO 8601 format and this repository URL.

## Features

- Returns the current time in ISO-8601 format (UTC), a email address, URL of this GitHub repository in a json structure.

## Installation

1.  **Clone the repository:**

    ```bash
    git clone [https://github.com/prince-curie/hang.git](https://github.com/prince-curie/hang.git)
    cd YOUR_REPO_NAME
    ```

2. **Change Path**
    ```bash
        cd hang
    ```

3.  **Install Composer dependencies:**

    ```bash
    composer install
    ```

4.  **Copy the `.env.example` file to `.env` and configure your environment variables:**

    ```bash
    cp .env.example .env
    ```

    Update the `.env` file with your database credentials and other settings.  Pay particular attention to the `APP_KEY` – generate a new one if it's not already set:

    ```bash
    php artisan key:generate
    ```

5.  **Start the development server:**

    ```bash
    php artisan serve
    ```

## Usage

Once the server is running, you can access the API endpoint.

## API Endpoint

**`GET https://hang-o6gj.onrender.com/api/profile`**

Returns the following JSON response:

```json
{
    "email": "[email address removed]",
    "current_time": "2023-10-27T10:30:00+00:00",
    "github_url": "[https://github.com/YOUR_USERNAME/YOUR_REPO_NAME](https://github.com/YOUR_USERNAME/YOUR_REPO_NAME)"
}
```

- current_time: The current time in ISO-8601 format (UTC).
- email: An email address.
- github_url: The URL of this GitHub repository.

## Contributing
Contributions are welcome! Please open an issue or submit a pull request.

## Looking For Developers
- If you are hiring PHP developers, we have developers open to working with you. Click the link below to find them
[Hire PHP Developers](https://hng.tech/hire/php-developers)