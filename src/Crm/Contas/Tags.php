<?php

namespace OmieLib\Crm\Contas;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contas\Request\ContaListarRequest;
use OmieLib\Crm\Contas\Request\ContaVerificarRequest;
use OmieLib\Crm\Contas\Response\ContaListarResponse;
use OmieLib\Crm\Contas\Response\ContaVerificarResponse;

/**
 * Tags da conta
 *
 * @pw_element string $tag Tag da conta
 * @pw_complex tags
 */
class Tags{
	/**
	 * Tag da conta
	 *
	 * @var string
	 */
	public string $tag;
}
