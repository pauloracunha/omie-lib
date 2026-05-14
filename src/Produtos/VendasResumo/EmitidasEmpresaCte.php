<?php

namespace OmieLib\Produtos\VendasResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\VendasResumo\Request\ObterResumoVendasRequest;
use OmieLib\Produtos\VendasResumo\Response\ObterResumoVendasResponse;

/**
 * Exibe os totais de faturamentos dos Conhecimentos de Transporte (CT-e) emitidos pela própria empresa.
 *
 * @pw_element string $cVisualizar Indica se o aplicativo possuí a configuração desse tipo de documento.<BR><BR>Pode ser: <BR>S<BR>N<BR>
 * @pw_element saidaCte $saidaCte Exibe os totais de faturamentos dos Conhecimentos de Transporte (CT-e) de saída.
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
	 * Indica se o aplicativo possuí a configuração desse tipo de documento.<BR><BR>Pode ser: <BR>S<BR>N<BR>
	 *
	 * @var string
	 */
	public string $cVisualizar;
	/**
	 * Exibe os totais de faturamentos dos Conhecimentos de Transporte (CT-e) de saída.
	 *
	 * @var SaidaCte
	 */
	public SaidaCte $saidaCte;
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
