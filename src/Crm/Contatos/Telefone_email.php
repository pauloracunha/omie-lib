<?php

namespace OmieLib\Crm\Contatos;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contatos\Request\ContatoListarRequest;
use OmieLib\Crm\Contatos\Request\ContatoVerificarRequest;
use OmieLib\Crm\Contatos\Response\ContatoListarResponse;
use OmieLib\Crm\Contatos\Response\ContatoVerificarResponse;

/**
 * Telefone e e-mail
 *
 * @pw_element string $cDDDCel1 DDD do celular
 * @pw_element string $cNumCel1 Número do Celular
 * @pw_element string $cDDDCel2 DDD do Celular
 * @pw_element string $cNumCel2 Número do Celular
 * @pw_element string $cDDDTel DDD do Telefone
 * @pw_element string $cNumTel Número do Telefone
 * @pw_element string $cDDDFax DDD do Fax&nbsp;
 * @pw_element string $cNumFax Número do Fax
 * @pw_element string $cEmail E-mail do contato
 * @pw_element string $cWebsite WebSite
 * @pw_complex telefone_email
 */
class Telefone_email{
	/**
	 * DDD do celular
	 *
	 * @var string
	 */
	public string $cDDDCel1;
	/**
	 * Número do Celular
	 *
	 * @var string
	 */
	public string $cNumCel1;
	/**
	 * DDD do Celular
	 *
	 * @var string
	 */
	public string $cDDDCel2;
	/**
	 * Número do Celular
	 *
	 * @var string
	 */
	public string $cNumCel2;
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
	 * DDD do Fax&nbsp;
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
	 * E-mail do contato
	 *
	 * @var string
	 */
	public string $cEmail;
	/**
	 * WebSite
	 *
	 * @var string
	 */
	public string $cWebsite;
}
