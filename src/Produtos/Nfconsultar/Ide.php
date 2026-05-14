<?php

namespace OmieLib\Produtos\Nfconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;

/**
 * Identificação da NF-e
 *
 * @pw_element string $indPag Indicador da forma de pagamento:<BR>0 ? pagamento à vista;<BR>1 ? pagamento à prazo;<BR>2 - outros.
 * @pw_element string $mod Código do Modelo do Documento Fiscal:<BR>Utilizar o código 55 para identificação da NF-e, emitida em substituição ao modelo 1 ou 1A.
 * @pw_element string $serie Série do Documento Fiscal
 * @pw_element string $nNF Número do Documento Fiscal
 * @pw_element string $dEmi Data de emissão.
 * @pw_element string $hEmi Hora de Emissão.
 * @pw_element string $dSaiEnt Data de saida.
 * @pw_element string $hSaiEnt Hora de Saída ou da Entrada da Mercadoria/Produto
 * @pw_element string $tpNF Tipo de Operação: 0-entrada / 1-saída
 * @pw_element string $tpAmb Tipo de Ambiente = 1-Produção / 2-Homologação
 * @pw_element string $finNFe Finalidade de emissão da NFe: <BR>1 ? NF-e normal<BR>2 ? NF-e complementar<BR>3 ? NF-e de ajuste<BR>4 ? NF-e de devolução
 * @pw_element string $dReg Data de Registro.
 * @pw_element string $dCan Data de cancelamento.
 * @pw_element string $dInut Data de Inutilização.
 * @pw_element string $cDeneg Indica que a Nota Fiscal foi Denegada
 * @pw_complex ide
 */
class Ide{
	/**
	 * Indicador da forma de pagamento:<BR>0 ? pagamento à vista;<BR>1 ? pagamento à prazo;<BR>2 - outros.
	 *
	 * @var string
	 */
	public string $indPag;
	/**
	 * Código do Modelo do Documento Fiscal:<BR>Utilizar o código 55 para identificação da NF-e, emitida em substituição ao modelo 1 ou 1A.
	 *
	 * @var string
	 */
	public string $mod;
	/**
	 * Série do Documento Fiscal
	 *
	 * @var string
	 */
	public string $serie;
	/**
	 * Número do Documento Fiscal
	 *
	 * @var string
	 */
	public string $nNF;
	/**
	 * Data de emissão.
	 *
	 * @var string
	 */
	public string $dEmi;
	/**
	 * Hora de Emissão.
	 *
	 * @var string
	 */
	public string $hEmi;
	/**
	 * Data de saida.
	 *
	 * @var string
	 */
	public string $dSaiEnt;
	/**
	 * Hora de Saída ou da Entrada da Mercadoria/Produto
	 *
	 * @var string
	 */
	public string $hSaiEnt;
	/**
	 * Tipo de Operação: 0-entrada / 1-saída
	 *
	 * @var string
	 */
	public string $tpNF;
	/**
	 * Tipo de Ambiente = 1-Produção / 2-Homologação
	 *
	 * @var string
	 */
	public string $tpAmb;
	/**
	 * Finalidade de emissão da NFe: <BR>1 ? NF-e normal<BR>2 ? NF-e complementar<BR>3 ? NF-e de ajuste<BR>4 ? NF-e de devolução
	 *
	 * @var string
	 */
	public string $finNFe;
	/**
	 * Data de Registro.
	 *
	 * @var string
	 */
	public string $dReg;
	/**
	 * Data de cancelamento.
	 *
	 * @var string
	 */
	public string $dCan;
	/**
	 * Data de Inutilização.
	 *
	 * @var string
	 */
	public string $dInut;
	/**
	 * Indica que a Nota Fiscal foi Denegada
	 *
	 * @var string
	 */
	public string $cDeneg;
}
