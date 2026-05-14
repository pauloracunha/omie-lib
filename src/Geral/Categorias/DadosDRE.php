<?php

namespace OmieLib\Geral\Categorias;

use OmieLib\Common\OmieFail;

/**
 * Detalhes da conta do DRE.
 *
 * @pw_element string $codigoDRE Código da Conta do DRE.
 * @pw_element string $descricaoDRE Descrição da Conta do DRE.
 * @pw_element string $naoExibirDRE Indica se a Conta está marcada para não exibir no DRE.
 * @pw_element integer $nivelDRE Nível da Conta da DRE.
 * @pw_element string $sinalDRE Sinal da Conta para o DRE.
 * @pw_element string $totalizaDRE Indica se a Conta do DRE é Totalizadora.
 * @pw_complex dadosDRE
 */
class DadosDRE{
	/**
	 * Código da Conta do DRE.
	 *
	 * @var string
	 */
	public string $codigoDRE;
	/**
	 * Descrição da Conta do DRE.
	 *
	 * @var string
	 */
	public string $descricaoDRE;
	/**
	 * Indica se a Conta está marcada para não exibir no DRE.
	 *
	 * @var string
	 */
	public string $naoExibirDRE;
	/**
	 * Nível da Conta da DRE.
	 *
	 * @var integer
	 */
	public int $nivelDRE;
	/**
	 * Sinal da Conta para o DRE.
	 *
	 * @var string
	 */
	public string $sinalDRE;
	/**
	 * Indica se a Conta do DRE é Totalizadora.
	 *
	 * @var string
	 */
	public string $totalizaDRE;
}
