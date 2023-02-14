#!/usr/bin/env bash
RemoveDir() {
  if [ -d "$1" ]; then
    rm -rv $1
  fi
}

SCRIPT_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )
cd $SCRIPT_DIR

rm -rv rollback.zip

zip -r -q rollback.zip vendor/ var/ config/ packages/ public/

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
