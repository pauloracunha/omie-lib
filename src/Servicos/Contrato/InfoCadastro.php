<?php

namespace OmieLib\Servicos\Contrato;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contrato\Request\CsConsultarRequest;
use OmieLib\Servicos\Contrato\Request\CsExcluirItemRequest;
use OmieLib\Servicos\Contrato\Request\CsListarRequest;
use OmieLib\Servicos\Contrato\Response\CsConsultarResponse;
use OmieLib\Servicos\Contrato\Response\CsExcluirItemResponse;
use OmieLib\Servicos\Contrato\Response\CsListarResponse;

/**
 * Informações complementares do contrato.
 *
 * @pw_element string $dInc Data da Inclusão.<BR>No formato dd/mm/aaaa.<BR><BR>Não deve ser informado na Inclusão/Alteração.
 * @pw_element string $hInc Hora da Inclusão.<BR>No formato hh:mm:ss.<BR><BR>Não deve ser informado na Inclusão/Alteração.
 * @pw_element string $uInc Usuário da Inclusão.<BR><BR>Não deve ser informado na Inclusão/Alteração.
 * @pw_element string $dAlt Data da Alteração.<BR>No formato dd/mm/aaaa.<BR><BR>Não deve ser informado na Inclusão/Alteração.
 * @pw_element string $hAlt Hora da Alteração.<BR>No formato hh:mm:ss.<BR><BR>Não deve ser informado na Inclusão/Alteração.
 * @pw_element string $uAlt Usuário da Alteração.<BR><BR>Não deve ser informado na Inclusão/Alteração.
 * @pw_element string $cImpAPI Importado pela API (S/N).<BR><BR>Não deve ser informado na Inclusão/Alteração.
 * @pw_element string $cOrigem Origem do Contrato de Serviço.<BR><BR>Informado na Inclusão.
 * @pw_complex infoCadastro
 */
class InfoCadastro{
	/**
	 * Data da Inclusão.<BR>No formato dd/mm/aaaa.<BR><BR>Não deve ser informado na Inclusão/Alteração.
	 *
	 * @var string
	 */
	public string $dInc;
	/**
	 * Hora da Inclusão.<BR>No formato hh:mm:ss.<BR><BR>Não deve ser informado na Inclusão/Alteração.
	 *
	 * @var string
	 */
	public string $hInc;
	/**
	 * Usuário da Inclusão.<BR><BR>Não deve ser informado na Inclusão/Alteração.
	 *
	 * @var string
	 */
	public string $uInc;
	/**
	 * Data da Alteração.<BR>No formato dd/mm/aaaa.<BR><BR>Não deve ser informado na Inclusão/Alteração.
	 *
	 * @var string
	 */
	public string $dAlt;
	/**
	 * Hora da Alteração.<BR>No formato hh:mm:ss.<BR><BR>Não deve ser informado na Inclusão/Alteração.
	 *
	 * @var string
	 */
	public string $hAlt;
	/**
	 * Usuário da Alteração.<BR><BR>Não deve ser informado na Inclusão/Alteração.
	 *
	 * @var string
	 */
	public string $uAlt;
	/**
	 * Importado pela API (S/N).<BR><BR>Não deve ser informado na Inclusão/Alteração.
	 *
	 * @var string
	 */
	public string $cImpAPI;
	/**
	 * Origem do Contrato de Serviço.<BR><BR>Informado na Inclusão.
	 *
	 * @var string
	 */
	public string $cOrigem;
}
