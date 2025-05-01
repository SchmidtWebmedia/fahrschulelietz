#!/usr/bin/env bash
RemoveDir() {
  if [ -d "$1" ]; then
    rm -rv $1
  fi
}

BackupDir() {
  today=$(date +%Y-%m)
  backupDir = $PWD"/_backup/"$today
  mkdir -p $backupDir

  /usr/bin/keyhelp-php83 vendor/bin/typo3cms database:export > $backupDir"/db.sql"
  zip -r -q $backupDir"/rollback.zip" backup.sql vendor/ var/ config/ packages/ public/ -x "./public/fileadmin/_processed_/**"
}

SCRIPT_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )
cd $SCRIPT_DIR

BackupDir

RemoveDir $PWD"/vendor"
RemoveDir $PWD"/var"
RemoveDir $PWD"/packages"
RemoveDir $PWD"/config/sites"
RemoveDir $PWD"/public/typo3"
RemoveDir $PWD"/public/typo3temp"
RemoveDir $PWD"/public/typo3conf/ext"

unzip -o -q dist.zip

rm -rv dist.zip

RemoveDir $PWD"/public/typo3conf/ext/schmidtwebmedia"
RemoveDir $PWD"/public/typo3conf/ext/cceexport"

ln -s $PWD/packages/schmidtwebmedia/ $PWD/public/typo3conf/ext/schmidtwebmedia
ln -s $PWD/packages/cceexport/ $PWD/public/typo3conf/ext/cceexport

/usr/bin/keyhelp-php83 vendor/bin/typo3 database:updateschema
/usr/bin/keyhelp-php83 vendor/bin/typo3 cache:flush
/usr/bin/keyhelp-php83 vendor/bin/typo3 language:update
