RemoveDir() {
  if [ -d "$1" ]; then
    rm -rv $1
  fi
}

cd /home/users/webdesignersoest/www/fahrschule-lietz.de

rm -rv rollback.zip

zip -r rollback.zip vendor/ var/ config/ packages/ public/

RemoveDir $PWD"/vendor"
RemoveDir $PWD"/var"
RemoveDir $PWD"/packages"
RemoveDir $PWD"/config"
RemoveDir $PWD"/public/typo3"
RemoveDir $PWD"/public/typo3temp"
RemoveDir $PWD"/public/typo3conf/ext"

unzip -o dist.zip

rm -rv dist.zip

/usr/bin/php vendor/bin/typo3cms database:updateschema
/usr/bin/php vendor/bin/typo3cms cache:flush
/usr/bin/php vendor/bin/typo3cms language:update
