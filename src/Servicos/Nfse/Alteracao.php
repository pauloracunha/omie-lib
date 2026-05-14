<?php

namespace OmieLib\Servicos\Nfse;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Nfse\Request\NfseListarRequest;
use OmieLib\Servicos\Nfse\Response\NfseListarResponse;

/**
 * Dados da Alteração
 *
 * @pw_element string $cDataAlteracao Data da alteração.
 * @pw_element string $cHoraAlteracao Hora de alteração.
 * @pw_element string $cUsuarioAlteracao Usuário que realizou a alteração.
 * @pw_complex Alteracao
 */
class Alteracao{
	/**
	 * Data da alteração.
	 *
	 * @var string
	 */
	public string $cDataAlteracao;
	/**
	 * Hora de alteração.
	 *
	 * @var string
	 */
	public string $cHoraAlteracao;
	/**
	 * Usuário que realizou a alteração.
	 *
	 * @var string
	 */
	public string $cUsuarioAlteracao;
}
