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
 * Resposta da Solicitação de alteração de um projeto.
 *
 * @pw_element integer $codigo Código do projeto.
 * @pw_element string $codInt Código de Integração do projeto.
 * @pw_element string $status Status do processamento
 * @pw_element string $descricao Descrição do status
 * @pw_complex projAlterarResponse
 */
class ProjAlterarResponse{
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
	 * Status do processamento
	 *
	 * @var string
	 */
	public string $status;
	/**
	 * Descrição do status
	 *
	 * @var string
	 */
	public string $descricao;
}
