<?php

namespace OmieLib\Produtos\Cupomfiscalincluir;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfFecharCaixaRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirEcfRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirRpsRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirSatRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfInutilizarNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfFecharCaixaResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirEcfResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirNfceResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirRpsResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirSatResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfInutilizarNfceResponse;

/**
 * Itens do cupom fiscal.
 *
 * @pw_element integer $seqItem Número sequencial do item.
 * @pw_element boolean $lCanc Status de cancelamento.<BR><BR>true - Cancelado.<BR>false - Ativo.<BR><BR>Preenchimento obrigatório.
 * @pw_element prod $prod Informações do produto.
 * @pw_element prodIdent $prodIdent Identificação do produto.
 * @pw_element imposto $imposto Dados dos impostos.<BR><BR>Obrigatórios apenas para Cupom Fiscal SAT.
 * @pw_element string $lNaoMovEstoque Indica que o item do Cupom Fiscal não deve movimentar o estoque.
 * @pw_element lote_validade $lote_validade Informações referentes ao lote e validade do produto.<BR><BR>A tag só deve ser informada se o produto possuir controle de lote e se a intenção é informar os lotes "manualmente" por API.
 * @pw_complex det
 */
class Det{
	/**
	 * Número sequencial do item.
	 *
	 * @var integer
	 */
	public int $seqItem;
	/**
	 * Status de cancelamento.<BR><BR>true - Cancelado.<BR>false - Ativo.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var boolean
	 */
	public bool $lCanc;
	/**
	 * Informações do produto.
	 *
	 * @var Prod
	 */
	public Prod $prod;
	/**
	 * Identificação do produto.
	 *
	 * @var ProdIdent
	 */
	public ProdIdent $prodIdent;
	/**
	 * Dados dos impostos.<BR><BR>Obrigatórios apenas para Cupom Fiscal SAT.
	 *
	 * @var Imposto
	 */
	public Imposto $imposto;
	/**
	 * Indica que o item do Cupom Fiscal não deve movimentar o estoque.
	 *
	 * @var string
	 */
	public string $lNaoMovEstoque;
	/**
	 * Informações referentes ao lote e validade do produto.<BR><BR>A tag só deve ser informada se o produto possuir controle de lote e se a intenção é informar os lotes "manualmente" por API.
	 *
	 * @var Lote_validade
	 */
	public Lote_validade $lote_validade;
}
