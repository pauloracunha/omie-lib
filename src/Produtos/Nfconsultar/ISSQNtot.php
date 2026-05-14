<?php

namespace OmieLib\Produtos\Nfconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;

/**
 * Grupo de Valores Totais referentes ao ISSQN
 *
 * @pw_element decimal $vServ Valor Total dos Serviços sob não-incidência ou não tributados pelo ICMS
 * @pw_element decimal $vBC Base de Cálculo do ISS
 * @pw_element decimal $vISS Valor Total do ISS
 * @pw_element decimal $vPIS Valor Retido de PIS
 * @pw_element decimal $vCOFINS Valor Retido de COFINS
 * @pw_complex ISSQNtot
 */
class ISSQNtot{
	/**
	 * Valor Total dos Serviços sob não-incidência ou não tributados pelo ICMS
	 *
	 * @var decimal
	 */
	public float $vServ;
	/**
	 * Base de Cálculo do ISS
	 *
	 * @var decimal
	 */
	public float $vBC;
	/**
	 * Valor Total do ISS
	 *
	 * @var decimal
	 */
	public float $vISS;
	/**
	 * Valor Retido de PIS
	 *
	 * @var decimal
	 */
	public float $vPIS;
	/**
	 * Valor Retido de COFINS
	 *
	 * @var decimal
	 */
	public float $vCOFINS;
}
