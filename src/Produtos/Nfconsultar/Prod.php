<?php

namespace OmieLib\Produtos\Nfconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;

/**
 * TAG de grupo do detalhamento de Produtos e Serviços da NF-e
 *
 * @pw_element string $cProd Código do produto ou serviço
 * @pw_element string $cEAN GTIN (Global Trade Item Number) da unidade tributável, antigo código EAN ou código de barras
 * @pw_element string $xProd Descrição do produto ou serviço
 * @pw_element string $NCM Código do NCM
 * @pw_element string $EXTIPI DEPRECATED.
 * @pw_element string $CFOP Código Fiscal de Operações e Prestações
 * @pw_element string $uCom Unidade Tributável
 * @pw_element decimal $qCom Quantidade Comercial
 * @pw_element decimal $vUnCom Valor Unitário de tributação
 * @pw_element decimal $vProd Valor total do item.
 * @pw_element string $cEANTrib GTIN (Global Trade Item Number) da unidade tributável, antigo código EAN ou código de barras
 * @pw_element string $uTrib Unidade Tributável
 * @pw_element decimal $qTrib Quantidade Tributável
 * @pw_element decimal $vUnTrib Valor Unitário de tributação
 * @pw_element decimal $vFrete Valor Total do Frete
 * @pw_element decimal $vSeg Valor Total do Seguro
 * @pw_element decimal $vDesc Valor do Desconto
 * @pw_element decimal $vOutro Outras despesas acessórias
 * @pw_element decimal $vII Valor Total do II
 * @pw_element decimal $indTot Indica se valor do Item (vProd) entra no valor total da NF-e (vProd)
 * @pw_element string $cProdOrig Código do produto conforme informado na Nota Fiscal.
 * @pw_element string $xProdOrig Descrição original do produto conforme informado na Nota Fiscal.
 * @pw_element decimal $nCMCUnitario CMC Unitário
 * @pw_element decimal $nCMCTotal CMC Total.
 * @pw_element decimal $vTotItem Valor total do item.
 * @pw_element decimal $vFCP Valor do ICMS relativo ao Fundo de Combate à Pobreza (FCP) da UF de Destino
 * @pw_element decimal $pCOFINS Alíquota de COFINS
 * @pw_element decimal $vCOFINS Valor de COFINS
 * @pw_element decimal $pPIS Alíquota de PIS
 * @pw_element decimal $vPIS Valor do PIS
 * @pw_element decimal $pISS Alíquota de ISS
 * @pw_element decimal $vISS Valor de ISS
 * @pw_element decimal $pIPI Alíquota de IPI
 * @pw_element decimal $vIPI Valor de IPI
 * @pw_element decimal $pIR Alíquota de IR
 * @pw_element decimal $vIR Valor de IR
 * @pw_element decimal $pINSS Alíquota de INSS
 * @pw_element decimal $vINSS Valor de INSS
 * @pw_element decimal $pCSLL Alíquota de Contribuição Social sobre Lucro Líquido
 * @pw_element decimal $vCSLL Valor da Contribuição Social sobre Lucro Líquido
 * @pw_element decimal $pICMS Alíquota de ICMS
 * @pw_element decimal $vICMS Valor de ICMS
 * @pw_element decimal $pICMSST Alíquota de ICMSST
 * @pw_element decimal $vICMSST Valor de ICMSST
 * @pw_element integer $codigo_local_estoque Código do local do estoque.
 * @pw_element string $cCOFINSRetido Indica se houve retenção de COFINS<BR><BR>Possíveis valores: <BR>S = Sim<BR>N = Não
 * @pw_element string $cPISRetido Indica se houve retenção de PIS<BR><BR>Possíveis valores: <BR>S = Sim<BR>N = Não
 * @pw_element string $cINSSRetido Indica se houve retenção de INSS<BR><BR>Possíveis valores: <BR>S = Sim<BR>N = Não
 * @pw_element string $cIRRetido Indica se houve retenção de IR<BR><BR>Possíveis valores: <BR>S = Sim<BR>N = Não
 * @pw_element string $cISSRetido Indica se houve retenção de ISS<BR><BR>Possíveis valores: <BR>S = Sim<BR>N = Não
 * @pw_element string $cICMSRetido Indica se houve retenção de ICMS<BR><BR>Possíveis valores: <BR>S = Sim<BR>N = Não
 * @pw_element string $cCSLLRetido Indica se houve retenção de CSLL<BR><BR>Possíveis valores: <BR>S = Sim<BR>N = Não
 * @pw_element decimal $pFCPST Alíquota de FCPST
 * @pw_element decimal $vFCPST Valor do FCPST
 * @pw_element decimal $pFCP Alíquota de FCP.
 * @pw_element decimal $pMVAST Percentual da margem do valor adicionado da base de cálculo do ICMS ST.
 * @pw_element decimal $pRedBC Percentual de Redução da Base de Cálculo do ICMS.
 * @pw_element decimal $vBCCOFINS Base de Cálculo do COFINS.
 * @pw_element decimal $vBCST Base de Cálculo do ICMS ST.
 * @pw_element decimal $vBCIPI Base de Cálculo do IPI.
 * @pw_element decimal $vBCISS Base de Cálculo do ISS.
 * @pw_element decimal $vBCPIS Base de Cálculo do PIS.
 * @pw_element decimal $vBCUFDest Base de Cálculo do ICMS na UF de Destino.
 * @pw_element decimal $vBC Base de Cálculo do ICMS.
 * @pw_element string $cOrigem Código da Origem da Mercadoria ou Serviço
 * @pw_element decimal $pIcmsUfDest Alíquota interna da UF de Destino
 * @pw_element decimal $pIcmsInterest Alíquota Interestadual das UF envolvidas
 * @pw_element decimal $pRedBcICMDest Percentual de Redução da Base de Cálculo do ICMS Destino
 * @pw_element decimal $vICMDest Valor do ICMS Interestadual para a UF de Destino
 * @pw_element decimal $vICMRemet Valor do ICMS Interestadual para a UF do Remetente
 * @pw_element decimal $vIbs Valor do IBS.
 * @pw_element decimal $pAliqIBSMun Alíquota do IBS de competência do Município.
 * @pw_element decimal $pAliqIBSUF Alíquota do IBS de competência das UF.
 * @pw_element decimal $vAliqIbsUf Valor da alíquota do IBS da UF.
 * @pw_element decimal $vAliqIbsMun Valor da alíquota do IBS do Município.
 * @pw_element decimal $vIbsUf Valor do IBS de competência da UF.
 * @pw_element decimal $vIbsMun Valor do IBS de competência do Município.
 * @pw_element decimal $vCbs Valor da CBS.
 * @pw_element decimal $pAliqCbs Alíquota da CBS
 * @pw_element decimal $pReducaoCbs Percentual da redução de alíquota do cClassTrib.
 * @pw_element decimal $pReducaoIbsMun Percentual da redução de alíquota do cClassTrib - IBS UF.
 * @pw_element decimal $pReducaoIbsUf Percentual da redução de alíquota do cClassTrib - IBS UF
 * @pw_element decimal $vBCIbsCbs Base de cálculo do IBS e CBS.
 * @pw_element decimal $vAliqCbs Valor da alíquota da CBS.
 * @pw_complex prod
 */
