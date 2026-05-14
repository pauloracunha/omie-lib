<?php

namespace OmieLib\Geral\Prodcaract;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Prodcaract\Request\PrcAlterarCaractRequest;
use OmieLib\Geral\Prodcaract\Request\PrcConsultarCaractRequest;
use OmieLib\Geral\Prodcaract\Request\PrcExcluirCaractRequest;
use OmieLib\Geral\Prodcaract\Request\PrcIncluirCaractRequest;
use OmieLib\Geral\Prodcaract\Request\PrcListarCaractRequest;
use OmieLib\Geral\Prodcaract\Response\PrcAlterarCaractResponse;
use OmieLib\Geral\Prodcaract\Response\PrcConsultarCaractResponse;
use OmieLib\Geral\Prodcaract\Response\PrcExcluirCaractResponse;
use OmieLib\Geral\Prodcaract\Response\PrcIncluirCaractResponse;
use OmieLib\Geral\Prodcaract\Response\PrcListarCaractResponse;

/**
 * Informações complemetares da característica.
 *
 * @pw_element string $dInc Data da Inclusão.<BR>No formato dd/mm/aaaa.
 * @pw_element string $hInc Hora da Inclusão.<BR>No formato hh:mm:ss.
 * @pw_element string $uInc Usuário da Inclusão.
 * @pw_element string $dAlt Data da Alteração.<BR>No formato dd/mm/aaaa.
 * @pw_element string $hAlt Hora da Alteração.<BR>No formato hh:mm:ss.
 * @pw_element string $uAlt Usuário da Alteração.
 * @pw_element string $cImpAPI Importado pela API (S/N).
 * @pw_complex info
 */
class Info{
	/**
	 * Data da Inclusão.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dInc;
	/**
	 * Hora da Inclusão.<BR>No formato hh:mm:ss.
	 *
	 * @var string
	 */
	public string $hInc;
	/**
	 * Usuário da Inclusão.
	 *
	 * @var string
	 */
	public string $uInc;
	/**
	 * Data da Alteração.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dAlt;
	/**
	 * Hora da Alteração.<BR>No formato hh:mm:ss.
	 *
	 * @var string
	 */
	public string $hAlt;
	/**
	 * Usuário da Alteração.
	 *
	 * @var string
	 */
	public string $uAlt;
	/**
	 * Importado pela API (S/N).
	 *
	 * @var string
	 */
	public string $cImpAPI;
}
