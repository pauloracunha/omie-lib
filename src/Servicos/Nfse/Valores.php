<?php

namespace OmieLib\Servicos\Nfse;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Nfse\Request\NfseListarRequest;
use OmieLib\Servicos\Nfse\Response\NfseListarResponse;

/**
 * Valores da NFS-e
 *
 * @pw_element decimal $nValorTotalServicos Valor total de serviços.
 * @pw_element decimal $nValorBaseCalculo Valor da Base de Cálculo.
 * @pw_element decimal $nValorDeducao Valor da Dedução.
 * @pw_element string $cIssRetido Indica que o valor do ISS será retido pelo tomador do serviço
 * @pw_element decimal $nValorISS Valor do ISS
 * @pw_element decimal $nAliquotaISS Alíquota do ISS
 * @pw_element decimal $nValorPIS Valor do PIS
 * @pw_element decimal $nValorCOFINS Valor do COFINS.
 * @pw_element decimal $nValorIR Valor do IR.
 * @pw_element decimal $nValorINSS Valor do INSS.
 * @pw_element decimal $nValorCSLL Valor do CSLL.
 * @pw_element decimal $nValorLiquido Valor líquido da Nota Fiscal.
 * @pw_complex Valores
 */
class Valores{
	/**
	 * Valor total de serviços.
	 *
	 * @var decimal
	 */
	public float $nValorTotalServicos;
	/**
	 * Valor da Base de Cálculo.
	 *
	 * @var decimal
	 */
	public float $nValorBaseCalculo;
	/**
	 * Valor da Dedução.
	 *
	 * @var decimal
	 */
	public float $nValorDeducao;
	/**
	 * Indica que o valor do ISS será retido pelo tomador do serviço
	 *
	 * @var string
	 */
	public string $cIssRetido;
	/**
	 * Valor do ISS
	 *
	 * @var decimal
	 */
	public float $nValorISS;
	/**
	 * Alíquota do ISS
	 *
	 * @var decimal
	 */
	public float $nAliquotaISS;
	/**
	 * Valor do PIS
	 *
	 * @var decimal
	 */
	public float $nValorPIS;
	/**
	 * Valor do COFINS.
	 *
	 * @var decimal
	 */
	public float $nValorCOFINS;
	/**
	 * Valor do IR.
	 *
	 * @var decimal
	 */
	public float $nValorIR;
	/**
	 * Valor do INSS.
	 *
	 * @var decimal
	 */
	public float $nValorINSS;
	/**
	 * Valor do CSLL.
	 *
	 * @var decimal
	 */
	public float $nValorCSLL;
	/**
	 * Valor líquido da Nota Fiscal.
	 *
	 * @var decimal
	 */
	public float $nValorLiquido;
}
