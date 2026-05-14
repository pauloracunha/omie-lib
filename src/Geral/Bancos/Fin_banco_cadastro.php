<?php

namespace OmieLib\Geral\Bancos;

use OmieLib\Common\OmieFail;

/**
 * Cadastro de bancos / instituições financeiras.
 *
 * @pw_element string $cnab_altve CNAB - Permite a Alteração do Vencimento da Cobrança
 * @pw_element string $cnab_altvl CNAB - Permite a Alteração do Valor da Cobrança
 * @pw_element string $cnab_cob CNAB - Remessa de Cobrança [S/N]
 * @pw_element string $cnab_pag CNAB - Remessa de Pagamento [S/N]
 * @pw_element string $crawler_sn Crawler - Possui integração automática com o Crawler [S/N]
 * @pw_element string $cwr_cobrem Crawler - Possui remessa do CNAB de Cobrança pelo Crawler [S/N]
 * @pw_element string $cwr_cobret Crawler - Possui retorno do CNAB de Cobrança pelo Crawler [S/N]
 * @pw_element string $cwr_pagrem Crawler - Possui remessa do CNAB de Pagamentos pelo Crawler [S/N]
 * @pw_element string $cwr_pagret Crawler - Possui retorno do CNAB de Pagamentos pelo Crawler [S/N]
 * @pw_element string $cwr_extr Crawler - Possui retorno do Extrato da Conta Corrente pelo Crawler [S/N]
 * @pw_element string $obank_sn Possui integração automática com banco via API [S/N]
 * @pw_element string $obank_cobr Possui integração dos boletos de cobrança via API [S/N]
 * @pw_element string $obank_extr Possui integração dos extratos bancários via API [S/N]
 * @pw_element string $obank_pagt Possui integração dos pagamentos via API [S/N]
 * @pw_element string $obank_pix Possui integração do PIX via API [S/N]
 * @pw_element string $cod_compen Código da Instituição Bancária para Compensação
 * @pw_element string $cod_ispb Código Identificador do Sistema de Pagamento Brasileiro
 * @pw_element string $descond_sn Possui Desconto Condicional [S/N]
 * @pw_element integer $descond_qt Quantidade de Descontos Condicionais permitidos para o Banco
 * @pw_element string $entf_cnpj CNPJ da instituição financeira de pagamento.
 * @pw_element string $codigo Código do Banco / Instituição Financeira
 * @pw_element string $nome Nome do Banco
 * @pw_element string $tipo Tipo da Conta Corrente (CB Conta Bancária, CX Caixinha, CV Carteira Virtual ou AC Administradora de Cartões)
 * @pw_complex fin_banco_cadastro
 */
class Fin_banco_cadastro{
	/**
	 * CNAB - Permite a Alteração do Vencimento da Cobrança
	 *
	 * @var string
	 */
	public string $cnab_altve;
	/**
	 * CNAB - Permite a Alteração do Valor da Cobrança
	 *
	 * @var string
	 */
	public string $cnab_altvl;
	/**
	 * CNAB - Remessa de Cobrança [S/N]
	 *
	 * @var string
	 */
	public string $cnab_cob;
	/**
	 * CNAB - Remessa de Pagamento [S/N]
	 *
	 * @var string
	 */
	public string $cnab_pag;
	/**
	 * Crawler - Possui integração automática com o Crawler [S/N]
	 *
	 * @var string
	 */
	public string $crawler_sn;
	/**
	 * Crawler - Possui remessa do CNAB de Cobrança pelo Crawler [S/N]
	 *
	 * @var string
	 */
	public string $cwr_cobrem;
	/**
	 * Crawler - Possui retorno do CNAB de Cobrança pelo Crawler [S/N]
	 *
	 * @var string
	 */
	public string $cwr_cobret;
	/**
	 * Crawler - Possui remessa do CNAB de Pagamentos pelo Crawler [S/N]
	 *
	 * @var string
	 */
	public string $cwr_pagrem;
	/**
	 * Crawler - Possui retorno do CNAB de Pagamentos pelo Crawler [S/N]
	 *
	 * @var string
	 */
	public string $cwr_pagret;
	/**
	 * Crawler - Possui retorno do Extrato da Conta Corrente pelo Crawler [S/N]
	 *
	 * @var string
	 */
	public string $cwr_extr;
	/**
	 * Possui integração automática com banco via API [S/N]
	 *
	 * @var string
	 */
	public string $obank_sn;
	/**
	 * Possui integração dos boletos de cobrança via API [S/N]
	 *
	 * @var string
	 */
	public string $obank_cobr;
	/**
	 * Possui integração dos extratos bancários via API [S/N]
	 *
	 * @var string
	 */
	public string $obank_extr;
	/**
	 * Possui integração dos pagamentos via API [S/N]
	 *
	 * @var string
	 */
	public string $obank_pagt;
	/**
	 * Possui integração do PIX via API [S/N]
	 *
	 * @var string
	 */
	public string $obank_pix;
	/**
	 * Código da Instituição Bancária para Compensação
	 *
	 * @var string
	 */
	public string $cod_compen;
	/**
	 * Código Identificador do Sistema de Pagamento Brasileiro
	 *
	 * @var string
	 */
	public string $cod_ispb;
	/**
	 * Possui Desconto Condicional [S/N]
	 *
	 * @var string
	 */
	public string $descond_sn;
	/**
	 * Quantidade de Descontos Condicionais permitidos para o Banco
	 *
	 * @var integer
	 */
	public int $descond_qt;
	/**
	 * CNPJ da instituição financeira de pagamento.
	 *
	 * @var string
	 */
	public string $entf_cnpj;
	/**
	 * Código do Banco / Instituição Financeira
	 *
	 * @var string
	 */
	public string $codigo;
	/**
	 * Nome do Banco
	 *
	 * @var string
	 */
	public string $nome;
	/**
	 * Tipo da Conta Corrente (CB Conta Bancária, CX Caixinha, CV Carteira Virtual ou AC Administradora de Cartões)
	 *
	 * @var string
	 */
	public string $tipo;
}
