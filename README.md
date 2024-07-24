# PRIHUBS - Pet Shop Web Application

Welcome to PET SHOP, a comprehensive web application. This application is based on an HTML template that has been modified and optimized by breaking the code into reusable components.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Running the Application](#running-the-application)
- [Usage](#usage)
- [Extra Features](#extra-features)
- [Contributing](#contributing)
- [License](#license)

## Introduction

PET SHOP is designed to provide a seamless experience for pet shop owners and customers. The application includes various sections like Home, About, Blog, Details, Services, Contact, and Pages.

## Features

- **Home**: The landing page of the application.
- **About**: Information about the pet shop.
- **Blog**: Blog section for articles and updates.
- **Blog Details**: Detailed information about blog or products.
- **Services**: List of services offered by the pet shop.
- **Contact**: Contact form and information.
- **Pages**: Additional pages as needed.

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP >= ^8
- Composer
- Laravel ^11.x
- MySQL or any other supported database

## Installation

To install PRIHUBS, follow these steps:

1. **Clone the repository:**

    ```bash
    git clone https://github.com/prihubs/petshop
    cd petshop
    ```

2. **Install dependencies:**

    ```bash
    composer install
    ```

3. **Set up environment variables:**

    Copy the `.env.example` file to `.env` and update the necessary settings, especially the database configuration.

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Migrate and seed the database:**

    ```bash
    php artisan migrate --seed
    ```

## Running the Application

To run the application, use the following command:

```bash
php artisan serve
```


## Accessing the Application

After running the command, you can access the application at [http://localhost:8000](http://localhost:8000).

## Usage

### Visit the Site URI

Open your browser and go to your site uri eg -- [http://localhost:8000](http://localhost:8000).

### Get Your Access Key

Visit [http://uri/mykey](http://uri/mykey) to get your access key (important!).

### Create an Account

Click on the "Signup" button available on the navigation bar or in the important links section at the bottom of the page.

### Update Profile Information

Proceed to your profile to update general information.

## Extra Features

### Access Key Management

You can delete the current access keys and regenerate a new one when logged in. This can be done from the mykey page.
