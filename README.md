Spork Silex/Cilex Provider
==================


Dependency Injection provider for <a href="https://github.com/kriswallsmith/spork">Spork</a> can be used in <a href="https://github.com/fabpot/Silex">Silex</a> and <a href="https://github.com/Cilex/Cilex">Cilex</a>.



### How to use in Silex:

```php
<?php

	$app->register(new Cobaia\Spork\Provider\Silex\SporkProvider());
	$app['spork']->fork(function() {
    	// do something in another process!
    	return 'Hello from '.getmypid();
	})->then(function(Spork\Fork $fork) {
    	// do something in the parent process when it's done!
    	echo "{$fork->getPid()} says '{$fork->getResult()}'\n";
	});
```

### How to use in Cilex:


```php
<?php

	$app->register(new Cobaia\Spork\Provider\Cilex\SporkProvider());
	$app['spork']->fork(function() {
    	// do something in another process!
    	return 'Hello from '.getmypid();
	})->then(function(Spork\Fork $fork) {
    	// do something in the parent process when it's done!
    	echo "{$fork->getPid()} says '{$fork->getResult()}'\n";
	});
```