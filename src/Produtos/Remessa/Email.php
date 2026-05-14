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
 * Email para o Cliente (ou Destinatário)
 *
 * @pw_element string $cEmail E-Mail do cliente
 * @pw_complex email
 */
class Email{
	/**
	 * E-Mail do cliente
	 *
	 * @var string
	 */
	public string $cEmail;
}
