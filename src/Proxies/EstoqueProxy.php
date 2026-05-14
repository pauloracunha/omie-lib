<?php

namespace OmieLib\Proxies;

use OmieLib\Common\ModuleProxy;

/**
 * @property \OmieLib\Estoque\Consulta\ConsultaEstoqueJsonClient $consulta
 * @property \OmieLib\Estoque\Produtofornecedor\ProdutosPorFornecedorJsonClient $produtofornecedor
 * @property \OmieLib\Estoque\Movestoque\MovimentoEstoqueJsonClient $movestoque
 * @property \OmieLib\Estoque\Local\LocalEstoqueJsonClient $local
 * @property \OmieLib\Estoque\Comprador\CompradoresJsonClient $comprador
 * @property \OmieLib\Estoque\Ajuste\AjusteEstoqueJsonClient $ajuste
 * @property \OmieLib\Estoque\Resumo\ResumoEstoqueJsonClient $resumo
 */
class EstoqueProxy extends ModuleProxy {}
