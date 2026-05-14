<?php

namespace OmieLib\Produtos\Nfconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;

/**
 * Informações complementares.
 *
 * @pw_element string $dInc Data da Inclusão.<BR>Preenchimento automático - Não informar.
 * @pw_element string $hInc Hora da Inclusão.<BR>Preenchimento automático - Não informar.
 * @pw_element string $uInc Usuário da Inclusão.<BR>Preenchimento automático - Não informar.
 * @pw_element string $dAlt Data da Alteração.<BR>Preenchimento automático - Não informar.
 * @pw_element string $hAlt Hora da Alteração.<BR>Preenchimento automático - Não informar.
 * @pw_element string $uAlt Usuário da Alteração.<BR>Preenchimento automático - Não informar.
 * @pw_element string $cImpAPI Importado pela API.<BR>Preenchimento automático - Não informar.
 * @pw_complex info
 */
class Info{
	/**
	 * Data da Inclusão.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $dInc;
	/**
	 * Hora da Inclusão.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $hInc;
	/**
	 * Usuário da Inclusão.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $uInc;
	/**
	 * Data da Alteração.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $dAlt;
	/**
	 * Hora da Alteração.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $hAlt;
	/**
	 * Usuário da Alteração.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $uAlt;
	/**
	 * Importado pela API.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $cImpAPI;
}
