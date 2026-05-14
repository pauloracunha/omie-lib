<?php

namespace OmieLib\Produtos\Icmscst\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Icmscst\Cadastros;
use OmieLib\Produtos\Icmscst\IcmsCSTJsonClient;
use OmieLib\Produtos\Icmscst\Request\CstListarRequest;

/**
 * Resposta da solicitação da listagem de CST do ICMS.
 *
 * @pw_element integer $pagina Número da página para resgatar os dados.
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros a serem exibidos por página.<BR>Máximo 50.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os CSOSN do ICMS encontrados.
 * @pw_complex cstListarResponse
 */
class CstListarResponse{
	/**
	 * Número da página para resgatar os dados.
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
	 * Número de registros a serem exibidos por página.<BR>Máximo 50.
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
	 * Lista os CSOSN do ICMS encontrados.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
