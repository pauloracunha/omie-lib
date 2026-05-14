<?php

namespace OmieLib\Produtos\ComprasResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\ComprasResumo\Request\ObterResumoComprasRequest;
use OmieLib\Produtos\ComprasResumo\Response\ObterResumoComprasResponse;

/**
 * Sexta etapa do fluxo de Ordem de Produção.
 *
 * @pw_element decimal $nTotal Quantidade total.
 * @pw_element string $cEtapa Descrição dada à etapa.
 * @pw_element string $cIcone Unicode do Ícone.
 * @pw_element string $cCor Hexadecimal da cor.
 * @pw_complex etapa6
 */
class Etapa6{
	/**
	 * Quantidade total.
	 *
	 * @var decimal
	 */
	public float $nTotal;
	/**
	 * Descrição dada à etapa.
	 *
	 * @var string
	 */
	public string $cEtapa;
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
