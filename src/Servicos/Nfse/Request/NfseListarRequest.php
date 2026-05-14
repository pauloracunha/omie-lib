<?php

namespace OmieLib\Servicos\Nfse\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Nfse\Adicionais;
use OmieLib\Servicos\Nfse\Alteracao;
use OmieLib\Servicos\Nfse\Cabecalho;
use OmieLib\Servicos\Nfse\Cancelamento;
use OmieLib\Servicos\Nfse\Categorias;
use OmieLib\Servicos\Nfse\Departamentos;
use OmieLib\Servicos\Nfse\Emissao;
use OmieLib\Servicos\Nfse\IBPT;
use OmieLib\Servicos\Nfse\Inclusao;
use OmieLib\Servicos\Nfse\ListaServicos;
use OmieLib\Servicos\Nfse\NFSeJsonClient;
use OmieLib\Servicos\Nfse\NfseEncontradas;
use OmieLib\Servicos\Nfse\OrdemServico;
use OmieLib\Servicos\Nfse\RPS;
use OmieLib\Servicos\Nfse\Response\NfseListarResponse;
use OmieLib\Servicos\Nfse\Servicos;
use OmieLib\Servicos\Nfse\Valores;

/**
 * Solicitação de listagem de NFS-es emitidas.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegPorPagina Número de registros retornados
 * @pw_element string $dEmiInicial Data de emissão inicial.
 * @pw_element string $hEmiInicial Hora de emissão inicial.
 * @pw_element string $dEmiFinal Data de emissão final.
 * @pw_element string $hEmiFinal Hora de emissão final.
 * @pw_element string $nNumeroNFSe Número da NFS-e emitida.
 * @pw_element string $cSerieNFSe Série da NFS-e emitida.
 * @pw_element string $cCodigoVerifNFSe Código de Verificação da NFS-e.
 * @pw_element integer $nCodNF Código da Nota Fiscal gerada.<BR>(Gerado Internamente, não é exibido na tela)
 * @pw_element string $nChaveNFe Chave da NF-e.<BR>(para emissões em Brasilia-DF).
 * @pw_element string $cAmbienteNFSe Ambiente da NFS-e.<BR><BR>Pode Ser:<BR><BR>H-Homologação<BR>P-Produção.
 * @pw_element integer $nCodigoCliente Código do Cliente (destinatário da NFS-e).
 * @pw_element string $cCodigoCategoria Código da Categoria.
 * @pw_element integer $nCodigoCC Código da Conta Corrente.
 * @pw_element integer $nCodigoProjeto Código do Projeto.
 * @pw_element integer $nCodigoVendedor Código do Vendedor.
 * @pw_element integer $nCodigoOS Código da Ordem de Serviço.
 * @pw_element string $nNumeroOS Número da Ordem de Serviço.
 * @pw_element integer $nCodigoContrato Código do Contrato.
 * @pw_element string $cNumeroContrato Número do Contrato
 * @pw_element string $cStatusNFSe Status da NFS-e.<BR><BR>Pode ser: <BR><BR>"C"-Cancelada.<BR>"F"-Faturada.<BR>"N"-Não faturada.<BR>
 * @pw_element string $cExibirDepartamentos Listar os departamentos da Ordem de Serviço (S/N).
 * @pw_element string $cExibirDescricao Exibir descrição do Serviço (S/N).
 * @pw_complex nfseListarRequest
 */
class NfseListarRequest{
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
	 * Data de emissão inicial.
	 *
	 * @var string
	 */
	public string $dEmiInicial;
	/**
	 * Hora de emissão inicial.
	 *
	 * @var string
	 */
	public string $hEmiInicial;
	/**
	 * Data de emissão final.
	 *
	 * @var string
	 */
	public string $dEmiFinal;
	/**
	 * Hora de emissão final.
	 *
	 * @var string
	 */
	public string $hEmiFinal;
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
	 * Código do Cliente (destinatário da NFS-e).
	 *
	 * @var integer
	 */
	public int $nCodigoCliente;
	/**
	 * Código da Categoria.
	 *
	 * @var string
	 */
	public string $cCodigoCategoria;
	/**
	 * Código da Conta Corrente.
	 *
	 * @var integer
	 */
	public int $nCodigoCC;
	/**
	 * Código do Projeto.
	 *
	 * @var integer
	 */
	public int $nCodigoProjeto;
	/**
	 * Código do Vendedor.
	 *
	 * @var integer
	 */
	public int $nCodigoVendedor;
	/**
	 * Código da Ordem de Serviço.
	 *
	 * @var integer
	 */
	public int $nCodigoOS;
	/**
	 * Número da Ordem de Serviço.
	 *
	 * @var string
	 */
	public string $nNumeroOS;
	/**
	 * Código do Contrato.
	 *
	 * @var integer
	 */
	public int $nCodigoContrato;
	/**
	 * Número do Contrato
	 *
	 * @var string
	 */
	public string $cNumeroContrato;
	/**
	 * Status da NFS-e.<BR><BR>Pode ser: <BR><BR>"C"-Cancelada.<BR>"F"-Faturada.<BR>"N"-Não faturada.<BR>
	 *
	 * @var string
	 */
	public string $cStatusNFSe;
	/**
	 * Listar os departamentos da Ordem de Serviço (S/N).
	 *
	 * @var string
	 */
	public string $cExibirDepartamentos;
	/**
	 * Exibir descrição do Serviço (S/N).
	 *
	 * @var string
	 */
	public string $cExibirDescricao;
}
