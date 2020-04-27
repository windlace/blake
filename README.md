Blake
---
**Pure PHP-implementation without any extensions**

#### Install:
```php
composer require cast/blake
```

#### Usage:
```php
<?php

use function Cast\Crypto\Blake\blake256;

blake256('The quick brown fox jumps over the lazy dog');
// 7576698ee9cad30173080678e5965916adbb11cb5245d386bf1ffda1cb26c9d7

```

Based on https://github.com/decred/decred-php-api.
