<?php

namespace OmieLib\Servicos\Nfse;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Nfse\Request\NfseListarRequest;
use OmieLib\Servicos\Nfse\Response\NfseListarResponse;

/**
 * Dados da emissão
 *
 * @pw_element string $cDataEmissao Data da emissão.
 * @pw_element string $cHoraEmissao Hora de emissão.
 * @pw_element string $cUsuarioEmissao Usuário que realizou a emissão.
 * @pw_complex Emissao
 */
class Emissao{
	/**
	 * Data da emissão.
	 *
	 * @var string
	 */
	public string $cDataEmissao;
	/**
	 * Hora de emissão.
	 *
	 * @var string
	 */
	public string $cHoraEmissao;
	/**
	 * Usuário que realizou a emissão.
	 *
	 * @var string
	 */
	public string $cUsuarioEmissao;
}
