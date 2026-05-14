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
 * Resposta da listagem de Projetos
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $total_de_paginas Total de páginas encontradas.
 * @pw_element integer $registros Número de registros retornados
 * @pw_element integer $total_de_registros Total de registros encontrados.
 * @pw_element cadastroArray $cadastro Cadastro de Projetos
 * @pw_complex projListarResponse
 */
class ProjListarResponse{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Total de páginas encontradas.
	 *
	 * @var integer
	 */
	public int $total_de_paginas;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $registros;
	/**
	 * Total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $total_de_registros;
	/**
	 * Cadastro de Projetos
	 *
	 * @var Cadastro[]
	 */
	public array $cadastro;
}
