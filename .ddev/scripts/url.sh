#!/bin/bash

ENV_FILE="/var/www/html/.env"
URL="https://testing.digitalejungle.be/"

# Wait until the .env file is available
echo "⏳ Waiting for .env file to become available..."

TRIES=0
while [ ! -f "$ENV_FILE" ]; do
  sleep 1
  TRIES=$((TRIES + 1))
  if [ $TRIES -ge 15 ]; then
    echo "❌ Timeout waiting for .env file"
    exit 1
  fi
done

# Update the value
sed -i "s|^PRIMARY_SITE_URL=.*|PRIMARY_SITE_URL=\"$URL\"|" "$ENV_FILE"
echo "✅ PRIMARY_SITE_URL set to " $URL