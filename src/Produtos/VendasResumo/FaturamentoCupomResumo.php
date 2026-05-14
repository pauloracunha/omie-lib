<?php

namespace OmieLib\Produtos\VendasResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\VendasResumo\Request\ObterResumoVendasRequest;
use OmieLib\Produtos\VendasResumo\Response\ObterResumoVendasResponse;

/**
 * Resumo do faturamento de cupons (ECF + SAT + NFC-e)
 *
 * @pw_element string $cVisualizar Indica se o aplicativo possuí a configuração desse tipo de documento.<BR><BR>Pode ser: <BR>S<BR>N<BR>
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
 * @pw_element decimal $nContingencia Quantidade em contigência.
 * @pw_element decimal $vContingencia Valor em contigência.
 * @pw_element string $cIconeCont Unicode do Ícone contigência
 * @pw_element string $cCorCont Hexadecimal da cor.
 * @pw_element decimal $nTotal Quantidade total.
 * @pw_element decimal $vTotal Valor total.
 * @pw_complex faturamentoCupomResumo
 */
class FaturamentoCupomResumo{
	/**
	 * Indica se o aplicativo possuí a configuração desse tipo de documento.<BR><BR>Pode ser: <BR>S<BR>N<BR>
	 *
	 * @var string
	 */
	public string $cVisualizar;
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
	 * Quantidade em contigência.
	 *
	 * @var decimal
	 */
	public float $nContingencia;
	/**
	 * Valor em contigência.
	 *
	 * @var decimal
	 */
	public float $vContingencia;
	/**
	 * Unicode do Ícone contigência
	 *
	 * @var string
	 */
	public string $cIconeCont;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCorCont;
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
}
