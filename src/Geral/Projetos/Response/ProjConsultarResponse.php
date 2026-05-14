<?php

namespace OmieLib\Geral\Projetos\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Projetos\Cadastro;
use OmieLib\Geral\Projetos\Info;
use OmieLib\Geral\Projetos\ProjetosCadastroJsonClient;
use OmieLib\Geral\Projetos\Request\ProjAlterarRequest;
use OmieLib\Geral\Projetos\Request\ProjConsultarRequest;
use OmieLib\Geral\Projetos\Request\ProjExcluirRequest;
use OmieLib\Geral\Projetos\Request\ProjIncluirRequest;
use OmieLib\Geral\Projetos\Request\ProjListarRequest;
use OmieLib\Geral\Projetos\Request\ProjUpsertRequest;

/**
 * Resposta da Consulta de Projeto
 *
 * @pw_element integer $codigo Código do projeto.
 * @pw_element string $codInt Código de Integração do projeto.
 * @pw_element string $nome Nome do projeto.
 * @pw_element string $inativo Projeto inativo [S/N].
 * @pw_element info $info Dados complementares do cadastro do projeto.
 * @pw_complex projConsultarResponse
 */
class ProjConsultarResponse{
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
