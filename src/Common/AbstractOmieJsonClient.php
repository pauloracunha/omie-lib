<?php

namespace OmieLib\Common;

/**
 * Classe base para os clientes JSON do Omie.
 */
abstract class AbstractOmieJsonClient {
    /**
     * Configuração do cliente.
     */
    protected OmieConfig $config;

    /**
     * @param OmieConfig $config Objeto de configuração
     */
    public function __construct(OmieConfig $config) {
        $this->config = $config;
    }

    /**
     * Executa a chamada à API.
     * 
     * @param string $method O nome do método
     * @param array $param Os parâmetros
     * @return mixed A resposta do servidor
     */
    protected function _Call($method, $param) {
        $call = [
            "call" => $method,
            "param" => $param,
            "app_key" => $this->config->appKey,
            "app_secret" => $this->config->appSecret
        ];
        
        $url = rtrim($this->config->host, '/') . static::$_EndPoint;
        $body = json_encode($call);
        
        $opts = stream_context_create([
            "http" => [
                "method" => "POST",
                "header" => "Content-Type: application/json",
                "content" => $body,
                "ignore_errors" => true
            ]
        ]);
        
        $res = @file_get_contents($url, false, $opts);
        
        if (empty($res)) {
            throw new \Exception("Erro ao processar requisição Omie: resposta vazia.", 1);
        }
        
        $decoded = json_decode($res);
        
        // Se houver erro no decode ou se a resposta indicar falha (se o Omie retornar erro no JSON)
        // Note: Omie geralmente retorna 200 mesmo em erros, o erro vem no JSON ou via OmieFail.
        
        return $decoded;
    }
}
