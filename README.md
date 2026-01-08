# Laraken

A production-ready Laravel starter powered by FrankenPHP and Docker. Zero config, maximum performance.

## Features

- **Blazing Fast** — FrankenPHP with Laravel Octane keeps workers alive. No cold starts.
- **Dev/Prod Parity** — Same Docker setup from local to production.
- **Secure by Default** — Non-root containers, proper permissions, security best practices.
- **Hot Reload** — Vite integration with instant HMR.
- **Batteries Included** — FrankenPHP, MariaDB, and more pre-configured.

## Requirements

- Docker & Docker Compose

## Quick Start

```bash
# Clone the repository
git clone https://github.com/AxelReviron/Laraken.git

# Navigate to the project
cd laraken

# Start containers
docker compose up -d

# You're live at http://localhost:8000
```

## Configuration

Copy the environment file and adjust as needed:

```bash
cp .env.example .env
```

Generate the application key:

```bash
docker compose exec app php artisan key:generate
```

## Development

Access the container shell :

```bash
make laraken-docker
```

