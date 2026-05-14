<?php

namespace OmieLib\Produtos\Nfe\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfe\Itens;
use OmieLib\Produtos\Nfe\ItensXml;
use OmieLib\Produtos\Nfe\Lancamentos;
use OmieLib\Produtos\Nfe\ListagemNfe;
use OmieLib\Produtos\Nfe\Lote_validade;
use OmieLib\Produtos\Nfe\NfeJsonClient;
use OmieLib\Produtos\Nfe\Parcelas;
use OmieLib\Produtos\Nfe\Request\NfeCancelarRequest;
use OmieLib\Produtos\Nfe\Request\NfeExcluirRequest;
use OmieLib\Produtos\Nfe\Request\NfeImportarRequest;
use OmieLib\Produtos\Nfe\Request\NfeListarRequest;

/**
 * Resposta da solicitação de listagem de NFes importadas.
 *
 * @pw_element integer $nPagina Número da página resgatada.
 * @pw_element integer $nTotPaginas Número total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados na página.
 * @pw_element integer $nTotRegistros Número total de registros encontrados.
 * @pw_element listagemNfeArray $listagemNfe Lista de NFes importadas.
 * @pw_complex nfeListarResponse
 */
class NfeListarResponse{
	/**
	 * Número da página resgatada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número total de páginas encontradas.
	 *
	 * @var integer
	 */
	public int $nTotPaginas;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $nRegistros;
	/**
	 * Número total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $nTotRegistros;
	/**
	 * Lista de NFes importadas.
	 *
	 * @var ListagemNfe[]
	 */
	public array $listagemNfe;
}
