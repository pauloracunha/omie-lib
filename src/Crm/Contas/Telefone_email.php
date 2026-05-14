<?php

namespace OmieLib\Crm\Contas;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contas\Request\ContaListarRequest;
use OmieLib\Crm\Contas\Request\ContaVerificarRequest;
use OmieLib\Crm\Contas\Response\ContaListarResponse;
use OmieLib\Crm\Contas\Response\ContaVerificarResponse;

/**
 * Informações de contato com a conta
 *
 * @pw_element string $cDDDTel DDD do Telefone
 * @pw_element string $cNumTel Número do Telefone
 * @pw_element string $cDDDFax DDD do Fax
 * @pw_element string $cNumFax Número do Fax
 * @pw_element string $cEmail E-Mail
 * @pw_element string $cWebsite Website
 * @pw_complex telefone_email
 */
class Telefone_email{
	/**
	 * DDD do Telefone
	 *
	 * @var string
	 */
	public string $cDDDTel;
	/**
	 * Número do Telefone
	 *
	 * @var string
	 */
	public string $cNumTel;
	/**
	 * DDD do Fax
	 *
	 * @var string
	 */
	public string $cDDDFax;
	/**
	 * Número do Fax
	 *
	 * @var string
	 */
	public string $cNumFax;
	/**
	 * E-Mail
	 *
	 * @var string
	 */
	public string $cEmail;
	/**
	 * Website
	 *
	 * @var string
	 */
	public string $cWebsite;
}
