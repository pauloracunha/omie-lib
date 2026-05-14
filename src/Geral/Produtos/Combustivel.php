<?php

namespace OmieLib\Geral\Produtos;

use OmieLib\Common\OmieFail;

/**
 * Detalhamento específico para cadastro de combustíveis.
 *
 * @pw_element string $codigo_anp Código de Produto da ANP.
 * @pw_element string $descr_anp Descrição do Produto conforme ANP.
 * @pw_element decimal $percent_glp Percentual de GLP Derivado do Petróleo.
 * @pw_element decimal $percent_gas_nac Percentual de Gás Natural Nacional.
 * @pw_element decimal $percent_gas_imp Percentual de Gás Natural Importado.
 * @pw_element decimal $valor_part Valor de partida
 * @pw_complex combustivel
 */
class Combustivel{
	/**
	 * Código de Produto da ANP.
	 *
	 * @var string
	 */
	public string $codigo_anp;
	/**
	 * Descrição do Produto conforme ANP.
	 *
	 * @var string
	 */
	public string $descr_anp;
	/**
	 * Percentual de GLP Derivado do Petróleo.
	 *
	 * @var decimal
	 */
	public float $percent_glp;
	/**
	 * Percentual de Gás Natural Nacional.
	 *
	 * @var decimal
	 */
	public float $percent_gas_nac;
	/**
	 * Percentual de Gás Natural Importado.
	 *
	 * @var decimal
	 */
	public float $percent_gas_imp;
	/**
	 * Valor de partida
	 *
	 * @var decimal
	 */
	public float $valor_part;
}
