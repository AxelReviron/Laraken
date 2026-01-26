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

# Navigate to the directory
cd laraken

# Copy the environment file and adjust as needed:
# You don't need to specify `APP_KEY`, it will automatically be generated
cp .env.example .env

# Start everything
docker compose up -f compose.dev.yaml -d
```

## Development
Access the container shell :

```bash
make laraken-docker
```

## Production
Access the container shell :

```bash
# Configure .env on your server and simply start with :
docker compose up -d
```
