#!/usr/bin/env bash

# Install Docker
curl -fsSL https://get.docker.com  | sh

# Install Docker Compose
curl -L "https://github.com/docker/compose/releases/download/1.24.1/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
chmod +x /usr/local/bin/docker-compose

# Install git
apt update;
apt install -y git;

# Install and run slidocli
git clone https://github.com/cytopia/slidocli /tmp/slidocli
cd /tmp/slidocli/docker

# Setup
export SLIDO_PORT=${slido_port}
export SLIDO_WWW=www2

docker-compose up -d
