<?php

namespace OmieLib\Produtos\ComprasResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\ComprasResumo\Request\ObterResumoComprasRequest;
use OmieLib\Produtos\ComprasResumo\Response\ObterResumoComprasResponse;

/**
 * Exibe os totais de faturamentos dos Conhecimentos de Transporte (CT-e) emitidos pelo fornecedor.
 *
 * @pw_element entradaCte $entradaCte Exibe os totais de faturamentos dos Conhecimentos de Transporte (CT-e) de entrada.
 * @pw_element string $cIcone Unicode do Ícone.
 * @pw_element string $cCor Hexadecimal da cor.
 * @pw_element string $cIconeFat Unicode do Ícone faturado.
 * @pw_element string $cCorFat Hexadecimal da cor.
 * @pw_element string $cIconeCanc Unicode do Ícone de cancelado.
 * @pw_element string $cCorCanc Hexadecimal da cor.
 * @pw_element string $cIconePend Unicode do Ícone pendente.
 * @pw_element string $cCorPend Hexadecimal da cor.
 * @pw_complex emitidasEmpresaCte
 */
class EmitidasEmpresaCte{
	/**
	 * Exibe os totais de faturamentos dos Conhecimentos de Transporte (CT-e) de entrada.
	 *
	 * @var EntradaCte
	 */
	public EntradaCte $entradaCte;
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
}
