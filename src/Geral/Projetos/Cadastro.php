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
 * Cadastro de Projetos
 *
 * @pw_element integer $codigo Código do projeto.
 * @pw_element string $codInt Código de Integração do projeto.
 * @pw_element string $nome Nome do projeto.
 * @pw_element string $inativo Projeto inativo [S/N].
 * @pw_element info $info Dados complementares do cadastro do projeto.
 * @pw_complex cadastro
 */
class Cadastro{
	/**
	 * Código do projeto.
	 *
	 * @var integer
	 */
	public int $codigo;
	/**
	 * Código de Integração do projeto.
	 *
	 * @var string
	 */
	public string $codInt;
	/**
	 * Nome do projeto.
	 *
	 * @var string
	 */
	public string $nome;
	/**
	 * Projeto inativo [S/N].
	 *
	 * @var string
	 */
	public string $inativo;
	/**
	 * Dados complementares do cadastro do projeto.
	 *
	 * @var Info
	 */
	public Info $info;
}
