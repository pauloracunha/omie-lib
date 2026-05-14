<?php

namespace OmieLib\Produtos\Cte\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cte\ConhecimentoTransporteJsonClient;
use OmieLib\Produtos\Cte\Departamentos;
use OmieLib\Produtos\Cte\ItensFatura;
use OmieLib\Produtos\Cte\ItensFaturaLote;
use OmieLib\Produtos\Cte\NfeEncontradas;
use OmieLib\Produtos\Cte\Request\CteAverbacaoRequest;
use OmieLib\Produtos\Cte\Request\CteCCRequest;
use OmieLib\Produtos\Cte\Request\CteCancelarRequest;
use OmieLib\Produtos\Cte\Request\CteExcluirFatRequest;
use OmieLib\Produtos\Cte\Request\CteExcluirRequest;
use OmieLib\Produtos\Cte\Request\CteFaturarLoteRequest;
use OmieLib\Produtos\Cte\Request\CteFaturarRequest;
use OmieLib\Produtos\Cte\Request\CteImportarRequest;
use OmieLib\Produtos\Cte\Request\CteListarNFeRequest;
use OmieLib\Produtos\Cte\Request\CteStatusFaturaRequest;

/**
 * Resposta da solicitação da faturamento por lote de um grupos de CT-es.
 *
 * @pw_element integer $nIdFaturamentoLote Id do faturamento. <BR><BR>Para indicar o início de um novo lote envie 0 (zero) nesse campo.<BR><BR>Como resposta você receberá o nIdFaturamento gerado pelo Omie automaticamente.<BR><BR>Nos próximos envios informe o nIdFaturamento recebido para adicionar novos CTes ao lote.<BR><BR>Para concluir o envio de CTes e gerar a fatura do lote informe "S" na tag cConcluirFatura.<BR><BR>Na última chamada desse método você pode enviar apenas a tag cConcluirFatura. Opcionalmente, você pode enviar os CTes restantes.
 * @pw_element string $cCodStatus Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $cDesStatus Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_complex cteFaturarLoteResponse
 */
class CteFaturarLoteResponse{
	/**
	 * Id do faturamento. <BR><BR>Para indicar o início de um novo lote envie 0 (zero) nesse campo.<BR><BR>Como resposta você receberá o nIdFaturamento gerado pelo Omie automaticamente.<BR><BR>Nos próximos envios informe o nIdFaturamento recebido para adicionar novos CTes ao lote.<BR><BR>Para concluir o envio de CTes e gerar a fatura do lote informe "S" na tag cConcluirFatura.<BR><BR>Na última chamada desse método você pode enviar apenas a tag cConcluirFatura. Opcionalmente, você pode enviar os CTes restantes.
	 *
	 * @var integer
	 */
	public int $nIdFaturamentoLote;
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
