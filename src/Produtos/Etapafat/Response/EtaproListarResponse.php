<?php

namespace OmieLib\Produtos\Etapafat\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Etapafat\Cadastros;
use OmieLib\Produtos\Etapafat\Etapas;
use OmieLib\Produtos\Etapafat\EtapasFaturamentoJsonClient;
use OmieLib\Produtos\Etapafat\Request\EtaproListarRequest;

/**
 * Resposta da solicitação de etapas do processo de faturamento.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista de etapas do processo de faturamento.
 * @pw_complex etaproListarResponse
 */
class EtaproListarResponse{
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
	 * Lista de etapas do processo de faturamento.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
