<?php

namespace OmieLib\Produtos\Nfconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;

/**
 * Total da Nota Fiscal
 *
 * @pw_element ICMSTot $ICMSTot Grupo de Valores Totais referentes ao ICMS
 * @pw_element ISSQNtot $ISSQNtot Grupo de Valores Totais referentes ao ISSQN
 * @pw_element retTrib $retTrib Grupo de Retenções de Tributos
 * @pw_element CBSTot $CBSTot Grupo de Valores Totais referentes ao CBS.
 * @pw_element IBSTot $IBSTot Grupo de Valores Totais referentes ao IBS.
 * @pw_complex total
 */
class Total{
	/**
	 * Grupo de Valores Totais referentes ao ICMS
	 *
	 * @var ICMSTot
	 */
	public ICMSTot $ICMSTot;
	/**
	 * Grupo de Valores Totais referentes ao ISSQN
	 *
	 * @var ISSQNtot
	 */
	public ISSQNtot $ISSQNtot;
	/**
	 * Grupo de Retenções de Tributos
	 *
	 * @var RetTrib
	 */
	public RetTrib $retTrib;
	/**
	 * Grupo de Valores Totais referentes ao CBS.
	 *
	 * @var CBSTot
	 */
	public CBSTot $CBSTot;
	/**
	 * Grupo de Valores Totais referentes ao IBS.
	 *
	 * @var IBSTot
	 */
	public IBSTot $IBSTot;
}
