<?php

namespace OmieLib\Geral\Vendedores\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Vendedores\Cadastro;
use OmieLib\Geral\Vendedores\Request\VendAlterarRequest;
use OmieLib\Geral\Vendedores\Request\VendConsultarRequest;
use OmieLib\Geral\Vendedores\Request\VendExcluirRequest;
use OmieLib\Geral\Vendedores\Request\VendListarRequest;
use OmieLib\Geral\Vendedores\Request\VendUpsertRequest;
use OmieLib\Geral\Vendedores\Request\VendincluirRequest;
use OmieLib\Geral\Vendedores\VendedoresCadastroJsonClient;

/**
 * Resposta da listagem de Vendedores
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $total_de_paginas Total de páginas encontradas.
 * @pw_element integer $registros Número de registros retornados.
 * @pw_element integer $total_de_registros Total de registros encontrados.
 * @pw_element cadastroArray $cadastro Cadastro de Vendedores
 * @pw_complex vendListarResponse
 */
class VendListarResponse{
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
	 * Número de registros retornados.
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
	 * Cadastro de Vendedores
	 *
	 * @var Cadastro[]
	 */
	public array $cadastro;
}
