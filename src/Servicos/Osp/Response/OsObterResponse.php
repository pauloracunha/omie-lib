<?php

namespace OmieLib\Servicos\Osp\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Osp\ListaOS;
use OmieLib\Servicos\Osp\OrdemServicoFaturamentoJsonClient;
use OmieLib\Servicos\Osp\Request\OsAssociarCodIntRequest;
use OmieLib\Servicos\Osp\Request\OsCancelarRequest;
use OmieLib\Servicos\Osp\Request\OsDuplicarRequest;
use OmieLib\Servicos\Osp\Request\OsFaturarRequest;
use OmieLib\Servicos\Osp\Request\OsObterRequest;
use OmieLib\Servicos\Osp\Request\OsReenviarRequest;
use OmieLib\Servicos\Osp\Request\OsValidarRequest;

/**
 * Resposta da solicitação da lista de Ordens de Serviço de uma etapa.
 *
 * @pw_element string $cEtapa Código da Etapa.<BR><BR>Valores possíveis: <BR><BR>10 - Lista todos os contratos.<BR><BR>20 - Lista somente os contratos ativos, que devem ser faturados até a data atual, que a data atual esteja dentro do período de vigência e ainda não foram faturados no mês.<BR><BR>30 - Lista os contratos faturados no mês atual. <BR><BR>40 - Lista todos os contratos ativos que precisam ser renovados nos próximos 90 dias.
 * @pw_element listaOSArray $listaOS Lista de Ordens de Serviço de uma etapa.
 * @pw_complex osObterResponse
 */
class OsObterResponse{
	/**
	 * Código da Etapa.<BR><BR>Valores possíveis: <BR><BR>10 - Lista todos os contratos.<BR><BR>20 - Lista somente os contratos ativos, que devem ser faturados até a data atual, que a data atual esteja dentro do período de vigência e ainda não foram faturados no mês.<BR><BR>30 - Lista os contratos faturados no mês atual. <BR><BR>40 - Lista todos os contratos ativos que precisam ser renovados nos próximos 90 dias.
	 *
	 * @var string
	 */
	public string $cEtapa;
	/**
	 * Lista de Ordens de Serviço de uma etapa.
	 *
	 * @var ListaOS[]
	 */
	public array $listaOS;
}
