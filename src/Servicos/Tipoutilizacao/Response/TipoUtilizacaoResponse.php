<?php

namespace OmieLib\Servicos\Tipoutilizacao\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Tipoutilizacao\Cadastros;
use OmieLib\Servicos\Tipoutilizacao\Request\TipoUtilizacaoRequest;
use OmieLib\Servicos\Tipoutilizacao\ServicoTipoUtilizacaoJsonClient;

/**
 * Resposta da solicitação de tipo de utilização do serviço (NF modelo 21 e 22).
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os tipos de utilização do serviço.
 * @pw_complex tipoUtilizacaoResponse
 */
class TipoUtilizacaoResponse{
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
	 * Lista os tipos de utilização do serviço.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
