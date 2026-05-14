<?php

namespace OmieLib\Servicos\Ibpt\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Ibpt\Produtos;
use OmieLib\Servicos\Ibpt\Request\IbptListarProdRequest;
use OmieLib\Servicos\Ibpt\Request\IbptListarServRequest;
use OmieLib\Servicos\Ibpt\Servicos;
use OmieLib\Servicos\Ibpt\TabelaIBPTJsonClient;

/**
 * Resposta da solicitação da Tabela IBPT da Empresa.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element servicosArray $servicos Lista os serviços encontrados.
 * @pw_complex ibptListarServResponse
 */
class IbptListarServResponse{
	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número total de páginas
	 *
	 * @var integer
	 */
	public int $total_de_paginas;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $registros;
	/**
	 * total de registros encontrados
	 *
	 * @var integer
	 */
	public int $total_de_registros;
	/**
	 * Lista os serviços encontrados.
	 *
	 * @var Servicos[]
	 */
	public array $servicos;
}
