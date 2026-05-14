<?php

namespace OmieLib\Produtos\ComprasResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\ComprasResumo\Request\ObterResumoComprasRequest;
use OmieLib\Produtos\ComprasResumo\Response\ObterResumoComprasResponse;

/**
 * Exibe os totais das Requisições de Compras.
 *
 * @pw_element emAberto $emAberto Estrutura contendo os valores em aberto.
 * @pw_element string $cIcone Unicode do Ícone.
 * @pw_element string $cCor Hexadecimal da cor.
 * @pw_complex requisicaoCompra
 */
class RequisicaoCompra{
	/**
	 * Estrutura contendo os valores em aberto.
	 *
	 * @var EmAberto
	 */
	public EmAberto $emAberto;
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
