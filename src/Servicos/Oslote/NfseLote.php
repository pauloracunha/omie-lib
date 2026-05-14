<?php

namespace OmieLib\Servicos\Oslote;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Oslote\Request\FaturarLoteOSRequest;
use OmieLib\Servicos\Oslote\Request\ListarLoteNfseRequest;
use OmieLib\Servicos\Oslote\Request\ListarLotesOSRequest;
use OmieLib\Servicos\Oslote\Request\StatusLoteOsRequest;
use OmieLib\Servicos\Oslote\Response\FaturarLoteOSResponse;
use OmieLib\Servicos\Oslote\Response\ListarLoteNfseResponse;
use OmieLib\Servicos\Oslote\Response\ListarLotesOSResponse;
use OmieLib\Servicos\Oslote\Response\StatusLoteOsResponse;

/**
 * Notas encontradas para o Status e data de faturamento enviadas
 *
 * @pw_element integer $nLote Lote da NFS-e gerada.
 * @pw_element string $cNumOs Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)
 * @pw_element string $cNumContrato Número do Contrato
 * @pw_element integer $nCodOS ID da Ordem de Serviço (código interno de controle).
 * @pw_element string $cNumRps Número do Recibo Provisório de Serviços (RPS).
 * @pw_element string $cNumNfse Número da NFS-e gerada.
 * @pw_element string $cCodVerif Código de Verificação da NFS-e gerada.
 * @pw_element integer $nCodNF Código da Nota Fiscal gerada.<BR>(Gerado Internamente, não é exibido na tela)
 * @pw_element string $dDtFat Data de Faturamento
 * @pw_element string $cStatusLote Código do status do lote enviado para a prefeitura.<BR><BR>Pode ser:<BR><BR>001 - Aguardando envio para a prefeitura.<BR>002 - Enviado para a prefeitura, aguardando processamento.<BR>003 - Processado com erro.<BR>004 - Processado com sucesso.<BR>005 - Cancelado com sucesso.
 * @pw_complex nfseLote
 */
class NfseLote{
	/**
	 * Lote da NFS-e gerada.
	 *
	 * @var integer
	 */
	public int $nLote;
	/**
	 * Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)
	 *
	 * @var string
	 */
	public string $cNumOs;
	/**
	 * Número do Contrato
	 *
	 * @var string
	 */
	public string $cNumContrato;
	/**
	 * ID da Ordem de Serviço (código interno de controle).
	 *
	 * @var integer
	 */
	public int $nCodOS;
	/**
	 * Número do Recibo Provisório de Serviços (RPS).
	 *
	 * @var string
	 */
	public string $cNumRps;
	/**
	 * Número da NFS-e gerada.
	 *
	 * @var string
	 */
	public string $cNumNfse;
	/**
	 * Código de Verificação da NFS-e gerada.
	 *
	 * @var string
	 */
	public string $cCodVerif;
	/**
	 * Código da Nota Fiscal gerada.<BR>(Gerado Internamente, não é exibido na tela)
	 *
	 * @var integer
	 */
	public int $nCodNF;
	/**
	 * Data de Faturamento
	 *
	 * @var string
	 */
	public string $dDtFat;
	/**
	 * Código do status do lote enviado para a prefeitura.<BR><BR>Pode ser:<BR><BR>001 - Aguardando envio para a prefeitura.<BR>002 - Enviado para a prefeitura, aguardando processamento.<BR>003 - Processado com erro.<BR>004 - Processado com sucesso.<BR>005 - Cancelado com sucesso.
	 *
	 * @var string
	 */
	public string $cStatusLote;
}
