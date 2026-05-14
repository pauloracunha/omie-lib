<?php

namespace OmieLib\Produtos\Nfconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;

/**
 * Chave de pesquisa da Nota Fiscal
 *
 * @pw_element string $cCodNFInt Código de Integração da NF (DEPRECATED)
 * @pw_element integer $nCodNF Código da Nota Fiscal.<BR>Interno, utilizando apenas nas APIs.
 * @pw_element string $nNF Número do Documento Fiscal
 * @pw_element string $serie Série do Documento Fiscal
 * @pw_element string $dEmi Data de emissão.
 * @pw_element string $tpNF Tipo de Operação: 0-entrada / 1-saída
 * @pw_element string $cChaveNFe Chave da NF-e
 * @pw_element integer $nIdPedido Código de identificação do pedido.<BR>Interno, utilizando apenas nas APIs.
 * @pw_element integer $nIdCliente ID do Cliente.
 * @pw_element string $cnpj_cpf CNPJ / CPF.
 * @pw_element string $cDetalhesPedido Exibe os detalhes do pedido que originou a Nota Fiscal.<BR><BR>Preecher com "S" ou "N".<BR>
 * @pw_element string $tpAmb Tipo de Ambiente = 1-Produção / 2-Homologação
 * @pw_complex nfChave
 */
class NfChave{
	/**
	 * Código de Integração da NF (DEPRECATED)
	 *
	 * @var string
	 */
	public string $cCodNFInt;
	/**
	 * Código da Nota Fiscal.<BR>Interno, utilizando apenas nas APIs.
	 *
	 * @var integer
	 */
	public int $nCodNF;
	/**
	 * Número do Documento Fiscal
	 *
	 * @var string
	 */
	public string $nNF;
	/**
	 * Série do Documento Fiscal
	 *
	 * @var string
	 */
	public string $serie;
	/**
	 * Data de emissão.
	 *
	 * @var string
	 */
	public string $dEmi;
	/**
	 * Tipo de Operação: 0-entrada / 1-saída
	 *
	 * @var string
	 */
	public string $tpNF;
	/**
	 * Chave da NF-e
	 *
	 * @var string
	 */
	public string $cChaveNFe;
	/**
	 * Código de identificação do pedido.<BR>Interno, utilizando apenas nas APIs.
	 *
	 * @var integer
	 */
	public int $nIdPedido;
	/**
	 * ID do Cliente.
	 *
	 * @var integer
	 */
	public int $nIdCliente;
	/**
	 * CNPJ / CPF.
	 *
	 * @var string
	 */
	public string $cnpj_cpf;
	/**
	 * Exibe os detalhes do pedido que originou a Nota Fiscal.<BR><BR>Preecher com "S" ou "N".<BR>
	 *
	 * @var string
	 */
	public string $cDetalhesPedido;
	/**
	 * Tipo de Ambiente = 1-Produção / 2-Homologação
	 *
	 * @var string
	 */
	public string $tpAmb;
}
