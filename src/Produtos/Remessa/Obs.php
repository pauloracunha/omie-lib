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
 * Observações da Remessa
 *
 * @pw_element string $cObs Observações da Remessa
 * @pw_complex obs
 */
class Obs{
	/**
	 * Observações da Remessa
	 *
	 * @var string
	 */
	public string $cObs;
}
