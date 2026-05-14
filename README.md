# OmieLib - PHP SDK

Biblioteca robusta e fortemente tipada para integração com o ERP Omie.

## Instalação

```bash
composer require pauloracunha/omie-lib
```

## Uso Básico

```php
use OmieLib\OmieAPI;

$omie = new OmieAPI('https://app.omie.com.br/api/v1', 'SUA_KEY', 'SEU_SECRET');

// Exemplo: Consultar Resumo do Contador
$request = new OmieLib\Contador\Resumo\Request\ObterResumoContadorRequest();
$resumo = $omie->contador->resumo->ObterResumoContador($request);

var_dump($resumo);
```

## Características
- Suporte a PHP 7.4+
- Tipagem nativa em propriedades e métodos.
- Navegação fluida entre módulos.
- Zero dependências externas.