<?php

namespace OmieLib\Servicos\Resumo;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Resumo\Request\ObterResumoServRequest;
use OmieLib\Servicos\Resumo\Response\ObterResumoServResponse;

/**
 * Exibe os totais de faturamento de serviços.
 *
 * @pw_element faturamentoResumo $faturamentoResumo Exibe os totais de faturamentos (NFS-e + Recibos).
 * @pw_element faturamentoNFSe $faturamentoNFSe Exibe os totais de faturamentos de notas de serviço (NFS-e).
 * @pw_element faturamentoRecibo $faturamentoRecibo Exibe os totais de faturamentos de Recibos.
 * @pw_element faturamentoViaUnica $faturamentoViaUnica Exibe os totais de faturamentos de notas Via Única.
 * @pw_complex painel
 */
class Painel{
	/**
	 * Exibe os totais de faturamentos (NFS-e + Recibos).
	 *
	 * @var FaturamentoResumo
	 */
	public FaturamentoResumo $faturamentoResumo;
	/**
	 * Exibe os totais de faturamentos de notas de serviço (NFS-e).
	 *
	 * @var FaturamentoNFSe
	 */
	public FaturamentoNFSe $faturamentoNFSe;
	/**
	 * Exibe os totais de faturamentos de Recibos.
	 *
	 * @var FaturamentoRecibo
	 */
	public FaturamentoRecibo $faturamentoRecibo;
	/**
	 * Exibe os totais de faturamentos de notas Via Única.
	 *
	 * @var FaturamentoViaUnica
	 */
	public FaturamentoViaUnica $faturamentoViaUnica;
}
