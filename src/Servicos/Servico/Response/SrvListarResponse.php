<?php

namespace OmieLib\Servicos\Servico\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Servico\Cabecalho;
use OmieLib\Servicos\Servico\Cadastros;
use OmieLib\Servicos\Servico\Descricao;
use OmieLib\Servicos\Servico\Impostos;
use OmieLib\Servicos\Servico\Info;
use OmieLib\Servicos\Servico\IntEditar;
use OmieLib\Servicos\Servico\IntIncluir;
use OmieLib\Servicos\Servico\IntListar;
use OmieLib\Servicos\Servico\ProdutoUtilizado;
use OmieLib\Servicos\Servico\ProdutosUtilizados;
use OmieLib\Servicos\Servico\Request\SrvAssociarRequest;
use OmieLib\Servicos\Servico\Request\SrvConsultarRequest;
use OmieLib\Servicos\Servico\Request\SrvEditarRequest;
use OmieLib\Servicos\Servico\Request\SrvExcluirRequest;
use OmieLib\Servicos\Servico\Request\SrvIncluirRequest;
use OmieLib\Servicos\Servico\Request\SrvListarRequest;
use OmieLib\Servicos\Servico\Request\SrvUpsertRequest;
use OmieLib\Servicos\Servico\ServicosJsonClient;
use OmieLib\Servicos\Servico\ViaUnica;

/**
 * Resposta da solicitação da listagem de serviços.
 *
 * @pw_element integer $nPagina Número da página retornada
 * @pw_element integer $nTotPaginas Número total de páginas
 * @pw_element integer $nRegistros Número de registros retornados na página.
 * @pw_element integer $nTotRegistros total de registros encontrados
 * @pw_element cadastrosArray $cadastros Lista os cadastros encontrados.
 * @pw_complex srvListarResponse
 */
class SrvListarResponse{
	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número total de páginas
	 *
	 * @var integer
	 */
	public int $nTotPaginas;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $nRegistros;
	/**
	 * total de registros encontrados
	 *
	 * @var integer
	 */
	public int $nTotRegistros;
	/**
	 * Lista os cadastros encontrados.
	 *
	 * @var Cadastros[]
	 */
	public array $cadastros;
}
