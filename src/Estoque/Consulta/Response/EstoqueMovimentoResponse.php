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
 * Resposta do consulta de movimentação do Estoque
 *
 * @pw_element integer $codigo_local_estoque Código do local do estoque.
 * @pw_element integer $id_prod Código do Produto.
 * @pw_element string $cod_int Código de Integração do Produto.
 * @pw_element string $descricao Descrição do Produto.
 * @pw_element movProdutoArray $movProduto Movimentação do produto
 * @pw_complex estoqueMovimentoResponse
 */
class EstoqueMovimentoResponse{
	/**
	 * Código do local do estoque.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Código do Produto.
	 *
	 * @var integer
	 */
	public int $id_prod;
	/**
	 * Código de Integração do Produto.
	 *
	 * @var string
	 */
	public string $cod_int;
	/**
	 * Descrição do Produto.
	 *
	 * @var string
	 */
	public string $descricao;
	/**
	 * Movimentação do produto
	 *
	 * @var MovProduto[]
	 */
	public array $movProduto;
}
