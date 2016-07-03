#Perseus
Perseus is a command line service runner based on Symfony Console

##Installation
Perseus is a PSR-4 compatible package.  You can install it via composer as a package in your application.

####Composer
```
composer require manufacturing-industry/perseus
```

##First Time Use
Create a new instance of Perseus in a empty php file and then run the following commands:

####Run the command line utility
```
php <myfile.php>
```
This will output the information about the command line utility.

####Build a Command
Commands are built using the Symfony [structure for console commands](http://symfony.com/doc/current/components/console/introduction.html).  These commands can be stored anywhere but must be in the Perseus Command namespace.

#####Required Namespace
```
Perseus\Console\Command
Example: Perseus\Console\Command\TestConsole
Example: The above namespace would translate to a class named Testconsole.
```

####Add Command to the Console
You can easily add commands to the console by supplying an array of class names of your commands as the first argument to the class when constructing it.

#####Example PHP:
```php
//commands is an array of class names that are symfony console commands in the perseus namespace
$commands = array('TestCommand', 'TestCommand2'), 'AnotherCommand');
new Perseus($commands);
```

You can now run the file you have instantiated Persus within and run your console commands. Let's suppose that file is console.php

#####Example Perseus Commands
```
php console.php testcommand1:task1
php console.php testcommand2:update
php console.php another:run
```
---
##Found a Bug?
Please report any bugs to the [issues](https://github.com/manufacturing-industry/perseus/issues) section.


##License & Author

#####License Information
- MIT - https://opensource.org/licenses/MIT

#####Author
- Ryan Rentfro - https://github.com/SourceCode