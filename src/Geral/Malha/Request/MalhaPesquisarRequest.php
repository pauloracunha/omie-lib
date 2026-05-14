<?php

namespace OmieLib\Geral\Malha\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Malha\CustoProducao;
use OmieLib\Geral\Malha\Ident;
use OmieLib\Geral\Malha\ItemMalhaAlterar;
use OmieLib\Geral\Malha\ItemMalhaIncluir;
use OmieLib\Geral\Malha\ItemMalhaStatus;
use OmieLib\Geral\Malha\Itens;
use OmieLib\Geral\Malha\Observacoes;
use OmieLib\Geral\Malha\ProdutosEncontrados;
use OmieLib\Geral\Malha\ProdutosEstruturaJsonClient;
use OmieLib\Geral\Malha\Response\MalhaAlterarResponse;
use OmieLib\Geral\Malha\Response\MalhaConsultarResponse;
use OmieLib\Geral\Malha\Response\MalhaExcluirResponse;
use OmieLib\Geral\Malha\Response\MalhaIncluirResponse;
use OmieLib\Geral\Malha\Response\MalhaPesquisarResponse;

/**
 * Solicitação de Listagem de estruturas de produtos.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegPorPagina Número de registros retornados
 * @pw_element string $cOrdenarPor Ordem de exibição do dados.<BR>Pode ser:<BR>CODIGO<BR>CODIGO_INTEGRACAO
 * @pw_element string $dIncProdMalhaIni Data de Inclusão do item da estrutura do produto.
 * @pw_element string $dIncProdMalhaFim Data de Inclusão do item da estrutura do produto.
 * @pw_element string $hIncProdMalhaIni Hora de Inclusão do item da estrutura do produto.
 * @pw_element string $hIncProdMalhaFim Hora de Inclusão do item da estrutura do produto.
 * @pw_element string $dAltProdMalhaIni Data de Alteração do item da estrutura do produto.
 * @pw_element string $dAltProdMalhaFim Data de Alteração do item da estrutura do produto.
 * @pw_element string $hAltProdMalhaIni Hora de Alteração do item da estrutura do produto.
 * @pw_element string $hAltProdMalhaFim Hora de Alteração do item da estrutura do produto.
 * @pw_complex malhaPesquisarRequest
 */
class MalhaPesquisarRequest{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
	/**
	 * Ordem de exibição do dados.<BR>Pode ser:<BR>CODIGO<BR>CODIGO_INTEGRACAO
	 *
	 * @var string
	 */
	public string $cOrdenarPor;
	/**
	 * Data de Inclusão do item da estrutura do produto.
	 *
	 * @var string
	 */
	public string $dIncProdMalhaIni;
	/**
	 * Data de Inclusão do item da estrutura do produto.
	 *
	 * @var string
	 */
	public string $dIncProdMalhaFim;
	/**
	 * Hora de Inclusão do item da estrutura do produto.
	 *
	 * @var string
	 */
	public string $hIncProdMalhaIni;
	/**
	 * Hora de Inclusão do item da estrutura do produto.
	 *
	 * @var string
	 */
	public string $hIncProdMalhaFim;
	/**
	 * Data de Alteração do item da estrutura do produto.
	 *
	 * @var string
	 */
	public string $dAltProdMalhaIni;
	/**
	 * Data de Alteração do item da estrutura do produto.
	 *
	 * @var string
	 */
	public string $dAltProdMalhaFim;
	/**
	 * Hora de Alteração do item da estrutura do produto.
	 *
	 * @var string
	 */
	public string $hAltProdMalhaIni;
	/**
	 * Hora de Alteração do item da estrutura do produto.
	 *
	 * @var string
	 */
	public string $hAltProdMalhaFim;
}
