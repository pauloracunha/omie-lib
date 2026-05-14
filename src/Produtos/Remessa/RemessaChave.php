<?php

namespace OmieLib\Produtos\Remessa;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessa\Request\RemessaDevolverRequest;
use OmieLib\Produtos\Remessa\Request\RemessaListarRequest;
use OmieLib\Produtos\Remessa\Request\RemessaStatusRequest;
use OmieLib\Produtos\Remessa\Response\RemessaDevolverResponse;
use OmieLib\Produtos\Remessa\Response\RemessaListarResponse;
use OmieLib\Produtos\Remessa\Response\RemessaStatusResponse;

/**
 * Chave para Consulta / Exclusão
 *
 * @pw_element integer $nCodRem Código da Remessa no Omie
 * @pw_element string $cCodIntRem Código de Integração da Remessa
 * @pw_complex remessaChave
 */
class RemessaChave{
	/**
	 * Código da Remessa no Omie
	 *
	 * @var integer
	 */
	public int $nCodRem;
	/**
	 * Código de Integração da Remessa
	 *
	 * @var string
	 */
	public string $cCodIntRem;
}
