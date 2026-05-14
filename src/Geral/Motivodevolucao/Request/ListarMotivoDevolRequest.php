<?php

namespace OmieLib\Geral\Motivodevolucao\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Motivodevolucao\ListaMotivo;
use OmieLib\Geral\Motivodevolucao\MotivoDevolucaoJsonClient;
use OmieLib\Geral\Motivodevolucao\Response\ListarMotivoDevolResponse;

/**
 * Solicitação da listagem de motivos de devolução.
 *
 * @pw_element integer $nPagina Número da página retornada
 * @pw_element integer $nRegPorPagina Número de registros retornados na página.
 * @pw_complex ListarMotivoDevolRequest
 */
class ListarMotivoDevolRequest{
	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
}
