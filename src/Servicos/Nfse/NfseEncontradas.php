<?php

namespace OmieLib\Servicos\Nfse;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Nfse\Request\NfseListarRequest;
use OmieLib\Servicos\Nfse\Response\NfseListarResponse;

/**
 * Lista de NF-es encontradas.
 *
 * @pw_element Cabecalho $Cabecalho Cabeçalho da NFS-e.
 * @pw_element OrdemServico $OrdemServico Dados da Ordem de Serviço.
 * @pw_element RPS $RPS Dados da RPS
 * @pw_element Adicionais $Adicionais Informações adicionais.
 * @pw_element Servicos $Servicos Listas de itens da Nota Fiscal.
 * @pw_element Valores $Valores Valores da NFS-e
 * @pw_element IBPT $IBPT Dados do IBPT.
 * @pw_element Inclusao $Inclusao Dados da Inclusão
 * @pw_element Alteracao $Alteracao Dados da Alteração
 * @pw_element Emissao $Emissao Dados da emissão
 * @pw_element Cancelamento $Cancelamento Dados do Cancelamento.
 * @pw_element ListaServicosArray $ListaServicos Listas de itens da Nota Fiscal.
 * @pw_complex nfseEncontradas
 */
class NfseEncontradas{
	/**
	 * Cabeçalho da NFS-e.
	 *
	 * @var Cabecalho
	 */
	public Cabecalho $Cabecalho;
	/**
	 * Dados da Ordem de Serviço.
	 *
	 * @var OrdemServico
	 */
	public OrdemServico $OrdemServico;
	/**
	 * Dados da RPS
	 *
	 * @var RPS
	 */
	public RPS $RPS;
	/**
	 * Informações adicionais.
	 *
	 * @var Adicionais
	 */
	public Adicionais $Adicionais;
	/**
	 * Listas de itens da Nota Fiscal.
	 *
	 * @var Servicos
	 */
	public Servicos $Servicos;
	/**
	 * Valores da NFS-e
	 *
	 * @var Valores
	 */
	public Valores $Valores;
	/**
	 * Dados do IBPT.
	 *
	 * @var IBPT
	 */
	public IBPT $IBPT;
	/**
	 * Dados da Inclusão
	 *
	 * @var Inclusao
	 */
	public Inclusao $Inclusao;
	/**
	 * Dados da Alteração
	 *
	 * @var Alteracao
	 */
	public Alteracao $Alteracao;
	/**
	 * Dados da emissão
	 *
	 * @var Emissao
	 */
	public Emissao $Emissao;
	/**
	 * Dados do Cancelamento.
	 *
	 * @var Cancelamento
	 */
	public Cancelamento $Cancelamento;
	/**
	 * Listas de itens da Nota Fiscal.
	 *
	 * @var ListaServicos[]
	 */
	public array $ListaServicos;
}
