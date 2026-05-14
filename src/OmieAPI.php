<?php

namespace OmieLib;

use OmieLib\Common\OmieConfig;
use OmieLib\Common\ModuleProxy;

/**
 * @property \OmieLib\Proxies\ProdutosProxy $produtos
 * @property \OmieLib\Proxies\CrmProxy $crm
 * @property \OmieLib\Proxies\GeralProxy $geral
 * @property \OmieLib\Proxies\FinancasProxy $financas
 * @property \OmieLib\Proxies\EstoqueProxy $estoque
 * @property \OmieLib\Proxies\ContadorProxy $contador
 * @property \OmieLib\Proxies\ServicosProxy $servicos
 */
class OmieAPI {
    private OmieConfig $config;
    private array $manifest;

    /**
     * @param string $host URL base (ex: https://app.omie.com.br/api/v1)
     * @param string $appKey Sua APP_KEY do Omie
     * @param string $appSecret Seu APP_SECRET do Omie
     */
    public function __construct(string $host, string $appKey, string $appSecret) {
        $this->config = new OmieConfig($host, $appKey, $appSecret);
        $this->manifest = require __DIR__ . '/Common/manifest.php';
    }

    /**
     * Navegação fluida para módulos.
     */
    public function __get($name) {
        $proxy = new ModuleProxy($this->config, [], $this->manifest);
        return $proxy->$name;
    }
}
