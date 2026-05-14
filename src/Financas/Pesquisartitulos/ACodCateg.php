<?php

namespace OmieLib\Financas\Pesquisartitulos;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Pesquisartitulos\Request\LtLinkBoletoRequest;
use OmieLib\Financas\Pesquisartitulos\Request\LtListarExcluidosRequest;
use OmieLib\Financas\Pesquisartitulos\Request\LtPesquisarRequest;
use OmieLib\Financas\Pesquisartitulos\Response\LtLinkBoletoResponse;
use OmieLib\Financas\Pesquisartitulos\Response\LtListarExcluidosResponse;
use OmieLib\Financas\Pesquisartitulos\Response\LtPesquisarResponse;

/**
 * Rateio de categorias
 *
 * @pw_element string $cCodCateg Código da categoria
 * @pw_element decimal $nValor Valor da categoria
 * @pw_element decimal $nPerc Percentual da categoria
 * @pw_complex aCodCateg
 */
class ACodCateg{
	/**
	 * Código da categoria
	 *
	 * @var string
	 */
	public string $cCodCateg;
	/**
	 * Valor da categoria
	 *
	 * @var decimal
	 */
	public float $nValor;
	/**
	 * Percentual da categoria
	 *
	 * @var decimal
	 */
	public float $nPerc;
}
