# slidocli dockerized web interface

This directory provides a `docker-compose.yml` file which starts PHP-FPM and nginx and serves
[slidocli web interface 1](../www1/) or [slidocli web interface 2](../www2/) on port 8080.

## Environment variables

| Variable     | Default | Description |
|--------------|---------|-------------|
| `SLIDO_WWW`  | `www1`  | Slido web interface to use: `www1` or `www2` |
| `SLIDO_PORT` | `8080`  | Port on which the web interface will be made available to the host system |

## Usage

```bash
# Start up www1 web interface
docker-compose up
```
```bash
# Start up www2 web interface
export SLIDO_WWW=www2
docker-compose up
```
```bash
# Expose to Port 8090
export SLIDO_PORT=8090
docker-compose up
```
