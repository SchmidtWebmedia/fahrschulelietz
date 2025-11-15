#!/usr/bin/env bash
KEYHELP_PHP="/usr/bin/keyhelp-php83"

RemoveDir() {
  if [ -d "$1" ]; then
    rm -rv $1
  fi
}

SCRIPT_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )
cd $SCRIPT_DIR

RemoveDir $PWD"/public/_assets"

$KEYHELP_PHP /usr/local/bin/composer dumpautoload

$KEYHELP_PHP vendor/bin/typo3 database:updateschema
$KEYHELP_PHP vendor/bin/typo3 cache:flush
$KEYHELP_PHP vendor/bin/typo3 language:update
