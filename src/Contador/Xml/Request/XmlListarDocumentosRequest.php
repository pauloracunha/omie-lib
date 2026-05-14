<?php

namespace OmieLib\Contador\Xml\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Contador\Xml\DocumentosEncontrados;
use OmieLib\Contador\Xml\DocumentosFiscaisJsonClient;
use OmieLib\Contador\Xml\Response\XmlListarDocumentosResponse;

/**
 * Solicitação de listagem de XMLs de Documentos Fiscais.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegPorPagina Número de registros retornados
 * @pw_element string $cModelo Modelo do Documento Fiscal:<BR><BR>Pode ser:<BR><BR>00 - ECF<BR>65 - NFC-e<BR>59 - CF-e SAT<BR>55 - NF-e<BR>57 - CT-e<BR>67 - CT-e OS<BR>99 - NFS-e<BR>
 * @pw_element string $cOperacao Tipo de Operação do Documento Fiscal.<BR><BR>Pode ser:<BR><BR>0 - Entrada.<BR>1 - Saída (Default).
 * @pw_element string $cAmbiente Ambiente do Documento Fiscal.<BR><BR>Pode ser:<BR><BR>H - Homologação.<BR>P - Produção (Default).
 * @pw_element string $dEmiInicial Data de emissão inicial do Documento Fiscal.
 * @pw_element string $dEmiFinal Data de emissão final do Documento Fiscal.
 * @pw_element string $hEmiInicial Hora de emissão inicial  do Documento Fiscal.
 * @pw_element string $hEmiFinal Hora de emissão final do Documento Fiscal.
 * @pw_element string $dDtIncInicial Data de Inclusão inicial do Documento Fiscal.
 * @pw_element string $dDtIncFinal Data de Inclusão final do Documento Fiscal.
 * @pw_element string $cHrIncInicial Hora de Inclusão inicial do Documento Fiscal.
 * @pw_element string $cHrIncFinal Hora de Inclusão final do Documento Fiscal.
 * @pw_element integer $nDocInicial Número do Documento Inicial do Documento Fiscal.
 * @pw_element integer $nDocFinal Número do Documento Final do Documento Fiscal.
 * @pw_element string $cSerie Série do Documento Fiscal.
 * @pw_element string $nChave Chave da Documento Fiscal.
 * @pw_element integer $nIdCupom ID do Cupom Fiscal (Para NFC-e / CF-e SAT e ECF).
 * @pw_element integer $nIdNF ID da Nota Fiscal (para NF-e / NFS-e).
 * @pw_element integer $nIdCT ID do Conhecimento de Transporte (Para  CT-e / CT-e OS).
 * @pw_element integer $nIdPedido ID do Pedido de Compra/Venda.
 * @pw_element integer $nIdOS ID da Ordem de Serviço.
 * @pw_element integer $nIdReceb Id do Recebimento da Nota.
 * @pw_complex xmlListarDocumentosRequest
 */
class XmlListarDocumentosRequest{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
	/**
	 * Modelo do Documento Fiscal:<BR><BR>Pode ser:<BR><BR>00 - ECF<BR>65 - NFC-e<BR>59 - CF-e SAT<BR>55 - NF-e<BR>57 - CT-e<BR>67 - CT-e OS<BR>99 - NFS-e<BR>
	 *
	 * @var string
	 */
	public string $cModelo;
	/**
	 * Tipo de Operação do Documento Fiscal.<BR><BR>Pode ser:<BR><BR>0 - Entrada.<BR>1 - Saída (Default).
	 *
	 * @var string
	 */
	public string $cOperacao;
	/**
	 * Ambiente do Documento Fiscal.<BR><BR>Pode ser:<BR><BR>H - Homologação.<BR>P - Produção (Default).
	 *
	 * @var string
	 */
	public string $cAmbiente;
	/**
	 * Data de emissão inicial do Documento Fiscal.
	 *
	 * @var string
	 */
	public string $dEmiInicial;
	/**
	 * Data de emissão final do Documento Fiscal.
	 *
	 * @var string
	 */
	public string $dEmiFinal;
	/**
	 * Hora de emissão inicial  do Documento Fiscal.
	 *
	 * @var string
	 */
	public string $hEmiInicial;
	/**
	 * Hora de emissão final do Documento Fiscal.
	 *
	 * @var string
	 */
	public string $hEmiFinal;
	/**
	 * Data de Inclusão inicial do Documento Fiscal.
	 *
	 * @var string
	 */
	public string $dDtIncInicial;
	/**
	 * Data de Inclusão final do Documento Fiscal.
	 *
	 * @var string
	 */
	public string $dDtIncFinal;
	/**
	 * Hora de Inclusão inicial do Documento Fiscal.
	 *
	 * @var string
	 */
	public string $cHrIncInicial;
	/**
	 * Hora de Inclusão final do Documento Fiscal.
	 *
	 * @var string
	 */
	public string $cHrIncFinal;
	/**
	 * Número do Documento Inicial do Documento Fiscal.
	 *
	 * @var integer
	 */
	public int $nDocInicial;
	/**
	 * Número do Documento Final do Documento Fiscal.
	 *
	 * @var integer
	 */
	public int $nDocFinal;
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
}
