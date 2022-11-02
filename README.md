# Interface de log (psr-3)

Seguindo as recomendações [Php-fig](https://www.php-fig.org/psr/psr-3/)

Observe que o BernardinoSlv\Psr3\Logger é um registrador simples que recebe como argumento um diretório base que será utilizado para armazenar logs de diferente níveis. Contudo, você pode usar da interface BernardinoSlv\Psr3\LoggerInterface para implementar suas classes de logs, e até mesmo extender BernardinoSlv\Psr3\AbstractLogger.

##### instalação
```
composer require BernardinoSlv/psr3
```

### uso
```
<?php

use BernardinoSlv\Psr3\LoggerInterface;

class Foo
{
    private ?LoggerInterface $logger = null;

    /*
    * Construtor que está associando o logger
    *   
    * @param string LoggerInterface $logger
    * @return void
    */

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function test(): void
    {
        if ($this->logger) {
            $this->logger->info("Funcionando ...");
        }

        // Resto do seu código
    }
}
``` 