<?php

namespace OmieLib\Servicos\Resumo\Request;

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
use OmieLib\Servicos\Resumo\Response\ObterResumoServResponse;
use OmieLib\Servicos\Resumo\ResumoServicosJsonClient;

/**
 * Solicitação do resumo de vendas de serviços.
 *
 * @pw_element string $dDataInicio Data Inicial de Consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_element string $dDataFim Data final de Consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_element boolean $lApenasResumo Exibir apenas o resumo.<BR><BR>Quando true será retornado as estruturas:<BR><BR>OrdemServico->faturarHoje<BR>ContratoServico->faturarHoje<BR><BR>Quando false retornará todas as estruturas.<BR><BR>Default = true
 * @pw_complex ObterResumoServRequest
 */
class ObterResumoServRequest{
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
	 * Exibir apenas o resumo.<BR><BR>Quando true será retornado as estruturas:<BR><BR>OrdemServico->faturarHoje<BR>ContratoServico->faturarHoje<BR><BR>Quando false retornará todas as estruturas.<BR><BR>Default = true
	 *
	 * @var boolean
	 */
	public bool $lApenasResumo;
}
