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
 * Consulta Movimento de Estoque de um Produto
 *
 * @pw_element integer $codigo_local_estoque Código do local do estoque.
 * @pw_element integer $id_prod Código do Produto.
 * @pw_element string $cod_int Código de Integração do Produto.
 * @pw_element string $dataInicial Data Inicial de Consulta de Estoque.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $dataFinal Data Final da Consulta de Estoque.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $tipo_movimento Tipo de movimento.<BR><BR>Pode ser:<BR>S - Saída<BR>E - Entrada<BR><BR>Preenchimento opcional.
 * @pw_complex estoqueMovimentoRequest
 */
class EstoqueMovimentoRequest{
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
	 * Data Inicial de Consulta de Estoque.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $dataInicial;
	/**
	 * Data Final da Consulta de Estoque.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $dataFinal;
	/**
	 * Tipo de movimento.<BR><BR>Pode ser:<BR>S - Saída<BR>E - Entrada<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $tipo_movimento;
}
