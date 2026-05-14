<?php

namespace OmieLib\Produtos\Notaentrada;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Notaentrada\Request\NeAlterarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeConsultarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeExcluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeIncluirRequest;
use OmieLib\Produtos\Notaentrada\Request\NeListarRequest;
use OmieLib\Produtos\Notaentrada\Request\NeStatusRequest;
use OmieLib\Produtos\Notaentrada\Response\NeAlterarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeConsultarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeExcluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeIncluirResponse;
use OmieLib\Produtos\Notaentrada\Response\NeListarResponse;
use OmieLib\Produtos\Notaentrada\Response\NeStatusResponse;

/**
 * Custos de estoque do item da nota de entrada
 *
 * @pw_element string $cICMSCusto ICMS é custo de estoque.<BR><BR>Informar "S" ou "N".
 * @pw_element string $cPISCusto PIS é custo de estoque.<BR><BR>Informar "S" ou "N".
 * @pw_element string $cICMSSTCusto ICMS ST é custo de estoque.<BR><BR>Informar "S" ou "N".
 * @pw_element string $cCOFINSCusto COFINS é custo de estoque.<BR><BR>Informar "S" ou "N".
 * @pw_element string $cIPICusto IPI é custo de estoque.<BR><BR>Informar "S" ou "N".
 * @pw_element string $cFreteCusto Frete é custo de estoque.<BR><BR>Informar "S" ou "N".
 * @pw_element string $cSeguroCusto Seguro é custo de estoque.<BR><BR>Informar "S" ou "N".
 * @pw_element string $cOutrosDespCusto Outras Desp. é custo de estoque.<BR><BR>Informar "S" ou "N".
 * @pw_element decimal $nValorICMSSTCusto Valor do ICMS ST
 * @pw_element decimal $nAliqCredPISCusto % Alíq. de Crédito do PIS
 * @pw_element decimal $nAliqCredCOFINSCusto % Alíq. de Crédito do COFINS
 * @pw_complex custos
 */
class Custos{
	/**
	 * ICMS é custo de estoque.<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $cICMSCusto;
	/**
	 * PIS é custo de estoque.<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $cPISCusto;
	/**
	 * ICMS ST é custo de estoque.<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $cICMSSTCusto;
	/**
	 * COFINS é custo de estoque.<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $cCOFINSCusto;
	/**
	 * IPI é custo de estoque.<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $cIPICusto;
	/**
	 * Frete é custo de estoque.<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $cFreteCusto;
	/**
	 * Seguro é custo de estoque.<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $cSeguroCusto;
	/**
	 * Outras Desp. é custo de estoque.<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $cOutrosDespCusto;
	/**
	 * Valor do ICMS ST
	 *
	 * @var decimal
	 */
	public float $nValorICMSSTCusto;
	/**
	 * % Alíq. de Crédito do PIS
	 *
	 * @var decimal
	 */
	public float $nAliqCredPISCusto;
	/**
	 * % Alíq. de Crédito do COFINS
	 *
	 * @var decimal
	 */
	public float $nAliqCredCOFINSCusto;
}
