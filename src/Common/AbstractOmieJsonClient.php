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
        
        $url = rtrim($this->config->host, '/') . '/' . ltrim(static::$_EndPoint, '/');
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
        
        // Se o Omie retornar um erro (geralmente tem a propriedade "faultstring" ou "faultcode")
        if (isset($decoded->faultstring) || isset($decoded->faultcode)) {
            throw new \Exception("Erro Omie: " . ($decoded->faultstring ?? "Erro desconhecido") . " (" . ($decoded->faultcode ?? "999") . ")", 1);
        }
        
        return $decoded;
    }

    /**
     * Converte um objeto genérico (stdClass) para a classe DTO específica.
     * 
     * @param mixed $data Dados retornados pelo _Call
     * @param string $className Nome da classe de destino
     * @return mixed Instância da classe de destino
     */
    protected function _Cast($data, string $className) {
        if (!$data) return null;
        
        $response = new $className();
        foreach ($data as $key => $value) {
            // Se for uma propriedade que existe na classe, atribui
            // Caso contrário, o PHP permitirá se for public ou dará erro se for typed
            // No nosso caso, as classes DTO têm propriedades public typed.
            try {
                $response->$key = $value;
            } catch (\TypeError $e) {
                // Se houver erro de tipo (ex: esperando array mas veio null), podemos tratar aqui ou deixar passar
                // Por enquanto vamos apenas atribuir.
                @$response->$key = $value;
            }
        }
        return $response;
    }
}
