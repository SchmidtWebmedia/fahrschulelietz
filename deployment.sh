#!/usr/bin/env bash
RemoveDir() {
  if [ -d "$1" ]; then
    rm -rv $1
  fi
}

SCRIPT_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )
cd $SCRIPT_DIR

RemoveDir $PWD"/_backup"
mkdir $PWD"/_backup"

/usr/bin/php vendor/bin/typo3cms database:export > "$PWD/_backup/db.sql"
zip -r -q "$PWD/_backup/rollback.zip" backup.sql vendor/ var/ config/ packages/ public/ -x "./public/fileadmin/_processed_/**"

RemoveDir $PWD"/vendor"
RemoveDir $PWD"/var"
RemoveDir $PWD"/packages"
RemoveDir $PWD"/config"
RemoveDir $PWD"/public/typo3"
RemoveDir $PWD"/public/typo3temp"
RemoveDir $PWD"/public/typo3conf/ext"

unzip -o -q dist.zip

rm -rv dist.zip

RemoveDir $PWD"/public/typo3conf/ext/schmidtwebmedia"
RemoveDir $PWD"/public/typo3conf/ext/cceexport"

ln -s $PWD/packages/schmidtwebmedia/ $PWD/public/typo3conf/ext/schmidtwebmedia
ln -s $PWD/packages/cceexport/ $PWD/public/typo3conf/ext/cceexport

/usr/bin/php vendor/bin/typo3cms database:updateschema
/usr/bin/php vendor/bin/typo3cms cache:flush
/usr/bin/php vendor/bin/typo3cms language:update
