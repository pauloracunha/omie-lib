<?php

namespace OmieLib\Geral\Bandeiracartao\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Bandeiracartao\BandeiraCartaoJsonClient;
use OmieLib\Geral\Bandeiracartao\ListaBandeira;
use OmieLib\Geral\Bandeiracartao\Response\ListarBandeirasResponse;

/**
 * Solicita a listagem das bandeiras de cartões.
 *
 * @pw_element integer $nPagina Número da página.
 * @pw_element integer $nRegPorPagina Número de registros.
 * @pw_complex ListarBandeirasRequest
 */
class ListarBandeirasRequest{
	/**
	 * Número da página.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros.
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
}
