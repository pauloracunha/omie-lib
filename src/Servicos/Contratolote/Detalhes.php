<?php

namespace OmieLib\Servicos\Contratolote;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contratolote\Request\FaturarLoteContratoRequest;
use OmieLib\Servicos\Contratolote\Request\ListarLotesContratoRequest;
use OmieLib\Servicos\Contratolote\Request\StatusLoteContratoRequest;
use OmieLib\Servicos\Contratolote\Response\FaturarLoteContratoResponse;
use OmieLib\Servicos\Contratolote\Response\ListarLotesContratoResponse;
use OmieLib\Servicos\Contratolote\Response\StatusLoteContratoResponse;

/**
 * Contrato de Serviços que foram processadas pelo lote filtrado
 *
 * @pw_element integer $nIdPedido Id da Ordem de Serviço gerada
 * @pw_element integer $nIdContrato Id do contrato processado
 * @pw_element string $cStatus Status do faturamento.<BR><BR>RUNNING<BR>DONE<BR>ERROR
 * @pw_element string $cMensagem Detalhamento do Status do processamento.
 * @pw_complex detalhes
 */
class Detalhes{
	/**
	 * Id da Ordem de Serviço gerada
	 *
	 * @var integer
	 */
	public int $nIdPedido;
	/**
	 * Id do contrato processado
	 *
	 * @var integer
	 */
	public int $nIdContrato;
	/**
	 * Status do faturamento.<BR><BR>RUNNING<BR>DONE<BR>ERROR
	 *
	 * @var string
	 */
	public string $cStatus;
	/**
	 * Detalhamento do Status do processamento.
	 *
	 * @var string
	 */
	public string $cMensagem;
}