class Prod{
	/**
	 * Código do produto ou serviço
	 *
	 * @var string
	 */
	public string $cProd;
	/**
	 * GTIN (Global Trade Item Number) da unidade tributável, antigo código EAN ou código de barras
	 *
	 * @var string
	 */
	public string $cEAN;
	/**
	 * Descrição do produto ou serviço
	 *
	 * @var string
	 */
	public string $xProd;
	/**
	 * Código do NCM
	 *
	 * @var string
	 */
	public string $NCM;
	/**
	 * DEPRECATED.
	 *
	 * @var string
	 */
	public string $EXTIPI;
	/**
	 * Código Fiscal de Operações e Prestações
	 *
	 * @var string
	 */
	public string $CFOP;
	/**
	 * Unidade Tributável
	 *
	 * @var string
	 */
	public string $uCom;
	/**
	 * Quantidade Comercial
	 *
	 * @var decimal
	 */
	public float $qCom;
	/**
	 * Valor Unitário de tributação
	 *
	 * @var decimal
	 */
	public float $vUnCom;
	/**
	 * Valor total do item.
	 *
	 * @var decimal
	 */
	public float $vProd;
	/**
	 * GTIN (Global Trade Item Number) da unidade tributável, antigo código EAN ou código de barras
	 *
	 * @var string
	 */
	public string $cEANTrib;
	/**
	 * Unidade Tributável
	 *
	 * @var string
	 */
	public string $uTrib;
	/**
	 * Quantidade Tributável
	 *
	 * @var decimal
	 */
	public float $qTrib;
	/**
	 * Valor Unitário de tributação
	 *
	 * @var decimal
	 */
	public float $vUnTrib;
	/**
	 * Valor Total do Frete
	 *
	 * @var decimal
	 */
	public float $vFrete;
	/**
	 * Valor Total do Seguro
	 *
	 * @var decimal
	 */
	public float $vSeg;
	/**
	 * Valor do Desconto
	 *
	 * @var decimal
	 */
	public float $vDesc;
	/**
	 * Outras despesas acessórias
	 *
	 * @var decimal
	 */
	public float $vOutro;
	/**
	 * Valor Total do II
	 *
	 * @var decimal
	 */
	public float $vII;
	/**
	 * Indica se valor do Item (vProd) entra no valor total da NF-e (vProd)
	 *
	 * @var decimal
	 */
	public float $indTot;
	/**
	 * Código do produto conforme informado na Nota Fiscal.
	 *
	 * @var string
	 */
	public string $cProdOrig;
	/**
	 * Descrição original do produto conforme informado na Nota Fiscal.
	 *
	 * @var string
	 */
	public string $xProdOrig;
	/**
	 * CMC Unitário
	 *
	 * @var decimal
	 */
	public float $nCMCUnitario;
	/**
	 * CMC Total.
	 *
	 * @var decimal
	 */
	public float $nCMCTotal;
	/**
	 * Valor total do item.
	 *
	 * @var decimal
	 */
	public float $vTotItem;
	/**
	 * Valor do ICMS relativo ao Fundo de Combate à Pobreza (FCP) da UF de Destino
	 *
	 * @var decimal
	 */
	public float $vFCP;
	/**
	 * Alíquota de COFINS
	 *
	 * @var decimal
	 */
	public float $pCOFINS;
	/**
	 * Valor de COFINS
	 *
	 * @var decimal
	 */
	public float $vCOFINS;
	/**
	 * Alíquota de PIS
	 *
	 * @var decimal
	 */
	public float $pPIS;
	/**
	 * Valor do PIS
	 *
	 * @var decimal
	 */
	public float $vPIS;
	/**
	 * Alíquota de ISS
	 *
	 * @var decimal
	 */
	public float $pISS;
	/**
	 * Valor de ISS
	 *
	 * @var decimal
	 */
	public float $vISS;
	/**
	 * Alíquota de IPI
	 *
	 * @var decimal
	 */
	public float $pIPI;
	/**
	 * Valor de IPI
	 *
	 * @var decimal
	 */
	public float $vIPI;
	/**
	 * Alíquota de IR
	 *
	 * @var decimal
	 */
	public float $pIR;
	/**
	 * Valor de IR
	 *
	 * @var decimal
	 */
	public float $vIR;
	/**
	 * Alíquota de INSS
	 *
	 * @var decimal
	 */
	public float $pINSS;
	/**
	 * Valor de INSS
	 *
	 * @var decimal
	 */
	public float $vINSS;
	/**
	 * Alíquota de Contribuição Social sobre Lucro Líquido
	 *
	 * @var decimal
	 */
	public float $pCSLL;
	/**
	 * Valor da Contribuição Social sobre Lucro Líquido
	 *
	 * @var decimal
	 */
	public float $vCSLL;
	/**
	 * Alíquota de ICMS
	 *
	 * @var decimal
	 */
	public float $pICMS;
	/**
	 * Valor de ICMS
	 *
	 * @var decimal
	 */
	public float $vICMS;
	/**
	 * Alíquota de ICMSST
	 *
	 * @var decimal
	 */
	public float $pICMSST;
	/**
	 * Valor de ICMSST
	 *
	 * @var decimal
	 */
	public float $vICMSST;
	/**
	 * Código do local do estoque.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Indica se houve retenção de COFINS<BR><BR>Possíveis valores: <BR>S = Sim<BR>N = Não
	 *
	 * @var string
	 */
	public string $cCOFINSRetido;
	/**
	 * Indica se houve retenção de PIS<BR><BR>Possíveis valores: <BR>S = Sim<BR>N = Não
	 *
	 * @var string
	 */
	public string $cPISRetido;
	/**
	 * Indica se houve retenção de INSS<BR><BR>Possíveis valores: <BR>S = Sim<BR>N = Não
	 *
	 * @var string
	 */
	public string $cINSSRetido;
	/**
	 * Indica se houve retenção de IR<BR><BR>Possíveis valores: <BR>S = Sim<BR>N = Não
	 *
	 * @var string
	 */
	public string $cIRRetido;
	/**
	 * Indica se houve retenção de ISS<BR><BR>Possíveis valores: <BR>S = Sim<BR>N = Não
	 *
	 * @var string
	 */
	public string $cISSRetido;
	/**
	 * Indica se houve retenção de ICMS<BR><BR>Possíveis valores: <BR>S = Sim<BR>N = Não
	 *
	 * @var string
	 */
	public string $cICMSRetido;
	/**
	 * Indica se houve retenção de CSLL<BR><BR>Possíveis valores: <BR>S = Sim<BR>N = Não
	 *
	 * @var string
	 */
	public string $cCSLLRetido;
	/**
	 * Alíquota de FCPST
	 *
	 * @var decimal
	 */
	public float $pFCPST;
	/**
	 * Valor do FCPST
	 *
	 * @var decimal
	 */
	public float $vFCPST;
	/**
	 * Alíquota de FCP.
	 *
	 * @var decimal
	 */
	public float $pFCP;
	/**
	 * Percentual da margem do valor adicionado da base de cálculo do ICMS ST.
	 *
	 * @var decimal
	 */
	public float $pMVAST;
	/**
	 * Percentual de Redução da Base de Cálculo do ICMS.
	 *
	 * @var decimal
	 */
	public float $pRedBC;
	/**
	 * Base de Cálculo do COFINS.
	 *
	 * @var decimal
	 */
	public float $vBCCOFINS;
	/**
	 * Base de Cálculo do ICMS ST.
	 *
	 * @var decimal
	 */
	public float $vBCST;
	/**
	 * Base de Cálculo do IPI.
	 *
	 * @var decimal
	 */
	public float $vBCIPI;
	/**
	 * Base de Cálculo do ISS.
	 *
	 * @var decimal
	 */
	public float $vBCISS;
	/**
	 * Base de Cálculo do PIS.
	 *
	 * @var decimal
	 */
	public float $vBCPIS;
	/**
	 * Base de Cálculo do ICMS na UF de Destino.
	 *
	 * @var decimal
	 */
	public float $vBCUFDest;
	/**
	 * Base de Cálculo do ICMS.
	 *
	 * @var decimal
	 */
	public float $vBC;
	/**
	 * Código da Origem da Mercadoria ou Serviço
	 *
	 * @var string
	 */
	public string $cOrigem;
	/**
	 * Alíquota interna da UF de Destino
	 *
	 * @var decimal
	 */
	public float $pIcmsUfDest;
	/**
	 * Alíquota Interestadual das UF envolvidas
	 *
	 * @var decimal
	 */
	public float $pIcmsInterest;
	/**
	 * Percentual de Redução da Base de Cálculo do ICMS Destino
	 *
	 * @var decimal
	 */
	public float $pRedBcICMDest;
	/**
	 * Valor do ICMS Interestadual para a UF de Destino
	 *
	 * @var decimal
	 */
	public float $vICMDest;
	/**
	 * Valor do ICMS Interestadual para a UF do Remetente
	 *
	 * @var decimal
	 */
	public float $vICMRemet;
	/**
	 * Valor do IBS.
	 *
	 * @var decimal
	 */
	public float $vIbs;
	/**
	 * Alíquota do IBS de competência do Município.
	 *
	 * @var decimal
	 */
	public float $pAliqIBSMun;
	/**
	 * Alíquota do IBS de competência das UF.
	 *
	 * @var decimal
	 */
	public float $pAliqIBSUF;
	/**
	 * Valor da alíquota do IBS da UF.
	 *
	 * @var decimal
	 */
	public float $vAliqIbsUf;
	/**
	 * Valor da alíquota do IBS do Município.
	 *
	 * @var decimal
	 */
	public float $vAliqIbsMun;
	/**
	 * Valor do IBS de competência da UF.
	 *
	 * @var decimal
	 */
	public float $vIbsUf;
	/**
	 * Valor do IBS de competência do Município.
	 *
	 * @var decimal
	 */
	public float $vIbsMun;
	/**
	 * Valor da CBS.
	 *
	 * @var decimal
	 */
	public float $vCbs;
	/**
	 * Alíquota da CBS
	 *
	 * @var decimal
	 */
	public float $pAliqCbs;
	/**
	 * Percentual da redução de alíquota do cClassTrib.
	 *
	 * @var decimal
	 */
	public float $pReducaoCbs;
	/**
	 * Percentual da redução de alíquota do cClassTrib - IBS UF.
	 *
	 * @var decimal
	 */
	public float $pReducaoIbsMun;
	/**
	 * Percentual da redução de alíquota do cClassTrib - IBS UF
	 *
	 * @var decimal
	 */
	public float $pReducaoIbsUf;
	/**
	 * Base de cálculo do IBS e CBS.
	 *
	 * @var decimal
	 */
	public float $vBCIbsCbs;
	/**
	 * Valor da alíquota da CBS.
	 *
	 * @var decimal
	 */
	public float $vAliqCbs;
}
