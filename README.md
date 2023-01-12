# Neptunia
## _Neo Plural Tune Indonesia_

[![N|Solid](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/nsolid)

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

Neptunia adalah framework buatan anak bangsa yang dikembangkan dengan tujuan mempermudah mempelajari struktur data framework, bisa di atur librarynya, adanya documentasi lengkap mendatang.

- Konsep Neptunia ( Neo => Baru, Plural => banyak, Tune => nada / bisa di adjust / tuning, Indonesia => buatan karya anak bangsa Indonesia)

## Fitur

- Nesa ( Neptunia Assistant )

> Nesa adalah console php framework Neptunia. ( mirip seperti artisan kalau pernah menggunakan laravel)


And of course Dillinger itself is open source with a [public repository][dill]
 on GitHub.

#
## Struktur Folder
|neptunia
    : ||-Config/
        : |||-Database/
            : ||||-UserDatabase.php
              : ||||-Queries/   
                : |||||-Query.php
        : |||-UserConfig.php
        |||-Routes/
            ||||-web.php
    : ||-Http/
        : |||-Controllers/
            : ||||-Controller.php
    : ||-Models/
        : |||-Model.php
: |-routes
    : ||-web.php
: |-views
    : ||-Layout/
        : |||-template.php
    : ||-Page/
        : |||-home.php
    : ||-Component/
        : |||-card.php
: |-public
    : ||-index.php
    ||-.htaccess
: |-index.php
|-src
|vendor
|.env
|.gitignore
|composer.json
|composer.lock
|index.php
|nesa
## Development

Want to contribute? Great!

developing local server di

```sh
127.0.0.1:8888
```

## License

MIT

