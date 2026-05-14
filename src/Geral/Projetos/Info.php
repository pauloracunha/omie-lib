<?php

namespace OmieLib\Geral\Projetos;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Projetos\Request\ProjAlterarRequest;
use OmieLib\Geral\Projetos\Request\ProjConsultarRequest;
use OmieLib\Geral\Projetos\Request\ProjExcluirRequest;
use OmieLib\Geral\Projetos\Request\ProjIncluirRequest;
use OmieLib\Geral\Projetos\Request\ProjListarRequest;
use OmieLib\Geral\Projetos\Request\ProjUpsertRequest;
use OmieLib\Geral\Projetos\Response\ProjAlterarResponse;
use OmieLib\Geral\Projetos\Response\ProjConsultarResponse;
use OmieLib\Geral\Projetos\Response\ProjExcluirResponse;
use OmieLib\Geral\Projetos\Response\ProjIncluirResponse;
use OmieLib\Geral\Projetos\Response\ProjListarResponse;
use OmieLib\Geral\Projetos\Response\ProjUpsertResponse;

/**
 * Dados complementares do cadastro do projeto.
 *
 * @pw_element string $data_inc Data da Inclusão.<BR>No formato dd/mm/aaaa.
 * @pw_element string $hora_inc Hora da Inclusão.<BR>No formato hh:mm:ss.
 * @pw_element string $user_inc Usuário da Inclusão.
 * @pw_element string $data_alt Data da Alteração.<BR>No formato dd/mm/aaaa.
 * @pw_element string $hora_alt Hora da Alteração.<BR>No formato hh:mm:ss.
 * @pw_element string $user_alt Usuário da Alteração.
 * @pw_complex info
 */
class Info{
	/**
	 * Data da Inclusão.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $data_inc;
	/**
	 * Hora da Inclusão.<BR>No formato hh:mm:ss.
	 *
	 * @var string
	 */
	public string $hora_inc;
	/**
	 * Usuário da Inclusão.
	 *
	 * @var string
	 */
	public string $user_inc;
	/**
	 * Data da Alteração.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $data_alt;
	/**
	 * Hora da Alteração.<BR>No formato hh:mm:ss.
	 *
	 * @var string
	 */
	public string $hora_alt;
	/**
	 * Usuário da Alteração.
	 *
	 * @var string
	 */
	public string $user_alt;
}
