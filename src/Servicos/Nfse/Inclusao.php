<?php

namespace OmieLib\Servicos\Nfse;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Nfse\Request\NfseListarRequest;
use OmieLib\Servicos\Nfse\Response\NfseListarResponse;

/**
 * Dados da Inclusão
 *
 * @pw_element string $cDataInclusao Data da inclusão.
 * @pw_element string $cHoraInclusao Hora de inclusão.
 * @pw_element string $cUsuarioInclusao Usuário que realizou a inclusão.
 * @pw_complex Inclusao
 */
class Inclusao{
	/**
	 * Data da inclusão.
	 *
	 * @var string
	 */
	public string $cDataInclusao;
	/**
	 * Hora de inclusão.
	 *
	 * @var string
	 */
	public string $cHoraInclusao;
	/**
	 * Usuário que realizou a inclusão.
	 *
	 * @var string
	 */
	public string $cUsuarioInclusao;
}
