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
 * Identificação do produto.
 *
 * @pw_element integer $idProduto Código do produto.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $emiProduto Código do produto no emissor de cupom fiscal.<BR><BR>Preenchimento obrigatório.
 * @pw_element integer $idLocalEstoque Codigo do Local do Estoque.<BR><BR>Preenchimento Opcional.<BR><BR>Caso não informado assumirá o Local de Estoque padrão.
 * @pw_complex prodIdent
 */
class ProdIdent{
	/**
	 * Código do produto.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $idProduto;
	/**
	 * Código do produto no emissor de cupom fiscal.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var string
	 */
	public string $emiProduto;
	/**
	 * Codigo do Local do Estoque.<BR><BR>Preenchimento Opcional.<BR><BR>Caso não informado assumirá o Local de Estoque padrão.
	 *
	 * @var integer
	 */
	public int $idLocalEstoque;
}
