<?php

namespace OmieLib\Produtos\ComprasResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\ComprasResumo\Request\ObterResumoComprasRequest;
use OmieLib\Produtos\ComprasResumo\Response\ObterResumoComprasResponse;

/**
 * Exibe os totais de faturamentos (NF-e + Pedido de Compra).
 *
 * @pw_element decimal $nFaturadas Quantidade faturada.
 * @pw_element decimal $vFaturadas Valor faturado.
 * @pw_element string $cIconeFat Unicode do Ícone faturado.
 * @pw_element string $cCorFat Hexadecimal da cor.
 * @pw_element decimal $nCanceladas Quantidade cancelada.
 * @pw_element decimal $vCanceladas Valor cancelado.
 * @pw_element string $cIconeCanc Unicode do Ícone de cancelado.
 * @pw_element string $cCorCanc Hexadecimal da cor.
 * @pw_element decimal $nPendentes Quantidade pendente.
 * @pw_element decimal $vPendentes Valor pendente.
 * @pw_element string $cIconePend Unicode do Ícone pendente.
 * @pw_element string $cCorPend Hexadecimal da cor.
 * @pw_element decimal $nRejeitadas Quantidade rejeitada.
 * @pw_element decimal $vRejeitadas Valor rejeitado.
 * @pw_element string $cIconeRej Unicode do Ícone rejeitado.
 * @pw_element string $cCorRej Hexadecimal da cor.
 * @pw_element decimal $nTotal Quantidade total.
 * @pw_element decimal $vTotal Valor total.
 * @pw_element string $cIcone Unicode do Ícone.
 * @pw_element string $cCor Hexadecimal da cor.
 * @pw_complex faturamentoResumo
 */
class FaturamentoResumo{
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
	 * Quantidade total.
	 *
	 * @var decimal
	 */
	public float $nTotal;
	/**
	 * Valor total.
	 *
	 * @var decimal
	 */
	public float $vTotal;
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
}
