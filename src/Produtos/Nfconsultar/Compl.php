<?php

namespace OmieLib\Produtos\Nfconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;

/**
 * Dados complementares da NF
 *
 * @pw_element integer $nIdNF Código da Nota Fiscal.<BR>Interno, utilizando apenas nas APIs.
 * @pw_element integer $nIdPedido Código de identificação do pedido.<BR>Interno, utilizando apenas nas APIs.
 * @pw_element string $cCodCateg Código da categoria.
 * @pw_element string $cChaveNFe Chave da NF-e
 * @pw_element integer $nIdReceb Identificação do Recebimento.<BR>Interno, utilizando apenas nas APIs.
 * @pw_element integer $nIdTransp Identificação da Transportadora.<BR>Interno, utilizando apenas nas APIs.
 * @pw_element string $cModFrete Código da modalidade do frete.
 * @pw_complex compl
 */
class Compl{
	/**
	 * Código da Nota Fiscal.<BR>Interno, utilizando apenas nas APIs.
	 *
	 * @var integer
	 */
	public int $nIdNF;
	/**
	 * Código de identificação do pedido.<BR>Interno, utilizando apenas nas APIs.
	 *
	 * @var integer
	 */
	public int $nIdPedido;
	/**
	 * Código da categoria.
	 *
	 * @var string
	 */
	public string $cCodCateg;
	/**
	 * Chave da NF-e
	 *
	 * @var string
	 */
	public string $cChaveNFe;
	/**
	 * Identificação do Recebimento.<BR>Interno, utilizando apenas nas APIs.
	 *
	 * @var integer
	 */
	public int $nIdReceb;
	/**
	 * Identificação da Transportadora.<BR>Interno, utilizando apenas nas APIs.
	 *
	 * @var integer
	 */
	public int $nIdTransp;
	/**
	 * Código da modalidade do frete.
	 *
	 * @var string
	 */
	public string $cModFrete;
}
