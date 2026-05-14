<?php

namespace OmieLib\Servicos\Resumo;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Resumo\Request\ObterResumoServRequest;
use OmieLib\Servicos\Resumo\Response\ObterResumoServResponse;

/**
 * Exibe os totais de Ordens de Serviço não faturadas.
 *
 * @pw_element string $cNome Descrição da operação ( ordem de serviço / Proposta ).
 * @pw_element string $cNomePlural Descrição da operação no plural ( ordem de serviço / Proposta ).
 * @pw_element emAberto $emAberto Estrutura contendo os valores em aberto.
 * @pw_element string $cIconePed Unicode do Ícone pendente.
 * @pw_element string $cCorPed Hexadecimal da cor.
 * @pw_element faturarHoje $faturarHoje Exibe os totais com o faturamento previsto para hoje.
 * @pw_element string $cIconeHoje Unicode do Ícone pendente.
 * @pw_element string $cCorHoje Hexadecimal da cor.
 * @pw_element string $cIcone Unicode do Ícone.
 * @pw_element string $cCor Hexadecimal da cor.
 * @pw_element decimal $nFaturadas Quantidade faturada.
 * @pw_element decimal $vFaturadas Valor faturado.
 * @pw_element decimal $nCanceladas Quantidade cancelada.
 * @pw_element decimal $vCanceladas Valor cancelado.
 * @pw_element decimal $nRejeitadas Quantidade rejeitada.
 * @pw_element decimal $vRejeitadas Valor rejeitado.
 * @pw_element string $cVisualizar Indica se o aplicativo possuí a configuração desse tipo de documento.<BR><BR>Pode ser: <BR>S<BR>N
 * @pw_complex ordemServico
 */
class OrdemServico{
	/**
	 * Descrição da operação ( ordem de serviço / Proposta ).
	 *
	 * @var string
	 */
	public string $cNome;
	/**
	 * Descrição da operação no plural ( ordem de serviço / Proposta ).
	 *
	 * @var string
	 */
	public string $cNomePlural;
	/**
	 * Estrutura contendo os valores em aberto.
	 *
	 * @var EmAberto
	 */
	public EmAberto $emAberto;
	/**
	 * Unicode do Ícone pendente.
	 *
	 * @var string
	 */
	public string $cIconePed;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCorPed;
	/**
	 * Exibe os totais com o faturamento previsto para hoje.
	 *
	 * @var FaturarHoje
	 */
	public FaturarHoje $faturarHoje;
	/**
	 * Unicode do Ícone pendente.
	 *
	 * @var string
	 */
	public string $cIconeHoje;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCorHoje;
	/**
	 * Unicode do Ícone.
	 *
	 * @var string
	 */
	public string $cIcone;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCor;
	/**
	 * Quantidade faturada.
	 *
	 * @var decimal
	 */
	public float $nFaturadas;
	/**
	 * Valor faturado.
	 *
	 * @var decimal
	 */
	public float $vFaturadas;
	/**
	 * Quantidade cancelada.
	 *
	 * @var decimal
	 */
	public float $nCanceladas;
	/**
	 * Valor cancelado.
	 *
	 * @var decimal
	 */
	public float $vCanceladas;
	/**
	 * Quantidade rejeitada.
	 *
	 * @var decimal
	 */
	public float $nRejeitadas;
	/**
	 * Valor rejeitado.
	 *
	 * @var decimal
	 */
	public float $vRejeitadas;
	/**
	 * Indica se o aplicativo possuí a configuração desse tipo de documento.<BR><BR>Pode ser: <BR>S<BR>N
	 *
	 * @var string
	 */
	public string $cVisualizar;
}
