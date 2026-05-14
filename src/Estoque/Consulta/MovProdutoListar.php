<?php

namespace OmieLib\Estoque\Consulta;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Consulta\Request\EstoqueMovimentoRequest;
use OmieLib\Estoque\Consulta\Request\ListarEstPosRequest;
use OmieLib\Estoque\Consulta\Request\ListarMovEstoqueRequest;
use OmieLib\Estoque\Consulta\Response\EstoqueMovimentoResponse;
use OmieLib\Estoque\Consulta\Response\ListarEstPosResponse;
use OmieLib\Estoque\Consulta\Response\ListarMovEstoqueResponse;

/**
 * Movimentação do produto.
 *
 * @pw_element integer $idMov Identificação do Movimento.
 * @pw_element string $dtMov Data do movimento
 * @pw_element string $dtEmissao Data de emissão.
 * @pw_element string $codOrigem Código da Origem
 * @pw_element string $desOrigem Descrição da Origem
 * @pw_element string $numDoc Número do Documento (Nota Fiscal)
 * @pw_element string $numPedido Número do Pedido.<BR>Identifica o Pedido de Vendas de Produto, Remessa ou Devolução.<BR>
 * @pw_element string $operacao Código da Operação realizada. <BR><BR>Pode ser:<BR><BR>00 - Ajuste no estoque<BR>11 - Venda de Produto              <BR>12 - Venda de Produto pelo PDV     <BR>13 - Devolução de Venda            <BR>14 - Remessa de Produto            <BR>16 - Nota Complementar de Saída<BR>21 - Compra de Produto             &nbsp;<BR>23 - Devolução ao Fornecedor       &nbsp;<BR>24 - Retorno de Remessa            &nbsp;<BR>26 - Nota Complementar de Entrada  &nbsp;<BR>22 - Compra de Produto (Importação)&nbsp;<BR>28 - Ordem de Produção
 * @pw_element string $cancelamento Indica se é um movimento de cancelamento de Nota Fiscal (S/N).
 * @pw_element string $devolucao Indica se é um movimento de devolução de Nota Fiscal (S/N).
 * @pw_element integer $idAjuste Id do Ajuste de estoque.
 * @pw_element integer $idDoc ID da Nota Fiscal.
 * @pw_element integer $idPedido ID do Pedido.<BR>Identifica o Pedido de Venda de Produto, Remessa ou Devolução.
 * @pw_element integer $idCupom ID do Cupom Fiscal.
 * @pw_element integer $idCte ID do CTE (Conhecimento de Transporte).
 * @pw_element integer $idRecebimento ID do recebimento. <BR>Para notas de entrada.
 * @pw_element integer $codigo_local_estoque Código do local do estoque.
 * @pw_element integer $idProd Código do Produto.
 * @pw_element string $tipo Tipo da operação. <BR><BR>Pode ser:<BR>saida<BR>entrada
 * @pw_element string $descricao Descrição do Produto.
 * @pw_element decimal $cmc Valor do CMC da Consulta de Estoque.
 * @pw_element decimal $qtde Quantidade do Movimento
 * @pw_element decimal $valor Valor do movimento.
 * @pw_element decimal $saldo Saldo de Estoque da Consulta
 * @pw_element integer $idItem Id do item do movimento.
 * @pw_complex movProdutoListar
 */
class MovProdutoListar{
	/**
	 * Identificação do Movimento.
	 *
	 * @var integer
	 */
	public int $idMov;
	/**
	 * Data do movimento
	 *
	 * @var string
	 */
	public string $dtMov;
	/**
	 * Data de emissão.
	 *
	 * @var string
	 */
	public string $dtEmissao;
	/**
	 * Código da Origem
	 *
	 * @var string
	 */
	public string $codOrigem;
	/**
	 * Descrição da Origem
	 *
	 * @var string
	 */
	public string $desOrigem;
	/**
	 * Número do Documento (Nota Fiscal)
	 *
	 * @var string
	 */
	public string $numDoc;
	/**
	 * Número do Pedido.<BR>Identifica o Pedido de Vendas de Produto, Remessa ou Devolução.<BR>
	 *
	 * @var string
	 */
	public string $numPedido;
	/**
	 * Código da Operação realizada. <BR><BR>Pode ser:<BR><BR>00 - Ajuste no estoque<BR>11 - Venda de Produto              <BR>12 - Venda de Produto pelo PDV     <BR>13 - Devolução de Venda            <BR>14 - Remessa de Produto            <BR>16 - Nota Complementar de Saída<BR>21 - Compra de Produto             &nbsp;<BR>23 - Devolução ao Fornecedor       &nbsp;<BR>24 - Retorno de Remessa            &nbsp;<BR>26 - Nota Complementar de Entrada  &nbsp;<BR>22 - Compra de Produto (Importação)&nbsp;<BR>28 - Ordem de Produção
	 *
	 * @var string
	 */
	public string $operacao;
	/**
	 * Indica se é um movimento de cancelamento de Nota Fiscal (S/N).
	 *
	 * @var string
	 */
	public string $cancelamento;
	/**
	 * Indica se é um movimento de devolução de Nota Fiscal (S/N).
	 *
	 * @var string
	 */
	public string $devolucao;
	/**
	 * Id do Ajuste de estoque.
	 *
	 * @var integer
	 */
	public int $idAjuste;
	/**
	 * ID da Nota Fiscal.
	 *
	 * @var integer
	 */
	public int $idDoc;
	/**
	 * ID do Pedido.<BR>Identifica o Pedido de Venda de Produto, Remessa ou Devolução.
	 *
	 * @var integer
	 */
	public int $idPedido;
	/**
	 * ID do Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $idCupom;
	/**
	 * ID do CTE (Conhecimento de Transporte).
	 *
	 * @var integer
	 */
	public int $idCte;
	/**
	 * ID do recebimento. <BR>Para notas de entrada.
	 *
	 * @var integer
	 */
	public int $idRecebimento;
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
	public int $idProd;
	/**
	 * Tipo da operação. <BR><BR>Pode ser:<BR>saida<BR>entrada
	 *
	 * @var string
	 */
	public string $tipo;
	/**
	 * Descrição do Produto.
	 *
	 * @var string
	 */
	public string $descricao;
	/**
	 * Valor do CMC da Consulta de Estoque.
	 *
	 * @var decimal
	 */
	public float $cmc;
	/**
	 * Quantidade do Movimento
	 *
	 * @var decimal
	 */
	public float $qtde;
	/**
	 * Valor do movimento.
	 *
	 * @var decimal
	 */
	public float $valor;
	/**
	 * Saldo de Estoque da Consulta
	 *
	 * @var decimal
	 */
	public float $saldo;
	/**
	 * Id do item do movimento.
	 *
	 * @var integer
	 */
	public int $idItem;
}
