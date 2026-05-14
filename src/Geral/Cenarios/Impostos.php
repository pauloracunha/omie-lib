<?php

namespace OmieLib\Geral\Cenarios;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Cenarios\Request\CenariosImpostosListarRequest;
use OmieLib\Geral\Cenarios\Request\CenariosListarRequest;
use OmieLib\Geral\Cenarios\Response\CenariosImpostosListarResponse;
use OmieLib\Geral\Cenarios\Response\CenariosListarResponse;

/**
 * Impostos do cenário fiscal para o produto e cliente
 *
 * @pw_element string $cfop CFOP  - Código Fiscal da Operação Fiscal configurado.
 * @pw_element string $inf_adicional_item Informação adicional para o item no documento fiscal
 * @pw_element string $inf_adicional_nf Informação adicional para o documento fiscal
 * @pw_element string $nao_gera_conta_receb Indica que não deve gerar conta a receber para o item
 * @pw_element string $nao_mov_estoque Indica que não deve movimentar estoque
 * @pw_element string $cst_icms Código da Situação Tributária para o ICMS
 * @pw_element string $modalidade_bc_icms Modalidade da base de cálculo para o ICMS
 * @pw_element decimal $reducao_bc_icms Redução da base de cálculo de ICMS
 * @pw_element decimal $aliquota_icms Alíquota de ICMS
 * @pw_element decimal $perc_diferimento_icms Percentual de Diferimento de ICMS
 * @pw_element string $motivo_desoneracao_icms Motivo da Desoneração do ICMS
 * @pw_element decimal $perc_fcp_icms Percentual para o Fundo de Combate a Pobreza para o ICMS.
 * @pw_element string $csosn CSOSN - Código da Situação da Operação do Simples Nacional.
 * @pw_element decimal $aliquota_icms_simples Alíquota para cálculo do crédito do ICMS por empresa do Simples Nacional
 * @pw_element string $modalidade_bc_st Modalidade de cálculo para a base do ICMS-ST
 * @pw_element decimal $margem_st Margem de Valor Agregado para base de cálculo do ICMS-ST.
 * @pw_element decimal $aliquota_st Alíquota do ICMS-ST
 * @pw_element decimal $aliquota_icms_op Alíquota do ICMS da operacação própria, para cálculo do ICMS-ST.
 * @pw_element decimal $carga_media_mt Carga média para cálculo do ICMS-ST
 * @pw_element decimal $reducao_bc_st Redução da base de cálculo do ICMS-ST
 * @pw_element string $zera_mva_cf Indica que deve zerar o MVA na venda para consumo final
 * @pw_element integer $id_pauta_icms Código identificador do cadastro da pauta de ICMS
 * @pw_element decimal $valor_pauta_icms Valor da Pauta do ICMS-ST
 * @pw_element decimal $perc_fcp_st Percentual para o Fundo de Combate a Pobreza relativa ao ICMS-ST.
 * @pw_element decimal $al_icms_interes_destino Alíquota para o ICMS interestadual para o estado de destino
 * @pw_element decimal $al_icms_interestadual Alíquota do ICMS próprio utilizada para o cálculo do ICMS interestadual.
 * @pw_element decimal $al_icms_interes_fcp Alíquota para o fundo de combate a pobreza para o estado destino relativo ao ICMS Interestadual
 * @pw_element decimal $al_icms_interes_partilha Percentual de partilha do ICMS Interestadual
 * @pw_element string $cst_ipi Código da Situação Tributária para o IPI
 * @pw_element string $tipo_calculo_ipi Tipo de cálculo para o IPI
 * @pw_element decimal $reducao_bc_ipi Redução de base de cálculo para o IPI
 * @pw_element decimal $aliquota_ipi Alíquota do IPI
 * @pw_element decimal $valor_trib_ipi Valor tributável de IPI por unidade
 * @pw_element string $enq_ipi Enquadramento do IPI
 * @pw_element string $cst_pis Código da Situação Tributária do PIS
 * @pw_element string $tipo_calculo_pis Tipo do Cálculo do PIS
 * @pw_element decimal $reducao_bc_pis Redução de base de cálculo do PIS
 * @pw_element decimal $aliquota_pis Alíquota de PIS
 * @pw_element decimal $valor_trib_pis Valor tributável de PIS por unidade
 * @pw_element decimal $margem_pis_st Margem de cálculo para PIS-ST
 * @pw_element decimal $aliquota_pis_st Alíquota de PIS-ST
 * @pw_element string $tipo_calculo_pis_st Tipo de Cálculo para o PIS-ST
 * @pw_element decimal $valor_trib_pis_st Valor tributado de PIS-ST por unidade
 * @pw_element string $cst_cofins Código da Situação Tributária do PIS
 * @pw_element string $tipo_calculo_cofins Tipo do cálculo de COFINS
 * @pw_element decimal $reducao_bc_cofins Percentual de Redução de base de cálculo para COFINS
 * @pw_element decimal $aliquota_cofins Alíquota para o cálculo de COFINS
 * @pw_element decimal $valor_trib_cofins Valor tributado de COFINS por unidade
 * @pw_element decimal $margem_cofins_st Margem de Valor agregado para o cálculo do COFINS-ST
 * @pw_element decimal $aliquota_cofins_st Alíquota para o cálculo de COFINS-ST
 * @pw_element string $tipo_calculo_cofins_st Tipo de cálculo para o COFINS-ST
 * @pw_element decimal $valor_trib_cofins_st Valor tributário de COFINS-ST por unidade
 * @pw_element string $cst_ibs_cbs Código de Situação Tributária do IBS e CBS
 * @pw_element string $class_trib Código de Classificação Tributária do IBS e CBS
 * @pw_element decimal $aliquota_ibs_uf Alíquota do IBS de competência das UF
 * @pw_element decimal $perc_dif_ibs_uf Percentual do Diferimento - IBS UF
 * @pw_element decimal $perc_red_ibs_uf Percentual da redução de alíquota do cClassTrib - IBS UF
 * @pw_element decimal $aliquota_ibs_mu Alíquota do IBS de competência do Município
 * @pw_element decimal $perc_dif_ibs_mu Percentual do diferimento - UBS Município
 * @pw_element decimal $perc_red_ibs_mu Percentual da redução de alíquota do cClassTrib - IBS Município
 * @pw_element decimal $aliquota_cbs Alíquota da CBS
 * @pw_element decimal $perc_dif_cbs Percentual do diferimento - CBS
 * @pw_element decimal $perc_red_cbs Percentual da redução de alíquota do cClassTrib - CBS
 * @pw_element string $cst_reg_ibs_cst Código da Situação Tributária Regular do IBS e CBS
 * @pw_element string $class_trib_reg Código de Classificação Tributária Regular do IBS e CBS
 * @pw_element decimal $aliquota_reg_ibs_uf Valor da alíquota Regular do IBS da UF
 * @pw_element decimal $aliquota_reg_ibs_mu Valor da alíquota Regular do IBS do Município
 * @pw_element decimal $aliquota_reg_cbs Valor da alíquota Regular da CBS
 * @pw_element string $tipo_cred_prez Tipo de classificação de acordo com o Art. 450 para o cálculo de crédido presumido na ZFM
 * @pw_complex impostos
 */
