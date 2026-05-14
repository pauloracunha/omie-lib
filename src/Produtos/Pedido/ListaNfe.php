<?php

namespace OmieLib\Produtos\Pedido;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedido\Request\PvpAlterarPedFatRequest;
use OmieLib\Produtos\Pedido\Request\PvpConsultarRequest;
use OmieLib\Produtos\Pedido\Request\PvpDevolverRequest;
use OmieLib\Produtos\Pedido\Request\PvpExcluirRequest;
use OmieLib\Produtos\Pedido\Request\PvpListarRequest;
use OmieLib\Produtos\Pedido\Request\PvpSimularImpRequest;
use OmieLib\Produtos\Pedido\Request\PvpStatusRequest;
use OmieLib\Produtos\Pedido\Request\PvpTrocarEtapaRequest;
use OmieLib\Produtos\Pedido\Response\PvpAlterarPedFatResponse;
use OmieLib\Produtos\Pedido\Response\PvpConsultarResponse;
use OmieLib\Produtos\Pedido\Response\PvpDevolverResponse;
use OmieLib\Produtos\Pedido\Response\PvpExcluirResponse;
use OmieLib\Produtos\Pedido\Response\PvpListarResponse;
use OmieLib\Produtos\Pedido\Response\PvpSimularImpResponse;
use OmieLib\Produtos\Pedido\Response\PvpStatusResponse;
use OmieLib\Produtos\Pedido\Response\PvpTrocarEtapaResponse;

/**
 * Lista de NF-es geradas
 *
 * @pw_element integer $numero_lote Número do lote da NF-e
 * @pw_element string $status_lote Status do Lote da NF-e.
 * @pw_element integer $recibo Recibo
 * @pw_element string $contingencia NF-e emitida em contingência
 * @pw_element string $numero_nfe Número da NF-e gerada
 * @pw_element string $serie_nfe Série da NF-e
 * @pw_element string $status_nfe Status da NF-e
 * @pw_element string $chave_nfe Chave de Acesso da NF-e
 * @pw_element integer $protocolo Número do Protocolo
 * @pw_element string $tipo Tipo de Emissão.<BR>Pode ser:<BR>E - Entrada<BR>S - Saída
 * @pw_element string $data_emissao Data da Emissão da NF-e
 * @pw_element string $hora_emissao Hora da Emissão da NF-e
 * @pw_element string $data_fatura Data do faturamento
 * @pw_element string $hora_fatura Hora de Faturamento
 * @pw_element string $data_saida Data de Saída
 * @pw_element string $hora_saida Hora de Saída da NF-e
 * @pw_element mensagensArray $mensagens Mensagens de Erros
 * @pw_element string $xml_distr XML de distribuição da NF-e
 * @pw_element string $danfe Link para o DANFE da NF-e gerada.
 * @pw_complex ListaNfe
 */
class ListaNfe{
	/**
	 * Número do lote da NF-e
	 *
	 * @var integer
	 */
	public int $numero_lote;
	/**
	 * Status do Lote da NF-e.
	 *
	 * @var string
	 */
	public string $status_lote;
	/**
	 * Recibo
	 *
	 * @var integer
	 */
	public int $recibo;
	/**
	 * NF-e emitida em contingência
	 *
	 * @var string
	 */
	public string $contingencia;
	/**
	 * Número da NF-e gerada
	 *
	 * @var string
	 */
	public string $numero_nfe;
	/**
	 * Série da NF-e
	 *
	 * @var string
	 */
	public string $serie_nfe;
	/**
	 * Status da NF-e
	 *
	 * @var string
	 */
	public string $status_nfe;
	/**
	 * Chave de Acesso da NF-e
	 *
	 * @var string
	 */
	public string $chave_nfe;
	/**
	 * Número do Protocolo
	 *
	 * @var integer
	 */
	public int $protocolo;
	/**
	 * Tipo de Emissão.<BR>Pode ser:<BR>E - Entrada<BR>S - Saída
	 *
	 * @var string
	 */
	public string $tipo;
	/**
	 * Data da Emissão da NF-e
	 *
	 * @var string
	 */
	public string $data_emissao;
	/**
	 * Hora da Emissão da NF-e
	 *
	 * @var string
	 */
	public string $hora_emissao;
	/**
	 * Data do faturamento
	 *
	 * @var string
	 */
	public string $data_fatura;
	/**
	 * Hora de Faturamento
	 *
	 * @var string
	 */
	public string $hora_fatura;
	/**
	 * Data de Saída
	 *
	 * @var string
	 */
	public string $data_saida;
	/**
	 * Hora de Saída da NF-e
	 *
	 * @var string
	 */
	public string $hora_saida;
	/**
	 * Mensagens de Erros
	 *
	 * @var Mensagens[]
	 */
	public array $mensagens;
	/**
	 * XML de distribuição da NF-e
	 *
	 * @var string
	 */
	public string $xml_distr;
	/**
	 * Link para o DANFE da NF-e gerada.
	 *
	 * @var string
	 */
	public string $danfe;
}
