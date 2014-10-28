#!/bin/bash

DIR="/home/alex/Dropbox/School/UNCC/Y3/S1/ENGL-2116/Unit 3/site"

echo "Copying contents of \"$(pwd)\" to \"${DIR}\"..."
rsync -rulv --delete --exclude="$(basename $0)" --exclude=".git" . "${DIR}"