class Impostos{
	/**
	 * CFOP  - Código Fiscal da Operação Fiscal configurado.
	 *
	 * @var string
	 */
	public string $cfop;
	/**
	 * Informação adicional para o item no documento fiscal
	 *
	 * @var string
	 */
	public string $inf_adicional_item;
	/**
	 * Informação adicional para o documento fiscal
	 *
	 * @var string
	 */
	public string $inf_adicional_nf;
	/**
	 * Indica que não deve gerar conta a receber para o item
	 *
	 * @var string
	 */
	public string $nao_gera_conta_receb;
	/**
	 * Indica que não deve movimentar estoque
	 *
	 * @var string
	 */
	public string $nao_mov_estoque;
	/**
	 * Código da Situação Tributária para o ICMS
	 *
	 * @var string
	 */
	public string $cst_icms;
	/**
	 * Modalidade da base de cálculo para o ICMS
	 *
	 * @var string
	 */
	public string $modalidade_bc_icms;
	/**
	 * Redução da base de cálculo de ICMS
	 *
	 * @var decimal
	 */
	public float $reducao_bc_icms;
	/**
	 * Alíquota de ICMS
	 *
	 * @var decimal
	 */
	public float $aliquota_icms;
	/**
	 * Percentual de Diferimento de ICMS
	 *
	 * @var decimal
	 */
	public float $perc_diferimento_icms;
	/**
	 * Motivo da Desoneração do ICMS
	 *
	 * @var string
	 */
	public string $motivo_desoneracao_icms;
	/**
	 * Percentual para o Fundo de Combate a Pobreza para o ICMS.
	 *
	 * @var decimal
	 */
	public float $perc_fcp_icms;
	/**
	 * CSOSN - Código da Situação da Operação do Simples Nacional.
	 *
	 * @var string
	 */
	public string $csosn;
	/**
	 * Alíquota para cálculo do crédito do ICMS por empresa do Simples Nacional
	 *
	 * @var decimal
	 */
	public float $aliquota_icms_simples;
	/**
	 * Modalidade de cálculo para a base do ICMS-ST
	 *
	 * @var string
	 */
	public string $modalidade_bc_st;
	/**
	 * Margem de Valor Agregado para base de cálculo do ICMS-ST.
	 *
	 * @var decimal
	 */
	public float $margem_st;
	/**
	 * Alíquota do ICMS-ST
	 *
	 * @var decimal
	 */
	public float $aliquota_st;
	/**
	 * Alíquota do ICMS da operacação própria, para cálculo do ICMS-ST.
	 *
	 * @var decimal
	 */
	public float $aliquota_icms_op;
	/**
	 * Carga média para cálculo do ICMS-ST
	 *
	 * @var decimal
	 */
	public float $carga_media_mt;
	/**
	 * Redução da base de cálculo do ICMS-ST
	 *
	 * @var decimal
	 */
	public float $reducao_bc_st;
	/**
	 * Indica que deve zerar o MVA na venda para consumo final
	 *
	 * @var string
	 */
	public string $zera_mva_cf;
	/**
	 * Código identificador do cadastro da pauta de ICMS
	 *
	 * @var integer
	 */
	public int $id_pauta_icms;
	/**
	 * Valor da Pauta do ICMS-ST
	 *
	 * @var decimal
	 */
	public float $valor_pauta_icms;
	/**
	 * Percentual para o Fundo de Combate a Pobreza relativa ao ICMS-ST.
	 *
	 * @var decimal
	 */
	public float $perc_fcp_st;
	/**
	 * Alíquota para o ICMS interestadual para o estado de destino
	 *
	 * @var decimal
	 */
	public float $al_icms_interes_destino;
	/**
	 * Alíquota do ICMS próprio utilizada para o cálculo do ICMS interestadual.
	 *
	 * @var decimal
	 */
	public float $al_icms_interestadual;
	/**
	 * Alíquota para o fundo de combate a pobreza para o estado destino relativo ao ICMS Interestadual
	 *
	 * @var decimal
	 */
	public float $al_icms_interes_fcp;
	/**
	 * Percentual de partilha do ICMS Interestadual
	 *
	 * @var decimal
	 */
	public float $al_icms_interes_partilha;
	/**
	 * Código da Situação Tributária para o IPI
	 *
	 * @var string
	 */
	public string $cst_ipi;
	/**
	 * Tipo de cálculo para o IPI
	 *
	 * @var string
	 */
	public string $tipo_calculo_ipi;
	/**
	 * Redução de base de cálculo para o IPI
	 *
	 * @var decimal
	 */
	public float $reducao_bc_ipi;
	/**
	 * Alíquota do IPI
	 *
	 * @var decimal
	 */
	public float $aliquota_ipi;
	/**
	 * Valor tributável de IPI por unidade
	 *
	 * @var decimal
	 */
	public float $valor_trib_ipi;
	/**
	 * Enquadramento do IPI
	 *
	 * @var string
	 */
	public string $enq_ipi;
	/**
	 * Código da Situação Tributária do PIS
	 *
	 * @var string
	 */
	public string $cst_pis;
	/**
	 * Tipo do Cálculo do PIS
	 *
	 * @var string
	 */
	public string $tipo_calculo_pis;
	/**
	 * Redução de base de cálculo do PIS
	 *
	 * @var decimal
	 */
	public float $reducao_bc_pis;
	/**
	 * Alíquota de PIS
	 *
	 * @var decimal
	 */
	public float $aliquota_pis;
	/**
	 * Valor tributável de PIS por unidade
	 *
	 * @var decimal
	 */
	public float $valor_trib_pis;
	/**
	 * Margem de cálculo para PIS-ST
	 *
	 * @var decimal
	 */
	public float $margem_pis_st;
	/**
	 * Alíquota de PIS-ST
	 *
	 * @var decimal
	 */
	public float $aliquota_pis_st;
	/**
	 * Tipo de Cálculo para o PIS-ST
	 *
	 * @var string
	 */
	public string $tipo_calculo_pis_st;
	/**
	 * Valor tributado de PIS-ST por unidade
	 *
	 * @var decimal
	 */
	public float $valor_trib_pis_st;
	/**
	 * Código da Situação Tributária do PIS
	 *
	 * @var string
	 */
	public string $cst_cofins;
	/**
	 * Tipo do cálculo de COFINS
	 *
	 * @var string
	 */
	public string $tipo_calculo_cofins;
	/**
	 * Percentual de Redução de base de cálculo para COFINS
	 *
	 * @var decimal
	 */
	public float $reducao_bc_cofins;
	/**
	 * Alíquota para o cálculo de COFINS
	 *
	 * @var decimal
	 */
	public float $aliquota_cofins;
	/**
	 * Valor tributado de COFINS por unidade
	 *
	 * @var decimal
	 */
	public float $valor_trib_cofins;
	/**
	 * Margem de Valor agregado para o cálculo do COFINS-ST
	 *
	 * @var decimal
	 */
	public float $margem_cofins_st;
	/**
	 * Alíquota para o cálculo de COFINS-ST
	 *
	 * @var decimal
	 */
	public float $aliquota_cofins_st;
	/**
	 * Tipo de cálculo para o COFINS-ST
	 *
	 * @var string
	 */
	public string $tipo_calculo_cofins_st;
	/**
	 * Valor tributário de COFINS-ST por unidade
	 *
	 * @var decimal
	 */
	public float $valor_trib_cofins_st;
	/**
	 * Código de Situação Tributária do IBS e CBS
	 *
	 * @var string
	 */
	public string $cst_ibs_cbs;
	/**
	 * Código de Classificação Tributária do IBS e CBS
	 *
	 * @var string
	 */
	public string $class_trib;
	/**
	 * Alíquota do IBS de competência das UF
	 *
	 * @var decimal
	 */
	public float $aliquota_ibs_uf;
	/**
	 * Percentual do Diferimento - IBS UF
	 *
	 * @var decimal
	 */
	public float $perc_dif_ibs_uf;
	/**
	 * Percentual da redução de alíquota do cClassTrib - IBS UF
	 *
	 * @var decimal
	 */
	public float $perc_red_ibs_uf;
	/**
	 * Alíquota do IBS de competência do Município
	 *
	 * @var decimal
	 */
	public float $aliquota_ibs_mu;
	/**
	 * Percentual do diferimento - UBS Município
	 *
	 * @var decimal
	 */
	public float $perc_dif_ibs_mu;
	/**
	 * Percentual da redução de alíquota do cClassTrib - IBS Município
	 *
	 * @var decimal
	 */
	public float $perc_red_ibs_mu;
	/**
	 * Alíquota da CBS
	 *
	 * @var decimal
	 */
	public float $aliquota_cbs;
	/**
	 * Percentual do diferimento - CBS
	 *
	 * @var decimal
	 */
	public float $perc_dif_cbs;
	/**
	 * Percentual da redução de alíquota do cClassTrib - CBS
	 *
	 * @var decimal
	 */
	public float $perc_red_cbs;
	/**
	 * Código da Situação Tributária Regular do IBS e CBS
	 *
	 * @var string
	 */
	public string $cst_reg_ibs_cst;
	/**
	 * Código de Classificação Tributária Regular do IBS e CBS
	 *
	 * @var string
	 */
	public string $class_trib_reg;
	/**
	 * Valor da alíquota Regular do IBS da UF
	 *
	 * @var decimal
	 */
	public float $aliquota_reg_ibs_uf;
	/**
	 * Valor da alíquota Regular do IBS do Município
	 *
	 * @var decimal
	 */
	public float $aliquota_reg_ibs_mu;
	/**
	 * Valor da alíquota Regular da CBS
	 *
	 * @var decimal
	 */
	public float $aliquota_reg_cbs;
	/**
	 * Tipo de classificação de acordo com o Art. 450 para o cálculo de crédido presumido na ZFM
	 *
	 * @var string
	 */
	public string $tipo_cred_prez;
}
