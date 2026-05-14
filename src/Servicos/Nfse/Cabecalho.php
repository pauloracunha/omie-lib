<?php

namespace OmieLib\Servicos\Nfse;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Nfse\Request\NfseListarRequest;
use OmieLib\Servicos\Nfse\Response\NfseListarResponse;

/**
 * Cabeçalho da NFS-e.
 *
 * @pw_element string $nNumeroNFSe Número da NFS-e emitida.
 * @pw_element string $cSerieNFSe Série da NFS-e emitida.
 * @pw_element decimal $nValorNFSe Valor da NFS-e
 * @pw_element string $cStatusNFSe Status da NFS-e.<BR><BR>Pode ser: <BR><BR>"C"-Cancelada.<BR>"F"-Faturada.<BR>"N"-Não faturada.<BR>
 * @pw_element string $cCodigoVerifNFSe Código de Verificação da NFS-e.
 * @pw_element integer $nCodNF Código da Nota Fiscal gerada.<BR>(Gerado Internamente, não é exibido na tela)
 * @pw_element string $nChaveNFe Chave da NF-e.<BR>(para emissões em Brasilia-DF).
 * @pw_element string $cAmbienteNFSe Ambiente da NFS-e.<BR><BR>Pode Ser:<BR><BR>H-Homologação<BR>P-Produção.
 * @pw_element string $cCidadeEmissor Cidade do Emissor da NFS-e.
 * @pw_element string $cCNPJEmissor CNPJ do Emissor.
 * @pw_element string $cIMEmissor Inscrição Municipal do Emissor.
 * @pw_element string $cCNPJDestinatario CNPJ do Destinatário.
 * @pw_element string $cCPFDestinatario CPF do destinatário.
 * @pw_element string $cIMDestinatario Inscrição Municipal do destinatário.
 * @pw_element integer $nCodigoCliente Código do Cliente (destinatário da NFS-e).
 * @pw_complex Cabecalho
 */
class Cabecalho{
	/**
	 * Número da NFS-e emitida.
	 *
	 * @var string
	 */
	public string $nNumeroNFSe;
	/**
	 * Série da NFS-e emitida.
	 *
	 * @var string
	 */
	public string $cSerieNFSe;
	/**
	 * Valor da NFS-e
	 *
	 * @var decimal
	 */
	public float $nValorNFSe;
	/**
	 * Status da NFS-e.<BR><BR>Pode ser: <BR><BR>"C"-Cancelada.<BR>"F"-Faturada.<BR>"N"-Não faturada.<BR>
	 *
	 * @var string
	 */
	public string $cStatusNFSe;
	/**
	 * Código de Verificação da NFS-e.
	 *
	 * @var string
	 */
	public string $cCodigoVerifNFSe;
	/**
	 * Código da Nota Fiscal gerada.<BR>(Gerado Internamente, não é exibido na tela)
	 *
	 * @var integer
	 */
	public int $nCodNF;
	/**
	 * Chave da NF-e.<BR>(para emissões em Brasilia-DF).
	 *
	 * @var string
	 */
	public string $nChaveNFe;
	/**
	 * Ambiente da NFS-e.<BR><BR>Pode Ser:<BR><BR>H-Homologação<BR>P-Produção.
	 *
	 * @var string
	 */
	public string $cAmbienteNFSe;
	/**
	 * Cidade do Emissor da NFS-e.
	 *
	 * @var string
	 */
	public string $cCidadeEmissor;
	/**
	 * CNPJ do Emissor.
	 *
	 * @var string
	 */
	public string $cCNPJEmissor;
	/**
	 * Inscrição Municipal do Emissor.
	 *
	 * @var string
	 */
	public string $cIMEmissor;
	/**
	 * CNPJ do Destinatário.
	 *
	 * @var string
	 */
	public string $cCNPJDestinatario;
	/**
	 * CPF do destinatário.
	 *
	 * @var string
	 */
	public string $cCPFDestinatario;
	/**
	 * Inscrição Municipal do destinatário.
	 *
	 * @var string
	 */
	public string $cIMDestinatario;
	/**
	 * Código do Cliente (destinatário da NFS-e).
	 *
	 * @var integer
	 */
	public int $nCodigoCliente;
}
