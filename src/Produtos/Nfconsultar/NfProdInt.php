<?php

namespace OmieLib\Produtos\Nfconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;

/**
 * Informações de Integração dos itens da NF
 *
 * @pw_element integer $nCodProd Código do Produto
 * @pw_element string $cCodProdInt Código de Integração do produto.
 * @pw_element integer $nCodItem Código do item
 * @pw_element string $cCodItemInt Código de Integração do Item.
 * @pw_complex nfProdInt
 */
class NfProdInt{
	/**
	 * Código do Produto
	 *
	 * @var integer
	 */
	public int $nCodProd;
	/**
	 * Código de Integração do produto.
	 *
	 * @var string
	 */
	public string $cCodProdInt;
	/**
	 * Código do item
	 *
	 * @var integer
	 */
	public int $nCodItem;
	/**
	 * Código de Integração do Item.
	 *
	 * @var string
	 */
	public string $cCodItemInt;
}
