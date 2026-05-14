<?php

namespace OmieLib\Financas\Contapagar;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contapagar\Request\LcpListarRequest;
use OmieLib\Financas\Contapagar\Response\LcpListarResponse;

/**
 * Informações sobre a criação/alteração do lançamento de Contas a Pagar.
 *
 * @pw_element string $dInc Data da Inclusão.<BR>No formato dd/mm/aaaa.<BR><BR>Não deve ser informado na Inclusão/Alteração.
 * @pw_element string $hInc Hora da Inclusão.<BR>No formato hh:mm:ss.<BR><BR>Não deve ser informado na Inclusão/Alteração.
 * @pw_element string $uInc Usuário da Inclusão.<BR><BR>Não deve ser informado na Inclusão/Alteração.
 * @pw_element string $dAlt Data da Alteração.<BR>No formato dd/mm/aaaa.<BR><BR>Não deve ser informado na Inclusão/Alteração.
 * @pw_element string $hAlt Hora da Alteração.<BR>No formato hh:mm:ss.<BR><BR>Não deve ser informado na Inclusão/Alteração.
 * @pw_element string $uAlt Usuário da Alteração.<BR><BR>Não deve ser informado na Inclusão/Alteração.
 * @pw_element string $cImpAPI Importado pela API (S/N).<BR><BR>Não deve ser informado na Inclusão/Alteração.
 * @pw_complex info
 */
class Info{
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
}
