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
 * Informações do ICMS Interestadual
 *
 * @pw_element decimal $nBCUFDest Base de Cálculo ICMS na UF de Destino
 * @pw_element decimal $nValorFCPUFDest Valor do ICMS relativo ao Fundo de Combate à Pobreza (FCP) na UF de Destino
 * @pw_element decimal $nAliqICMSUFDest Alíquota Interna da UF de Destino
 * @pw_element decimal $nICMSInter Alíquota Interestadual das UFs Envolvidas
 * @pw_element decimal $nRedICMSUFDest Alíquota Redução Base ICMS da UF Destino
 * @pw_element decimal $nPercFCPUFDest Percentual do ICMS relativo ao Fundo de Combate à Pobreza (FCP) na UF de Destino
 * @pw_element decimal $nValorICMSUFDest Valor do ICMS - UF Destino
 * @pw_element decimal $nICMSUFRemet Valor do ICMS - UF Remetente
 * @pw_complex ICMS_INTER
 */
class ICMS_INTER{
	/**
	 * Base de Cálculo ICMS na UF de Destino
	 *
	 * @var decimal
	 */
	public float $nBCUFDest;
	/**
	 * Valor do ICMS relativo ao Fundo de Combate à Pobreza (FCP) na UF de Destino
	 *
	 * @var decimal
	 */
	public float $nValorFCPUFDest;
	/**
	 * Alíquota Interna da UF de Destino
	 *
	 * @var decimal
	 */
	public float $nAliqICMSUFDest;
	/**
	 * Alíquota Interestadual das UFs Envolvidas
	 *
	 * @var decimal
	 */
	public float $nICMSInter;
	/**
	 * Alíquota Redução Base ICMS da UF Destino
	 *
	 * @var decimal
	 */
	public float $nRedICMSUFDest;
	/**
	 * Percentual do ICMS relativo ao Fundo de Combate à Pobreza (FCP) na UF de Destino
	 *
	 * @var decimal
	 */
	public float $nPercFCPUFDest;
	/**
	 * Valor do ICMS - UF Destino
	 *
	 * @var decimal
	 */
	public float $nValorICMSUFDest;
	/**
	 * Valor do ICMS - UF Remetente
	 *
	 * @var decimal
	 */
	public float $nICMSUFRemet;
}
