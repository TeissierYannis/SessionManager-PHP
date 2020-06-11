<h1 align="center">SessionManager-PHP</h1>

<div align="center">

[![PHP](https://img.shields.io/badge/PHP-*version>5-success.svg)]()
[![Class](https://img.shields.io/badge/Class-SessionManager_PHP-yellow.svg)]()
</div>

## 📝 Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Authors](#authors)

## 🧐 Installation <a name = "installation"></a>

To install this class, you only need to download and drag&drop the class with its dependencies. Choose your PHP version in the class folder.


## 💡 Usage <a name = "usage"></a>

To use this class, 

You need to write that:
```php
<?php

use TeissierYannis\Utils\SessionManager;

require '../Class/SessionManager.php';

SessionManager::setUserID($id)->setUserType($type);

if(SessionManager::isLogged()){
    var_dump(SessionManager::getUserID(), SessionManager::getUserType());
}
```

## ⛏️ Built With <a name = "tech_stack"></a>

- [PHP](http://php.net/) - PHP

## ✍️ Authors <a name = "authors"></a>

- [@TeissierYannis](https://github.com/TeissierYannis) - Idea & Initial work
