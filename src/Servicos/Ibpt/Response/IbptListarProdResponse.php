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
 * @pw_element produtosArray $produtos Lista os produtos encontrados.
 * @pw_complex ibptListarProdResponse
 */
class IbptListarProdResponse{
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
	 * Lista os produtos encontrados.
	 *
	 * @var Produtos[]
	 */
	public array $produtos;
}
