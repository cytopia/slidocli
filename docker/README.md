# slidocli dockerized web interface

This directory provides a `docker-compose.yml` file which starts PHP-FPM and nginx and serves
[slidocli web interface 1](../www1/) or [slidocli web interface 2](../www2/) on port 8080.

## Configuration

Not required

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
