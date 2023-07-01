---
title: Configuration
weight: 3
---

## Configuration

to publish the config file run the command:

```bash
php artisan vendor:publish --tag=zeus-rhea-config
```

you can pass `--force` option to force publishing the config file.
the only config available is setting the `navigation_group_label`.

## Database Setup 

use the instructions from the package **corcel** [here](https://github.com/corcel/corcel#-database-setup)

## Usage

visit the url `/admin/importer` to start importing your posts.


