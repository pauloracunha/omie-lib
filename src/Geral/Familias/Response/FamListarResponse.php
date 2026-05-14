<?php

namespace OmieLib\Geral\Familias\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Familias\FamCadastro;
use OmieLib\Geral\Familias\FamChave;
use OmieLib\Geral\Familias\FamStatus;
use OmieLib\Geral\Familias\FamiliasCadastroJsonClient;
use OmieLib\Geral\Familias\Request\FamConsultarRequest;
use OmieLib\Geral\Familias\Request\FamListarRequest;

/**
 * Resposta da listagem de Familias de Produtos
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $total_de_paginas Total de páginas encontradas.
 * @pw_element integer $registros Número de registros retornados
 * @pw_element integer $total_de_registros Total de registros encontrados.
 * @pw_element famCadastroArray $famCadastro Cadastro de Familias de Produtos
 * @pw_complex famListarResponse
 */
class FamListarResponse{
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
	 * Cadastro de Familias de Produtos
	 *
	 * @var FamCadastro[]
	 */
	public array $famCadastro;
}
