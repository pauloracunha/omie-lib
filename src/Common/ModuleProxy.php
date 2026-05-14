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
        $pathStr = implode('/', $newPath);

        // Verifica se este path aponta diretamente para um cliente no manifesto
        if (isset($this->manifest[$pathStr])) {
            $info = $this->manifest[$pathStr];
            $fullClass = "\\" . ltrim($info['namespace'] . "\\" . $info['class'], '\\');
            return new $fullClass($this->config);
        }

        // Caso contrário, continua navegando (sub-módulo)
        return new self($this->config, $newPath, $this->manifest);
    }
}
