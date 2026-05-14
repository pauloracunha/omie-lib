<?php

namespace OmieLib\Servicos\Contrato\Response;

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
use OmieLib\Servicos\Contrato\Request\CsConsultarRequest;
use OmieLib\Servicos\Contrato\Request\CsExcluirItemRequest;
use OmieLib\Servicos\Contrato\Request\CsListarRequest;
use OmieLib\Servicos\Contrato\VencTextos;

/**
 * Resposta da listagem de Contratos de Serviços
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $total_de_paginas Total de páginas encontradas.
 * @pw_element integer $registros Número de registros retornados
 * @pw_element integer $total_de_registros Total de registros encontrados.
 * @pw_element contratoCadastroArray $contratoCadastro Cadastro de Contrato de Serviço
 * @pw_complex csListarResponse
 */
class CsListarResponse{
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
	 * Número de registros retornados
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
	 * Cadastro de Contrato de Serviço
	 *
	 * @var ContratoCadastro[]
	 */
	public array $contratoCadastro;
}
