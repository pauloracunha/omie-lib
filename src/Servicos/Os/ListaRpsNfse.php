<?php

namespace OmieLib\Servicos\Os;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Os\Request\OsListarRequest;
use OmieLib\Servicos\Os\Request\OsObterRequest;
use OmieLib\Servicos\Os\Request\OsStatusRequest;
use OmieLib\Servicos\Os\Request\OsTrocarEtapaRequest;
use OmieLib\Servicos\Os\Response\OsListarResponse;
use OmieLib\Servicos\Os\Response\OsObterResponse;
use OmieLib\Servicos\Os\Response\OsStatusResponse;
use OmieLib\Servicos\Os\Response\OsTrocarEtapaResponse;

/**
 * Lista de RPS geradas para a Ordem de Serviço
 *
 * @pw_element integer $nLote Número do Lote de Envio da RPS
 * @pw_element string $cStatusLote Código do status do lote enviado para a prefeitura.<BR><BR>Pode ser:<BR><BR>001 - Aguardando envio para a prefeitura.<BR>002 - Enviado para a prefeitura, aguardando processamento.<BR>003 - Processado com erro.<BR>004 - Processado com sucesso.<BR>005 - Cancelado com sucesso.
 * @pw_element string $cProtocolo Número do protocolo do envio do lote.
 * @pw_element string $nRps Número do Recibo Provisório de Serviços (RPS).
 * @pw_element string $cStatusRps Código do status da RPS.<BR><BR>Pode ser:<BR><BR>001 - Aguardando envio para a prefeitura.<BR>002 - Enviado para a prefeitura, aguardando processamento.<BR>003 - Processado com erro.<BR>004 - Processado com sucesso.<BR>005 - Cancelado com sucesso.
 * @pw_element string $nNfse Número da NFS-e gerada.
 * @pw_element string $cCodVerif Código de Verificação da NFS-e gerada.
 * @pw_element string $cCNPJ CNPJ do Prestador
 * @pw_element integer $cInscrMunicipal Inscrição Municipal do Prestador
 * @pw_element mensagensArray $mensagens Mensagens de comunicação com a Prefeitura
 * @pw_element string $xml_distr XML de distribuição da NF-e
 * @pw_element string $danfe Link para o DANFE da NF-e gerada.
 * @pw_element string $cUrlNfse Link para obter a NFS-e na prefeitura.
 * @pw_element string $cUrlPdfDemo Link para obter o PDF do Demonstrativo da NFS-e.
 * @pw_element string $cUrlPdfDest Link para obter o PDF da nota do Destinatário.
 * @pw_element string $cUrlRps Link para obter a RPS.
 * @pw_complex ListaRpsNfse
 */
class ListaRpsNfse{
	/**
	 * Número do Lote de Envio da RPS
	 *
	 * @var integer
	 */
	public int $nLote;
	/**
	 * Código do status do lote enviado para a prefeitura.<BR><BR>Pode ser:<BR><BR>001 - Aguardando envio para a prefeitura.<BR>002 - Enviado para a prefeitura, aguardando processamento.<BR>003 - Processado com erro.<BR>004 - Processado com sucesso.<BR>005 - Cancelado com sucesso.
	 *
	 * @var string
	 */
	public string $cStatusLote;
	/**
	 * Número do protocolo do envio do lote.
	 *
	 * @var string
	 */
	public string $cProtocolo;
	/**
	 * Número do Recibo Provisório de Serviços (RPS).
	 *
	 * @var string
	 */
	public string $nRps;
	/**
	 * Código do status da RPS.<BR><BR>Pode ser:<BR><BR>001 - Aguardando envio para a prefeitura.<BR>002 - Enviado para a prefeitura, aguardando processamento.<BR>003 - Processado com erro.<BR>004 - Processado com sucesso.<BR>005 - Cancelado com sucesso.
	 *
	 * @var string
	 */
	public string $cStatusRps;
	/**
	 * Número da NFS-e gerada.
	 *
	 * @var string
	 */
	public string $nNfse;
	/**
	 * Código de Verificação da NFS-e gerada.
	 *
	 * @var string
	 */
	public string $cCodVerif;
	/**
	 * CNPJ do Prestador
	 *
	 * @var string
	 */
	public string $cCNPJ;
	/**
	 * Inscrição Municipal do Prestador
	 *
	 * @var integer
	 */
	public int $cInscrMunicipal;
	/**
	 * Mensagens de comunicação com a Prefeitura
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
	/**
	 * Link para obter a NFS-e na prefeitura.
	 *
	 * @var string
	 */
	public string $cUrlNfse;
	/**
	 * Link para obter o PDF do Demonstrativo da NFS-e.
	 *
	 * @var string
	 */
	public string $cUrlPdfDemo;
	/**
	 * Link para obter o PDF da nota do Destinatário.
	 *
	 * @var string
	 */
	public string $cUrlPdfDest;
	/**
	 * Link para obter a RPS.
	 *
	 * @var string
	 */
	public string $cUrlRps;
}
