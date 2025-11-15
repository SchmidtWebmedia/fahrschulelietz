#!/usr/bin/env bash

BackupDir() {
  today=$(date +%Y-%m)
  backupDir=$PWD"/_backup/"$today
  mkdir -p $backupDir

  /usr/bin/keyhelp-php83 vendor/bin/typo3 database:export > $backupDir"/db.sql"
  zip -r -q $backupDir"/rollback.zip" backup.sql vendor/ var/ config/ packages/ public/ -x "./public/fileadmin/_processed_/**"
}

SCRIPT_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )
cd $SCRIPT_DIR

BackupDir
