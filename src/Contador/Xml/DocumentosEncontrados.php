<?php

namespace OmieLib\Contador\Xml;

use OmieLib\Common\OmieFail;
use OmieLib\Contador\Xml\Request\XmlListarDocumentosRequest;
use OmieLib\Contador\Xml\Response\XmlListarDocumentosResponse;

/**
 * Lista de XMLs dos documentos encontrados.
 *
 * @pw_element string $nNumero Número do Documento Fiscal.
 * @pw_element string $cSerie Série do Documento Fiscal.
 * @pw_element string $nChave Chave da Documento Fiscal.
 * @pw_element string $dEmissao Data de emissão do Documento Fiscal.
 * @pw_element string $hEmissao Hora de emissão do Documento Fiscal.
 * @pw_element decimal $nValor Valor do Documento Fiscal.
 * @pw_element string $cXml XML do Documento Fiscal.
 * @pw_element integer $nIdCupom ID do Cupom Fiscal (Para NFC-e / CF-e SAT e ECF).
 * @pw_element integer $nIdNF ID da Nota Fiscal (para NF-e / NFS-e).
 * @pw_element integer $nIdCT ID do Conhecimento de Transporte (Para  CT-e / CT-e OS).
 * @pw_element integer $nIdPedido ID do Pedido de Compra/Venda.
 * @pw_element integer $nIdOS ID da Ordem de Serviço.
 * @pw_element integer $nIdReceb Id do Recebimento da Nota.
 * @pw_element string $cStatus Status do Documento Fiscal.<BR><BR>Pode ser:<BR><BR>00 - Autorizado<BR>10 - Cancelado<BR>20 - Denegado<BR>30 - Devolvido<BR>40 - Pendente (Documento em processo de faturamento)<BR><BR>
 * @pw_complex documentosEncontrados
 */
class DocumentosEncontrados{
	/**
	 * Número do Documento Fiscal.
	 *
	 * @var string
	 */
	public string $nNumero;
	/**
	 * Série do Documento Fiscal.
	 *
	 * @var string
	 */
	public string $cSerie;
	/**
	 * Chave da Documento Fiscal.
	 *
	 * @var string
	 */
	public string $nChave;
	/**
	 * Data de emissão do Documento Fiscal.
	 *
	 * @var string
	 */
	public string $dEmissao;
	/**
	 * Hora de emissão do Documento Fiscal.
	 *
	 * @var string
	 */
	public string $hEmissao;
	/**
	 * Valor do Documento Fiscal.
	 *
	 * @var decimal
	 */
	public float $nValor;
	/**
	 * XML do Documento Fiscal.
	 *
	 * @var string
	 */
	public string $cXml;
	/**
	 * ID do Cupom Fiscal (Para NFC-e / CF-e SAT e ECF).
	 *
	 * @var integer
	 */
	public int $nIdCupom;
	/**
	 * ID da Nota Fiscal (para NF-e / NFS-e).
	 *
	 * @var integer
	 */
	public int $nIdNF;
	/**
	 * ID do Conhecimento de Transporte (Para  CT-e / CT-e OS).
	 *
	 * @var integer
	 */
	public int $nIdCT;
	/**
	 * ID do Pedido de Compra/Venda.
	 *
	 * @var integer
	 */
	public int $nIdPedido;
	/**
	 * ID da Ordem de Serviço.
	 *
	 * @var integer
	 */
	public int $nIdOS;
	/**
	 * Id do Recebimento da Nota.
	 *
	 * @var integer
	 */
	public int $nIdReceb;
	/**
	 * Status do Documento Fiscal.<BR><BR>Pode ser:<BR><BR>00 - Autorizado<BR>10 - Cancelado<BR>20 - Denegado<BR>30 - Devolvido<BR>40 - Pendente (Documento em processo de faturamento)<BR><BR>
	 *
	 * @var string
	 */
	public string $cStatus;
}
