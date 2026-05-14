<?php

namespace OmieLib\Servicos\Servico\Request;

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
use OmieLib\Servicos\Servico\Response\SrvAssociarResponse;
use OmieLib\Servicos\Servico\Response\SrvConsultarResponse;
use OmieLib\Servicos\Servico\Response\SrvEditarResponse;
use OmieLib\Servicos\Servico\Response\SrvExcluirResponse;
use OmieLib\Servicos\Servico\Response\SrvIncluirResponse;
use OmieLib\Servicos\Servico\Response\SrvListarResponse;
use OmieLib\Servicos\Servico\Response\SrvUpsertResponse;
use OmieLib\Servicos\Servico\ServicosJsonClient;
use OmieLib\Servicos\Servico\ViaUnica;

/**
 * Solicitação da listagem de serviços.
 *
 * @pw_element integer $nPagina Número da página retornada
 * @pw_element integer $nRegPorPagina Número de registros retornados na página.
 * @pw_element string $cOrdenarPor Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $cOrdemDecrescente Se a lista será apresentada em ordem decrescente.
 * @pw_element string $dInclusaoInicial Data da Inclusão Inicial.
 * @pw_element string $dInclusaoFinal Data da Inclusão final
 * @pw_element string $dAlteracaoInicial Data da Alteração Inicial.
 * @pw_element string $dAlteracaoFinal Data da Alteração final.
 * @pw_element string $hInclusaoInicial Hora da Inclusão Inicial.
 * @pw_element string $hInclusaoFinal Hora da Inclusão Final.
 * @pw_element string $hAlteracaoInicial Hora da Alteração Inicial.
 * @pw_element string $hAlteracaoFinal Hora da Alteração Final.
 * @pw_element string $cDescricao Descrição Resumida do serviço prestado.
 * @pw_element string $cCodigo Código do Serviço.
 * @pw_element string $inativo Indica se o serviço está inativo (S/N).
 * @pw_element string $cExibirProdutos Exibir os produtos utilizados (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".<BR>
 * @pw_complex srvListarRequest
 */
class SrvListarRequest{
	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
	/**
	 * Ordem de exibição dos dados. Padrão: Código.
	 *
	 * @var string
	 */
	public string $cOrdenarPor;
	/**
	 * Se a lista será apresentada em ordem decrescente.
	 *
	 * @var string
	 */
	public string $cOrdemDecrescente;
	/**
	 * Data da Inclusão Inicial.
	 *
	 * @var string
	 */
	public string $dInclusaoInicial;
	/**
	 * Data da Inclusão final
	 *
	 * @var string
	 */
	public string $dInclusaoFinal;
	/**
	 * Data da Alteração Inicial.
	 *
	 * @var string
	 */
	public string $dAlteracaoInicial;
	/**
	 * Data da Alteração final.
	 *
	 * @var string
	 */
	public string $dAlteracaoFinal;
	/**
	 * Hora da Inclusão Inicial.
	 *
	 * @var string
	 */
	public string $hInclusaoInicial;
	/**
	 * Hora da Inclusão Final.
	 *
	 * @var string
	 */
	public string $hInclusaoFinal;
	/**
	 * Hora da Alteração Inicial.
	 *
	 * @var string
	 */
	public string $hAlteracaoInicial;
	/**
	 * Hora da Alteração Final.
	 *
	 * @var string
	 */
	public string $hAlteracaoFinal;
	/**
	 * Descrição Resumida do serviço prestado.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Código do Serviço.
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Indica se o serviço está inativo (S/N).
	 *
	 * @var string
	 */
	public string $inativo;
	/**
	 * Exibir os produtos utilizados (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".<BR>
	 *
	 * @var string
	 */
	public string $cExibirProdutos;
}
