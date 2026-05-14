<?php

namespace OmieLib\Servicos\Nfse;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Nfse\Request\NfseListarRequest;
use OmieLib\Servicos\Nfse\Response\NfseListarResponse;

/**
 * Dados do Cancelamento.
 *
 * @pw_element string $cDataCancelamento Data da inclusão.
 * @pw_element string $cHoraCancelamento Hora de inclusão.
 * @pw_element string $cUsuarioCancelamento Usuário que realizou a inclusão.
 * @pw_element string $cMotivoCancelamento Motivo do cancelamento da NFS-e.
 * @pw_complex Cancelamento
 */
class Cancelamento{
	/**
	 * Data da inclusão.
	 *
	 * @var string
	 */
	public string $cDataCancelamento;
	/**
	 * Hora de inclusão.
	 *
	 * @var string
	 */
	public string $cHoraCancelamento;
	/**
	 * Usuário que realizou a inclusão.
	 *
	 * @var string
	 */
	public string $cUsuarioCancelamento;
	/**
	 * Motivo do cancelamento da NFS-e.
	 *
	 * @var string
	 */
	public string $cMotivoCancelamento;
}
