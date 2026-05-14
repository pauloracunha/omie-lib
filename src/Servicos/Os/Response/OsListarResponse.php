<?php

namespace OmieLib\Servicos\Os\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Os\Cabecalho;
use OmieLib\Servicos\Os\DeducoesIss;
use OmieLib\Servicos\Os\Departamentos;
use OmieLib\Servicos\Os\DespesaReembolsavel;
use OmieLib\Servicos\Os\DespesasReembolsaveis;
use OmieLib\Servicos\Os\DetalhesNfse;
use OmieLib\Servicos\Os\Email;
use OmieLib\Servicos\Os\Eventos;
use OmieLib\Servicos\Os\Filtrar_por_codigo;
use OmieLib\Servicos\Os\Impostos;
use OmieLib\Servicos\Os\InfoCadastro;
use OmieLib\Servicos\Os\InformacoesAdicionais;
use OmieLib\Servicos\Os\ListaOS;
use OmieLib\Servicos\Os\ListaRpsNfse;
use OmieLib\Servicos\Os\Lote_validade;
use OmieLib\Servicos\Os\Mensagens;
use OmieLib\Servicos\Os\Observacoes;
use OmieLib\Servicos\Os\OrdemServicoJsonClient;
use OmieLib\Servicos\Os\OsCadastro;
use OmieLib\Servicos\Os\OsChave;
use OmieLib\Servicos\Os\OsStatus;
use OmieLib\Servicos\Os\Parcelas;
use OmieLib\Servicos\Os\ProdutoUtilizado;
use OmieLib\Servicos\Os\ProdutosUtilizados;
use OmieLib\Servicos\Os\Request\OsListarRequest;
use OmieLib\Servicos\Os\Request\OsObterRequest;
use OmieLib\Servicos\Os\Request\OsStatusRequest;
use OmieLib\Servicos\Os\Request\OsTrocarEtapaRequest;
use OmieLib\Servicos\Os\ServicosPrestados;
use OmieLib\Servicos\Os\Tarefas;
use OmieLib\Servicos\Os\ViaUnica;

/**
 * Resposta da listagem de Ordens de Serviço
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $total_de_paginas Total de páginas encontradas.
 * @pw_element integer $registros Número de registros retornados.
 * @pw_element integer $total_de_registros Total de registros encontrados.
 * @pw_element osCadastroArray $osCadastro Cadastro de Ordem de Serviços
 * @pw_complex osListarResponse
 */
class OsListarResponse{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Total de páginas encontradas.
	 *
	 * @var integer
	 */
	public int $total_de_paginas;
	/**
	 * Número de registros retornados.
	 *
	 * @var integer
	 */
	public int $registros;
	/**
	 * Total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $total_de_registros;
	/**
	 * Cadastro de Ordem de Serviços
	 *
	 * @var OsCadastro[]
	 */
	public array $osCadastro;
}
