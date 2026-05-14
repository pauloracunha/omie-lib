<?php

namespace OmieLib\Geral\Projetos\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Projetos\Cadastro;
use OmieLib\Geral\Projetos\Info;
use OmieLib\Geral\Projetos\ProjetosCadastroJsonClient;
use OmieLib\Geral\Projetos\Response\ProjAlterarResponse;
use OmieLib\Geral\Projetos\Response\ProjConsultarResponse;
use OmieLib\Geral\Projetos\Response\ProjExcluirResponse;
use OmieLib\Geral\Projetos\Response\ProjIncluirResponse;
use OmieLib\Geral\Projetos\Response\ProjListarResponse;
use OmieLib\Geral\Projetos\Response\ProjUpsertResponse;

/**
 * Solicitação de Alteração de um projeto
 *
 * @pw_element integer $codigo Código do projeto.
 * @pw_element string $codInt Código de Integração do projeto.
 * @pw_element string $nome Nome do projeto.
 * @pw_element string $inativo Projeto inativo [S/N].
 * @pw_complex projAlterarRequest
 */
class ProjAlterarRequest{
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
}
