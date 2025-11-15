#!/usr/bin/env bash
RemoveDir() {
  if [ -d "$1" ]; then
    rm -rv $1
  fi
}

SCRIPT_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )
cd $SCRIPT_DIR

RemoveDir $PWD"/public/_assets"

/usr/bin/keyhelp-php83 /usr/local/bin/composer dumpautoload

/usr/bin/keyhelp-php83 vendor/bin/typo3 database:updateschema
/usr/bin/keyhelp-php83 vendor/bin/typo3 cache:flush
/usr/bin/keyhelp-php83 vendor/bin/typo3 language:update
