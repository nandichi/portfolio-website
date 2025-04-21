#!/bin/bash

# Dit script genereert alle benodigde favicon-bestanden vanuit favicon.svg
# Vereist: ImageMagick en rsvg-convert (librsvg)

# Controleer of de benodigde tools zijn geïnstalleerd
command -v convert >/dev/null 2>&1 || { echo "ImageMagick is vereist maar niet geïnstalleerd. Installeer het met 'brew install imagemagick'."; exit 1; }
command -v rsvg-convert >/dev/null 2>&1 || { echo "librsvg is vereist maar niet geïnstalleerd. Installeer het met 'brew install librsvg'."; exit 1; }

echo "Favicon generator gestart..."

# Maak een tijdelijke PNG met hoge resolutie
rsvg-convert -w 1024 -h 1024 favicon.svg -o temp-favicon.png

# Genereer verschillende favicon formaten
echo "Genereren van favicon-16x16.png..."
convert temp-favicon.png -resize 16x16 favicon-16x16.png

echo "Genereren van favicon-32x32.png..."
convert temp-favicon.png -resize 32x32 favicon-32x32.png

echo "Genereren van favicon.ico..."
convert temp-favicon.png -resize 16x16 favicon-16x16.png
convert temp-favicon.png -resize 32x32 favicon-32x32.png
convert temp-favicon.png -resize 48x48 favicon-48x48.png
convert favicon-16x16.png favicon-32x32.png favicon-48x48.png favicon.ico

echo "Genereren van Apple Touch Icon..."
convert temp-favicon.png -resize 180x180 apple-touch-icon.png

echo "Genereren van Android Chrome icons..."
convert temp-favicon.png -resize 192x192 android-chrome-192x192.png
convert temp-favicon.png -resize 512x512 android-chrome-512x512.png

echo "Genereren van Microsoft Tile icons..."
convert temp-favicon.png -resize 70x70 mstile-70x70.png
convert temp-favicon.png -resize 144x144 mstile-144x144.png
convert temp-favicon.png -resize 150x150 mstile-150x150.png
convert temp-favicon.png -resize 310x150 mstile-310x150.png
convert temp-favicon.png -resize 310x310 mstile-310x310.png

echo "Genereren van Safari Pinned Tab icon..."
convert temp-favicon.png -resize 512x512 -background none -gravity center -extent 512x512 safari-pinned-tab.svg

# Verwijder tijdelijke bestanden
rm temp-favicon.png favicon-48x48.png

echo "Alle favicon bestanden zijn succesvol gegenereerd!"
echo "Plaats deze bestanden in de hoofdmap van je website." 