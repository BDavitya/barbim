#!/bin/bash
mkdir -p database
if [ ! -f database/database.sqlite ]; then
  touch database/database.sqlite
fi