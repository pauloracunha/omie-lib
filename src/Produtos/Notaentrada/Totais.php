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
 * Totais da nota de entrada
 *
 * @pw_element decimal $nMercadorias Total de mercadorias
 * @pw_element decimal $nDescontos Total de descontos
 * @pw_element decimal $nIPI Total de IPI
 * @pw_element decimal $nICMSST Total de ICMS ST
 * @pw_element decimal $nTotalNotaEnt Valor total da nota de entrada
 * @pw_element decimal $nTotIbsUf Valor total do IBS da UF
 * @pw_element decimal $nTotIbsMun Valor total do IBS do município
 * @pw_element decimal $nTotIbs Valor total do IBS
 * @pw_element decimal $nTotCbs Valor total da CBS
 * @pw_element decimal $nTotIbsCbsIs Total da NF-e com IBS/CBS/IS
 * @pw_complex totais
 */
class Totais{
	/**
	 * Total de mercadorias
	 *
	 * @var decimal
	 */
	public float $nMercadorias;
	/**
	 * Total de descontos
	 *
	 * @var decimal
	 */
	public float $nDescontos;
	/**
	 * Total de IPI
	 *
	 * @var decimal
	 */
	public float $nIPI;
	/**
	 * Total de ICMS ST
	 *
	 * @var decimal
	 */
	public float $nICMSST;
	/**
	 * Valor total da nota de entrada
	 *
	 * @var decimal
	 */
	public float $nTotalNotaEnt;
	/**
	 * Valor total do IBS da UF
	 *
	 * @var decimal
	 */
	public float $nTotIbsUf;
	/**
	 * Valor total do IBS do município
	 *
	 * @var decimal
	 */
	public float $nTotIbsMun;
	/**
	 * Valor total do IBS
	 *
	 * @var decimal
	 */
	public float $nTotIbs;
	/**
	 * Valor total da CBS
	 *
	 * @var decimal
	 */
	public float $nTotCbs;
	/**
	 * Total da NF-e com IBS/CBS/IS
	 *
	 * @var decimal
	 */
	public float $nTotIbsCbsIs;
}
