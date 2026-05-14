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
 * Informações do ICMS
 *
 * @pw_element string $cSitTrib Situação Tributária do ICMS
 * @pw_element string $cOrigem Origem
 * @pw_element string $cModBC Modalidade da Base de Cálculo do ICMS Substituição Tributária
 * @pw_element decimal $nRedBC Redução da BC do ICMS (%)
 * @pw_element decimal $nBC Base de Calculo do ICMS
 * @pw_element decimal $nAliq Alíquota de ICMS
 * @pw_element decimal $nValor Valor do ICMS
 * @pw_element decimal $nBCRet Base de Cálculo do ICMS Retido
 * @pw_element decimal $nAliqCN Alíquota Suportada pelo Cons. Final
 * @pw_element decimal $nValorRetST Valor do ICMS Retido por ST
 * @pw_element decimal $nValorDif Valor do ICMS Diferido
 * @pw_element decimal $nValorICMD Valor do ICMS Desonerado
 * @pw_element decimal $nValorICMOP Valor do ICMS Oper. Própria
 * @pw_element string $cMotDeson Motivo da Desoneração do ICMS<BR><BR>Pode ser: <BR><BR>01 - Táxi<BR>03 - Produtor Agropecuário<BR>04 - Frotista/Locadora<BR>05 - Diplomático/Consular<BR>06 - Utilitários e Motocicletas da Amazônia Ocidental e Áreas de Livre Comércio (Resolução 714/88 e 790/94 ? CONTRAN e suas alterações)<BR>07 - SUFRAMA<BR>08 - Venda a Órgão Público<BR>09 - Outros. (NT 2011/004)<BR>10 - Deficiente Condutor (Convênio ICMS 38/12)<BR>11 - Deficiente Não Condutor (Convênio ICMS 38/12)<BR>16 - Olimpíadas Rio 2016<BR>90 - Solicitado pelo Fisco
 * @pw_element decimal $nPercDif Percentual do Diferimento (%)
 * @pw_complex ICMS
 */
class ICMS{
	/**
	 * Situação Tributária do ICMS
	 *
	 * @var string
	 */
	public string $cSitTrib;
	/**
	 * Origem
	 *
	 * @var string
	 */
	public string $cOrigem;
	/**
	 * Modalidade da Base de Cálculo do ICMS Substituição Tributária
	 *
	 * @var string
	 */
	public string $cModBC;
	/**
	 * Redução da BC do ICMS (%)
	 *
	 * @var decimal
	 */
	public float $nRedBC;
	/**
	 * Base de Calculo do ICMS
	 *
	 * @var decimal
	 */
	public float $nBC;
	/**
	 * Alíquota de ICMS
	 *
	 * @var decimal
	 */
	public float $nAliq;
	/**
	 * Valor do ICMS
	 *
	 * @var decimal
	 */
	public float $nValor;
	/**
	 * Base de Cálculo do ICMS Retido
	 *
	 * @var decimal
	 */
	public float $nBCRet;
	/**
	 * Alíquota Suportada pelo Cons. Final
	 *
	 * @var decimal
	 */
	public float $nAliqCN;
	/**
	 * Valor do ICMS Retido por ST
	 *
	 * @var decimal
	 */
	public float $nValorRetST;
	/**
	 * Valor do ICMS Diferido
	 *
	 * @var decimal
	 */
	public float $nValorDif;
	/**
	 * Valor do ICMS Desonerado
	 *
	 * @var decimal
	 */
	public float $nValorICMD;
	/**
	 * Valor do ICMS Oper. Própria
	 *
	 * @var decimal
	 */
	public float $nValorICMOP;
	/**
	 * Motivo da Desoneração do ICMS<BR><BR>Pode ser: <BR><BR>01 - Táxi<BR>03 - Produtor Agropecuário<BR>04 - Frotista/Locadora<BR>05 - Diplomático/Consular<BR>06 - Utilitários e Motocicletas da Amazônia Ocidental e Áreas de Livre Comércio (Resolução 714/88 e 790/94 ? CONTRAN e suas alterações)<BR>07 - SUFRAMA<BR>08 - Venda a Órgão Público<BR>09 - Outros. (NT 2011/004)<BR>10 - Deficiente Condutor (Convênio ICMS 38/12)<BR>11 - Deficiente Não Condutor (Convênio ICMS 38/12)<BR>16 - Olimpíadas Rio 2016<BR>90 - Solicitado pelo Fisco
	 *
	 * @var string
	 */
	public string $cMotDeson;
	/**
	 * Percentual do Diferimento (%)
	 *
	 * @var decimal
	 */
	public float $nPercDif;
}
