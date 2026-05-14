<?php

namespace OmieLib\Financas\Caixa;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Caixa\Request\OcprListarRequest;
use OmieLib\Financas\Caixa\Response\OcprListarResponse;

/**
 * Orçamento por categorias.
 *
 * @pw_element string $cCodCateg Código da Categoria
 * @pw_element string $cDesCateg Descrição da Categoria.
 * @pw_element decimal $nValorPrevisto Valor Previsto.
 * @pw_element decimal $nValorRealilzado Valor Realizado / a realizar.
 * @pw_complex ListaOrcamentos
 */
class ListaOrcamentos{
	/**
	 * Código da Categoria
	 *
	 * @var string
	 */
	public string $cCodCateg;
	/**
	 * Descrição da Categoria.
	 *
	 * @var string
	 */
	public string $cDesCateg;
	/**
	 * Valor Previsto.
	 *
	 * @var decimal
	 */
	public float $nValorPrevisto;
	/**
	 * Valor Realizado / a realizar.
	 *
	 * @var decimal
	 */
	public float $nValorRealilzado;
}
