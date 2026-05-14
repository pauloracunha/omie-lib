<?php

namespace OmieLib\Estoque\Consulta\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Consulta\ConsultaEstoqueJsonClient;
use OmieLib\Estoque\Consulta\Estoque_listar_pendente_request;
use OmieLib\Estoque\Consulta\Estoque_listar_pendente_response;
use OmieLib\Estoque\Consulta\Estoque_mov_consulta_cadastro;
use OmieLib\Estoque\Consulta\Estoque_mov_consulta_cadastro_resposta;
use OmieLib\Estoque\Consulta\Lista_produtos;
use OmieLib\Estoque\Consulta\MovPeriodo;
use OmieLib\Estoque\Consulta\MovProduto;
use OmieLib\Estoque\Consulta\MovProdutoListar;
use OmieLib\Estoque\Consulta\Produtos;
use OmieLib\Estoque\Consulta\Request\EstoqueMovimentoRequest;
use OmieLib\Estoque\Consulta\Request\ListarEstPosRequest;
use OmieLib\Estoque\Consulta\Request\ListarMovEstoqueRequest;
use OmieLib\Estoque\Consulta\Saldo_pendente_lista;

/**
 * Resposta da solicitação de listagem da posição de estoque.
 *
 * @pw_element integer $nPagina Número da página retornada.
 * @pw_element integer $nTotPaginas Número total de páginas.
 * @pw_element integer $nRegistros Número de registros retornados na página.
 * @pw_element integer $nTotRegistros total de registros encontrados.
 * @pw_element string $dDataPosicao Data do Movimento
 * @pw_element produtosArray $produtos Posição do estoque dos produtos encontrados.
 * @pw_complex ListarEstPosResponse
 */
class ListarEstPosResponse{
	/**
	 * Número da página retornada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número total de páginas.
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
	 * total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $nTotRegistros;
	/**
	 * Data do Movimento
	 *
	 * @var string
	 */
	public string $dDataPosicao;
	/**
	 * Posição do estoque dos produtos encontrados.
	 *
	 * @var Produtos[]
	 */
	public array $produtos;
}
