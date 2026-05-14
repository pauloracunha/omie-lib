<?php

namespace OmieLib\Servicos\Classificacaoservico\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Classificacaoservico\Cadastros;
use OmieLib\Servicos\Classificacaoservico\ClassificacaoServicoJsonClient;
use OmieLib\Servicos\Classificacaoservico\Request\ClassificaServicoRequest;

/**
 * Resposta da solicitação de classificações do serviço (NF modelo 21 e 22).
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os tipos de classificações do serviço.
 * @pw_complex classificaServicoResponse
 */
class ClassificaServicoResponse{
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
	 * Lista os tipos de classificações do serviço.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
