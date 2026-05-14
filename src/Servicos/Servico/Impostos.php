<?php

namespace OmieLib\Servicos\Servico;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Servico\Request\SrvAssociarRequest;
use OmieLib\Servicos\Servico\Request\SrvConsultarRequest;
use OmieLib\Servicos\Servico\Request\SrvEditarRequest;
use OmieLib\Servicos\Servico\Request\SrvExcluirRequest;
use OmieLib\Servicos\Servico\Request\SrvIncluirRequest;
use OmieLib\Servicos\Servico\Request\SrvListarRequest;
use OmieLib\Servicos\Servico\Request\SrvUpsertRequest;
use OmieLib\Servicos\Servico\Response\SrvAssociarResponse;
use OmieLib\Servicos\Servico\Response\SrvConsultarResponse;
use OmieLib\Servicos\Servico\Response\SrvEditarResponse;
use OmieLib\Servicos\Servico\Response\SrvExcluirResponse;
use OmieLib\Servicos\Servico\Response\SrvIncluirResponse;
use OmieLib\Servicos\Servico\Response\SrvListarResponse;
use OmieLib\Servicos\Servico\Response\SrvUpsertResponse;

/**
 * Impostos e Retenções do serviço.
 *
 * @pw_element decimal $nAliqISS Alíquota de ISS.
 * @pw_element string $cRetISS ISS Retido (S/N).
 * @pw_element decimal $nAliqPIS Alíquota do PIS.
 * @pw_element string $cRetPIS PIS Retido (S/N).
 * @pw_element decimal $nAliqCOFINS Alíquota de COFINS.
 * @pw_element string $cRetCOFINS COFINS Retido (S/N).
 * @pw_element decimal $nAliqCSLL Alíquota de CSLL.
 * @pw_element string $cRetCSLL CSLL Retido (S/N).
 * @pw_element decimal $nAliqIR Alíquota do IR.
 * @pw_element string $cRetIR IR Retido (S/N).
 * @pw_element decimal $nAliqINSS Alíquota de INSS.
 * @pw_element string $cRetINSS INSS Retido (S/N).
 * @pw_element decimal $nRedBaseINSS Alíquota de Redução da Base de Cálculo de INSS.
 * @pw_element decimal $nRedBasePIS Alíquota de Redução da Base de Cálculo de PIS
 * @pw_element decimal $nRedBaseCOFINS Alíquota de Redução da Base de Cálculo de COFINS
 * @pw_element boolean $lDeduzISS Deduz o ISS da Base de Cálculo de PIS e COFINS.
 * @pw_element decimal $nAliqCbs Alíquota do CBS
 * @pw_element string $cCstIbsCbs Código da Situação Tributária IBS/CBS.
 * @pw_element decimal $nAliqIbsUf Alíquota do IBS Estadual.
 * @pw_element decimal $nAliqIbsMun Alíquota do Alíquota do IBS Municipal.
 * @pw_element decimal $nPercReducaoIbsUf Percentual redução IBS municipal.
 * @pw_element decimal $nPercReducaoIbsMun Percentual redução IBS estadual.
 * @pw_element decimal $nPercReducaoCbs Percentual redução CBS.
 * @pw_element string $cClassTrib Código de Classificação Tributária.
 * @pw_element string $cIndOper Código Indicador de Operação.
 * @pw_complex impostos
 */
class Impostos{
	/**
	 * Alíquota de ISS.
	 *
	 * @var decimal
	 */
	public float $nAliqISS;
	/**
	 * ISS Retido (S/N).
	 *
	 * @var string
	 */
	public string $cRetISS;
	/**
	 * Alíquota do PIS.
	 *
	 * @var decimal
	 */
	public float $nAliqPIS;
	/**
	 * PIS Retido (S/N).
	 *
	 * @var string
	 */
	public string $cRetPIS;
	/**
	 * Alíquota de COFINS.
	 *
	 * @var decimal
	 */
	public float $nAliqCOFINS;
	/**
	 * COFINS Retido (S/N).
	 *
	 * @var string
	 */
	public string $cRetCOFINS;
	/**
	 * Alíquota de CSLL.
	 *
	 * @var decimal
	 */
	public float $nAliqCSLL;
	/**
	 * CSLL Retido (S/N).
	 *
	 * @var string
	 */
	public string $cRetCSLL;
	/**
	 * Alíquota do IR.
	 *
	 * @var decimal
	 */
	public float $nAliqIR;
	/**
	 * IR Retido (S/N).
	 *
	 * @var string
	 */
	public string $cRetIR;
	/**
	 * Alíquota de INSS.
	 *
	 * @var decimal
	 */
	public float $nAliqINSS;
	/**
	 * INSS Retido (S/N).
	 *
	 * @var string
	 */
	public string $cRetINSS;
	/**
	 * Alíquota de Redução da Base de Cálculo de INSS.
	 *
	 * @var decimal
	 */
	public float $nRedBaseINSS;
	/**
	 * Alíquota de Redução da Base de Cálculo de PIS
	 *
	 * @var decimal
	 */
	public float $nRedBasePIS;
	/**
	 * Alíquota de Redução da Base de Cálculo de COFINS
	 *
	 * @var decimal
	 */
	public float $nRedBaseCOFINS;
	/**
	 * Deduz o ISS da Base de Cálculo de PIS e COFINS.
	 *
	 * @var boolean
	 */
	public bool $lDeduzISS;
	/**
	 * Alíquota do CBS
	 *
	 * @var decimal
	 */
	public float $nAliqCbs;
	/**
	 * Código da Situação Tributária IBS/CBS.
	 *
	 * @var string
	 */
	public string $cCstIbsCbs;
	/**
	 * Alíquota do IBS Estadual.
	 *
	 * @var decimal
	 */
	public float $nAliqIbsUf;
	/**
	 * Alíquota do Alíquota do IBS Municipal.
	 *
	 * @var decimal
	 */
	public float $nAliqIbsMun;
	/**
	 * Percentual redução IBS municipal.
	 *
	 * @var decimal
	 */
	public float $nPercReducaoIbsUf;
	/**
	 * Percentual redução IBS estadual.
	 *
	 * @var decimal
	 */
	public float $nPercReducaoIbsMun;
	/**
	 * Percentual redução CBS.
	 *
	 * @var decimal
	 */
	public float $nPercReducaoCbs;
	/**
	 * Código de Classificação Tributária.
	 *
	 * @var string
	 */
	public string $cClassTrib;
	/**
	 * Código Indicador de Operação.
	 *
	 * @var string
	 */
	public string $cIndOper;
}
