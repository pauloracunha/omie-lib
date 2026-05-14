<?php

namespace OmieLib\Common;

/**
 * Proxy para navegação fluida pelos módulos do Omie.
 */
class ModuleProxy {
    private OmieConfig $config;
    private array $path;
    private array $manifest;

    public function __construct(OmieConfig $config, array $path, array $manifest) {
        $this->config = $config;
        $this->path = $path;
        $this->manifest = $manifest;
    }

    public function __get($name) {
        $newPath = $this->path;
        $newPath[] = str_replace('_', '-', strtolower($name));
        $pathString = implode('/', $newPath);

        if (isset($this->manifest[$pathString])) {
            $class = $this->manifest[$pathString]['namespace'] . '\\' . $this->manifest[$pathString]['class'];
            return new $class($this->config);
        }

        // Se o pathString for um prefixo de algum módulo no manifesto, retorna um Proxy
        foreach (array_keys($this->manifest) as $m) {
            if (str_starts_with($m, $pathString . '/')) {
                // Tenta encontrar um Proxy tipado gerado
                $proxyClass = 'OmieLib\\Proxies\\' . ucfirst($name) . 'Proxy';
                if (class_exists($proxyClass)) {
                    return new $proxyClass($this->config, $newPath, $this->manifest);
                }
                return new ModuleProxy($this->config, $newPath, $this->manifest);
            }
        }
        
        return new self($this->config, $newPath, $this->manifest);
    }
}
