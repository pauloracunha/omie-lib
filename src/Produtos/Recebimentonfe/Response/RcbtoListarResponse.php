<?php

namespace OmieLib\Produtos\Recebimentonfe\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Recebimentonfe\Cabec;
use OmieLib\Produtos\Recebimentonfe\Categorias;
use OmieLib\Produtos\Recebimentonfe\CteCfopEntrada;
use OmieLib\Produtos\Recebimentonfe\Departamentos;
use OmieLib\Produtos\Recebimentonfe\Ide;
use OmieLib\Produtos\Recebimentonfe\InfoAdicionais;
use OmieLib\Produtos\Recebimentonfe\InfoCadastro;
use OmieLib\Produtos\Recebimentonfe\ItensAjustes;
use OmieLib\Produtos\Recebimentonfe\ItensAtualPreco;
use OmieLib\Produtos\Recebimentonfe\ItensCOFINS;
use OmieLib\Produtos\Recebimentonfe\ItensCabec;
use OmieLib\Produtos\Recebimentonfe\ItensCustoEstoque;
use OmieLib\Produtos\Recebimentonfe\ItensICMS;
use OmieLib\Produtos\Recebimentonfe\ItensICMSSN;
use OmieLib\Produtos\Recebimentonfe\ItensICMSST;
use OmieLib\Produtos\Recebimentonfe\ItensIPI;
use OmieLib\Produtos\Recebimentonfe\ItensIde;
use OmieLib\Produtos\Recebimentonfe\ItensInfoAdic;
use OmieLib\Produtos\Recebimentonfe\ItensInfoAdicEditar;
use OmieLib\Produtos\Recebimentonfe\ItensPIS;
use OmieLib\Produtos\Recebimentonfe\ItensRecebimento;
use OmieLib\Produtos\Recebimentonfe\ItensRecebimentoEditar;
use OmieLib\Produtos\Recebimentonfe\ItensSitTribEnt;
use OmieLib\Produtos\Recebimentonfe\ItensSitTribICMSSTEnt;
use OmieLib\Produtos\Recebimentonfe\Lote_validade;
use OmieLib\Produtos\Recebimentonfe\Observacoes;
use OmieLib\Produtos\Recebimentonfe\Parcelas;
use OmieLib\Produtos\Recebimentonfe\ParcelasEditar;
use OmieLib\Produtos\Recebimentonfe\ParcelasLista;
use OmieLib\Produtos\Recebimentonfe\ParcelasListaEditar;
use OmieLib\Produtos\Recebimentonfe\RecebimentoNFeJsonClient;
use OmieLib\Produtos\Recebimentonfe\Recebimentos;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarEtapaRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConsultarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoExcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoListarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoReverterRequest;
use OmieLib\Produtos\Recebimentonfe\Totais;
use OmieLib\Produtos\Recebimentonfe\Transporte;

/**
 * Resposta da solicitação de listagem de nota de recebimento
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nTotalPaginas Total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados
 * @pw_element integer $nTotalRegistros Total de registros encontrados.
 * @pw_element recebimentosArray $recebimentos Informações da NFe de recebimento
 * @pw_complex rcbtoListarResponse
 */
class RcbtoListarResponse{
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
	public int $nTotalPaginas;
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
	public int $nTotalRegistros;
	/**
	 * Informações da NFe de recebimento
	 *
	 * @var Recebimentos[]
	 */
	public array $recebimentos;
}
