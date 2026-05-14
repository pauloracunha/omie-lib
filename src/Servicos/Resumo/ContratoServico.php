<?php

namespace OmieLib\Servicos\Resumo;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Resumo\Request\ObterResumoServRequest;
use OmieLib\Servicos\Resumo\Response\ObterResumoServResponse;

/**
 * Exibe os totais de Contratos de Serviço não faturados.
 *
 * @pw_element decimal $nFaturadas Quantidade faturada.
 * @pw_element decimal $vFaturadas Valor faturado.
 * @pw_element string $cIconeFat Unicode do Ícone faturado.
 * @pw_element string $cCorFat Hexadecimal da cor.
 * @pw_element decimal $nCanceladas Quantidade cancelada.
 * @pw_element decimal $vCanceladas Valor cancelado.
 * @pw_element string $cIconeCanc Unicode do Ícone de cancelado.
 * @pw_element string $cCorCanc Hexadecimal da cor.
 * @pw_element decimal $nRejeitadas Quantidade rejeitada.
 * @pw_element decimal $vRejeitadas Valor rejeitado.
 * @pw_element string $cIconeRej Unicode do Ícone rejeitado.
 * @pw_element string $cCorRej Hexadecimal da cor.
 * @pw_element decimal $nPendentes Quantidade pendente.
 * @pw_element decimal $vPendentes Valor pendente.
 * @pw_element string $cIconePend Unicode do Ícone pendente.
 * @pw_element string $cCorPend Hexadecimal da cor.
 * @pw_element emAberto $emAberto Estrutura contendo os valores em aberto.
 * @pw_element string $cIconePed Unicode do Ícone pendente.
 * @pw_element string $cCorPed Hexadecimal da cor.
 * @pw_element faturarHoje $faturarHoje Exibe os totais com o faturamento previsto para hoje.
 * @pw_element string $cIconeHoje Unicode do Ícone pendente.
 * @pw_element string $cCorHoje Hexadecimal da cor.
 * @pw_element string $cIcone Unicode do Ícone.
 * @pw_element string $cCor Hexadecimal da cor.
 * @pw_element string $cVisualizar Indica se o aplicativo possuí a configuração desse tipo de documento.<BR><BR>Pode ser: <BR>S<BR>N
 * @pw_complex contratoServico
 */
class ContratoServico{
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
	 * Unicode do Ícone faturado.
	 *
	 * @var string
	 */
	public string $cIconeFat;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCorFat;
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
	 * Unicode do Ícone de cancelado.
	 *
	 * @var string
	 */
	public string $cIconeCanc;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCorCanc;
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
	 * Unicode do Ícone rejeitado.
	 *
	 * @var string
	 */
	public string $cIconeRej;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCorRej;
	/**
	 * Quantidade pendente.
	 *
	 * @var decimal
	 */
	public float $nPendentes;
	/**
	 * Valor pendente.
	 *
	 * @var decimal
	 */
	public float $vPendentes;
	/**
	 * Unicode do Ícone pendente.
	 *
	 * @var string
	 */
	public string $cIconePend;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCorPend;
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
	 * Indica se o aplicativo possuí a configuração desse tipo de documento.<BR><BR>Pode ser: <BR>S<BR>N
	 *
	 * @var string
	 */
	public string $cVisualizar;
}
