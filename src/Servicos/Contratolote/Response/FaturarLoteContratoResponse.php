<?php

namespace OmieLib\Servicos\Contratolote\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contratolote\ContratoLoteJsonClient;
use OmieLib\Servicos\Contratolote\Detalhes;
use OmieLib\Servicos\Contratolote\Lotes;
use OmieLib\Servicos\Contratolote\Request\FaturarLoteContratoRequest;
use OmieLib\Servicos\Contratolote\Request\ListarLotesContratoRequest;
use OmieLib\Servicos\Contratolote\Request\StatusLoteContratoRequest;

/**
 * Response de notas de serviço faturadas em Lote
 *
 * @pw_element integer $nQtdeFat Qtde de contratos de serviços faturados.
 * @pw_element integer $nIdLoteFat Id do Lote de Processamento
 * @pw_element string $cCodStatus Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $cDesStatus Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_complex FaturarLoteContratoResponse
 */
class FaturarLoteContratoResponse{
	/**
	 * Qtde de contratos de serviços faturados.
	 *
	 * @var integer
	 */
	public int $nQtdeFat;
	/**
	 * Id do Lote de Processamento
	 *
	 * @var integer
	 */
	public int $nIdLoteFat;
	/**
	 * Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
