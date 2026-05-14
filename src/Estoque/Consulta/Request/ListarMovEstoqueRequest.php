<?php

namespace OmieLib\Estoque\Consulta\Request;

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
use OmieLib\Estoque\Consulta\Response\EstoqueMovimentoResponse;
use OmieLib\Estoque\Consulta\Response\ListarEstPosResponse;
use OmieLib\Estoque\Consulta\Response\ListarMovEstoqueResponse;
use OmieLib\Estoque\Consulta\Saldo_pendente_lista;

/**
 * Solicitação da listagem de movimentação do estoque.
 *
 * @pw_element integer $nPagina Número da página retornada.
 * @pw_element integer $nRegPorPagina Número de registros retornados na página.
 * @pw_element integer $idProd Código do Produto.
 * @pw_element string $cCodInt Código de Integração do Produto.
 * @pw_element string $dDtInicial Data Inicial de Consulta de Estoque.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $dDtFinal Data Final da Consulta de Estoque.<BR><BR>Preenchimento obrigatório.
 * @pw_element integer $codigo_local_estoque Código do local do estoque.
 * @pw_element string $lista_local_estoque Lista de Códigos de Locais do Estoque.<BR><BR>Preenchimento opcional.<BR><BR>Separar os IDs por virgula (,) ou informar "TODOS" para listar todos os estoques de estoque.
 * @pw_complex ListarMovEstoqueRequest
 */
class ListarMovEstoqueRequest{
	/**
	 * Número da página retornada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
	/**
	 * Código do Produto.
	 *
	 * @var integer
	 */
	public int $idProd;
	/**
	 * Código de Integração do Produto.
	 *
	 * @var string
	 */
	public string $cCodInt;
	/**
	 * Data Inicial de Consulta de Estoque.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $dDtInicial;
	/**
	 * Data Final da Consulta de Estoque.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $dDtFinal;
	/**
	 * Código do local do estoque.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Lista de Códigos de Locais do Estoque.<BR><BR>Preenchimento opcional.<BR><BR>Separar os IDs por virgula (,) ou informar "TODOS" para listar todos os estoques de estoque.
	 *
	 * @var string
	 */
	public string $lista_local_estoque;
}
