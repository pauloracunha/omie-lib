<?php

namespace OmieLib\Servicos\Contratofat\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contratofat\ContratoFaturamentoJsonClient;
use OmieLib\Servicos\Contratofat\ListaContratos;
use OmieLib\Servicos\Contratofat\Request\CtrAtivarRequest;
use OmieLib\Servicos\Contratofat\Request\CtrCancelarRequest;
use OmieLib\Servicos\Contratofat\Request\CtrFaturarRequest;
use OmieLib\Servicos\Contratofat\Request\CtrObterRequest;
use OmieLib\Servicos\Contratofat\Request\CtrReativarRequest;
use OmieLib\Servicos\Contratofat\Request\CtrSuspenderRequest;
use OmieLib\Servicos\Contratofat\Request\CtrValidarRequest;

/**
 * Resposta da solicitação da lista de contratos de uma etapa.
 *
 * @pw_element string $cEtapa Código da Etapa.<BR><BR>Valores possíveis: <BR><BR>10 - Lista todos os contratos.<BR><BR>20 - Lista somente os contratos ativos, que devem ser faturados até a data atual, que a data atual esteja dentro do período de vigência e ainda não foram faturados no mês.<BR><BR>30 - Lista os contratos faturados no mês atual. <BR><BR>40 - Lista todos os contratos ativos que precisam ser renovados nos próximos 90 dias.
 * @pw_element listaContratosArray $listaContratos Lista de contratos encontrados na etapa solicitada.
 * @pw_complex ctrObterResponse
 */
class CtrObterResponse{
	/**
	 * Código da Etapa.<BR><BR>Valores possíveis: <BR><BR>10 - Lista todos os contratos.<BR><BR>20 - Lista somente os contratos ativos, que devem ser faturados até a data atual, que a data atual esteja dentro do período de vigência e ainda não foram faturados no mês.<BR><BR>30 - Lista os contratos faturados no mês atual. <BR><BR>40 - Lista todos os contratos ativos que precisam ser renovados nos próximos 90 dias.
	 *
	 * @var string
	 */
	public string $cEtapa;
	/**
	 * Lista de contratos encontrados na etapa solicitada.
	 *
	 * @var ListaContratos[]
	 */
	public array $listaContratos;
}
