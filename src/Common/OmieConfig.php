<?php

namespace OmieLib\Common;

/**
 * Configuração de acesso à API do Omie.
 */
class OmieConfig {
    public string $host;
    public string $appKey;
    public string $appSecret;

    public function __construct(string $host, string $appKey, string $appSecret) {
        $this->host = $host;
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
    }
}
