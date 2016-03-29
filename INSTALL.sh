#!/usr/bin/env bash
composer install
cp -r assets/profiles/ public/content/plugins/
cp -r assets/example/ public/content/themes/
