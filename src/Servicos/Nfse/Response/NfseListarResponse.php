<?php

namespace OmieLib\Servicos\Nfse\Response;

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
use OmieLib\Servicos\Nfse\Request\NfseListarRequest;
use OmieLib\Servicos\Nfse\Servicos;
use OmieLib\Servicos\Nfse\Valores;

/**
 * Resposta da solicitação de listagem de NFS-es emitidas.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nTotPaginas Total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados
 * @pw_element integer $nTotRegistros Total de registros encontrados.
 * @pw_element nfseEncontradasArray $nfseEncontradas Lista de NF-es encontradas.
 * @pw_complex nfseListarResponse
 */
class NfseListarResponse{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Total de páginas encontradas.
	 *
	 * @var integer
	 */
	public int $nTotPaginas;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $nRegistros;
	/**
	 * Total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $nTotRegistros;
	/**
	 * Lista de NF-es encontradas.
	 *
	 * @var NfseEncontradas[]
	 */
	public array $nfseEncontradas;
}
