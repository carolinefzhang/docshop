# DocShop

A Symfony-based document management system for organizing, viewing, and managing documents with a modern web interface.

## Features

- Document viewing and management
- RESTful API for document operations
- Modern UI with Tailwind CSS and Stimulus
- Document status tracking (Draft, Published, etc.)
- Command-line tools for document reporting
- Responsive sidebar navigation

## Tech Stack

- **Backend**: Symfony 7.3, PHP 8.2+
- **Frontend**: Stimulus, Turbo, Tailwind CSS
- **Architecture**: MVC pattern with repository layer

## Installation

1. Install dependencies:
   ```bash
   composer install
   ```

2. Start the development server:
   ```bash
   symfony serve
   ```

## API Endpoints

- `GET /api/docs` - List all documents
- `GET /api/docs/{id}` - Get specific document
- `GET /docs/{id}` - View document page

## Commands

- `php bin/console app:doc-report` - Generate document reports