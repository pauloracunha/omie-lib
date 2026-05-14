<?php

namespace OmieLib\Servicos\Contrato\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contrato\Cabecalho;
use OmieLib\Servicos\Contrato\ContratoCadastro;
use OmieLib\Servicos\Contrato\ContratoChave;
use OmieLib\Servicos\Contrato\ContratoJsonClient;
use OmieLib\Servicos\Contrato\CsStatus;
use OmieLib\Servicos\Contrato\Departamentos;
use OmieLib\Servicos\Contrato\DespesaReembolsavel;
use OmieLib\Servicos\Contrato\DespesasReembolsaveis;
use OmieLib\Servicos\Contrato\EmailCliente;
use OmieLib\Servicos\Contrato\InfAdic;
use OmieLib\Servicos\Contrato\InfoCadastro;
use OmieLib\Servicos\Contrato\ItemCabecalho;
use OmieLib\Servicos\Contrato\ItemDescrServ;
use OmieLib\Servicos\Contrato\ItemImpostos;
use OmieLib\Servicos\Contrato\ItemLeiTranspImp;
use OmieLib\Servicos\Contrato\ItemOutrasInf;
use OmieLib\Servicos\Contrato\ItemViaUnica;
use OmieLib\Servicos\Contrato\ItensContrato;
use OmieLib\Servicos\Contrato\ItensExclusao;
use OmieLib\Servicos\Contrato\Lote_validade;
use OmieLib\Servicos\Contrato\Observacoes;
use OmieLib\Servicos\Contrato\ProdutoUtilizado;
use OmieLib\Servicos\Contrato\ProdutosUtilizados;
use OmieLib\Servicos\Contrato\Response\CsConsultarResponse;
use OmieLib\Servicos\Contrato\Response\CsExcluirItemResponse;
use OmieLib\Servicos\Contrato\Response\CsListarResponse;
use OmieLib\Servicos\Contrato\VencTextos;

/**
 * Solicitação de Listagem de Contratos de Serviço
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $registros_por_pagina Número de registros retornados
 * @pw_element string $apenas_importado_api DEPRECATED
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_descrescente Indica se a ordem de exibição é decrescente caso seja informado "S".
 * @pw_element string $filtrar_por_data_de Filtrar lançamentos incluídos e/ou alterados até a data
 * @pw_element string $filtrar_por_data_ate Filtrar lançamentos incluídos e/ou alterados até a data
 * @pw_element string $filtrar_apenas_inclusao Filtrar apenas registros incluídos (S/N)
 * @pw_element string $filtrar_apenas_alteracao Filtrar apenas registros alterados (S/N)
 * @pw_element string $filtrar_cnpj_cpf Filtrar os contratos por CNPJ/CPF.
 * @pw_element integer $filtrar_cliente Filtra os registros exibidos por cliente
 * @pw_element string $cExibeObs (S/N) Indica se a "Observação / Dados Adicionais" serão retornados na listagem.
 * @pw_element string $cExibirProdutos Exibir os produtos utilizados (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".<BR>
 * @pw_element string $cExibirInfoCadastro Exibir as informações complementares do contrato (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
 * @pw_complex csListarRequest
 */
class CsListarRequest{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $registros_por_pagina;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $apenas_importado_api;
	/**
	 * Ordem de exibição dos dados. Padrão: Código.
	 *
	 * @var string
	 */
	public string $ordenar_por;
	/**
	 * Indica se a ordem de exibição é decrescente caso seja informado "S".
	 *
	 * @var string
	 */
	public string $ordem_descrescente;
	/**
	 * Filtrar lançamentos incluídos e/ou alterados até a data
	 *
	 * @var string
	 */
	public string $filtrar_por_data_de;
	/**
	 * Filtrar lançamentos incluídos e/ou alterados até a data
	 *
	 * @var string
	 */
	public string $filtrar_por_data_ate;
	/**
	 * Filtrar apenas registros incluídos (S/N)
	 *
	 * @var string
	 */
	public string $filtrar_apenas_inclusao;
	/**
	 * Filtrar apenas registros alterados (S/N)
	 *
	 * @var string
	 */
	public string $filtrar_apenas_alteracao;
	/**
	 * Filtrar os contratos por CNPJ/CPF.
	 *
	 * @var string
	 */
	public string $filtrar_cnpj_cpf;
	/**
	 * Filtra os registros exibidos por cliente
	 *
	 * @var integer
	 */
	public int $filtrar_cliente;
	/**
	 * (S/N) Indica se a "Observação / Dados Adicionais" serão retornados na listagem.
	 *
	 * @var string
	 */
	public string $cExibeObs;
	/**
	 * Exibir os produtos utilizados (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".<BR>
	 *
	 * @var string
	 */
	public string $cExibirProdutos;
	/**
	 * Exibir as informações complementares do contrato (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $cExibirInfoCadastro;
}
