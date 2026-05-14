<?php

namespace OmieLib\Servicos\Oslote;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Oslote\Request\FaturarLoteOSRequest;
use OmieLib\Servicos\Oslote\Request\ListarLoteNfseRequest;
use OmieLib\Servicos\Oslote\Request\ListarLotesOSRequest;
use OmieLib\Servicos\Oslote\Request\StatusLoteOsRequest;
use OmieLib\Servicos\Oslote\Response\FaturarLoteOSResponse;
use OmieLib\Servicos\Oslote\Response\ListarLoteNfseResponse;
use OmieLib\Servicos\Oslote\Response\ListarLotesOSResponse;
use OmieLib\Servicos\Oslote\Response\StatusLoteOsResponse;

/**
 * Notas encontradas para data de faturamento enviadas
 *
 * @pw_element integer $nIdLoteFat Id do Lote de Faturamento da Ordem de Serviço
 * @pw_element integer $nQtdeTotal Quantidade de Contrato de Serviço na Fila
 * @pw_element integer $nQtdeProcessadas Quantidade de Contrato de Serviços processados
 * @pw_element string $cOrigem Origem do faturamento.<BR><BR>MAN-Manual<BR>SCH-Scheduler<BR>API - Integração
 * @pw_element string $cStatus Status do faturamento.<BR><BR>RUNNING<BR>DONE<BR>ERROR
 * @pw_element string $dUltimaAtual Data da última atualização
 * @pw_element string $hUltimaAtual Hora da última atualização
 * @pw_element string $dInicioProc Data de Inicio do Faturamento
 * @pw_element string $hInicioProc Hora de Inicio do Faturamento
 * @pw_element string $dConclusaoProc Data de conclusão do Faturamento
 * @pw_element string $hConclusaoProc Hora de conclusão do Faturamento
 * @pw_element detalhes $detalhes Ordens de serviços que foram processadas pelo lote filtrado
 * @pw_complex lotes
 */
class Lotes{
	/**
	 * Id do Lote de Faturamento da Ordem de Serviço
	 *
	 * @var integer
	 */
	public int $nIdLoteFat;
	/**
	 * Quantidade de Contrato de Serviço na Fila
	 *
	 * @var integer
	 */
	public int $nQtdeTotal;
	/**
	 * Quantidade de Contrato de Serviços processados
	 *
	 * @var integer
	 */
	public int $nQtdeProcessadas;
	/**
	 * Origem do faturamento.<BR><BR>MAN-Manual<BR>SCH-Scheduler<BR>API - Integração
	 *
	 * @var string
	 */
	public string $cOrigem;
	/**
	 * Status do faturamento.<BR><BR>RUNNING<BR>DONE<BR>ERROR
	 *
	 * @var string
	 */
	public string $cStatus;
	/**
	 * Data da última atualização
	 *
	 * @var string
	 */
	public string $dUltimaAtual;
	/**
	 * Hora da última atualização
	 *
	 * @var string
	 */
	public string $hUltimaAtual;
	/**
	 * Data de Inicio do Faturamento
	 *
	 * @var string
	 */
	public string $dInicioProc;
	/**
	 * Hora de Inicio do Faturamento
	 *
	 * @var string
	 */
	public string $hInicioProc;
	/**
	 * Data de conclusão do Faturamento
	 *
	 * @var string
	 */
	public string $dConclusaoProc;
	/**
	 * Hora de conclusão do Faturamento
	 *
	 * @var string
	 */
	public string $hConclusaoProc;
	/**
	 * Ordens de serviços que foram processadas pelo lote filtrado
	 *
	 * @var Detalhes
	 */
	public Detalhes $detalhes;
}
