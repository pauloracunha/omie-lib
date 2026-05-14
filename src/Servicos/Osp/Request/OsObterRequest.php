<?php

namespace OmieLib\Servicos\Osp\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Osp\ListaOS;
use OmieLib\Servicos\Osp\OrdemServicoFaturamentoJsonClient;
use OmieLib\Servicos\Osp\Response\OsAssociarCodIntResponse;
use OmieLib\Servicos\Osp\Response\OsCancelarResponse;
use OmieLib\Servicos\Osp\Response\OsDuplicarResponse;
use OmieLib\Servicos\Osp\Response\OsFaturarResponse;
use OmieLib\Servicos\Osp\Response\OsObterResponse;
use OmieLib\Servicos\Osp\Response\OsReenviarResponse;
use OmieLib\Servicos\Osp\Response\OsValidarResponse;

/**
 * Lista as Ordens de Serviço que se encontram em uma etapa do processo de faturamento de ordens de serviço.
 *
 * @pw_element string $cEtapa Código da Etapa.<BR><BR>Valores possíveis: <BR><BR>10 - Lista todos os contratos.<BR><BR>20 - Lista somente os contratos ativos, que devem ser faturados até a data atual, que a data atual esteja dentro do período de vigência e ainda não foram faturados no mês.<BR><BR>30 - Lista os contratos faturados no mês atual. <BR><BR>40 - Lista todos os contratos ativos que precisam ser renovados nos próximos 90 dias.
 * @pw_complex osObterRequest
 */
class OsObterRequest{
	/**
	 * Código da Etapa.<BR><BR>Valores possíveis: <BR><BR>10 - Lista todos os contratos.<BR><BR>20 - Lista somente os contratos ativos, que devem ser faturados até a data atual, que a data atual esteja dentro do período de vigência e ainda não foram faturados no mês.<BR><BR>30 - Lista os contratos faturados no mês atual. <BR><BR>40 - Lista todos os contratos ativos que precisam ser renovados nos próximos 90 dias.
	 *
	 * @var string
	 */
	public string $cEtapa;
}
