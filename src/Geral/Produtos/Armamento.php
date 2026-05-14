<?php

namespace OmieLib\Geral\Produtos;

use OmieLib\Common\OmieFail;

/**
 * Detalhamento especifco para cadastro de armamentos.
 *
 * @pw_element string $serie_cano Número de série do cano
 * @pw_element string $descr_arma Descrição completa da arma
 * @pw_element string $serie_arma Número de série da arma
 * @pw_element string $tipo_arma Indicador do tipo de arma de fogo
 * @pw_complex armamento
 */
class Armamento{
	/**
	 * Número de série do cano
	 *
	 * @var string
	 */
	public string $serie_cano;
	/**
	 * Descrição completa da arma
	 *
	 * @var string
	 */
	public string $descr_arma;
	/**
	 * Número de série da arma
	 *
	 * @var string
	 */
	public string $serie_arma;
	/**
	 * Indicador do tipo de arma de fogo
	 *
	 * @var string
	 */
	public string $tipo_arma;
}
