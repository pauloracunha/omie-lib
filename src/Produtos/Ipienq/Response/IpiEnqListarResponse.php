<?php

namespace OmieLib\Produtos\Ipienq\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Ipienq\Cadastros;
use OmieLib\Produtos\Ipienq\IpiEncJsonClient;
use OmieLib\Produtos\Ipienq\Request\IpiEnqListarRequest;

/**
 * Resposta da solicitação da listagem do Enquadramento do IPI.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os Enquadramentos do IPI.
 * @pw_complex ipiEnqListarResponse
 */
class IpiEnqListarResponse{
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
	 * Lista os Enquadramentos do IPI.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
