<?php

namespace OmieLib\Servicos\Contratofat\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contratofat\ContratoFaturamentoJsonClient;
use OmieLib\Servicos\Contratofat\ListaContratos;
use OmieLib\Servicos\Contratofat\Response\CtrAtivarResponse;
use OmieLib\Servicos\Contratofat\Response\CtrCancelarResponse;
use OmieLib\Servicos\Contratofat\Response\CtrFaturarResponse;
use OmieLib\Servicos\Contratofat\Response\CtrObterResponse;
use OmieLib\Servicos\Contratofat\Response\CtrReativarResponse;
use OmieLib\Servicos\Contratofat\Response\CtrSuspenderResponse;
use OmieLib\Servicos\Contratofat\Response\CtrValidarResponse;

/**
 * Lista os Contratos que se encontram em um etapa do processo de faturamento de contratos.
 *
 * @pw_element string $cEtapa Código da Etapa.<BR><BR>Valores possíveis: <BR><BR>10 - Lista todos os contratos.<BR><BR>20 - Lista somente os contratos ativos, que devem ser faturados até a data atual, que a data atual esteja dentro do período de vigência e ainda não foram faturados no mês.<BR><BR>30 - Lista os contratos faturados no mês atual. <BR><BR>40 - Lista todos os contratos ativos que precisam ser renovados nos próximos 90 dias.
 * @pw_complex ctrObterRequest
 */
class CtrObterRequest{
	/**
	 * Código da Etapa.<BR><BR>Valores possíveis: <BR><BR>10 - Lista todos os contratos.<BR><BR>20 - Lista somente os contratos ativos, que devem ser faturados até a data atual, que a data atual esteja dentro do período de vigência e ainda não foram faturados no mês.<BR><BR>30 - Lista os contratos faturados no mês atual. <BR><BR>40 - Lista todos os contratos ativos que precisam ser renovados nos próximos 90 dias.
	 *
	 * @var string
	 */
	public string $cEtapa;
}
