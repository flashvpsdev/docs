#00B2FF
#FF0000

rm -rf ../../public/vendor/docs/images/*
cp -r ./resources/images/* ../../public/vendor/docs/images/
npm run prod
