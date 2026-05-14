<?php

namespace OmieLib\Produtos\ComprasResumo;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\ComprasResumo\Request\ObterResumoComprasRequest;
use OmieLib\Produtos\ComprasResumo\Response\ObterResumoComprasResponse;

/**
 * Exibe os totais de faturamentos das Notas Fiscais (NF-e) emitidas pelo própria fornecedor.
 *
 * @pw_element entradaNfe $entradaNfe Exibe os totais de faturamentos das Notas Fiscais (NF-e) de entrada.
 * @pw_element string $cIcone Unicode do Ícone.
 * @pw_element string $cCor Hexadecimal da cor.
 * @pw_element string $cIconeFat Unicode do Ícone faturado.
 * @pw_element string $cCorFat Hexadecimal da cor.
 * @pw_element string $cIconeCanc Unicode do Ícone de cancelado.
 * @pw_element string $cCorCanc Hexadecimal da cor.
 * @pw_element string $cIconeRej Unicode do Ícone rejeitado.
 * @pw_element string $cCorRej Hexadecimal da cor.
 * @pw_element string $cIconePend Unicode do Ícone pendente.
 * @pw_complex emitidasFornecedorNfe
 */
class EmitidasFornecedorNfe{
	/**
	 * Exibe os totais de faturamentos das Notas Fiscais (NF-e) de entrada.
	 *
	 * @var EntradaNfe
	 */
	public EntradaNfe $entradaNfe;
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
	 * Unicode do Ícone pendente.
	 *
	 * @var string
	 */
	public string $cIconePend;
}
