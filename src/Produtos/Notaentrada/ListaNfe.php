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
 * Lista de NF-es geradas
 *
 * @pw_element integer $nNumLote Número do lote da NF-e
 * @pw_element string $cStatusLote Status do Lote da NF-e.
 * @pw_element integer $nRecibo Recibo
 * @pw_element string $contingencia NF-e emitida em contingência
 * @pw_element string $cNumNFe Número da NF-e gerada
 * @pw_element string $cSerieNFe Série da NF-e
 * @pw_element string $cStatusNFe Chave de Acesso da NF-e
 * @pw_element string $cChaveNFe Chave de Acesso da NF-e
 * @pw_element integer $nProtocolo Número do Protocolo
 * @pw_element string $cTipo Tipo de Emissão.<BR>Pode ser:<BR>E - Entrada<BR>S - Saída
 * @pw_element string $dtEmissao Data da Emissão da NF-e
 * @pw_element string $hrEmissao Hora da Emissão da NF-e
 * @pw_element string $dtFatura Data do faturamento
 * @pw_element string $hrFatura Hora de Faturamento
 * @pw_element string $dtSaida Data de Saída
 * @pw_element string $hrSaida Hora de Saída da NF-e
 * @pw_element mensagensArray $mensagens Mensagens de Erros
 * @pw_element string $cXmlDistribuicao XML de distribuição da NF-e
 * @pw_element string $cDanfe Link para o DANFE da NF-e gerada.
 * @pw_complex ListaNfe
 */
class ListaNfe{
	/**
	 * Número do lote da NF-e
	 *
	 * @var integer
	 */
	public int $nNumLote;
	/**
	 * Status do Lote da NF-e.
	 *
	 * @var string
	 */
	public string $cStatusLote;
	/**
	 * Recibo
	 *
	 * @var integer
	 */
	public int $nRecibo;
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
	public string $cNumNFe;
	/**
	 * Série da NF-e
	 *
	 * @var string
	 */
	public string $cSerieNFe;
	/**
	 * Chave de Acesso da NF-e
	 *
	 * @var string
	 */
	public string $cStatusNFe;
	/**
	 * Chave de Acesso da NF-e
	 *
	 * @var string
	 */
	public string $cChaveNFe;
	/**
	 * Número do Protocolo
	 *
	 * @var integer
	 */
	public int $nProtocolo;
	/**
	 * Tipo de Emissão.<BR>Pode ser:<BR>E - Entrada<BR>S - Saída
	 *
	 * @var string
	 */
	public string $cTipo;
	/**
	 * Data da Emissão da NF-e
	 *
	 * @var string
	 */
	public string $dtEmissao;
	/**
	 * Hora da Emissão da NF-e
	 *
	 * @var string
	 */
	public string $hrEmissao;
	/**
	 * Data do faturamento
	 *
	 * @var string
	 */
	public string $dtFatura;
	/**
	 * Hora de Faturamento
	 *
	 * @var string
	 */
	public string $hrFatura;
	/**
	 * Data de Saída
	 *
	 * @var string
	 */
	public string $dtSaida;
	/**
	 * Hora de Saída da NF-e
	 *
	 * @var string
	 */
	public string $hrSaida;
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
	public string $cXmlDistribuicao;
	/**
	 * Link para o DANFE da NF-e gerada.
	 *
	 * @var string
	 */
	public string $cDanfe;
}
