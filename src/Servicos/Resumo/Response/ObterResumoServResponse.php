<?php

namespace OmieLib\Servicos\Resumo\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Resumo\ContratoServico;
use OmieLib\Servicos\Resumo\EmAberto;
use OmieLib\Servicos\Resumo\FaturamentoNFSe;
use OmieLib\Servicos\Resumo\FaturamentoRecibo;
use OmieLib\Servicos\Resumo\FaturamentoResumo;
use OmieLib\Servicos\Resumo\FaturamentoViaUnica;
use OmieLib\Servicos\Resumo\FaturarHoje;
use OmieLib\Servicos\Resumo\OrdemServico;
use OmieLib\Servicos\Resumo\Painel;
use OmieLib\Servicos\Resumo\PropostaServico;
use OmieLib\Servicos\Resumo\Request\ObterResumoServRequest;
use OmieLib\Servicos\Resumo\ResumoServicosJsonClient;

/**
 * Resposta da solicitação do resumos de serviços.
 *
 * @pw_element string $dDataInicio Data Inicial de Consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_element string $dDataFim Data final de Consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_element painel $painel Exibe os totais de faturamento de serviços.
 * @pw_element ordemServico $ordemServico Exibe os totais de Ordens de Serviço não faturadas.
 * @pw_element contratoServico $contratoServico Exibe os totais de Contratos de Serviço não faturados.
 * @pw_element propostaServico $propostaServico Exibe os totais das Propostas de Ordens de Serviço.
 * @pw_complex ObterResumoServResponse
 */
class ObterResumoServResponse{
	/**
	 * Data Inicial de Consulta.<BR><BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDataInicio;
	/**
	 * Data final de Consulta.<BR><BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDataFim;
	/**
	 * Exibe os totais de faturamento de serviços.
	 *
	 * @var Painel
	 */
	public Painel $painel;
	/**
	 * Exibe os totais de Ordens de Serviço não faturadas.
	 *
	 * @var OrdemServico
	 */
	public OrdemServico $ordemServico;
	/**
	 * Exibe os totais de Contratos de Serviço não faturados.
	 *
	 * @var ContratoServico
	 */
	public ContratoServico $contratoServico;
	/**
	 * Exibe os totais das Propostas de Ordens de Serviço.
	 *
	 * @var PropostaServico
	 */
	public PropostaServico $propostaServico;
}
