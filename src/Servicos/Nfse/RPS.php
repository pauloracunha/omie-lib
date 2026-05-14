<?php

namespace OmieLib\Servicos\Nfse;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Nfse\Request\NfseListarRequest;
use OmieLib\Servicos\Nfse\Response\NfseListarResponse;

/**
 * Dados da RPS
 *
 * @pw_element integer $nNumeroLote Número do Lote da RPS.
 * @pw_element string $nStatusLote Status do Lote da RPS.
 * @pw_element string $nNumeroRPS Número da RPS.
 * @pw_element string $cStatusRPS Status da RPS.
 * @pw_element string $cSerieRPS Série da RPS.
 * @pw_element string $cProtocoloRPS Número do Protocolo do RPS.
 * @pw_element string $cDataRPS Data da RPS.
 * @pw_complex RPS
 */
class RPS{
	/**
	 * Número do Lote da RPS.
	 *
	 * @var integer
	 */
	public int $nNumeroLote;
	/**
	 * Status do Lote da RPS.
	 *
	 * @var string
	 */
	public string $nStatusLote;
	/**
	 * Número da RPS.
	 *
	 * @var string
	 */
	public string $nNumeroRPS;
	/**
	 * Status da RPS.
	 *
	 * @var string
	 */
	public string $cStatusRPS;
	/**
	 * Série da RPS.
	 *
	 * @var string
	 */
	public string $cSerieRPS;
	/**
	 * Número do Protocolo do RPS.
	 *
	 * @var string
	 */
	public string $cProtocoloRPS;
	/**
	 * Data da RPS.
	 *
	 * @var string
	 */
	public string $cDataRPS;
}
